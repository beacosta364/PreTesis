<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Producto;
use App\Models\User;
use App\Models\Movimiento;

use Illuminate\Http\Request;

class PdfController extends Controller
{
    //Genera un PDF con los productos existentes
    public function pdfProductos(){
        $productos = Producto::select('id','nombre','descripcion','cantidad', 'min_stock')
                        ->orderBy('id','ASC')
                        ->get();
        $pdf = Pdf::loadView('pdf.productos',['productos'=>$productos]);
        $pdf->setPaper('carta','A4'); // Tamaño carta, orientación vertical
        return $pdf->stream();
    }
    //Genera un PDF con los usuarios registrados
    public function pdfUsuarios()
    {
        $usuarios = User::select('id', 'name', 'email', 'created_at')
                        ->orderBy('id', 'ASC')
                        ->get();

        $pdf = Pdf::loadView('pdf.usuarios', ['usuarios' => $usuarios]);
        $pdf->setPaper('letter', 'portrait'); 
        return $pdf->stream('usuarios.pdf');
    }


    //Genera un PDF con los productos agotados o por agotarse.
    public function productosAgotadosPdf()
    {
        // Obtener productos agotados (cantidad == 0) o por agotarse (cantidad < min_stock)
        $productosAgotados = Producto::where('cantidad', 0)
            ->orWhere(function ($query) {
                $query->whereColumn('cantidad', '<=', 'min_stock')
                    ->whereNotNull('min_stock'); // Evitar comparar con NULL
            })
            ->orderBy('cantidad', 'asc')
            ->get();

        $pdf = PDF::loadView('pdf.productosAgotados', compact('productosAgotados'));
        $pdf->setPaper('letter', 'portrait');
        // return $pdf->download('productos_agotados.pdf'); //para descargar el pdf
        return $pdf->stream('productos_agotados.pdf');
    }

    //ANterios por si acaso
    // public function generarMovimientosPDF(){
    //     $movimientos = Movimiento::all();
    //     $pdf = Pdf::loadView('pdf.movimientos', compact('movimientos'));
    //     $pdf->setPaper('letter', 'portrait');
    //     return $pdf->stream('movimientos.pdf');
    // }



    public function generarMovimientosPDF(Request $request)
    {
        // Aplicar filtros según los parámetros enviados en la solicitud

        //habilitar esta linea para mostrar pdf con toda la info de la base de datos
        // $movimientos = Movimiento::query();

        $movimientos = Movimiento::where('created_at', '>=', now()->subDays(30));

        
    
        if ($request->filled('fecha_inicio')) {
            $movimientos->whereDate('created_at', '>=', $request->fecha_inicio);
        }
    
        if ($request->filled('fecha_fin')) {
            $movimientos->whereDate('created_at', '<=', $request->fecha_fin);
        }
    
        if ($request->filled('producto_id')) {
            $movimientos->where('nombre_producto', $request->producto_id);
        }
    
        if ($request->filled('usuario_id')) {
            $movimientos->where('nombre_usuario', $request->usuario_id);
        }
    
        if ($request->filled('tipo_movimiento')) {
            $movimientos->where('tipo_movimiento', $request->tipo_movimiento);
        }
    
        $movimientos = $movimientos->get();
    
        // Generar el PDF con los movimientos filtrados
        $pdf = Pdf::loadView('pdf.movimientos', compact('movimientos'));
        $pdf->setPaper('letter', 'portrait');
        
        return $pdf->stream('movimientos.pdf');
    }
    



    // public function generarMovimientosPDF()
    // {
    //     $movimientos = Movimiento::select('nombre_producto', 'nombre_usuario', 'tipo_movimiento', 'cantidad', 'created_at')->get();
    //     $pdf = Pdf::loadView('pdf.movimientos', compact('movimientos'));

    //     return $pdf->download('movimientos.pdf');
    // }
}