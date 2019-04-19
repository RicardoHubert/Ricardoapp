<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prodi;
use Illuminate\Support\Facades\Gate;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function index()
    {
        //
        $prodis = prodi::all();
        return view('prodi.index', compact('prodis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if(Gate::allows('admin'))
        {
        return view('prodi.create');
        }
        else{
        return 'Akses Ditolak';
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $prodi = new Prodi();
        $request->validate([
            'kode' => 'required',
            'nama' => 'required'
        ]);

        $prodi->kode = $request->kode;
        $prodi->nama = $request->nama;

        $prodi->save();
        //

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
        $prodi = Prodi::find($id);
        //
        if(Gate::allows('admin'))
        {
            return view('prodi.edit', compact('prodi'));
        }
        else{
            return 'Akses Ditolak';
        }
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
        $request->validate([
         'kode' => 'required',
         'nama' => 'required'
     ]);

        $prodi = Prodi::find($id);
        $prodi->kode = $request->kode;
        $prodi->nama = $request->nama;

        $prodi->save();

        //
        if(Gate::allows('admin'))
        {
            return redirect('/prodi');
        }
        else{
            return 'Akses Ditolak';
        }
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
        $prodi = Prodi::find($id);
        $prodi->delete();

        if(Gate::allows('admin'))
        {
            return redirect('/prodi');
        }
        else{
            return 'Akses  Ditolak';
        }
    }
}
