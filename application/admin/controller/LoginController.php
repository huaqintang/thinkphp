<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/24
 * Time: 10:43
 */

namespace app\admin\controller;


use think\Controller;

class LoginController extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
}