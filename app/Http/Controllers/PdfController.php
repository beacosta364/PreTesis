<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Producto;
use App\Models\User;

use Illuminate\Http\Request;

class PdfController extends Controller
{
    //
    public function pdfProductos(){
        $productos = Producto::select('id','nombre','descripcion','cantidad', 'min_stock')
                        ->orderBy('id','ASC')
                        ->get();
        $pdf = Pdf::loadView('pdf.productos',['productos'=>$productos]);
        $pdf->setPaper('carta','A4');
        return $pdf->stream();
    }

    public function pdfUsuarios()
    {
        $usuarios = User::select('id', 'name', 'email', 'created_at')
                        ->orderBy('id', 'ASC')
                        ->get();

        $pdf = Pdf::loadView('pdf.usuarios', ['usuarios' => $usuarios]);
        $pdf->setPaper('letter', 'portrait'); // Tamaño carta, orientación vertical
        return $pdf->stream('usuarios.pdf');
    }
}