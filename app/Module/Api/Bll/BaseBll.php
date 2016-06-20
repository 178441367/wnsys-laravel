<?php
namespace App\Module\Api\Bll;
use Guzzle\Http\Client;
use Illuminate\Support\Facades\Log;

class BaseBll{
    static public function getAccessToken(){
        $urlTpl = config("api.access.url.accessToken");
        $appid = config("api.access.AppID");
        $appsecret = config("api.access.AppSecret");
        $url = preg_replace(array("/APPID/","/APPSECRET/"),array($appid,$appsecret),$urlTpl);
        $response = static::send($url);
        return $response["access_token"];
    }
    static public function send($url,$method = "get",$params = [] ,$header = null){
        $client = new Client($url);
        if($method == "get"){
            $response = $client->get()->send();
        }else {
            $response = $client->post(null,$header,$params)->send();
        }
        Log::info("request url($method):$url");
        Log::info("reponse :".$response->getBody());
        return $response->json();
    }
}