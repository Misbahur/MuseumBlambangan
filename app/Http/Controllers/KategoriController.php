<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoris = DB::table('kategoris')->get();

        return view('/kategori.kategori',["title" => "Kategori"], compact('kategoris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Kategori' => 'required',

        ]);
        
        kategori::create($request->all());
        
        return redirect('/kategori')->with('success', 'Kategori berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(kategori $kategori)
    {
        $kategori = kategori::find($kategori);
        return view('/kategori.detail', compact('kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit(kategori $kategori)
    {
        $kategori = kategori::find($kategori);
        return view('/kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kategori $kategori)
    {
        $request->validate([
            'Kategori' => 'required',
        ]);
    
        // sesi::find($sesi)->update($request->all());
            $kategori->Kategori = $request->Kategori;
            $kategori->save();
    
        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect('/kategori')
            ->with('success', 'Kategori Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy(kategori $kategori)
    {
        $kategori->delete();
        return redirect('/kategori')->with('success', 'Kategori berhasil dihapus');
    }
}
