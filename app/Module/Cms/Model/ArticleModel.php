<?php
namespace App\Module\Cms\Model;

/**
 * Created by PhpStorm.
 * User: weining
 * Date: 2016/4/2
 * Time: 22:36
 */
class ArticleModel extends CmsModel{
    protected $table = "article";
    function test(){
        return 10;
    }
}