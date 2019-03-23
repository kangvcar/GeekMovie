<!DOCTYPE html>
<html lang="zh">
    <head>
        <title>
            Jike Movie 极客影院
        </title>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
        <meta content="IE=EmulateIE10" http-equiv="X-UA-Compatible"/>
        <meta content="webkit|ie-comp|ie-stand" name="renderer">
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
        <link href="favicon.ico" rel="shortcut icon" type="image/x-icon"/>
        <link href="iconfont.css" rel="stylesheet" type="text/css"/>
        <link href="stui_block.css" rel="stylesheet" type="text/css"/>
        <link href="stui_block_color.css" rel="stylesheet" type="text/css"/>
        <link href="stui_default.css" rel="stylesheet" type="text/css"/>
        <link href="stui_custom.css" rel="stylesheet" type="text/css"/>
        <link href="custom.css" rel="stylesheet" type="text/css"/>
        <script src="jquery.min.js" type="text/javascript"></script>
        <script src="stui_block.js" type="text/javascript"></script>
        <script src="bootstrap.min.js" type="text/javascript"></script>
        <script src="jquery.cookie.min.js" type="text/javascript"></script>
    </head>
    <body style="padding: 0;">
        <?php include 'dbconnection.php'; ?>
        <?php include('page_head.php') ?>
        <a href="" class="logo"></a>
        <div class="container" style="margin-top:60px;">
            <div class="row">
                <div class="stui-pannel stui-pannel-bg clearfix" >
                    <div class="stui-pannel-box clearfix">
                        <div class="stui-pannel_hd">
                            <div class="stui-pannel__head active bottom-line clearfix">
                                <h3 class="title">
                                    <img src="icon_5.png"/>
                                    <span style="font-weight: 600;">
                                        热门电影
                                    </span>
                                </h3>
                            </div>
                        </div>
                        <div class="stui-pannel_bd clearfix">
                            <ul class="stui-vodlist clearfix">
                            	<!-- start 使用php循环此li -->
                                <?php include('movie_list_hot.php') ?>
                                <!-- end 使用php循环此li -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="stui-pannel stui-pannel-bg clearfix">
                    <div class="stui-pannel-box clearfix">
                        <div class="stui-pannel_hd">
                            <div class="stui-pannel__head active bottom-line clearfix">
                                <h3 class="title">
                                    <img src="icon_5.png" />
                                    <span style="font-weight: 600;">
                                        为你推荐
                                    </span>
                                </h3>
                            </div>
                        </div>
                        <div class="stui-pannel_bd clearfix">
                            <ul class="stui-vodlist clearfix">
                                <!-- start 使用php循环此li -->
                                <?php include('movie_list_recommend.php') ?>
                                <!-- end 使用php循环此li -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('page_foot.php') ?>
    </body>
</html>