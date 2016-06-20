<?php
namespace App\Module\Api\Controllers;
use App\Module\Api\ApiController;
use App\Module\Api\Bll\MenuBll;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

/**
 * Created by PhpStorm.122
 * User: weining
 * Date: 2016/4/2
 * Time: 16:51
 */
class MenuController extends ApiController{
   public function getCreate(){
       $menu = new MenuBll();
       print_r($menu->create());
   }
    public function postTest(Request $request){
        Log::info("postTest:".print_r($request->all(),true));
        echo json_encode($request->all());
    }
}