<?php

namespace App\Http\Controllers;

use App\KPI;
use Illuminate\Http\Request;

class KpiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $hienThi = isset($request->hienThi)?$request->hienThi:5;
        $tenTruongSapXep = $request->tenTruongSapXep;
        $kieuSapXep = $request->kieuSapXep;
        $ma = isset($request->ma)?$request->ma:"";
        $ten = isset($request->ten)?$request->ten:"";
        $arrayTen =(['0'=> 'ten','1'=> 'ma']);
        $arrayKieu =(['0'=> 'asc','1'=>'desc']);
        //defaul
        $danhSach = KPI::select('ten','ma','thuTu','nhomKpi');
        $countDanhSach = KPI::select('ten','ma','thuTu','nhomKpi');
         //Nếu không tồn tại các input nhập tìm kiếm thì để default
        if($ten == '' && $ma == ''){
            $danhSach = $danhSach;
        }else{
            $danhSach = $danhSach->where([['ten','LIKE','%'.$request->ten.'%'],['ma','LIKE','%'.$request->ma.'%']]);
            $countDanhSach = $countDanhSach->where([['ten','LIKE','%'.$request->ten.'%'],['ma','LIKE','%'.$request->ma.'%']]);
        }
        if(isset($tenTruongSapXep)){
            $danhSach = $danhSach -> orderBy($arrayTen[$tenTruongSapXep],$arrayKieu[$kieuSapXep]);
        }
        $danhSach = $danhSach->paginate($hienThi);
        $countDanhSach = $countDanhSach -> count();
        return view('Administrator.Kpi.index',compact('danhSach','tenTruongSapXep','kieuSapXep','hienThi','ten','ma','countDanhSach'));
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
     * @param  \App\kpi  $kpi
     * @return \Illuminate\Http\Response
     */
    public function show(kpi $kpi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\kpi  $kpi
     * @return \Illuminate\Http\Response
     */
    public function edit(kpi $kpi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kpi  $kpi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kpi $kpi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\kpi  $kpi
     * @return \Illuminate\Http\Response
     */
    public function destroy(kpi $kpi)
    {
        //
    }
}
