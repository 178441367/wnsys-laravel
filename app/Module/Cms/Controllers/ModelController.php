<?php
namespace App\Module\Cms\Controllers;
use App\Module\Admin\AdminController;
use App\Module\Cms\Model\ModelModel;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
class ModelController extends AdminController{
    function __construct()
    {

    }

    function getAdd(Request $request){
        $this->css[] = "/assets/css/cms/base.css";
        $this->js[] = "/assets/js/cms/model.js";
        return view("cms/model/add");
    }
    function postAdd(Request $request){
        $model = new ModelModel($request->all());
        $model->save();
    }
}