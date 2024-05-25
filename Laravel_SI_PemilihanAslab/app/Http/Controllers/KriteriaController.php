<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    //
    public function index()
    {
        $kriteria = DB::table('kriterias')->get();
        // $kriteria = Kriteria::all();
        return view('kriteria.index', compact('kriteria'));
    }

    
}
