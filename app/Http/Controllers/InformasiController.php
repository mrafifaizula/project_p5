<?php

namespace App\Http\Controllers;

use App\Models\informasi;
use Illuminate\Http\Request;

class InformasiController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


   public function index()
    {
        $informasi = informasi::orderBy('id', 'desc')->get();
        return view('informasi.index', compact('informasi'));
    }

    public function create()
    {
        return view('informasi.create');

    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'tgl' => 'required',
            'img' => 'required|max:4000|mimes:png,jpg',
        ]);

        $informasi = new informasi();
        $informasi->judul = $request->judul;
        $informasi->deskripsi = $request->deskripsi;
        $informasi->tgl = $request->tgl;

// upload img
        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/informasi/', $name);
            $informasi->img = $name;
        }

        $informasi->save();
        return redirect()->route('informasi.index')
            ->with('success', 'data berhasil ditambahkan');

    }

    public function show($id)
    {
        $informasi = informasi::findOrFail($id);

        return view('informasi.show', compact('informasi'));

    }

    public function edit($id)
    {
        $informasi = informasi::findOrFail($id);
        return view('informasi.edit', compact('informasi'));
    }

    public function update(Request $request, $id)
    {
         $validated = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'tgl' => 'required',
            // 'img' => 'required|max:4000|mimes:png,jpg',
        ]);

        $informasi = informasi::findOrFail($id);
        $informasi->judul = $request->judul;
        $informasi->deskripsi = $request->deskripsi;
        $informasi->tgl = $request->tgl;

// upload img
        if ($request->hasFile('img')) {
            $informasi->deleteImage(); // untuk hapus gambar sebelum diganti gambar baru
            $img = $request->file('img');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/informasi/', $name);
            $informasi->img = $name;
        }

        $informasi->save();
        return redirect()->route('informasi.index')->with('success', 'data berhasil diubah!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $informasi = informasi::findOrFail($id);
        $informasi->delete();

        return redirect()->route('informasi.index')->with('success', 'data berhasil dihapus!');

    }
}
