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

return [
    '__file__'  => ['hello.php','test.php'],
    // 定义index模块的自动生成
    // 定义test模块的自动生成
    'test'=>[
        '__dir__'   =>  ['behavior','controller','model','widget'],
        'controller'=>  ['Index','Test','UserType'],
        'model'     =>   ['User','UserType'],
        'view'      =>  ['index/index','index/test'],
    ],
];