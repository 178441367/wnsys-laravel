<?php
/**
 * Created by PhpStorm.
 * User: weining
 * Date: 2016/4/28
 * Time: 11:05
 */
Route::get("/",function(){
   echo "weixin";

});
Route::controller("api/access",'AccessController');
Route::controller("api/menu",'MenuController');