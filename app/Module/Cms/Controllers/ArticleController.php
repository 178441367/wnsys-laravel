<?php
namespace App\Module\Cms\Controllers;
use App\Module\Admin\AdminController;
use App\Module\Cms\Model\ArticleModel;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


/**
 * Created by PhpStorm.122
 * User: weining
 * Date: 2016/4/2
 * Time: 16:51
 */
class ArticleController extends AdminController{

    function getIndex(){
        $t = new ArticleModel();
        $rs = $t->getList()->toArray();
        $data["data"] = $rs;
        return view("cms/article/list",$data);
    }
    function getList(){
        return view("cms/article/list");
    }
    function getAdd(){
        return view("cms/article/edit");
    }
    function postAdd(Request $request){

    }
    function getEdit(){
        return view("cms/article/edit");
    }
    function getDelete(){
        //return view("admin/index");
    }
    function getSave(){
        //return view("admin/index");
    }
}