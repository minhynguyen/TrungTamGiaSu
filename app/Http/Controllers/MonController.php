<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Validator;
use Response;
use App\Mon;
use View;
use DB;
use Carbon\Carbon;


class MonController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsmon = Mon::all();
        return view('backend.mon.index')->with('dsmon',$dsmon);
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
        
        try{
        $mon = new Mon();
        $mon->m_ma = $request->m_ma;
        $mon->m_ten = $request->m_ten;
        $mon->m_taomoi = Carbon::now();
        $mon->m_capnhat = Carbon::now();
        $mon->m_trangthai = $request->m_trangthai;
        
        $mon->save();
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

        $mon = Mon::findOrFail($request->m_ma);

        $mon->m_ma = $request->m_ma;
        $mon->m_ten = $request->m_ten;
        $mon->m_capnhat = Carbon::now();
        $mon->m_trangthai = $request->m_trangthai;
        
        $mon->save();
       
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
    public function destroy(Request $request)
    {
        $mon = Mon::findOrFail($request->m_ma);
        $mon->delete();

        return back();
    }

}
