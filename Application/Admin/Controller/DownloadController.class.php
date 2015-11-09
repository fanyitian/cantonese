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

namespace Admin\Controller;

use Admin\Model\DownloadModel;

class DownloadController extends CommonController
{
    public function index()
    {
        $data = DownloadModel::Instance()->getList();

        $this->assign('data', $data);
        $this->display();
    }


    public function add()
    {
        $name = $this->param('name');
        $address = $this->param('address');

        $res = DownloadModel::Instance()->add(
            array(
                'name'    => $name,
                'address' => $address
            )
        );
        if (!$res) {
            $this->jsonOut(-1, '添加失败');
        }
        $this->jsonOut(1, 'ok');
    }

    public function del()
    {
        $id = $this->param('id');
        $res = DownloadModel::Instance()->del($id);

        if (!$res) {
            $this->jsonOut(-1, '删除失败');
        }
        $this->jsonOut(1, 'ok');

    }

    public function update()
    {
        $id = $this->param('id');
        $name = $this->param('name');
        $address = $this->param('address');

        $res = DownloadModel::Instance()->update($id,
            array(
                'name'    => $name,
                'address' => $address
            )
        );
        if (!$res) {
            $this->jsonOut(-1, 'update失败');
        }
        $this->jsonOut(1, 'ok');
    }

}