<?php

namespace App\Http\Controllers;
use App\Models\eskul;
use App\Models\fasilitas;
use App\Models\jurusan;
use App\Models\informasi;
use App\Models\industri;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $eskul = eskul::all();
        $fasilitas = fasilitas::all();
        $jurusan = jurusan::all();
        $informasi = informasi::all();
        $industri = industri::all();

        return view('dashboard', compact('eskul', 'fasilitas', 'jurusan', 'informasi', 'industri'));
    }
}
