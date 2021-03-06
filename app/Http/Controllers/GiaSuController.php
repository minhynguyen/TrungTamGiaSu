<?php

namespace App\Http\Controllers;

use App\GiaSu;
use Illuminate\Http\Request;
use Auth;
use App\ChuyenNganh;
use App\Mon;
use App\TrinhDoDay;
use App\GiaSu_ChuyenNganh;
use DB;


class GiaSuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $thongtin = DB::table('GiaSu')->join('users', 'GiaSu.id', '=', 'users.id')
                                      ->join('GiaSu_ChuyenNganh', 'GiaSu.gs_ma', '=', 'GiaSu_ChuyenNganh.gs_ma')
                                      ->join('DangKi', 'DangKi.gs_ma', '=', 'DangKi.gs_ma')
                                      ->join('Mon', 'DangKi.m_ma', '=', 'm.m_ma')
                                      ->where('users.id',$id)
                                      ->where('gs_trangthai','2')->get();

        return view('TrangChu.quanlitaikhoan')->with('thongtin', $thongtin);
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
     * @param  \App\GiaSu  $giaSu
     * @return \Illuminate\Http\Response
     */
    public function show(GiaSu $giaSu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GiaSu  $giaSu
     * @return \Illuminate\Http\Response
     */
    public function edit(GiaSu $giaSu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GiaSu  $giaSu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GiaSu $giaSu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GiaSu  $giaSu
     * @return \Illuminate\Http\Response
     */
    public function destroy(GiaSu $giaSu)
    {
        //
    }
}
