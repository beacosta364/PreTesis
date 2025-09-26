<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Producto;
use App\Models\User;
use App\Models\Movimiento;
use App\Models\Categoria;
use App\Models\Bodega;

use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function pdfProductos(Request $request)
    {
        $query = Producto::select('id', 'nombre', 'descripcion', 'cantidad', 'min_stock')
                        ->orderBy('id', 'ASC');

        if ($request->filled('categoria')) {
            $query->where('categoria_id', $request->categoria);
        }

        $productos = $query->get();

        $pdf = Pdf::loadView('pdf.productos', ['productos' => $productos]);
        $pdf->setPaper('letter', 'portrait'); 
        return $pdf->stream('productos.pdf');
    }


    public function pdfUsuarios()
    {
        $usuarios = User::select('id', 'name', 'email', 'created_at')
                        ->orderBy('id', 'ASC')
                        ->get();

        $pdf = Pdf::loadView('pdf.usuarios', ['usuarios' => $usuarios]);
        $pdf->setPaper('letter', 'portrait'); 
        return $pdf->stream('usuarios.pdf');
    }


    public function productosAgotadosPdf()
    {

        $productosAgotados = Producto::where('cantidad', 0)
            ->orWhere(function ($query) {
                $query->whereColumn('cantidad', '<=', 'min_stock')
                    ->whereNotNull('min_stock');
            })
            ->orderBy('cantidad', 'asc')
            ->get();

        $pdf = PDF::loadView('pdf.productosAgotados', compact('productosAgotados'));
        $pdf->setPaper('letter', 'portrait');

        return $pdf->stream('productos_agotados.pdf');
    }


    
public function generarMovimientosPDF(Request $request){
        $query = Movimiento::query();

        if ($request->filled('fecha_inicio') && $request->filled('fecha_fin')) {
            $fechaInicio = $request->input('fecha_inicio');
            $fechaFin    = $request->input('fecha_fin');
            $query->whereBetween('created_at', [$fechaInicio, $fechaFin]);
        } else {
            $fechaInicio = now()->subDays(30);
            $query->where('created_at', '>=', $fechaInicio);
        }

        if ($request->filled('producto_id')) {
            $query->where('nombre_producto', $request->producto_id);
        }

        if ($request->filled('usuario_id')) {
            $query->where('nombre_usuario', $request->usuario_id);
        }

        if ($request->filled('tipo_movimiento')) {
            $query->where('tipo_movimiento', $request->tipo_movimiento);
        }

        $movimientos = $query->orderBy('created_at', 'desc')->get();

        $pdf = Pdf::loadView('pdf.movimientos', compact('movimientos'));
        $pdf->setPaper('letter', 'portrait');
        
        return $pdf->stream('movimientos.pdf');
}

    public function productosAgotadosPorCategoriaPdf(Request $request)
    {
        $categoriaId = $request->get('categoria');

        $query = Producto::with('categoria')
            ->where(function ($q) {
                $q->where('cantidad', 0)
                ->orWhereColumn('cantidad', '<=', 'min_stock');
            });

        if ($categoriaId && $categoriaId !== 'todas') {
            $query->where('categoria_id', $categoriaId);
        }

        $productosAgotados = $query->get();

        $categoriaNombre = 'Todas las categorías';
        if ($categoriaId && $categoriaId !== 'todas') {
            $categoria = Categoria::find($categoriaId);
            $categoriaNombre = $categoria ? $categoria->nombre : 'Categoría no encontrada';
        }

        $pdf = Pdf::loadView('pdf.productosAgotadosPorCategoria', compact('productosAgotados', 'categoriaNombre'));
        $pdf->setPaper('letter', 'portrait');

        return $pdf->stream('productos_agotados_' . now()->format('Ymd_His') . '.pdf');
    }

    
    public function exportarHistorialBodega(Request $request)
    {
        $query = Bodega::query();

        if ($request->filled('usuario')) {
            $query->where('user_id', $request->usuario);
        }

        if ($request->filled('desde')) {
            $query->whereDate('created_at', '>=', $request->desde);
        }

        if ($request->filled('hasta')) {
            $query->whereDate('created_at', '<=', $request->hasta);
        }

        $registros = $query->latest()->get();

        $pdf = Pdf::loadView('pdf.historial_bodega', compact('registros'));
        return $pdf->stream('historial_bodega.pdf');
    }

    public function generarMovimientosConsolidadosPDF(Request $request)
    {
        $query = Movimiento::query();

        if ($request->filled('fecha_inicio') && $request->filled('fecha_fin')) {
            $fechaInicio = $request->input('fecha_inicio');
            $fechaFin    = $request->input('fecha_fin');
            $query->whereBetween('created_at', [$fechaInicio, $fechaFin]);
        } else {
            $fechaInicio = now()->subDays(30)->startOfDay();
            $fechaFin    = now()->endOfDay();
            $query->whereBetween('created_at', [$fechaInicio, $fechaFin]);
        }

        if ($request->filled('producto_id')) {
            $query->where('nombre_producto', $request->producto_id);
        }

        // Consolidar por producto
        $movimientos = $query->select(
                'nombre_producto',
                \DB::raw("SUM(CASE WHEN tipo_movimiento = 'ingresar' THEN cantidad ELSE 0 END) as total_ingresado"),
                \DB::raw("SUM(CASE WHEN tipo_movimiento = 'extraer' THEN cantidad ELSE 0 END) as total_extraido"),
                \DB::raw("SUM(CASE WHEN tipo_movimiento = 'ingresar' THEN cantidad ELSE 0 END) - 
                        SUM(CASE WHEN tipo_movimiento = 'extraer' THEN cantidad ELSE 0 END) as total_existencia")
            )
            ->groupBy('nombre_producto')
            ->orderBy('nombre_producto', 'asc')
            ->get();

        $pdf = \PDF::loadView('pdf.movimientos_resumen', compact('movimientos', 'fechaInicio', 'fechaFin'));
        $pdf->setPaper('letter', 'portrait');
        
        return $pdf->stream('movimientos_resumen.pdf');
    }

    public function exportarHistorialAccesoPDF(Request $request)
        {
            $query = \DB::table('acciones')
                ->join('controladores', 'acciones.controlador_id', '=', 'controladores.id')
                ->select('acciones.*', 'controladores.nombre', 'controladores.ip')
                ->orderBy('fecha_hora', 'desc');

            // Filtros dinámicos
            if ($request->filled('controlador')) {
                $query->where('controladores.nombre', 'like', '%' . $request->controlador . '%');
            }

            if ($request->filled('ip')) {
                $query->where('controladores.ip', 'like', '%' . $request->ip . '%');
            }

            if ($request->filled('user_id')) {
                $query->where('acciones.user_id', $request->user_id);
            }

            if ($request->filled('nombre_usuario')) {
                $query->where('acciones.nombre_usuario', 'like', '%' . $request->nombre_usuario . '%');
            }

            if ($request->filled('estado')) {
                $query->where('acciones.estado', $request->estado);
            }

            if ($request->filled('fecha_desde') && $request->filled('fecha_hasta')) {
                $query->whereBetween('acciones.fecha_hora', [$request->fecha_desde, $request->fecha_hasta]);
            } else {
                // Por defecto, solo registros del último mes
                $query->where('acciones.fecha_hora', '>=', now()->subMonth());
            }

            $acciones = $query->get();

            $pdf = \PDF::loadView('pdf.historial_acceso', compact('acciones'));
            $pdf->setPaper('letter', 'landscape'); 

            return $pdf->stream('historial_acceso.pdf');
        }

}