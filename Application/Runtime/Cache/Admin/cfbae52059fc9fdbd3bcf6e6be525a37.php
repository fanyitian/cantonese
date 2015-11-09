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

<!--<link rel="stylesheet" href="http://lab.lepture.com/editor/editor.css"/>-->

<link rel="stylesheet" href="/Public/Common/Css/simplemde.min.css">

<style>
    .editor-wrapper {
        padding: 10px;
        margin: 0 auto;
        border: 1px solid #eee;
    }

    .editor-wrapper input.title {
        font: 18px "Helvetica Neue", "Xin Gothic", "Hiragino Sans GB", "WenQuanYi Micro Hei", "Microsoft YaHei", sans-serif;
        background: transparent;
        padding: 4px;
        width: 100%;
        border: none;
        outline: none;
        opacity: 0.6;
    }
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
                    <div class="editor-wrapper">
                        <input id="activity_id" type="hidden" name="activity_id" value="<?php echo $_GET['id'];?>">
                        <input id="activity_title" class="title" type="text" placeholder="标题:">

                        <!-- 加载编辑器的容器 -->
                        <script id="editor" name="content" type="text/plain"><?php echo ($data["content"]); ?></script>

                        <!--<textarea id="editor" placeholder="Content here ...." style="display: none;"></textarea>-->
                    </div>
                    <div class="option m-t-10">
                        <button type="button" class="btn btn-primary btn-submit">保存</button>
                    </div>
                </div>
                <!--Widget-->
            </div>
        </div>
    </div>
</div>

<script src="/Public/Admin/Js/activity.js"></script>
<!--<script src="/Public/Common/JS/simplemde.min.js"></script>-->

<!-- 配置文件 -->
<script type="text/javascript" src="/Public/ueditor/ueditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="/Public/ueditor/ueditor.all.js"></script>


<script type="text/javascript">
    $(document).ready(function () {
        var ue = UE.getEditor('editor', {
            initialFrameHeight: 600
        });
        window.ue = ue;

//        var editor = new SimpleMDE({element: $("#editor")[0]});
//        window.editor = editor;

//        editor.value("This text will appear in the editor");

    });
</script>
<!--<div class="copyright">Copyright &copy; 2015 百度粤语社团</div>-->
<script src="/Public/Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>