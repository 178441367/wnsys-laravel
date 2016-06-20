<?php
namespace App\Module\Admin\Controllers;
use App\Module\Article\ArticleController;

/**
 * Created by PhpStorm.
 * User: weining
 * Date: 2016/4/2
 * Time: 16:50
 */
class IndexController extends ArticleController{
    function getIndex(){
        return view("admin/login");
    }

}