<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Mon;
use View;
use Validator;
use Response;

class MonController extends Controller
{
    protected $rules =
    [
        'title' => 'required|min:2|max:32',
        'content' => 'required|min:2|max:128'
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mon = Mon::all();

        return view('backend.mon.index', ['mon' => $mon]);
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
        $validator = Validator::make(Input::all(), $this->rules);
        if ($validator->fails()) {
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else {
            $mon = new Mon();
            $mon->m_ten = $request->m_ten;
            $mon->m_trangthai = $request->m_trangthai;
            
            $mon->save();
            return response()->json($mon);
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
        $mon = mon::findOrFail($id);

        return view('mon.show', ['mon' => $mon]);
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
    public function update(Request $request, $id)
    {
        $validator = Validator::make(Input::all(), $this->rules);
        if ($validator->fails()) {
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else {
            $mon = Mon::findOrFail($id);
            $mon->m_ten = $request->m_ten;
            $mon->m_trangthai = $request->m_trangthai;
            $mon->save();
            return response()->json($mon);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mon  $mon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mon $mon)
    {
        $mon = Mon::findOrFail($id);
        $mon->delete();

        return response()->json($mon);
    }


    public function changeStatus() 
    {
        
    }


}
