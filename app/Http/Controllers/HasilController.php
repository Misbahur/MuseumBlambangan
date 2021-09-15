<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pengunjung;
use App\Models\Kategori;
use App\Models\Sesi;
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
        return view('/Tiket/form_registrasi', [
            "title" => "Form-Booking"
        ]);
    }
    public function cetakdata(Request $request)
    {
        DB::table('pengunjungs')->insert([
            'Nama_Pengunjung' => $request->nama,
            'NIK' => $request->nik,
            'email' => $request->Email,
            'Alamat' => $request->alamat, 
            'Berkunjung_Pada' => $request->tanggal,
            'Sesi_id' => $request->sesi,
            'kategori_id' => $request->kategori

        ]);
        return redirect('/hasil')->with('status', 'Tiket Anda Berhasil Dicetak');
    }
}
