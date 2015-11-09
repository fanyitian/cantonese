<?php
/***************************************************************************
 *
 * Copyright (c) 2015 Baidu.com, Inc. All Rights Reserved
 *
 **************************************************************************/


/**
 * @file   HomeController.class.php
 * @author Yitian Fan(fanyitian@baidu.com)
 * @date   15/11/8 下午2:49
 * @brief
 *
 **/

namespace Admin\Controller;


class HomeController extends CommonController
{
    public function index()
    {
        $this->display();
    }
}