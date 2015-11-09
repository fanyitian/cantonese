<?php
/***************************************************************************
 *
 * Copyright (c) 2015 Baidu.com, Inc. All Rights Reserved
 *
 **************************************************************************/


/**
 * @file   NoticeController.class.php
 * @author Yitian Fan(fanyitian@baidu.com)
 * @date   15/11/8 下午11:05
 * @brief
 *
 **/

namespace Admin\Controller;

use Admin\Model\NoticeModel;

class NoticeController extends CommonController
{
    public function index()
    {
        $data = NoticeModel::Instance()->getList();

        $this->assign('data', $data);
        $this->display();
    }

    public function save()
    {
        $id = $this->param('id');
        $name = $this->param('name');
        $contents = $this->param('contents');

        if (empty($id)) {
            $res = NoticeModel::Instance()->add(
                array(
                    'name'     => $name,
                    'contents' => $contents
                )
            );
        } else {
            $res = NoticeModel::Instance()->update($id,
                array(
                    'name'     => $name,
                    'contents' => $contents
                )
            );
        }

        if (!$res) {
            $this->jsonOut(-1, 'update失败');
        }
        $this->jsonOut(1, 'ok', array('id' => $res));
    }

    public function del()
    {
        $id = $this->param('id');
        $res = NoticeModel::Instance()->del($id);

        if (!$res) {
            $this->jsonOut(-1, '删除失败');
        }
        $this->jsonOut(1, 'ok');

    }
}
