<?php
namespace app\index\controller;

use Hooklife\ThinkphpWechat\Wechat;
use think\Db;

class Index
{
    public function index()
    {
        dump(db('user')->select());  exit;
        return db('user')->select();
    }
}
