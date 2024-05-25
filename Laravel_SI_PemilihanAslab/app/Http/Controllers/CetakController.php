<?php

namespace App\Http\Controllers;

use App\Models\Cetak;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
class CetakController extends Controller
{

    public function cetak()
    {
        $cetak = Cetak::all();
        $pdf = Pdf::loadview('Cetak.cetak', compact('cetak'));
        return $pdf->download('laporan-data.pdf');
    }


}
