<?php

namespace App\Http\Controllers;

use App\Models\jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    

    public function index()
    {
        $jurusan = jurusan::orderBy('id', 'desc')->get();
        return view('jurusan.index', compact('jurusan'));
    }

    public function create()
    {
        return view('jurusan.create');

    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_jurusan' => 'required',
        ]);

        $jurusan = new jurusan();
        $jurusan->nama_jurusan = $request->nama_jurusan;

        $jurusan->save();
        return redirect()->route('jurusan.index')
            ->with('success', 'data berhasil ditambahkan');

    }

    public function show($id)
    {
        $jurusan = jurusan::findOrFail($id);

        return view('jurusan.show', compact('jurusan'));

    }

    public function edit($id)
    {
        $jurusan = jurusan::findOrFail($id);
        return view('jurusan.edit', compact('jurusan'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_jurusan' => 'required',
            // 'img' => 'required|max:2048|mimes:png,jpg',
        ]);

        $jurusan = jurusan::findOrFail($id);
        $jurusan->nama_jurusan = $request->nama_jurusan;

        $jurusan->save();
        return redirect()->route('jurusan.index')->with('success', 'data berhasil diubah!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $jurusan = jurusan::findOrFail($id);
        $jurusan->delete();

        return redirect()->route('jurusan.index')->with('success', 'data berhasil dihapus!');

    }
}
