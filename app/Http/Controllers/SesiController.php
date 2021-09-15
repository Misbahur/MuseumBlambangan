<?php

namespace App\Http\Controllers;

use App\Models\sesi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sesi  $sesi
     * @return \Illuminate\Http\Response
     */
    public function show(sesi $sesi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sesi  $sesi
     * @return \Illuminate\Http\Response
     */
    public function edit(sesi $sesi)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sesi  $sesi
     * @return \Illuminate\Http\Response
     */
    public function destroy(sesi $sesi)
    {
        //
    }
}
