<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use \think\Route;

Route::get('','index/Teacher/index');
Route::get('add','index/Teacher/add');
Route::get([
    'edit/:id'  =>  'index/Teacher/edit',
]);
Route::post([
    'update'  =>  'index/Teacher/update',
]);
Route::get([
    'delete/:id'  =>  'index/Teacher/delete',
]);
Route::get([
    'admin-login'  =>  'admin/Login/index',
]);

return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['Index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['Index/hello', ['method' => 'post']],
    ],

    //首页 定位到Teacher控制器下的index触发器,方法为get
//    '' =>['Index/Teacher/Index',['method' => 'get']],

    //新建 定位到Teacher控制器下的add触发器,方法为get
   // 'add' =>['Index/Teacher/add',['method' => 'get']],




    // 登录页 定位到 Login控制器下的index触发器, 方法为get
    'log'         => ['Index/Login/Index', ['method' => 'get']],
//
    // login 定位到 Login控制器下的login控制器， 方法为post
    'login'    => ['Login/login', ['method' => 'post']],
//
    // logout 定位到 Login控制器下的logout控制器， 方法为get
    'logout'    => ['Login/logout', ['method' => 'get']],

];
