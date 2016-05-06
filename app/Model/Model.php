<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model as BaseModel;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Collection;
/**
 * Created by PhpStorm.
 * User: weining
 * Date: 2016/4/3
 * Time: 20:46
 */
class Model extends BaseModel{
    const UPDATED_AT = "updateTime";
    const CREATED_AT = "createTime";
     function get($id){
        $rs = static::query()->where(static::getKeyName(),$id)->first();
        return $rs;
    }
    function getList($page = 0, $perPage = 15){
        $rs = static::query()->forPage($page, $perPage)->get();
        return $rs;
    }
}