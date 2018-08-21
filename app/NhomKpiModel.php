<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NhomKpiModel extends Model
{
    protected $table='nhomkpi';
    protected $fillable =['ten','nhomCha','daXoa'];
    static function GetIdParent($nhomCha,$level,$id)
    {
        $r = NhomKpiModel::select('id','ten','nhomCha','daXoa')-> where('daXoa',0)->where('nhomCha',$nhomCha)->where('id','!=',$id)->orderBy('ten','asc')->get();
        //đệ quy
        $array =array();
        foreach($r as $key =>$value){
            $value->level = $level;
            $array[] = $value;
            $array = array_merge($array,NhomKpiModel::GetIdParent($value->id,$level+1,$id));
        }
        return $array;
    }
}