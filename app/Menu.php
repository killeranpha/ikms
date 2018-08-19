<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu';
    static function GetMenuByChaId($chaId,$level){ 
        $danhSach = Menu::where('chaId','=',$chaId)->where('daXoa',0)->get();
        $array = [];
        foreach($danhSach as $key=>$value){
            $value->level = $level;
            $array[] = $value;
            $array = array_merge($array,Menu::GetMenuByChaId($value->id,$level + 1));
        }
        return $array;
    }
}
