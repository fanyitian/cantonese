<?php
/**
 * Created by PhpStorm.
 * User: 水
 * Date: 14-7-26
 * Time: 下午4:39
 */

namespace Admin\Controller;

use Think\Controller;

class LoginController extends CommonController
{
    protected $needAuth = false;
    protected $needAdmin = false;

    public function login()
    {
        cookie(null); // 清空当前设定前缀的所有cookie值

        $this->display();
    }

    public function submit()
    {
        $code = $this->param('code');

        if (empty($code) || $code != self::ADMIN_TOKEN_CODE) {
            $this->jsonOut(-1, '口令错误');
        }

        cookie('admin_token', md5($code), 604800); // 指定cookie保存时间
        $this->jsonOut(1, 'ok');
    }
} 