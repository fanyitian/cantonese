<?php
/***************************************************************************
 *
 * Copyright (c) 2015 Baidu.com, Inc. All Rights Reserved
 *
 **************************************************************************/


/**
 * @file   DownloadModel.class.php
 * @author Yitian Fan(fanyitian@baidu.com)
 * @date   15/11/8 下午4:57
 * @brief
 *
 **/

namespace Admin\Model;

use Think\Model;

class DownloadModel extends Model
{
    protected static $instance;

    /**
     * @return DownloadModel
     */
    public static function Instance()
    {
        if (empty(self::$instance)) {
            self::$instance = new DownloadModel();
        }

        return self::$instance;
    }

    /**
     * 获取所有下载
     * @return mixed
     */
    public function getList()
    {
        $m = new Model('download');

        return $m->order('id desc')->select();
    }

    /**
     * 添加
     *
     * @param mixed|string $params
     *
     * @return mixed
     */
    public function add($params)
    {
        $m = new Model('download');

        $data = array(
            'c_time' => date('Y-m-d H:i:s', time()),
        );
        $data = array_merge($params, $data);

        return $m->data($data)->add();
    }

    /**
     * 更新
     *
     * @param $id
     * @param $data
     *
     * @return bool
     */
    public function update($id, $data)
    {
        $m = new Model('download');

        if ($m->where(array('id' => $id))->save($data)) {
            return true;
        }

        return false;
    }

    /**
     * 删除
     *
     * @param $id
     *
     * @return bool
     */
    public function del($id)
    {
        $m = new Model('download');
        $status = $m->where(array('id' => $id))->delete();
        if ($status) {
            return true;
        }

        return false;
    }
}