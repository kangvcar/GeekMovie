<?php 
	if (!isset($_GET['movid'])) {
		header("Location: index.php");
		exit;
	}else{
		include 'dbconnection.php';
		$detail_mid = $_GET['movid'];
		$detail_Sql = "SELECT mid, mname, mimgurl, mscore, mdirector, mstar, mtype, marea, myear, msumary, mplayurl FROM movie WHERE mid=$detail_mid LIMIT 1;";
		$result31 = $conn->query($detail_Sql);
		if ($result31->num_rows > 0) {
		    $row = $result31->fetch_assoc();
		} else {
		    header("Location: index.php");
			exit;
		}
		$conn->close();
	}
 ?>
<!DOCTYPE html>
<html lang="zh">
    <head>
        <title>
            <?php echo $row['mname']." - ".$row['mtype'] ?> - 高清免费线上看 - Jike Movie 极客影院
        </title>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
        <meta content="IE=EmulateIE10" http-equiv="X-UA-Compatible"/>
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
        <link href="iconfont.css" rel="stylesheet" />
        <link href="stui_block.css" rel="stylesheet" />
        <link href="stui_block_color.css" rel="stylesheet" />
        <link href="stui_default.css" rel="stylesheet" />
        <link href="stui_custom.css" rel="stylesheet" />
        <link href="custom.css" rel="stylesheet" />
        <script src="jquery.min.js" ></script>
        <script src="stui_block.js" ></script>
        <script src="bootstrap.min.js" ></script>
        <script src="jquery.cookie.min.js" ></script>
        <script src="home.js" ></script>
        <script src="https://cdnjs.loli.net/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdn.rawgit.com/video-dev/hls.js/18bb552/dist/hls.min.js"></script>
        <script src="https://cdn.plyr.io/3.5.2/plyr.js"></script>
        <link rel="stylesheet" href="https://cdn.plyr.io/3.5.2/plyr.css" />
    </head>
    <body>
    	<?php include('page_head.php') ?>
        <style>
            .playButton {
                background-color: #4CAF50; /* Green */
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
            }
            #containerPlay {
                margin: auto;
                width: 60%;
            }
            video {
                width: 100%;
            }
        </style>
        <div class="stui-content" style="margin-top: 20px;">
            <div class="container">
                <div class="row">
                    <div class="stui-content__item clearfix">
                        <div class="stui-content__thumb">
                            <a class="stui-vodlist__thumb v-thumb lazyload" style="background-image: url(<?php echo $row['mimgurl']; ?>);" title="<?php echo $row['mname']; ?>" >
                                <span class="play active" onclick="DisplayScreen()">
                                </span>
                                <span class="pic-text text-right">
                                    <?php echo $row['mtype']; ?>
                                </span>
                            </a>
                        </div>
                        <div class="stui-content__detail">
                            <h3 class="title" style="font-size: 20px;font-weight: 700; ">
                                <?php echo $row['mname']; ?>
                            </h3>
                            <p class="data">
                                <span class="text-muted">
                                    类型：
                                </span>
                                    <?php echo $row['mtype']; ?>
                                <span class="split-line">
                                </span>
                                <span class="text-muted hidden-xs">
                                    地区：
                                </span>
                                <?php echo $row['marea']; ?>
                                <span class="split-line">
                                </span>
                                <span class="text-muted hidden-xs">
                                    年份：
                                </span>
                                <?php echo $row['myear']; ?>
                            </p>
                            <p class="data">
                                <span class="text-muted">
                                    主演：
                                </span>
                                   <?php echo $row['mstar']; ?>
                            </p>
                            <p class="data">
                                <span class="text-muted">
                                    导演：
                                </span>
                                <?php echo $row['mdirector']; ?>
                            </p>
                            <p class="data hidden-sm">
                                <span class="text-muted">
                                    更新：
                                </span>
                                2019-03-20
                            </p>
                            <p class="desc detail hidden-xs">
                                <span class="left text-muted">
                                    简介：
                                </span>
                                <span class="detail-sketch">
                                	<?php echo $row['msumary']; ?>
                                </span>
                                <span class="detail-content" style="display: none;">
                                	<?php echo $row['msumary']; ?>
                                </span>
                            </p>
                            <div class="play-btn clearfix">
                                <div class="share bdsharebuttonbox hidden-sm hidden-xs pull-left">
                                    <div class="addthis_inline_share_toolbox_lz5f">
                                        <button class="playButton" onclick="DisplayScreen()">播 放</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="containerPlay" hidden>
            <video controls crossorigin playsinline poster="./player_cover.jpg" preload="auto"></video>
        </div>
        <script>
            function DisplayScreen(){
                document.getElementById('containerPlay').removeAttribute("hidden");
            }
            document.addEventListener('DOMContentLoaded', () => {
                // const source = 'https://135zyv6.xw0371.com/2019/02/23/ySrKxdhl7z1liNez/playlist.m3u8';
                const source = "<?php echo $row['mplayurl']; ?>";
                const video = document.querySelector('video');
                
                // For more options see: https://github.com/sampotts/plyr/#options
                // captions.update is required for captions to work with hls.js
                const player = new Plyr(video, {captions: {active: true, update: true, language: 'en'}});
                
                if (!Hls.isSupported()) {
                    video.src = source;
                } else {
                    // For more Hls.js options, see https://github.com/dailymotion/hls.js
                    const hls = new Hls();
                    hls.loadSource(source);
                    hls.attachMedia(video);
                    window.hls = hls;
                    
                    // Handle changing captions
                    player.on('languagechange', () => {
                        // Caption support is still flaky. See: https://github.com/sampotts/plyr/issues/994
                        setTimeout(() => hls.subtitleTrack = player.currentTrack, 50);
                    });
                }
                
                // Expose player so it can be used from the console
                window.player = player;
            });
        </script>
        
        <!--评论显示区，请插入合适的位置-->
        <div class="comment"></div>
        <!--载入js，在</body>之前插入即可-->
        <!--Leancloud 操作库:-->
        <script src="//cdn1.lncld.net/static/js/3.0.4/av-min.js"></script>
        <!--Valine 的核心代码库
        <script src="./Valine.min.js"></script>-->
        <script src="https://desertsp.github.io/Valine/dist/Valine.min.js"></script>
        <script>
            <!--.comment要与评论区元素一致-->
            comment_el = '.comment';
            load_valine = function () {
              if ($(comment_el).length) {
                new Valine({ 
                  av: AV,
                  el: comment_el,
                  path: window.location.href,
                  appId: 'UYhd0X2NeaPc4bOCmCdLrXqW-gzGzoHsz',
                  appKey: 'zLaXzvYhhVgyme3bY8GWFGkX',
                  emoticon_url: 'https://cloud.panjunwen.com/alu',
                  emoticon_list: ["狂汗.png","不说话.png","汗.png","坐等.png","献花.png","不高兴.png","中刀.png","害羞.png","皱眉.png","小眼睛.png","暗地观察.png"],
                  placeholder: '在此留下你的精彩影评！！！'
                  });
              }
            };
            $(document).ready(load_valine);
            $(document).on('pjax:complete', function() {
              load_valine();
            });
        </script>
        <?php include('page_foot.php'); ?>       
    </body>
</html>
