<?php
namespace App\Module\Api\Bll;
use Guzzle\Http\Client;
use Illuminate\Support\Facades\Log;

class AccessBll extends BaseBll{
     static public function Checksignature($signature,$timestamp, $nonce,$token)
    {
        $tmpArr = array($token, $timestamp, $nonce);
        sort($tmpArr, SORT_STRING);
        $tmpStr = implode( $tmpArr );
        $tmpStr = sha1( $tmpStr );
        if( $tmpStr == $signature ){
            return true;
        }else{
            return false;
        }
    }

    /**
     * 获取服务器列表
     * @return array|bool|float|int|string
     */
    static public function getcallbackip(){
        $urlTpl = config("api.access.url.getcallbackip");
        $token = static::getAccessToken();
        $url = preg_replace("/ACCESS_TOKEN/",$token,$urlTpl);
        $client = new Client($url);
        $response = $client->get()->send();
        Log::info("getcallbackip:".$response->getBody());
        return $response->json();
    }
}