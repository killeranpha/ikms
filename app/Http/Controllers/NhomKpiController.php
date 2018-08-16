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
        return view('Administrator.NhomKpi.create');
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
    public function edit(NhomKpiModel $nhomKpiModel)
    {
        //
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