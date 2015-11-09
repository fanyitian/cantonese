<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <meta http-equiv="Content-Style-type" content="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <title>Cantonese</title>
    <link rel="stylesheet" type="text/css" href="/Public/Bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Bootstrap/css/bootstrap-theme.css"/>

    <link rel="stylesheet" type="text/css" href="/Public/Home/Css/index.css"/>
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
                <li class="<?php if(empty(CONTROLLER_NAME) || CONTROLLER_NAME == 'Index'){ echo 'active';}?>">
                    <a href="/">首页</a>
                </li>
                <li class="<?php if(CONTROLLER_NAME == 'Download'){ echo 'active';}?>">
                    <a href="/home/download">下载专区</a>
                </li>
            </ul>
            <ul class="nav navbar-nav ware-nav pull-right">
                <?php if(!empty(cookie('admin_token'))):?>
                <li class="msg">
                    <a href="/admin/activity" data-remote="true">管理员入口</a>
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



<div class="container">
    <div class="row">
        <div class="col-md-8">

            <div class="download container-2">
                <div class="container-3">
                    <h2 class="panel-title act-heading"><span class=" glyphicon glyphicon-download-alt"></span> 下载专区
                    </h2>
                </div>
                <div class="panel-body">
                    <ul class="post-list">
                        <?php foreach($data as $val):?>
                        <li>
                            <a href="<?php echo $val['address'];?>" target="_blank"><?php echo $val['name'];?></a>
                            <span class="c-time"><?php echo date('Y-m-d',strtotime($val['c_time']));?></span>
                        </li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </div>

            <!-- 多说评论框 start -->
            <div class="ds-thread" data-thread-key="download_reply_xx" data-title="下载专区"
                 data-url="/home/download"></div>
            <!-- 多说评论框 end -->
            <!-- 多说公共JS代码 start (一个网页只需插入一次) -->
            <script type="text/javascript">
                var duoshuoQuery = {short_name: "canto"};
                (function () {
                    var ds = document.createElement('script');
                    ds.type = 'text/javascript';
                    ds.async = true;
                    ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
                    ds.charset = 'UTF-8';
                    (document.getElementsByTagName('head')[0]
                    || document.getElementsByTagName('body')[0]).appendChild(ds);
                })();
            </script>
            <!-- 多说公共JS代码 end -->

        </div>

        <div class="col-md-4">
            <div class="container-2">
                <div class="container-3">
                    <div class="act-heading">公告</div>
                </div>
                <div class="act-content">
                    <div class="list-group">

                        <?php foreach($notice as $val):?>
                        <div class="list-group-item">
                            <div class="item-left label label-success">
                                <?php echo $val['name'];?>
                            </div>
                            <div class="item-content">
                                <?php echo $val['contents'];?>
                            </div>
                            <div style="clear:both"></div>
                        </div>
                        <?php endforeach;?>
                    </div>
                </div>
                <div class="act-footer">
                </div>
            </div>
        </div>

    </div>
</div>


<div class="copyright">Copyright &copy; 2015 百度粤语社团</div>
<script src="/Public/jquery-1.11.1.min.js"></script>
<script src="/Public/Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>