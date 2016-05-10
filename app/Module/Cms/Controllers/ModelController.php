<?php
namespace App\Module\Cms\Controllers;
use App\Module\Admin\AdminController;
use App\Module\Cms\Model\ModelModel;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
class ModelController extends AdminController{


    function getAdd(Request $request){
       
        return view("cms/model/add");
    }
    function postAdd(Request $request){
        $model = new ModelModel($request->all());
        $model->save();
    }
}