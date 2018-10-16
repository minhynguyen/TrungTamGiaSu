<?php

namespace App\Http\Controllers;

use App\YeuCau;
use Illuminate\Http\Request;
use Auth;
use App\Mon;
use App\TrinhDoDay;
use DB;


class YeuCauController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsmon = Mon::all();
        $dsTrinhDo = TrinhDoDay::all();
        return view('TrangChu.dangkiyeucau')->with('dsmon',$dsmon)->with('dsTrinhDo',$dsTrinhDo);
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
        // dd($request);
        $diachi = $request->yc_diachi;
        $gioitinh = $request->yc_gioitinh;
        $hocvi = $request->yc_hocvi;
        $trinhdo = $request->tdd_ma;
        $id = Auth::user()->id;
        $phuhuynhdata = DB::table('PhuHuynh')->select('ph_ma')->where('id', $id)->get();
        
        foreach ($phuhuynhdata as $ph) {
            $phuhuynh = $ph->ph_ma;
        }   
        $yeucaudata = $request->input('rows');
        // dd($yeucaudata);
        if(empty($yeucaudata)){
        
        }
        else{
            foreach ($yeucaudata as $yc) {
                $data[] = [
                    'ph_ma' => $phuhuynh,
                    'm_ma'=>$yc['m_ma'],
                    'tdd_ma' => $trinhdo,
                    'yc_diachi' => $diachi,
                    'yc_gioitinh' => $gioitinh,
                    'yc_hocvi' => $hocvi,
                    'yc_ngayhoc' => $yc['yc_ngayhoc'],
                    'yc_giobatdau' => $yc['yc_giobatdau'],
                    'yc_gioketthuc' => $yc['yc_gioketthuc'],
                ];         
            }
            
                YeuCau::insert($data);
        }
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\YeuCau  $yeuCau
     * @return \Illuminate\Http\Response
     */
    public function show(YeuCau $yeuCau)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\YeuCau  $yeuCau
     * @return \Illuminate\Http\Response
     */
    public function edit(YeuCau $yeuCau)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\YeuCau  $yeuCau
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, YeuCau $yeuCau)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\YeuCau  $yeuCau
     * @return \Illuminate\Http\Response
     */
    public function destroy(YeuCau $yeuCau)
    {
        //
    }
}
