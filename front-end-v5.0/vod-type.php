<?php 
	if (!isset($_GET['movtype'])) {
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
		$movtype = $_GET['movtype'];
		$movtype_Sql = "SELECT mid, mname, mimgurl, mtype, mstar FROM movie WHERE mtype='$movtype' LIMIT $starpg,$endpg;";
		$result11 = $conn->query($movtype_Sql);
		if ($result11->num_rows <= 0) {
		    header("Location: index.php");
			exit;
		}
		$conn->close();
        $p_type = array('伦理片','美女热舞写真','VIP视频秀','街拍美女视频');
        if (in_array($movtype, $p_type)) {
            $private_is = true;
        }else{
            $private_is = false;
        }
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
        <script type="text/javascript">
            function Visible_Private_ul(){
                document.getElementById('private_ul').removeAttribute("hidden");
            }
        </script>
    </head>
    <body>
    	<?php include 'dbconnection.php'; ?>
    	<?php include('page_head.php') ?>
        <div class="container">
            <div class="row">
                <div class="stui-pannel stui-pannel-bg clearfix">
                    <div class="stui-pannel-box">
                        <div class="stui-pannel_hd">
                            <div class="stui-pannel__head active bottom-line clearfix">
                                <h2 class="title">
                                    <img src="icon_5.png"/>
                                    <a style="font-weight: 600;"><?php echo $movtype; ?></a>
                                </h2>
                                <ul id="private_ul" class="stui-screen__list type-slide bottom-line-dot clearfix pull-right" style=" margin-top: 10px;" hidden>
                                    <li><a href="vod-type.php?movtype=伦理片">伦理片</a></li>
                                    <li><a href="vod-type.php?movtype=美女热舞写真">美女热舞写真</a></li>
                                    <li><a href="vod-type.php?movtype=VIP视频秀">VIP视频秀</a></li>
                                    <li><a href="vod-type.php?movtype=街拍美女视频">街拍美女视频</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="stui-pannel_bd" style=" padding-top: 30px;">
                            <ul class="stui-vodlist clearfix">
                            	<!-- start 使用php循环此li -->
                                <?php 
                                    while ($row = $result11->fetch_row()) {
                                      print <<<EOG
                                        <li class="col-md-6 col-sm-4 col-xs-3">
                                            <div class="stui-vodlist__box">
                                                <a class="stui-vodlist__thumb lazyload" style="background-image: url('$row[2]');" href="./vod-detail.php?movid=$row[0]" title="$row[1]">
                                                    <span class="play hidden-xs">
                                                    </span>
                                                    <span class="pic-text text-right">
                                                        $row[3]
                                                    </span>
                                                </a>
                                                <div class="stui-vodlist__detail">
                                                    <h4 class="title text-overflow">
                                                        <a href="vod-detail-id-97290.html" title="$row[1]">
                                                            $row[1]
                                                        </a>
                                                    </h4>
                                                    <p class="text text-overflow text-muted hidden-xs">
                                                        $row[4]
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
EOG;
                                    }
                                 ?>
                                <!-- end 使用php循环此li -->
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="stui-page-text text-center clearfix">
                    <a class="pagelink_b" href="vod-type.php?movtype=<?php echo $movtype; ?>&pg=1" target="_self">首页</a>
                    <a class="pagelink_b" href="vod-type.php?movtype=<?php echo $movtype; ?>&pg=<?php echo $pg-1; ?>" target="_self">上一页</a>
                    <span class="pagenow"><?php echo $pg; ?></span>
                    <a class="pagelink_b" href="vod-type.php?movtype=<?php echo $movtype; ?>&pg=<?php echo $pg+1; ?>" target="_self">下一页</a>
                </ul>
                <br/>
            </div>
        </div>
		<?php include('page_foot.php') ?>
    </body>
</html>