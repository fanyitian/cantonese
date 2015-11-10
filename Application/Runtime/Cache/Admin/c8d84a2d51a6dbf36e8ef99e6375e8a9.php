<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <meta http-equiv="Content-Style-type" content="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <title>管理后台</title>
    <link rel="shortcut icon" href="/Public/Common/Image/logo.png" type="image/vnd.microsoft.icon">
    <link rel="stylesheet" type="text/css" href="/Public/Bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Bootstrap/css/bootstrap-theme.css"/>

    <link rel="stylesheet" type="text/css" href="/Public/Admin/Css/index.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Admin/Css/sidebar.css"/>

    <script src="/Public/jquery-1.11.1.min.js"></script>
</head>

<body style=''>

<nav class="navbar navbar-default navbar-fixed-top ware-navbar" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navMenu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">
                <img alt="粤语社" style="height: 40px" src="/Public/Common/Image/logo.png" />管理后台
            </a>
        </div>

        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="nav navbar-nav ware-nav">
                <li class="active">
                    <a href="/">首页</a>
                </li>
            </ul>
            <ul class="nav navbar-nav ware-nav pull-right">
                <?php if(!empty(cookie('admin_token'))):?>
                <li class="msg">
                    <a href="/admin/activity" data-remote="true">管理员</a>
                </li>
                <?php endif;?>
                <!--<li class="msg">-->
                <!--<a href="/login-modal" data-remote="ture">登录</a>-->
                <!--</li>-->
                <!--<li class="msg">-->
                <!--<a href="/register-modal" data-remote="ture">注册</a>-->
                <!--</li>-->
            </ul>
        </div>
    </div>
</nav>


<div class="page-sidebar sidebar-fixed" id="sidebar">
    <!-- Sidebar Menu -->
    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 637px;">
        <ul class="nav sidebar-menu" style="width: auto; height: 637px;">
            <li class="<?php if(CONTROLLER_NAME == 'Activity'){ echo 'active';}?>">
                <a href="/admin/activity/index">
                    <i class="menu-icon glyphicon glyphicon-picture"></i>
                    <span class="menu-text"> 活动管理 </span>
                </a>
            </li>
            <li class="<?php if(CONTROLLER_NAME == 'Download'){echo 'active';}?>">
                <a href="/admin/download/index">
                    <i class="menu-icon glyphicon glyphicon-download-alt"></i>
                    <span class="menu-text"> 下载管理 </span>
                </a>
            </li>
            <li class="<?php if(CONTROLLER_NAME == 'Notice'){echo 'active';}?>">
                <a href="/admin/notice/index">
                    <i class="menu-icon glyphicon glyphicon-picture"></i>
                    <span class="menu-text"> 公告管理 </span>
                </a>
            </li>
        </ul>
    </div>
    <!-- /Sidebar Menu -->
</div>


<style>

</style>

<div class="page-content">
    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="widget" id="main-widget">
                <div class="widget-header">
                    <span class="widget-caption">编辑活动</span>
                    <!--Widget Buttons-->
                </div>
                <!--Widget Header-->
                <div class="widget-body">

                    <a href="/admin/activity/detail"
                       class="btn btn-success btn-xs f-l">
                        <i class="glyphicon glyphicon-plus"></i>&nbsp;新增活动
                    </a>

                    <table class="table table-hover m-t-10">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>title</th>
                            <th>更新时间</th>
                            <th>状态</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($data as $val):?>
                        <tr>
                            <th scope="row"><?php echo $val['id'];?></th>
                            <td><?php echo $val['title'];?></td>
                            <td><?php echo $val['u_time'];?></td>
                            <td class="<?php echo ($val['status'] == 0) ? 'text-danger' : 'text-muted';?>"><?php echo $val['status_name'];?></td>
                            <td>
                                <a href="/admin/activity/detail?id=<?php echo $val['id'];?>"
                                   class="btn btn-default btn-sm btn-edit">
                                    编辑
                                </a>
                                <button type="button" class="btn btn-warning btn-sm btn-change"
                                        data-id="<?php echo $val['id'];?>">
                                    <?php echo ($val['status'] == 0) ? '隐藏' : '显示';?>
                                </button>
                                <button type="button" class="btn btn-danger btn-sm btn-del"
                                        data-id="<?php echo $val['id'];?>">
                                    删除
                                </button>
                            </td>
                        </tr>
                        <?php endforeach;?>
                        </tbody>
                    </table>

                </div>
                <!--Widget-->
            </div>
        </div>
    </div>
</div>

<script src="/Public/Admin/Js/activity.js"></script>

<script type="text/javascript">
    $(document).ready(function () {

    });
</script>
<!--<div class="copyright">Copyright &copy; 2015 百度粤语社团</div>-->
<script src="/Public/Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>