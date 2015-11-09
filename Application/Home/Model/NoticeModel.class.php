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

namespace Home\Model;

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


}