<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mahasiswa;

class mahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswas = mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswas'));//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('mahasiswa.create'); //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $mahasiswa = new mahasiswa();
     $request->validate([
        'kodemah' => 'required',
        'namamah' => 'required',
        'alamat' => 'required',
        'nohp' => 'required',
        'email' => 'required'
     ]);

     $mahasiswa->kodemah = $request->kodemah; 
     $mahasiswa->namamah = $request->namamah; 
     $mahasiswa->alamat = $request->alamat;
     $mahasiswa->nohp = $request->nohp;
     $mahasiswa->email = $request->email;

     $mahasiswa->save();

     return redirect('mahasiswa'); //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
