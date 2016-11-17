<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemains;

class PemainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('pemain.daftar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Pemain = new Pemains();
        $Pemain->nama = $request->get('nama');
        $acakkode = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz",3)),0,5);
        $Pemain->kode = $acakkode;
        $Pemain->username = $request->get('username');
        $Pemain->email = $request->get('email');
        $Pemain->no_hp = $request->get('no_hp');
        $Pemain->score = 0;
        $Pemain->save();

        return redirect('/lihat-pemain');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    public function show_all()
    {
        $pemains = Pemains::all();
        return view('pemain.show-all')->withPemains($pemains);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pemain = Pemains::where('id',$id)->first();
        return view('pemain.edit-pemain')->withPemain($pemain);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $pemain_id = $request->get('id');
        $pemain = Pemains::find($pemain_id);
        $pemain->nama = $request->get('nama');
        $pemain->username = $request->get('username');
        $pemain->email = $request->get('email');
        $pemain->kode = $request->get('kode');
        $pemain->no_hp = $request->get('no_hp');
        $pemain->score = $request->get('score');
        $pemain->save();

        return redirect('/show-all')->withPemain($pemain);

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
