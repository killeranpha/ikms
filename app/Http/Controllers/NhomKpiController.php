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
        $danhSach = NhomKpiModel::GetIdParent(1,0,0);  
        return view('Administrator.NhomKpi.index',compact('danhSach'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $danhSach = NhomKpiModel::GetIdParent(0,0,0);  
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
        $danhSach = NhomKpiModel::GetIdParent(1,0,0);
        return view('Administrator.NhomKpi.create',compact('danhSach'))->with('Success','Thêm thành công!'); 
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
        $NhomKpi = NhomKpiModel::select('id','ten','nhomCha','level','daXoa')->where('daXoa',0)->get();
        $idNhomKpiSua = NhomKpiModel::find($id)->toArray();
        $danhSach = NhomKpiModel::GetIdParent(0,0,$id);
        return view('Administrator.NhomKpi.edit',compact('NhomKpi','danhSach','idNhomKpiSua'));
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
        $tenNhomKpi = $request->tenNhomKpi;
        $nhomCha = $request->nhomCha;
        
        //Tìm nhóm cần sửa
        $idNhomKpi = $request->idNhomKpi;
        $idNhomKpiSua = NhomKpiModel::find($idNhomKpi);
        //Action update
        $idNhomKpiSua -> update([
            'ten' => $tenNhomKpi,
            'nhomCha' => $nhomCha
        ]);
        $danhSach = NhomKpiModel::GetIdParent(1,0,0);
        return redirect()->route('danhsachnhomkpi')->with('message','Sửa đổi thông tin thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NhomKpiModel  $nhomKpiModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,NhomKpiModel $nhomKpiModel)
    {
        $idXoa = $request->id;
        if(isset($idXoa)){
            NhomKpiModel::where('id', $idXoa)
                 ->update(['daXoa' => 1]);
        }
        $danhSach = NhomKpiModel::GetIdParent(1,0,0);  
        return redirect()->route('danhsachnhomkpi');
    }
}