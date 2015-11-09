<?php
namespace Home\Controller;

use Home\Model\ActivityModel;
use Home\Model\NoticeModel;
use Think\Controller;

class IndexController extends CommonController
{
    public function index()
    {
        $id = $this->param('id');

        $notice = NoticeModel::Instance()->getList();

        $activityList = ActivityModel::Instance()->getList();

        if (empty($id)) {
            $id = key($activityList);
        }

        $this->assign('id', $id);
        $this->assign('notice', $notice);
        $this->assign('activity_list', $activityList);
        $this->assign('activity', $activityList[$id]);

        $this->display();
    }


}