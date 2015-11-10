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

namespace Home\Model;

use Think\Model;

class ActivityModel extends Model
{

    const TABLE_ACTIVITY = 'activity';

    /**
     * 状态定义
     */
    const STATUS_SHOW = 0;
    const STATUS_HIDE = 1;

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

        $data = $m->where(array('status' => self::STATUS_SHOW))->order('id desc')->select();

        $newData = array();
        foreach ($data as $val) {
            $newData[$val['id']] = $val;
        }

        return $newData;
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
}