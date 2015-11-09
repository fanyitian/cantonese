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

            <div class="activity container-2">
                <div class="container-3">
                    <ul class="nav nav-pills article-nav">
                        <?php foreach($activity_list as $val):?>
                        <li class="<?php if($id == $val['id']){ echo 'active';}?>">
                            <a href="/home/index/index?id=<?php echo $val['id'];?>"><?php echo $val['title'];?></a>
                        </li>
                        <?php endforeach;?>
                    </ul>
                </div>

                <div class="activity-content">
                    <div class="row">
                        <?php echo $activity['html'];?>
                    </div>
                </div>

            </div>


        </div>


        <div class="col-md-4 hidden-xs">
            <div class="container-2">
                <div class="container-3">
                    <div class="act-heading">活动</div>
                </div>
                <div class="act-content">
                    <div class="list-group">
                        <section class="list-group-item row">
                            <div class="col-md-3">
                                <a href="/events/1047030274">11月27日</a>
                            </div>
                            <div class="event-title">
                                <a href="/events/1047030274">国际硬件投资 &amp; 创业趴 - 英文分享专场 + 硬创欢乐啤酒夜</a>
                            </div>
                        </section>
                        <section class="list-group-item row">
                            <div class="col-md-3">
                                <a href="/events/1047030273">11月15日</a>
                            </div>
                            <div class="event-title">
                                <a href="/events/1047030273">DevFest 2015 GDG @ ShenzhenWare 跨界派对</a>
                            </div>
                        </section>
                        <section class="list-group-item row">
                            <div class="col-md-3">
                                <a href="/events/1047030261">11月06日</a>
                            </div>
                            <div class="event-title">
                                <a href="/events/1047030261">50 后创业导师对话 80 后潮人创业家 -- 潮汕两日省亲活动</a>
                            </div>
                        </section>
                        <section class="list-group-item row">
                            <div class="col-md-3">
                                <a href="/events/1047030271">11月06日</a>
                            </div>
                            <div class="event-title">
                                <a href="/events/1047030271">设计创想，开启「智造未来」-- 2015 深圳国际工业设计大展</a>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="act-footer">
                    <!--<a href="/events">更多活动</a>-->
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