<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GiaSu;
use Auth;
use App\ChuyenNganh;
use App\Mon;
use App\TrinhDoDay;
use App\GiaSu_ChuyenNganh;
use DB;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $thongtin = DB::table('GiaSu')->leftjoin('users', 'GiaSu.id', '=', 'users.id')
                                      ->leftjoin('GiaSu_ChuyenNganh', 'GiaSu.gs_ma', '=', 'GiaSu_ChuyenNganh.gs_ma')
                                      ->leftjoin('ChuyenNganh', 'ChuyenNganh.cn_ma', '=', 'GiaSu_ChuyenNganh.cn_ma')
                                      ->leftjoin('DangKi', 'DangKi.gs_ma', '=', 'DangKi.gs_ma')
                                      ->leftjoin('Mon', 'DangKi.m_ma', '=', 'Mon.m_ma')
                                      ->leftjoin('TrinhDoDay', 'TrinhDoDay.tdd_ma', '=', 'DangKi.tdd_ma')
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
