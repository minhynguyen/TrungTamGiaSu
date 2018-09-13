<?php

namespace App\Http\Controllers;

use App\TrinhDoDay;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use DB;
use Yajra\Datatables\Datatables;
class TrinhDoDayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.TrinhDo.index');
    }

    public function getAddEditRemoveColumnData1()
    {
        $TrinhDoDay = TrinhDoDay::select(['tdd_ma', 'tdd_ten', 'tdd_trangthai', 'tdd_taomoi', 'tdd_capnhat']);

        return Datatables::of($TrinhDoDay)
            ->addColumn('action', function ($TrinhDoDay) {
                return '<button type="button" class="btn btn-warning"><a class="table-action-btn" title="Chỉnh sửa" href="' . route('TrinhDo.edit', $TrinhDoDay->tdd_ma) . '"><i class="fa fa-pencil"></i></a></button>

                    <button type="button" class="btn btn-danger"><a class="table-action-btn" title="Xóa" href="' . route('TrinhDo.delete', $TrinhDoDay->tdd_ma) . '"><i class="fa fa-trash"></i></a></button>';

            })
            // ->edit_column('lbd_trangthai', '@if ($lbd_trangthai ==="1") <span class="badge bg-yellow">KHÓA</span> @endif')\
            ->editColumn('tdd_trangthai', '@if ($tdd_trangthai =="2")Khả Dụng @else Khóa  @endif')
            ->make(true);
    }


    public function getAddEditRemoveColumnData()
    {
        $TrinhDoDay = TrinhDoDay::select(['tdd_ma', 'tdd_ten', 'tdd_trangthai', 'tdd_taomoi', 'tdd_capnhat']);

        return Datatables::of($TrinhDoDay)
            ->addColumn('action', function ($TrinhDoDay) {
                return ' <button class="edit-modal btn btn-info" data-id="'.$TrinhDoDay->tdd_ma.'"
                            data-name="'.$TrinhDoDay->tdd_ten.'">
                            <span class="glyphicon glyphicon-edit"></span> Edit
                        </button>
                    <button type="button" class="btn btn-danger"><a class="table-action-btn" title="Xóa" href="' . route('TrinhDo.delete', $TrinhDoDay->tdd_ma) . '"><i class="fa fa-trash"></i></a></button>';

            })
            // ->edit_column('lbd_trangthai', '@if ($lbd_trangthai ==="1") <span class="badge bg-yellow">KHÓA</span> @endif')\
            ->editColumn('tdd_trangthai', '@if ($tdd_trangthai =="2")Khả Dụng @else Khóa  @endif')
            ->make(true);
    }

   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.TrinhDo.create');
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
        $TrinhDoDay = new TrinhDoDay();
        $TrinhDoDay->tdd_ma = $request->tdd_ma;
        $TrinhDoDay->tdd_ten = $request->tdd_ten;
        $TrinhDoDay->tdd_taomoi = Carbon::now();;
        $TrinhDoDay->tdd_capnhat = Carbon::now();;
        $TrinhDoDay->tdd_trangthai = $request->tdd_trangthai;
        
        $TrinhDoDay->save();

        return redirect(route('TrinhDo.index')); //trả về trang cần hiển thị
        }
        catch(QueryException $ex){
            return reponse([
                'error' => true, 'message' => $ex->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TrinhDoDay  $trinhDoDay
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TrinhDoDay  $trinhDoDay
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $TrinhDo = TrinhDoDay::find($id);
        return view('backend.TrinhDo.edit')->with('TrinhDo', $TrinhDo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TrinhDoDay  $trinhDoDay
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
        $TrinhDoDay = TrinhDoDay::find($id);
        $TrinhDoDay->tdd_ma = $request->tdd_ma;
        $TrinhDoDay->tdd_ten = $request->tdd_ten;
        $TrinhDoDay->tdd_taomoi = Carbon::now();;
        $TrinhDoDay->tdd_capnhat = Carbon::now();;
        $TrinhDoDay->tdd_trangthai = $request->tdd_trangthai;

        return redirect(route('TrinhDo.index')); //trả về trang cần hiển thị
        }
        catch(QueryException $ex){
            return reponse([
                'error' => true, 'message' => $ex->getMessage()], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TrinhDoDay  $trinhDoDay
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($id)
    {
        $TrinhDoDay = TrinhDoDay::find($id);
        $TrinhDoDay->delete();
        return redirect(route('TrinhDo.index'));
    }
}
