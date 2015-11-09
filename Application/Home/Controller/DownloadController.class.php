<?php
/***************************************************************************
 *
 * Copyright (c) 2015 Baidu.com, Inc. All Rights Reserved
 *
 **************************************************************************/


/**
 * @file   DownloadController.class.php
 * @author Yitian Fan(fanyitian@baidu.com)
 * @date   15/11/8 下午3:40
 * @brief
 *
 **/

namespace Home\Controller;

use Home\Model\DownloadModel;

class DownloadController extends CommonController
{
    public function index()
    {
        $data = DownloadModel::Instance()->getList();

        $this->assign('data', $data);
        $this->display();
    }
    
}