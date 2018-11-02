<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>极客影院</title>
  <link rel="shortcut icon" href="./0.jpg">
  <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="./css/css.css">

  <script src="https://cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="./js/myjs.js"></script>
  <script src="https://cdn.bootcss.com/masonry/4.1.1/masonry.pkgd.min.js"></script>
</head>

<body>
  <!-- 导航栏 start -->
  <?php include("headnav.php") ?>
  <!-- 导航栏 end -->
  <div class="container">
    <!-- 轮播图 start -->
    <?php include("carousel.php") ?>
    <!-- 轮播图 end -->
    <br id="calss">

    <!-- 电影锦集 start -->
    <?php include("collection.php") ?>
    <!-- 电影锦集 end -->
    <br>

    <!-- 精彩瞬间 start -->
    <?php include("recommend.php") ?>
    <!-- 精彩瞬间 end -->
    <br>

    <!-- 底部 start -->
    <?php include("footer.php") ?>
    <!-- 底部 end -->
    </div>
</body>
</html>
