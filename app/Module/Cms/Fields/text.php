<?php
namespace app\Module\Cms\Fields;
/**
 * Created by PhpStorm.
 * User: weining
 * Date: 2016/4/28
 * Time: 13:36
 */
class text{
    public function html($name,$value = ""){
        $html = "
        <input type='text' name='$name' value='$value' />
        ";
        return $html;
    }
}