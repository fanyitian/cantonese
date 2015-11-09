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

class ActivityModel extends Model
{

    const TABLE_ACTIVITY = 'activity';

    protected static $instance;

    /**
     * @return ActivityModel
     */
    public static function Instance()
    {
        if (empty(self::$instance)) {
            self::$instance = new ActivityModel();
        }

        return self::$instance;
    }

    /**
     * 获取所有列表
     * @return mixed
     */
    public function getList()
    {
        $m = new Model(self::TABLE_ACTIVITY);

        return $m->order('id desc')->select();
    }

    /**
     * 获取单个活动
     *
     * @param $id
     *
     * @return array
     */
    public function getActivity($id)
    {
        $m = new Model(self::TABLE_ACTIVITY);

        $data = $m->where(array('id' => $id))->select();

        $res = array();
        if (!empty($data)) {
            $res = $data[0];
        }

        return $res;
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
        $m = new Model(self::TABLE_ACTIVITY);

        $data = array(
            'u_time' => date('Y-m-d H:i:s', time()),
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
        $m = new Model(self::TABLE_ACTIVITY);

        $data['u_time'] = date('Y-m-d H:i:s', time());

        if ($m->where(array('id' => $id))->save($data)) {
            return $id;
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
        $m = new Model(self::TABLE_ACTIVITY);
        $status = $m->where(array('id' => $id))->delete();
        if ($status) {
            return true;
        }

        return false;
    }
}