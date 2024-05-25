<?php

namespace App\Http\Controllers;


use App\Models\Mahasiswa;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $mahasiswa = Mahasiswa::all();
        $data = [
            'title' => 'data mahasiswa',
            'date' => date('d/m/Y'),
            'mahasiswa' => $mahasiswa,
        ];
        if ($request->has('download')) {
            $pdf = PDF::loadView('admin.mahasiswa.pdf', $data);
            return $pdf->download('mahasiswa.pdf');
        }

        return view('admin.mahasiswa.index', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.mahasiswa.entry');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|max:7',
            'name' => 'required|string',
            'angkatan' => 'required',
        ]);
        Mahasiswa::create([
            'nim' => $request->nim,
            'name' => $request->name,
            'angkatan' => $request->angkatan,
        ]);
        return redirect()->route('mahasiswa.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('admin.mahasiswa.edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nim' => 'required|max:7',
            'name' => 'required|string',
            'angkatan' => 'required',
        ]);
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->update(
            $request->all()
        );
        return redirect()->route('mahasiswa.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete(

        );
        return redirect()->route('mahasiswa.index');
    }

    // public function downloadPdf()
    // {
    //     return $pdf->download('admin.mahasiswa.pdf');
    // }
}
