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

}