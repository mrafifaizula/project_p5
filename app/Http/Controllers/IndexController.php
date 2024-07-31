<?php

namespace App\Http\Controllers;

use App\Models\index;
use App\Models\jurusan;
use App\Models\informasi;
use App\Models\eskul;
use App\Models\fasilitas;
use App\Models\industri;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurusan = jurusan::latest()->get();
        $informasi = informasi::latest()->get();
        $eskul = eskul::latest()->get();
        $fasilitas = fasilitas::latest()->get();
        $industri = industri::latest()->get();
        return view('index', compact('jurusan', 'informasi', 'eskul', 'fasilitas', 'industri'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\index  $index
     * @return \Illuminate\Http\Response
     */
    public function show(index $index)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\index  $index
     * @return \Illuminate\Http\Response
     */
    public function edit(index $index)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\index  $index
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, index $index)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\index  $index
     * @return \Illuminate\Http\Response
     */
    public function destroy(index $index)
    {
        //
    }
}
