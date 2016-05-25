<?php
/**
 * Created by PhpStorm.
 * User: weining
 * Date: 2016/4/28
 * Time: 11:05
 */
Route::get("/",function(){
   echo "hellow laravel";
    app("redis")->set("k1",1);
    echo app("redis")->get("k1");
});
Route::controller("admin/article",'ArticleController');