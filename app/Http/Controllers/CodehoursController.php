<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Codehours;

class CodehoursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('master');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('codehours.daftar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $codehours = new Codehours();
        $codehours->nama = $request->get('nama');
        $codehours->email = $request->get('email');
        $codehours->no_hp = $request->get('no_hp');
        $codehours->jurusan = $request->get('jurusan');
        $acakkode = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz",3)),0,3);
        $codehours->kode_codehours = $acakkode;
        $codehours->confirmed = 0;
        $codehours->save();


        return view('codehours.terimakasih');
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
