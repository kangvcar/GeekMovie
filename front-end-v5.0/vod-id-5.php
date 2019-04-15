<!DOCTYPE html>
<html lang="zh">
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
        <meta content="webkit|ie-comp|ie-stand" name="renderer">
        <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport"/>
        <title>热门排行榜 - Geek 极客影院</title>
        <link href="bootstrap.css" rel="stylesheet" />
        <link href="style.css" rel="stylesheet" />
        <link href="white.css" rel="stylesheet" />
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
        <script src="home.js" type="text/javascript"></script>
    </head>
    <body>
        <?php include 'dbconnection.php'; ?>
        <?php include('page_head.php') ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 p-0">
                        <div class="layout-box clearfix">
                            <div class="col-md-4 col-sm-12 col-xs-12 active">
                                <div class="box-title pg-0">
                                    <h3 class="m-0">
                                        <i class="icon iconfont text-color icon-good">
                                        </i>
                                        电影排行榜
                                    </h3>
                                    <div class="more pull-right">
                                        <a class="text-muted" href="vod-id-1.php" title="更多" >
                                            更多
                                            <i class="icon iconfont icon-more">
                                            </i>
                                        </a>
                                    </div>
                                </div>
                                <div class="box-video-text-list">
                                    <ul class="clearfix p-0 m-0">
                                        <!-- star 排行榜列表单列 -->
                                        <?php include('order_list_movie.php') ?>
                                        <!-- end 排行榜列表单列 -->

                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12 active">
                                <div class="box-title pg-0">
                                    <h3 class="m-0">
                                        <i class="icon iconfont text-color icon-good">
                                        </i>
                                        电视剧排行榜
                                    </h3>
                                    <div class="more pull-right">
                                        <a class="text-muted" href="vod-id-2.php" title="更多" >
                                            更多
                                            <i class="icon iconfont icon-more">
                                            </i>
                                        </a>
                                    </div>
                                </div>
                                <div class="box-video-text-list">
                                    <ul class="clearfix p-0 m-0">
                                        <!-- star 排行榜列表单列 -->
                                        <?php include('order_list_dianshiju.php') ?>
                                        <!-- end 排行榜列表单列 -->

                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12 active">
                                <div class="box-title pg-0">
                                    <h3 class="m-0">
                                        <i class="icon iconfont text-color icon-good">
                                        </i>
                                        动漫排行榜
                                    </h3>
                                    <div class="more pull-right">
                                        <a class="text-muted" href="vod-id-3.php" title="更多" >
                                            更多
                                            <i class="icon iconfont icon-more">
                                            </i>
                                        </a>
                                    </div>
                                </div>
                                <div class="box-video-text-list">
                                    <ul class="clearfix p-0 m-0">
                                        <!-- star 排行榜列表单列 -->
                                        <?php include('order_list_dongman.php') ?>
                                        <!-- end 排行榜列表单列 -->

                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12 active">
                                <div class="box-title pg-0">
                                    <h3 class="m-0">
                                        <i class="icon iconfont text-color icon-good">
                                        </i>
                                        纪录片排行榜
                                    </h3>
                                    <div class="more pull-right">
                                        <a class="text-muted" href="vod-id-4.php" title="更多" >
                                            更多
                                            <i class="icon iconfont icon-more">
                                            </i>
                                        </a>
                                    </div>
                                </div>
                                <div class="box-video-text-list">
                                    <ul class="clearfix p-0 m-0">
                                        <!-- star 排行榜列表单列 -->
                                        <?php include('order_list_jilupian.php') ?>
                                        <!-- end 排行榜列表单列 -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php include('page_foot.php') ?>
    </body>
</html>