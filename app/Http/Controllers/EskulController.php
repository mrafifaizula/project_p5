<?php

namespace App\Http\Controllers;

use App\Models\eskul;
use Illuminate\Http\Request;

class EskulController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $eskul = eskul::orderBy('id', 'desc')->get();
        return view('eskul.index', compact('eskul'));
    }

    public function create()
    {
        return view('eskul.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'eskul' => 'required',
            'deskripsi' => 'required',
            'img' => 'required|max:4000|mimes:png,jpg',
        ]);

        $eskul = new eskul();
        $eskul->eskul = $request->eskul;
        $eskul->deskripsi = $request->deskripsi;

        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/eskul/', $name);
            $eskul->img = $name;
        }

        $eskul->save();
        return redirect()->route('eskul.index')->with('success', 'data berhasil ditambahkan');
    }

    public function show($id)
    {
        $eskul = eskul::findOrFail($id);
        return view('eskul.show', compact('eskul'));

    }

    public function edit($id)
    {
        $eskul = eskul::findOrFail($id);
        return view('eskul.edit', compact('eskul'));

    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'eskul' => 'required',
            'deskripsi' => 'required',
            // 'img' => 'required|max:4000|mimes:png,jpg',
        ]);

        $eskul = eskul::findOrFail($id);
        $eskul->eskul = $request->eskul;
        $eskul->deskripsi = $request->deskripsi;

        if ($request->hasFile('img')) {
            $eskul->deleteImage();
            $img = $request->file('img');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/eskul/', $name);
            $eskul->img = $name;
        }

        $eskul->save();
        return redirect()->route('eskul.index')->with('success', 'data berhasil diubah');

    }

    public function destroy($id)
    {
        $eskul = eskul::findOrFail($id);
        $eskul->delete();

        return redirect()->route('eskul.index')->with('success', 'data berhasil dihapus!');

    }
}
