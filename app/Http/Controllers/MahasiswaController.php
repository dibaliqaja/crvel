<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index() 
    {
        $data_mahasiswa = \App\Mahasiswa::all();
        return view('mahasiswa.index', ['data_mahasiswa' => $data_mahasiswa]);
    }

    public function create(Request $request)
    {
        \App\Mahasiswa::create($request->all());
        return redirect('/mahasiswa')->with('Success', 'Data Berhasil Dimasukkan!');
    }
}
