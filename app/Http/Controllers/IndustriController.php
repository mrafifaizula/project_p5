<?php

namespace App\Http\Controllers;

use App\Models\industri;
use App\Models\jurusan;
use Illuminate\Http\Request;

// class blueprint

class IndustriController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    // methoad function

    public function index()
    {
        // property var
        $jurusan = jurusan::all();
        $industri = industri::all();
        return view('industri.index', compact('industri', 'jurusan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $industri = industri::all();
        $jurusan = jurusan::all();
        return view('industri.create', compact('jurusan', 'industri'));
    }

    /**
     * Store a newly created resource in storage.
     */ 
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_jurusan' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'tahun' => 'required',
        ]);

        // object pemanggilan class
        
        $industri = new industri();
        $industri->id_jurusan = $request->id_jurusan;
        $industri->nama = $request->nama;
        $industri->alamat = $request->alamat;
        $industri->tahun = $request->tahun;
        $industri->save();

        return redirect()->route('industri.index')->with('success', 'industri created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $industri = industri::findorfail($id);
        $jurusan = jurusan::all();
        return view('industri.show', compact('jurusan', 'industri'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $industri = industri::findOrFail($id);
        $jurusan = jurusan::all();
        return view('industri.edit', compact('industri', 'jurusan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'id_jurusan' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'tahun' => 'required',
        ]);
        $industri = industri::findOrFail($id);
        $industri->id_jurusan = $request->id_jurusan;
        $industri->nama = $request->nama;
        $industri->alamat = $request->alamat;
        $industri->tahun = $request->tahun;

        $industri->save();

        return redirect()->route('industri.index')->with('success', 'industri updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $industri = industri::findOrFail($id);
        $industri->delete();
        return redirect()->route('industri.index')->with('success', 'industri deleted successfully');
    }
}
