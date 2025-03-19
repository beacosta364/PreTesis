<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Producto;
use App\Models\User;

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
}