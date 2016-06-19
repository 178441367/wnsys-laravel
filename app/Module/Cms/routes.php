<?php
/**
 * Created by PhpStorm.
 * User: weining
 * Date: 2016/4/28
 * Time: 11:05
 */
Route::get("/",function(){
    $key = "test1";
    $data = [
        "title"=>"redis:title",
        "content"=>"redis:content"
    ];
    echo app("redis")->rpush($key,json_encode($data));

});
Route::controller("admin/article",'ArticleController');