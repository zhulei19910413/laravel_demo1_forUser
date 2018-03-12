<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/17
 * Time: 11:11
 */

namespace App;

use Illuminate\Database\Eloquent\model;

class Student extends Model
{

    //指定表名；
    protected $table = 'student';

    //指定id；
    protected  $primaryKey = 'id';

    //指定允许批量复制的字段；
    protected $fillable = ['name','age'];


    //不允许批量复制的字段；
    protected $guarded = [];



    //追踪时间；(自动维护时间戳；)
    public $timestamps = true;

    protected function getDateFormat()
    {
        return time();
    }

    protected function asDateTime($value)
    {
        return $value;
    }


}