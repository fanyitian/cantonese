<?php
/**
 * Created by PhpStorm.
 * User: 华龄太子
 * Date: 14-3-23
 * Time: 下午11:06
 */

namespace Admin\Controller;

use Think\Controller;

class CommonController extends Controller
{
    protected $needAuth = false;
    protected $needAdmin = true;

    protected $param;

    // @todo，临时使用口令当做管理员授权
    const ADMIN_TOKEN_CODE = 'yys@f9je*$847!kss';

    public function _initialize()
    {
        if ($this->needAuth) {
            $this->checkLogin();
        }

        if ($this->needAdmin) {
            $this->checkAdmin();
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

    public function checkAdmin()
    {
        $token = cookie('admin_token');

        if (empty($token) || $token != md5(self::ADMIN_TOKEN_CODE)) {
            echo "<script type='text/javascript'>alert('请输入口令!');</script>";
            $this->redirect('/admin/login/login');
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

    /**
     * 设置变量
     *
     * @param mixed $name
     * @param string $value
     *
     * @return \Think\Action
     */
    protected function assign($name, $value = '')
    {
        $this->param[$name] = $value;
        return parent::assign($name, $value);
    }

    /**
     * 渲染模板
     */
    protected function display()
    {
        $display = $this->param('__display');
        if (isset($display) && $display == 'json') {
            $this->jsonOut(0, 'ok', $this->param);
        }

        parent::display();
    }


}