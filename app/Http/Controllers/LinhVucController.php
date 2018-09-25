<?php

namespace App\Http\Controllers;

use App\LinhVuc;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use RealRashid\SweetAlert\Facades\Alert;

class LinhVucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $dsLinhVuc = LinhVuc::all();
        return view('backend.LinhVuc.index')->with('dsLinhVuc', $dsLinhVuc);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // LinhVuc::create($request->all());

        // return back();  


        try{
        $LinhVuc = new LinhVuc();
        $LinhVuc->lv_ma = $request->lv_ma;
        $LinhVuc->lv_ten = $request->lv_ten;
        $LinhVuc->lv_taomoi = Carbon::now();
        $LinhVuc->lv_capnhat = Carbon::now();
        $LinhVuc->lv_trangthai = $request->lv_trangthai;
        
        $LinhVuc->save();
        Alert()->success('You have been logged out.', 'Good bye!');
        return redirect()->back();
        }
        catch(QueryException $ex){
            return reponse([
                'error' => true, 'message' => $ex->getMessage()], 500);
        }
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
    public function update(Request $request)
    {
        try{

        $LinhVuc = LinhVuc::findOrFail($request->lv_ma);

        $LinhVuc->lv_ma = $request->lv_ma;
        $LinhVuc->lv_ten = $request->lv_ten;
        $LinhVuc->lv_capnhat = Carbon::now();
        $LinhVuc->lv_trangthai = $request->lv_trangthai;
        
        $LinhVuc->save();
       
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        
        $LinhVuc = LinhVuc::findOrFail($request->lv_ma);
        $LinhVuc->delete();

        return back();

    }
}
