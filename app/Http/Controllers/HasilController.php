<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pengunjung;
use App\Models\kategori;
use App\Models\sesi;
class HasilController extends Controller
{

    public function data()
    {
        // $pengunjungs = DB::table('pengunjungs')
        $pengunjungs = Pengunjung::orderBy('id', 'desc')
        ->paginate(1);
        // return $pengunjung;
        // return view('/Tiket/form_rombongan', ['pengunjungs' => $pengunjungs]);
        return view('/Tiket/form_rombongan',[
            "title" => "Tiket"], compact('pengunjungs'));
    }
    public function add()
    {   
        $sesi = sesi::all();
        $kategori = kategori::all();
        return view('/Tiket/form_registrasi', [
            "title" => "Form-Booking"
        ], compact('sesi','kategori'));
    }
    public function cetakdata(Request $request)
    {
        // $request->validate([
        //     'Nama_Pengunjung' => 'required',
        //     'NIK' => 'required',
        //     'email' => 'required|email.dns',
        //     'Alamat' => 'required', 
        //     'Berkunjung_Pada' => 'required',
        //     'Sesi_id' => 'required',
        //     'kategori_id' => 'required'
        // ]);

        // Pengunjung::create($request->all());
        DB::table('pengunjungs')->insert([
            'Nama_Pengunjung' => $request->nama,
            'NIK' => $request->nik,
            'email' => $request->Email,
            'Alamat' => $request->alamat, 
            'Berkunjung_Pada' => $request->tanggal,
            'Sesi_id' => $request->sesi,
            'kategori_id' => $request->kategori

        ]);
        return redirect('/hasil')->with('success', 'Tiket Anda Berhasil Dicetak');
    }
}
