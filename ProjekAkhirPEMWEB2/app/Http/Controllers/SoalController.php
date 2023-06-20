<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class SoalController extends Controller
{
    public function index()
    {
        return view('soal');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('soal');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $namaInput = $request->namaInput;
        $skorInput = $request->skorInput;

        $query = DB::table('results')->insert([
            'nama' => $namaInput,
            'nilai' => $skorInput,
        ]);
        if($query) {
            return redirect()->route('soal')->with('success', 'Data Berhasil Ditambahkan');
        } else{
            return redirect()->route('soal')->with('failed', 'Data Gagal Ditambahkan');
        }
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}


