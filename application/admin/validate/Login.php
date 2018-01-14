<?php

namespace app\admin\Validate;

use think\Validate;

class Login extends Validate
{
    protected $rule = [
        'name|名字'  =>  'require|max:5',
        'email' =>  'email',
    ];
}