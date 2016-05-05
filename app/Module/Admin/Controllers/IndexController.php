<?php
namespace App\Module\Admin\Controllers;
use App\Module\Admin\AdminController;
use Illuminate\Http\Request;
/**
 * Created by PhpStorm.
 * User: weining
 * Date: 2016/4/2
 * Time: 16:50
 */
class IndexController extends AdminController{
    function getIndex(Request $request){
        return view("admin/index");
    }

    function getHome(Request $request){
        return view("admin/home");
    }
}