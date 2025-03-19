<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Producto;

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
}