<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <meta http-equiv="Content-Style-type" content="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <title>Cantonese</title>
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
                Cantonese
                <!--<img alt="粤语社" style="width: 70px" src="/Public/Common/Image/index/icon.jpg" />-->
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



<div class="page-content">
    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="widget" id="main-widget">
                <div class="widget-header">
                    <span class="widget-caption">下载列表</span>
                    <!--Widget Buttons-->
                </div>
                <!--Widget Header-->
                <div class="widget-body">

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success btn-xs f-l" data-toggle="modal"
                            data-target="#myModal-download" id="btn-add">
                        <i class="glyphicon glyphicon-plus"></i>&nbsp;新增下载
                    </button>

                    <!-- Modal download-->
                    <div class="modal fade" id="myModal-download" tabindex="-1" role="dialog"
                         aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">添加下载</h4>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <input type="hidden" name="id" id="id-download_id" >
                                        <div class="form-group">
                                            <label for="download-name" class="control-label">Name:</label>
                                            <input type="text" class="form-control" id="download-name" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="download-address" class="control-label">Address:</label>
                                            <input type="text" class="form-control" id="download-address"
                                                   name="address">
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary btn-submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <table class="table table-hover m-t-10">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>下载地址</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($data as $val):?>
                        <tr>
                            <th scope="row"><?php echo $val['id'];?></th>
                            <td><?php echo $val['name'];?></td>
                            <td><?php echo $val['address'];?></td>
                            <td>
                                <button type="button" class="btn btn-default btn-sm btn-edit"
                                        data-id="<?php echo $val['id'];?>"
                                        data-name="<?php echo $val['name'];?>"
                                        data-address="<?php echo $val['address'];?>">
                                    编辑
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

<script src="/Public/Admin/Js/download.js"></script>
<!--<div class="copyright">Copyright &copy; 2015 百度粤语社团</div>-->
<script src="/Public/Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>