<?php

namespace App\Http\Controllers;

use App\Menu;
use App\ChucNang;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $danhSach = Menu::GetMenuByChaId(0,1);
        return view('Administrator.Menu.create',compact('danhSach'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $chaId = $request->chaId;
        $ten = $request->tenMenu;
        $url = $request->url;
        $array = ['chaId'=>$chaId,'ten'=>$ten,'url'=>$url];
        Menu::insert(
            [$array]
        );
        $danhSach = Menu::GetMenuByChaId(0,1);
        return view('Administrator.Menu.create',compact('danhSach'))->with('Success','Thêm thành công!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $getMenu = Menu::All();
        $danhSach = Menu::GetMenuByChaId(0,1);
        $getMenuGroup = Menu::find($id)->toArray(); //tìm id và đưa tất cả ra 1 mảng
        return view('Administrator.Menu.edit',compact('getMenuGroup','danhSach','getMenu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        $allRequest =  $request->all();
        $id = $allRequest['id'];
        $chaId = $allRequest['chaId'];
        $ten = $allRequest['ten'];
        $url = $allRequest['url'];

        $Menu = Menu::find($id);
        $Menu->chaId = $chaId;
        $Menu->ten =  $ten;
        $Menu->url =  $url;   
        $Menu->save();  
        //tra ve trang edit
        return redirect()->action('MenuController@edit',compact('id'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $idXoa = $request->idXoa;
        if(isset($idXoa)){
            Users::where('id', $idXoa)
                 ->update(['daXoa' => 1]);
        }
        return view('Administrator.Menu.index')->with('Success','Xóa thành công!');
    }
}