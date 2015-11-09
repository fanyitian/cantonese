<?php
/**
 * Created by PhpStorm.
 * User: 华龄太子
 * Date: 14-3-23
 * Time: 下午11:06
 */

namespace Home\Controller;

use Think\Controller;

class CommonController extends Controller
{
    protected $needAuth = false;

    public function _initialize()
    {
        if ($this->needAuth) {
            $this->checkLogin();
        }
    }

    public function checkLogin()
    {
        header("Content-type:text/html;charset=utf-8");
        $username = $_SESSION['username'];
        $userlevel = $_SESSION['userlevel'];

        if (empty($username) || !isset($username) || ($userlevel != 2)) {
            echo "<script type='text/javascript'>alert('请先登录!');</script>";
            $this->redirect('/Admin/Login/login');
            exit;
        } else {
            return $username;
        }
    }

    /**
     * 获取参数(GET / POST)
     *
     * @param $name
     * @param string $default
     *
     * @return string
     */
    protected function param($name, $default = '')
    {
        if (empty($_REQUEST[$name])) {
            return $default;
        }

        return $_REQUEST[$name];
    }


    /**
     * 返回结果
     *
     * @param int $status 0可以上线，1禁止上线
     * @param string $msg 详情
     * @param array $data 附带数据
     *
     * @return null
     */
    protected function jsonOut($status, $msg, $data = array())
    {
        $return = array(
            'status'  => $status,
            'message' => $msg,
            'data'    => $data,
        );
        echo json_encode($return);
        exit;
    }


}