<?php

namespace App\Http\Controllers;

use App\Khoa;
use Illuminate\Http\Request;

class KhoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $hienThi = isset($request->hienThi)?$request->hienThi:5;
        $ten = isset($request->ten)?$request->ten:"";
        $ma = isset($request->ma)?$request->ma:"";
        $tenTruongSapXep = $request->tenTruongSapXep;
        $kieuSapXep = $request->kieuSapXep;
        $arrayTen =(['0'=> 'ten','1'=> 'ma']);
        $arrayKieu =(['0'=> 'asc','1'=>'desc']);
        //defaul
        $danhSach = Khoa::select('ten','ma','ngayThangBatDau','moTa');
        $danhSachCount = Khoa::select('ten','ma','ngayThangBatDau','moTa');
        //Nếu không tồn tại các input nhập tìm kiếm thì để default
        if($ten == '' && $ma == ''){
            $danhSach = $danhSach;
        }else{
            $danhSach = $danhSach ->Where([['ten','like','%'.$request->ten.'%'],['ma','like','%'.$request->ma.'%']]);
            $danhSachCount = $danhSach ->Where([['ten','like','%'.$request->ten.'%'],['ma','like','%'.$request->ma.'%']]);
        }
        if(isset($tenTruongSapXep)){
            $danhSach = $danhSach -> orderBy($arrayTen[$tenTruongSapXep],$arrayKieu[$kieuSapXep]);
        }
        $danhSach = $danhSach->paginate($hienThi);
        $countDanhSach = $danhSachCount -> count();
        return view('Administrator.Khoa.index',compact('danhSach','tenTruongSapXep','kieuSapXep','hienThi','ten','ma','countDanhSach'));
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
     * @param  \App\Khoa  $khoa
     * @return \Illuminate\Http\Response
     */
    public function show(Khoa $khoa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Khoa  $khoa
     * @return \Illuminate\Http\Response
     */
    public function edit(Khoa $khoa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Khoa  $khoa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Khoa $khoa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Khoa  $khoa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Khoa $khoa)
    {
        //
    }
}
