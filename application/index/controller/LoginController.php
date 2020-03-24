<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/18
 * Time: 10:37
 */

namespace app\index\controller;


use think\Controller;
use think\Request;

class LoginController extends Controller
{
    //用户登录表单
    public function index()
    {
        return $this->fetch();
    }

    //处理用户提交的登录数据
    public function login()
    {
        // 接收post信息
        $postData = Request::instance()->post();

        // 验证用户名是否存在
        $map = array('username'  => $postData['username']);
        $Teacher = Teacher::get($map);

        // $Teacher要么是一个对象，要么是null。
        if (!is_null($Teacher) && $Teacher->getData('password') === $postData['password']) {
            // 用户名密码正确，将teacherId存session，并跳转至教师管理界面
            session('teacherId', $Teacher->getData('id'));
            return $this->success('login success', url('Teacher/Index'));
        } else {
            // 用户名不存在，跳转到登录界面。
            return $this->error('username or password incorrect', url('Index'));
        }
    }

    // 注销
    public function logOut()
    {
        if (Teacher::logOut()) {
            return $this->success('logout success', url('Index'));
        } else {
            return $this->error('logout error', url('Index'));
        }
    }

}