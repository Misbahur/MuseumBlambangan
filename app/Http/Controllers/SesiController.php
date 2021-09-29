<?php

namespace App\Http\Controllers;

use App\Models\sesi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;

class SesiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sesis = DB::table('sesis')->get();

        return view('/sesi.sesi',["title" => "Sesi"], compact('sesis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/sesi.create');
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
            'nama_sesi' => 'required',
            'waktu' => 'required',
            'deskripsi' => 'required',
        ]);
        
        // $sesi = new sesi;
        // $sesi->nama = $request->nama;
        // $sesi->waktu = $request->waktu;
        // $sesi->deskripsi = $request->deskripsi;
        // $sesi->save();

        sesi::create($request->all());
        
        return redirect('/sesi')->with('success', 'Sesi berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sesi  $sesi
     * @return \Illuminate\Http\Response
     */
    public function show(sesi $sesi)
    {
        $sesi = sesi::find($sesi);
        return view('/sesi.detail', compact('sesi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sesi  $sesi
     * @return \Illuminate\Http\Response
     */
    public function edit(sesi $sesi)
    {
        $sesi = sesi::find($sesi);
        return view('/sesi.edit', compact('sesi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sesi  $sesi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sesi $sesi)
    {
      //melakukan validasi data
      $request->validate([
        'nama_sesi' => 'required',
        'waktu' => 'required',
        'deskripsi' => 'required',
    ]);

    // sesi::find($sesi)->update($request->all());
        $sesi->nama_sesi = $request->nama_sesi;
        $sesi->waktu = $request->waktu;
        $sesi->deskripsi = $request->deskripsi;
        $sesi->save();

    //jika data berhasil diupdate, akan kembali ke halaman utama
    return redirect('/sesi')
        ->with('success', 'Sesi Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sesi  $sesi
     * @return \Illuminate\Http\Response
     */
    public function destroy(sesi $sesi)
    {
        $sesi->delete();
        return redirect('/sesi')->with('success', 'Sesi berhasil dihapus');
    }
}
