<?php
/***************************************************************************
 *
 * Copyright (c) 2015 Baidu.com, Inc. All Rights Reserved
 *
 **************************************************************************/


/**
 * @file   NoticeModel.class.php
 * @author Yitian Fan(fanyitian@baidu.com)
 * @date   15/11/8 下午11:05
 * @brief
 *
 **/

namespace Admin\Model;

use Think\Model;

class NoticeModel extends Model
{
    const TABLE_NOTICE = 'notice';

    protected static $instance;

    /**
     * @return NoticeModel
     */
    public static function Instance()
    {
        if (empty(self::$instance)) {
            self::$instance = new NoticeModel();
        }

        return self::$instance;
    }

    /**
     * 获取所有列表
     * @return mixed
     */
    public function getList()
    {
        $m = new Model(self::TABLE_NOTICE);

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
        $m = new Model(self::TABLE_NOTICE);

        $params['c_time'] = date('Y-m-d H:i:s', time());

        return $m->data($params)->add();
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
        $m = new Model(self::TABLE_NOTICE);

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
        $m = new Model(self::TABLE_NOTICE);
        $status = $m->where(array('id' => $id))->delete();
        if ($status) {
            return true;
        }

        return false;
    }
}