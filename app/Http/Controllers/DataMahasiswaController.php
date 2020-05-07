<?php

namespace App\Http\Controllers;

use App\DataMahasiswa;
use Illuminate\Http\Request;

class DataMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datamahasiswa = DataMahasiswa::all();
        return view('datamahasiswa.index', compact('datamahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dataMahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datamahasiswa = new DataMahasiswa;
        $datamahasiswa->nama = $request->nama;
        $datamahasiswa->nim = $request->nim;
        $datamahasiswa->email = $request->email;
        $datamahasiswa->jurusan = $request->jurusan;

        $datamahasiswa->save();
      
        return redirect('datamahasiswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DataMahasiswa  $dataMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(DataMahasiswa $dataMahasiswa)
    {
        return view('dataMahasiswa.show', compact( 'dataMahasiswa' ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DataMahasiswa  $dataMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(DataMahasiswa $dataMahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DataMahasiswa  $dataMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataMahasiswa $dataMahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DataMahasiswa  $dataMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataMahasiswa $dataMahasiswa)
    {
        DataMahasiswa::destroy($dataMahasiswa->id);
        return $dataMahasiswa;
    }
}
