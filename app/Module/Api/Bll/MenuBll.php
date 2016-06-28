<?php
namespace App\Module\Api\Bll;
use Illuminate\Support\Facades\Log;

class MenuBll extends BaseBll{
    function create(){
        $token = static::getAccessToken();
        $url = preg_replace("/ACCESS_TOKEN/",$token,config("api.menu.url.create"));
        $data = $this->menuData();
        $response =  static::send($url,"post",$data);
        return $response->json();
    }
    static function getMenu(){
        $token = static::getAccessToken();
        $url = preg_replace("/ACCESS_TOKEN/",$token,config("api.menu.url.selfmenu_info"));
        $response =  static::send($url);
        return $response->json();
    }
    /**
     * 个性化菜单
     * @return array|bool|float|int|string
     */
   static function addconditional(){
        $data = '
        {
            "button":[
            {
                "type":"click",
                "name":"今日歌曲",
                "key":"V1001_TODAY_MUSIC"
            },
            {
                "name":"菜单",
                "sub_button":[
                {
                    "type":"view",
                    "name":"搜索",
                    "url":"http://www.soso.com/"
                },
                {
                    "type":"view",
                    "name":"视频",
                    "url":"http://v.qq.com/"
                },
                {
                    "type":"click",
                    "name":"赞一下我们",
                    "key":"V1001_GOOD"
                }]
         }],
        "matchrule":{
          "tag_id":"2",
          "sex":"1",
          "country":"中国",
          "province":"广东",
          "city":"广州",
          "client_platform_type":"2",
          "language":"zh_CN"
          }
        }
        ';
        $token = static::getAccessToken();
        $url = preg_replace("/ACCESS_TOKEN/",$token,config("api.menu.url.addconditional"));
        $response =  static::send($url,"post",$data);
        return $response->json();
    }
    private function menuData(){
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
        return $data;
    }
}