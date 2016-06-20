<?php
namespace App\Module\Api\Controllers;
use App\Module\Api\ApiController;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use App\Module\Api\Bll\AccessBll;

/**
 * Created by PhpStorm.122
 * User: weining
 * Date: 2016/4/2
 * Time: 16:51
 */
class AccessController extends ApiController{
    /**
     * 获取access_token
     */
    public function getAccesstoken(){
        $token = AccessBll::getAccessToken();
        print_r($token);
    }
    /**
     * 服务器配置
     * @param Request $request
     */
    public function getChecksignature(Request $request){
        $token = config("api.access.Token");
        if(AccessBll::Checksignature($request["signature"],$request["timestamp"], $request["nonce"],$token) && $request["echostr"]){
            echo $request["echostr"];
        }
    }
    public function getCallbackip(){
        $data = AccessBll::getcallbackip();
        print_r($data);
    }
}