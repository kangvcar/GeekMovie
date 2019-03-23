<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>极客影院</title>
  <link rel="shortcut icon" href="./0.jpg">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="./css/css.css">


  <script src="https://cdnjs.loli.net/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="./js/myjs.js"></script>
  <script src="https://cdn.bootcss.com/masonry/4.1.1/masonry.pkgd.min.js"></script>
</head>
<body>
<div class="container" >
	<div class="row clearfix">
    <!-- 导航栏 start  -->
    <?php include("headnav.php"); ?>
    <!-- 导航栏 end  -->

		<!-- 影片图片 & 影片信息 start -->
		<?php include("headdetail.php") ?>
		<!-- 影片图片 & 影片信息 end -->
    
    <!-- 影片播放器 start -->
    <?php include("movieplayer.php") ?>
    <!-- 影片播放器 start -->
    
    <!-- 影片评论 start -->
    <?php 
    //include("commentForm.php");
    ?>
    <!-- 影片评论 end -->

    <!--评论显示区，请插入合适的位置-->
    <div class="comment"></div>

    <!--载入js，在</body>之前插入即可-->
    <!--Leancloud 操作库:-->
    <script src="//cdn1.lncld.net/static/js/3.0.4/av-min.js"></script>
    <!--Valine 的核心代码库-->
    <script src="./Valine.min.js"></script>
    <!--<script src="https://desertsp.github.io/Valine/dist/Valine.min.js"></script>-->
<script>
    <!--.comment要与评论区元素一致-->
    comment_el = '.comment';
    load_valine = function () {
      if ($(comment_el).length) {
        new Valine({ 
          av: AV,
          el: comment_el,
          path: 'window.location.href',
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



    <!-- 底部 start -->
    <?php include("footer.php") ?>
    <!-- 底部 end -->
	</div>
	
</div>
</body>
</html>				
