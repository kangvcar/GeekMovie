<?php 
    if (!isset($_GET['wd'])) {
        header("Location: index.php");
        exit;
    }else{
        if (isset($_GET['pg'])) {
            $pg = $_GET['pg'];
        }else{
            $pg = 1;
        }
        $starpg = 12*($pg-1);
        $endpg = 12;
        include 'dbconnection.php';
        $search_wd = $_GET['wd'];
        $search_wd_Sql = "SELECT mid, mname, mimgurl, mscore, mdirector, mstar, mtype, marea, myear, msumary, mplayurl FROM movie WHERE mname LIKE '%{$search_wd}%' LIMIT $starpg,$endpg;";
        $result71 = $conn->query($search_wd_Sql);
        $rowCount = $result71->num_rows;
        $conn->close();
    }
 ?>
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
        <script src="home.js" type="text/javascript"></script>
    </head>
    <body style="padding: 0;">
        <?php include 'dbconnection.php'; ?>
        <?php include('page_head.php') ?>
        <div class="container" style="margin-top: 80px;">
            <div class="row">
                <div class="col-lg-wide-100 col-xs-1 padding-0">
                    <div class="stui-pannel stui-pannel-bg clearfix">
                        <div class="stui-pannel-box">
                            <div class="stui-pannel_hd">
                                <div class="stui-pannel__head active bottom-line clearfix">
                                    <div class="stui-header__search visible-md visible-sm visible-xs pull-right">
                                        <form action="./vod-search.php" method="get" name="search-form2">
                                            <input class="form-control" id="wd" name="wd" placeholder="请输入关键字..." type="text" value=""/>
                                            <button class="submit" type="submit">
                                                <i class="icon iconfont icon-search">
                                                </i>
                                            </button>
                                        </form>
                                    </div>
                                    <h3 class="title">
                                        <img src="./hello 搜尋結果 - Gimy TV 劇迷_files/icon_27.png">
                                            搜寻关键字: <?php echo $search_wd; ?>
                                        </img>
                                    </h3>
                                </div>
                            </div>
                            <div class="stui-pannel_bd">
                                <ul class="stui-vodlist__media col-pd clearfix">
                                    <?php 
                                    while ($row = $result71->fetch_row()) {
                                      print <<<EOG
                                    <li class="activeclearfix">
                                        <div class="thumb">
                                            <a class="v-thumb stui-vodlist__thumb lazyload" href="./vod-detail.php?movid=$row[0]" style='background-image: url("$row[2]");' title="$row[1]">
                                                <span class="play hidden-xs">
                                                </span>
                                                <span class="pic-text text-right">$row[6]</span>
                                            </a>
                                        </div>
                                        <div class="detail">
                                            <h3 class="title"><a href="./vod-detail.php?movid=$row[0]">$row[1]</a></h3>
                                            <p><span class="text-muted">导演：</span>$row[4]</p>
                                            <p><span class="text-muted">主演：</span>$row[5]</p>
                                            <p><span class="text-muted">类型：</span>$row[6]
                                                <span class="split-line"></span>
                                                <span class="text-muted">地区：</span>$row[7]
                                                <span class="hidden-xs"><span class="split-line"></span><span class="text-muted">年份：</span>$row[8]</span>
                                            </p>
                                            <p class="margin-0 hidden-sm hidden-xs"><span class="text-muted">简介：</span>
                                                $row[9]
                                            </p>
                                        </div>
                                    </li>
EOG;
                                }
                                     ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <ul class="stui-page-text text-center clearfix">
                        <a class="pagelink_b" href="vod-search.php?wd=<?php echo $search_wd; ?>&pg=1" target="_self">首页</a>
                        <a class="pagelink_b" href="vod-search.php?wd=<?php echo $search_wd; ?>&pg=<?php echo $pg-1; ?>" target="_self">上一页</a>
                        <span class="pagenow"><?php echo $pg; ?></span>
                        <a class="pagelink_b" href="vod-search.php?wd=<?php echo $search_wd; ?>&pg=<?php echo $pg+1; ?>" target="_self">下一页</a>
                    </ul>
                </div>
            </div>
        </div>

        <?php include('page_foot.php') ?>
    </body>
</html>    