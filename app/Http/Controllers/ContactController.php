<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
     public function index()
    {
        // return view('index', compact('index'));
    }

    public function create()
    {
        // return view('contact.create');

    }

    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'nomor' => 'required',
            'pesan' => 'required',
        ]);
        $contact = new contact();
        $contact->nama = $request->nama;
        $contact->email = $request->email;
        $contact->nomor = $request->nomor;
        $contact->pesan = $request->pesan;
        $contact->save();

        return redirect()->route('index');
    }

   
    public function show(contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(contact $contact)
    {
        //
    }
}
