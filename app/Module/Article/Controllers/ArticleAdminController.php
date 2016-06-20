<?php
namespace App\Module\Article\Controllers;
use App\Module\Admin\AdminController;
use App\Module\Admin\Libs\Test;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Support\Facades\Input;

/**
 * Created by PhpStorm.
 * User: weining
 * Date: 2016/4/2
 * Time: 16:50
 */
class ArticleAdminController extends AdminController{
    use DispatchesJobs;
    function getIndex($userid,Test $test,$username){
        $params = [1,2];
        $params2 = [4];
        array_splice($params,1,0,$params2);
        print_r($params);
        //print_r(Input::get("userid"));
        echo "$userid,$username";
        //$method = new \ReflectionMethod(IndexController::class,"getIndex");
        //print_r($method->getParameters());

        //$this->dispatch(new SendReminderEmail());
        return view("admin/index");
    }

    function getHome(Request $request){
        return view("admin/home");
    }
}