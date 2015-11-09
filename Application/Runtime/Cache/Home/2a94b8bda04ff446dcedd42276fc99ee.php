<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <meta http-equiv="Content-Style-type" content="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <title>百度粤语社 Baidu-Cantonese</title>
    <link rel="shortcut icon" href="/Public/Common/Image/logo.png" type="image/vnd.microsoft.icon">
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
                <!--Cantonese-->
                <img alt="粤语社" style="height: 40px" src="/Public/Common/Image/logo.png" />
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
                        <?php echo $activity['contents'];?>
                    </div>
                </div>
            </div>
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


            <div class="container-2 contact-us">
                <div class="container-3">
                    <div class="act-heading">加入我们</div>
                </div>
                <div class="act-content">

                    <div class="m-t-10 f-l">
                        <div class="m-t-10">
                            <img class="img-hi-logo" src="/Public/Common/Image/hi_logo.png"> Hi群:
                            <a href="baidu://message/?id=1489013">
                                1489013
                            </a></div>
                        <div class="m-t-20">
                            <img class="img-hi-logo" src="/Public/Common/Image/hi_logo.png"> 社长:
                            <a href="baidu://message/?id=centalpha">
                                小石杰一郎
                            </a>
                        </div>
                    </div>

                    <div class="f-l m-l-20">
                        <img class="img-hi" src="/Public/Common/Image/qr_code.png">
                    </div>
                    <div style="clear:both"></div>
                </div>
                <div class="act-footer">
                </div>
            </div>

        </div>
    </div>
</div>

<!--<div class="copyright">Copyright &copy; 2015 百度粤语社团</div>-->
<div class="copyright">
    <img src="/Public/Common/image/copyright.png">
    <br>
    <img src="/Public/Common/image/logo2.png">
</div>
<script src="/Public/jquery-1.11.1.min.js"></script>
<script src="/Public/Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>