<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/17
 * Time: 10:03
 */

namespace app\common\validate;
use think\Validate; //内置验证类


class Teacher extends Validate
{

    protected $rule = [
        'email' => 'email',
    ];
}