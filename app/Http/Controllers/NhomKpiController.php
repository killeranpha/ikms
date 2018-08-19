<?php

namespace App\Http\Controllers;

use App\NhomKpiModel;
use Illuminate\Http\Request;

class NhomKpiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $danhSach = NhomKpiModel::GetIdParent(1,0);  
        return view('Administrator.NhomKpi.index',compact('danhSach'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $danhSach = NhomKpiModel::GetIdParent(0,0);  
        return view('Administrator.NhomKpi.create',compact('danhSach'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nhomCha = $request->nhomCha;
        $tenKpi = $request->tenKpi;
        $array = ['ten'=>$tenKpi,'nhomCha'=>$nhomCha,'daXoa'=>0,'level'=>0];
        NhomKpiModel::insert(
            [$array]
        );
        $danhSach = NhomKpiModel::GetIdParent(0,0);
        return view('Administrator.NhomKpi.index',compact('danhSach'))->with('Success','Thêm thành công!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NhomKpiModel  $nhomKpiModel
     * @return \Illuminate\Http\Response
     */
    public function show(NhomKpiModel $nhomKpiModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NhomKpiModel  $nhomKpiModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $idNhomKpiSua = NhomKpiModel::select('id','ten','nhomCha','level','daXoa')->where('daXoa',0)->where('id',$id)->get();
        $danhSach = NhomKpiModel::GetIdParent(0,0);
        return view('Administrator.NhomKpi.edit',compact('idNhomKpiSua','danhSach'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NhomKpiModel  $nhomKpiModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NhomKpiModel $nhomKpiModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NhomKpiModel  $nhomKpiModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(NhomKpiModel $nhomKpiModel)
    {
        //
    }
}