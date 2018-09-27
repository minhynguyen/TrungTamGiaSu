<?php

namespace App\Http\Controllers;

use App\ChuyenNganh;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use Session;
class ChuyenNganhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsLinhvuc = DB::table('LinhVuc')->where('lv_trangthai','2')->get();
        $dsChuyenNganh = DB::table('ChuyenNganh')->join('LinhVuc', 'ChuyenNganh.lv_ma', '=', 'LinhVuc.lv_ma')->get();
        return view('backend.ChuyenNganh.index')->with('dsChuyenNganh',$dsChuyenNganh)
                                                ->with('dsLinhvuc',$dsLinhvuc);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
        'cn_ten' => 'required|max:100',
        'cn_trangthai' => 'required',
        ]);
        try{
        $ChuyenNganh = new ChuyenNganh();
        $ChuyenNganh->cn_ma = $request->cn_ma;
        $ChuyenNganh->cn_ten = $request->cn_ten;
        $ChuyenNganh->lv_ma = $request->lv_ma;
        $ChuyenNganh->cn_taomoi = Carbon::now();
        $ChuyenNganh->cn_capnhat = Carbon::now();
        $ChuyenNganh->cn_trangthai = $request->cn_trangthai;
        
        $ChuyenNganh->save();
        Session::flash('success', 'This is a message!'); 
        return back();
        }
        catch(QueryException $ex){
            return reponse([
                'error' => true, 'message' => $ex->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mon  $mon
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mon  $mon
     * @return \Illuminate\Http\Response
     */
    public function edit(Mon $mon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mon  $mon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try{

        $ChuyenNganh = ChuyenNganh::findOrFail($request->cn_ma);
        $ChuyenNganh->cn_ma = $request->cn_ma;
        $ChuyenNganh->cn_ten = $request->cn_ten;
        $ChuyenNganh->lv_ma = $request->lv_ma;
        $ChuyenNganh->cn_capnhat = Carbon::now();
        $ChuyenNganh->cn_trangthai = $request->cn_trangthai;
        
        $ChuyenNganh->save();
        return back();
        }
        catch(QueryException $ex){
            return reponse([
                'error' => true, 'message' => $ex->getMessage()], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mon  $mon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $Request)
    {
        $ChuyenNganh = ChuyenNganh::findOrFail($Request->cn_ma);
        $ChuyenNganh->delete();
        Session::flash('deletesuccess', 'This is a message!');
        return back();
    }
}
