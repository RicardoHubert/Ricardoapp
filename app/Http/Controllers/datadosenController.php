<?php

namespace App\Http\Controllers;
// namespace App\Http\Controllers\datadosen
use Illuminate\Http\Request;
use App\datadosen;

class datadosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $datadosens = datadosen::all();
        return view('datadosen.index', compact('datadosens'));
//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('datadosen.create');//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datadosen = new datadosen();
        $request->validate([
            'kode' => 'required',
            'nama' => 'required'
            ]);

            $datadosen->kode = $request->kode;
            $datadosen->nama = $request->nama;

            $datadosen->save();

            return redirect('datadosen');//
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
        $datadosen = datadosen::find($id);
        return view('datadosen.edit', compact('datadosen'));
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
        'kode' => 'required',
        'nama' => 'required'
        ]);

        $datadosen = datadosen::find($id);
        $datadosen->kode = $request->kode;
        $datadosen->nama = $request->nama;

        $datadosen->save();

        return redirect('/datadosen'); //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $datadosen = datadosen::find($id);
      $datadosen->delete();

      return redirect('/datadosen');  //
    }
}
