<?php
namespace App\Module\Api\Bll;
use Illuminate\Support\Facades\Log;

class MenuBll extends BaseBll{
    function create(){
        $token = static::getAccessToken();
        $url = preg_replace("/ACCESS_TOKEN/",$token,config("api.menu.url.create"));
        $data = $this->getTpl();
        //$url = "http://www.wnsys.net/api/menu/test";
        $response =  static::send($url,"post",$data);
        return $response->json();
    }
    private function getTpl(){
        $data = [];
        $data["button"] = [
            [
                "type" => "click",
                "name" => "今日歌曲",
                "key" => "V1001_TODAY_MUSIC"
            ],
            [
                "type" => "click",
                "name" => "歌手简介",
                "key" => "V1001_TODAY_SINGER"
            ],
            [
                "name" => "菜单",
                "sub_button" => [
                    [
                        "type" => "view",
                        "name" => "搜索",
                        "url" => "http://www.soso.com/"
                    ],
                    [
                        "type" => "view",
                        "name" => "视频",
                        "url" => "http://v.qq.com/"
                    ],
                    [
                        "type" => "click",
                        "name" => "赞一下我们",
                        "key" => "V1001_GOOD"
                    ],

                ]
            ]
        ];
        $data = json_encode($data,JSON_UNESCAPED_UNICODE);
        $data = str_replace("\\","",$data);
        Log::info("data1:".$data);

        return $data;
    }
}