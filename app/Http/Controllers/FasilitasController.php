<?php

namespace App\Http\Controllers;

use App\Models\fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        $fasilitas = fasilitas::orderBy('id', 'desc')->get();
        return view('fasilitas.index', compact('fasilitas'));
    }

    public function create()
    {
        return view('fasilitas.create');

    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'img' => 'required|max:4000|mimes:png,jpg',
        ]);

        $fasilitas = new fasilitas();
        $fasilitas->nama = $request->nama;

// upload img
        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/fasilitas/', $name);
            $fasilitas->img = $name;
        }

        $fasilitas->save();
        return redirect()->route('fasilitas.index')
            ->with('success', 'data berhasil ditambahkan');

    }

    public function show($id)
    {
        $fasilitas = fasilitas::findOrFail($id);

        return view('fasilitas.show', compact('fasilitas'));

    }

    public function edit($id)
    {
        $fasilitas = fasilitas::findOrFail($id);
        return view('fasilitas.edit', compact('fasilitas'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required',
            // 'img' => 'required|max:2048|mimes:png,jpg',
        ]);

        $fasilitas = fasilitas::findOrFail($id);
        $fasilitas->nama = $request->nama;

        if ($request->hasFile('img')) {
            $fasilitas->deleteImage(); // untuk hapus gambar sebelum diganti gambar baru
            $img = $request->file('img');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/fasilitas/', $name);
            $fasilitas->img = $name;
        }

        $fasilitas->save();
        return redirect()->route('fasilitas.index')->with('success', 'data berhasil diubah!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $fasilitas = fasilitas::findOrFail($id);
        $fasilitas->delete();

        return redirect()->route('fasilitas.index')->with('success', 'data berhasil dihapus!');

    }
}
