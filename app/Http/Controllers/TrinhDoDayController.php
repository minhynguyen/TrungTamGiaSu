<?php

namespace App\Http\Controllers;

use App\TrinhDoDay;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\Components\FlashMessages;
use Session;
class TrinhDoDayController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsTrinhDo = TrinhDoDay::all();
        return view('backend.TrinhDo.index')->with('dsTrinhDo',$dsTrinhDo);
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
        'tdd_ten' => 'required|max:100',
        'tdd_trangthai' => 'required',
        ]);
        try{
        $TrinhDoDay = new TrinhDoDay();
        $TrinhDoDay->tdd_ma = $request->tdd_ma;
        $TrinhDoDay->tdd_ten = $request->tdd_ten;
        $TrinhDoDay->tdd_taomoi = Carbon::now();
        $TrinhDoDay->tdd_capnhat = Carbon::now();
        $TrinhDoDay->tdd_trangthai = $request->tdd_trangthai;
        
        $TrinhDoDay->save();
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

        $TrinhDoDay = TrinhDoDay::findOrFail($request->tdd_ma);
        $TrinhDoDay->tdd_ma = $request->tdd_ma;
        $TrinhDoDay->tdd_ten = $request->tdd_ten;
        $TrinhDoDay->tdd_capnhat = Carbon::now();
        $TrinhDoDay->tdd_trangthai = $request->tdd_trangthai;
        $TrinhDoDay->save();
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
        $TrinhDoDay = TrinhDoDay::findOrFail($Request->tdd_ma);
        $TrinhDoDay->delete();
        Session::flash('deletesuccess', 'This is a message!');
        return back();
    }
}
