<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu';
    static function GetMenuByChaId($chaId,$level,$id){ 
        $danhSach = Menu::where('chaId','=',$chaId)->where('daXoa',0)->where('id','!=',$id)->get();
        $array = [];
        foreach($danhSach as $key=>$value){
            $value->level = $level;
            $array[] = $value;
            $array = array_merge($array,Menu::GetMenuByChaId($value->id,$level + 1,$id));
        }
        return $array;
    }
}
