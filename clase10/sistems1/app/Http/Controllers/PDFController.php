<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PDFController extends Controller
{
    //
    public function generatePDF()
    {
        $data = [
            'title' => 'Bienvenido a Laravel',
            'date' => date('m/d/Y')
        ];
        
        $pdf = PDF::loadView('myPDF', $data);
        
        return $pdf->download('archivo.pdf');
    }
}
