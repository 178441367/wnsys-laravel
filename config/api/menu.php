<?php
return [
    "url" => [
        "create" => "https://api.weixin.qq.com/cgi-bin/menu/create?access_token=ACCESS_TOKEN",//创建菜单
        "get" => "https://api.weixin.qq.com/cgi-bin/menu/get?access_token=ACCESS_TOKEN",//获取
        "delete" => "https://api.weixin.qq.com/cgi-bin/menu/delete?access_token=ACCESS_TOKEN",//删除
        "addconditional" => "https://api.weixin.qq.com/cgi-bin/menu/addconditional?access_token=ACCESS_TOKEN",//新增个性化菜单
        "delconditional"=> "https://api.weixin.qq.com/cgi-bin/menu/delconditional?access_token=ACCESS_TOKEN",//删除个性化菜单
        "trymatch" => "https://api.weixin.qq.com/cgi-bin/menu/trymatch?access_token=ACCESS_TOKEN",//测试个性化菜单
        "selfmenu_info" => "https://api.weixin.qq.com/cgi-bin/get_current_selfmenu_info?access_token=ACCESS_TOKEN",//获取菜单
    ]
];