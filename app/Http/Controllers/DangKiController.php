<?php

namespace App\Http\Controllers;

use App\DangKi;
use Illuminate\Http\Request;
use App\TrinhDoDay;
use App\Mon;
use DB;


class DangKiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\DangKi  $dangKi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $thongtindangki = DB::table('dangki')->join('giasu', 'giasu.gs_ma', '=', 'dangki.gs_ma')
                                             ->join('users', 'users.id', '=', 'giasu.id')
                                             ->join('mon', 'mon.m_ma', '=', 'dangki.m_ma')
                                             ->join('trinhdoday', 'trinhdoday.tdd_ma', '=', 'dangki.tdd_ma')
                                             ->where('dk_ma', $id)->get();
        return view('TrangChu.thongtintimlop')->with('thongtindangki',$thongtindangki);   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DangKi  $dangKi
     * @return \Illuminate\Http\Response
     */
    public function edit(DangKi $dangKi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DangKi  $dangKi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DangKi $dangKi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DangKi  $dangKi
     * @return \Illuminate\Http\Response
     */
    public function destroy(DangKi $dangKi)
    {
        //
    }
}
