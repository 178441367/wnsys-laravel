<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model as BaseModel;
/**
 * Created by PhpStorm.
 * User: weining
 * Date: 2016/4/2
 * Time: 22:36
 */
class Model extends BaseModel{
    protected $connection = "mysql_cms";
}