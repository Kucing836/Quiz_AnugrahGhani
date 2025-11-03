<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    
    public function store(Request $request)
    {
        $data['nama'] = $request->nama;
		$data['nim'] = $request->nim;
		$data['email'] = $request->email;
		$data['jurusan'] = $request->jurusan;
		$data['alamat'] = $request->alamat;

		return redirect()->route('mahasiswa.index')->with('success','Penambahan Data Berhasil!');
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



public function create(){
		return view('mahasiswa.create');
}
}
