<?php
namespace App\Module\Api\Controllers;
use App\Module\Api\ApiController;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

/**
 * Created by PhpStorm.122
 * User: weining
 * Date: 2016/4/2
 * Time: 16:51
 */
class MessageController extends ApiController{
    //接收文本消息
   public function postReceivetext(Request $request){

        Log::info("postReceiveText:".print_r($request->getContent(),true));
   }
}