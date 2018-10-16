<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DangKi;
use App\Mon;
use App\TrinhDoDay;
use App\GiaSu;
use App\PhuHuynh;
use DB;
use Auth;
use Carbon\Carbon;


class TrangChuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $thongtindangki = DB::table('GiaSu')
                                      ->leftjoin('DangKi', 'GiaSu.gs_ma', '=', 'DangKi.gs_ma')
                                      ->leftjoin('Mon', 'DangKi.m_ma', '=', 'Mon.m_ma')
                                      ->leftjoin('TrinhDoDay', 'TrinhDoDay.tdd_ma', '=', 'DangKi.tdd_ma')
                                      ->where('gs_trangthai','2')->get();
        $yeucau = DB::table('PhuHuynh')->leftjoin('YeuCau', 'PhuHuynh.ph_ma', '=', 'YeuCau.ph_ma')
                                        ->leftjoin('TrinhDoDay', 'TrinhDoDay.tdd_ma', '=', 'YeuCau.tdd_ma')
                                        ->leftjoin('Mon', 'Mon.m_ma', '=', 'YeuCau.m_ma')
                                        ->where('yc_trangthai','2')->get();

        return view('TrangChu.index')->with('thongtindangki',$thongtindangki)
                                     ->with('yeucau',$yeucau);
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
