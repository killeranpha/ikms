<?php

namespace App\Http\Controllers;

use App\MonHocModel;
use Illuminate\Http\Request;

class MonHocController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $phanTrang = isset($request->phanTrang)?$request->phanTrang:5;
        $tenTruongSapXep = isset($request->tenTruongSapXep)?$request->tenTruongSapXep:0;
        $kieuSapXep = isset($request->kieuSapXep)?$request->kieuSapXep:0;
        $searchCount = MonHocModel::where('daXoa',0)->select('ten');
        $arrayTen =(['0'=> 'id','1'=> 'ten']);
        $arrayKieu =(['0'=> 'asc','1'=>'desc']);
        $searchCount -> where('ten', 'like','%'. $request->timkiem.'%');
        $rCount = $searchCount->count();
        $monHoc = MonHocModel::where('daXoa',0)->where('ten', 'like','%'. $request->timkiem.'%')->orderBY($arrayTen[$tenTruongSapXep],
                            $arrayKieu[$kieuSapXep])->paginate($phanTrang);
            return view('Administrator.MonHoc.index',['monHoc'=>$monHoc,'kieuSapXep'=>$kieuSapXep,
                        'phanTrang'=>$phanTrang,'timKiem'=>$request->timkiem,'count'=>$rCount]);
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
     * @param  \App\MonHocModel  $monHocModel
     * @return \Illuminate\Http\Response
     */
    public function show(MonHocModel $monHocModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MonHocModel  $monHocModel
     * @return \Illuminate\Http\Response
     */
    public function edit(MonHocModel $monHocModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MonHocModel  $monHocModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MonHocModel $monHocModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MonHocModel  $monHocModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(MonHocModel $monHocModel)
    {
        //
    }
}
