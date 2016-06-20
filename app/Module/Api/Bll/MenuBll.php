<?php
namespace App\Module\Api\Bll;
use Illuminate\Support\Facades\Log;

class MenuBll extends BaseBll{
    function create(){
        $token = static::getAccessToken();
        $url = preg_replace("/ACCESS_TOKEN/",$token,config("api.menu.url.create"));
        $data = $this->getTpl();
        return static::send($url,"post",$data);
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
                "name" => "菜单",
                "sub_button" => [
                    [
                        "type" => "view",
                        "name" => "搜索",
                        "url" => "http://www.soso.com"
                    ],
                    [
                        "type" => "view",
                        "name" => "视频",
                        "url" => "http://v.qq.com"
                    ],
                    [
                        "type" => "view",
                        "name" => "赞一下我们",
                        "url" => "V1001_GOOD"
                    ],

                ]
            ]
        ];
        return $data;
    }
}