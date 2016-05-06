<?php
namespace App\Module\Admin\Controllers;
use App\Module\Admin\AdminController;

/**
 * Created by PhpStorm.
 * User: weining
 * Date: 2016/4/2
 * Time: 16:50
 */
class LoginController extends AdminController{
    function getIndex(){
        return view("admin/login");
    }

}