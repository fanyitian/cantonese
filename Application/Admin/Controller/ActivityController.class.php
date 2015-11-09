<?php
/***************************************************************************
 *
 * Copyright (c) 2015 Baidu.com, Inc. All Rights Reserved
 *
 **************************************************************************/


/**
 * @file   ActivityController.class.php
 * @author Yitian Fan(fanyitian@baidu.com)
 * @date   15/11/8 下午5:48
 * @brief
 *
 **/

namespace Admin\Controller;


use Admin\Model\ActivityModel;

class ActivityController extends CommonController
{
    public function index()
    {
        $data = ActivityModel::Instance()->getList();

        $this->assign('data', $data);
        $this->display();
    }

    public function detail()
    {
        $id = $this->param('id');

        $this->assign('id', $id);
        $this->display();
    }

    public function one()
    {
        $id = $this->param('id');

        $data = ActivityModel::Instance()->getActivity($id);

        if (!empty($data)) {
            $this->jsonOut(1, 'ok', $data);
        }
        $this->jsonOut(-1, '未找到对应数据');
    }

    public function save()
    {
        $id = $this->param('id');
        $title = $this->param('title');
        $contents = $this->param('contents');
        $html = $this->param('html');

        if (empty($id)) {
            $res = ActivityModel::Instance()->add(
                array(
                    'title'    => $title,
                    'html'     => $html,
                    'contents' => $contents
                )
            );
        } else {
            $res = ActivityModel::Instance()->update($id,
                array(
                    'title'    => $title,
                    'html'     => $html,
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
        $res = ActivityModel::Instance()->del($id);

        if (!$res) {
            $this->jsonOut(-1, '删除失败');
        }
        $this->jsonOut(1, 'ok');

    }

}