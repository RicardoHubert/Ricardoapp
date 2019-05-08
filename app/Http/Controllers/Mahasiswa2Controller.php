<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa2;
use App\Prodi;
use Illuminate\Support\Facades\Gate;

class Mahasiswa2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa2s = mahasiswa2::all();
        return view('mahasiswa2.index', compact('mahasiswa2s'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prodis = Prodi::all();
        if(Gate::allows('admin'))
        {
        return view('mahasiswa2.create', compact('prodis'));
        }
        else{
            return('Akses Ditolak');
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
        $mahasiswa2 = new Mahasiswa2();
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'prodi_id' => 'required',
            'foto' => 'image|mimes:jpeg,jpg,png,svg'
            ]);

        $tempat_upload = public_path('/foto');
        $foto = $request->file('foto');
        $ext = $foto->getClientOriginalExtension();
        $filename = $request->nim . "." . $ext;
        $foto->move($tempat_upload, $filename);

        $mahasiswa2->nim = $request->nim;
        $mahasiswa2->nama = $request->nama;
        $mahasiswa2->prodi_id = $request->prodi_id;
        $mahasiswa2->foto = $filename;
        $mahasiswa2->tgl_lahir = $request->tgl_lahir;

        $mahasiswa2->save();

        return redirect('mahasiswa2');
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
       $mahasiswa2 = Mahasiswa2::find($id);
       $prodis = Prodi::all();
       //
       if(Gate::allows('admin')){
        return view ('mahasiswa2.edit', compact('mahasiswa2', 'prodis'));
       }
       else{
        return 'Akses Ditolak';
       }
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
        $request->validate([
        'nim' => 'required',
        'nama' => 'required',
        'prodi_id' => 'required'
        ]);

        $mahasiswa2 = Mahasiswa2::find($id);
        $mahasiswa2->nim = $request->nim;
        $mahasiswa2->nama = $request->nama;
        $mahasiswa2->prodi_id = $request->prodi_id;

        $mahasiswa2->save();

        return redirect('mahasiswa2');//
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Gate::allows('admin')){
        $mahasiswa2 = Mahasiswa2::find($id);
        $mahasiswa2->delete();

        return redirect('/mahasiswa2'); //            
        }
        else{
            return 'Akses Ditolak';
        }

    }
}
