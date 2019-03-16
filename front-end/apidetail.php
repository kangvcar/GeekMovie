<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>极客影院API</title>
  <link rel="shortcut icon" href="./0.jpg">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
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
          <div class="jumbotron">
            <h1>
              极客影院API使用说明
            </h1>
            <p>
              本站提供有限的数据查询，请规范使用，如发现恶意请求会关闭此API服务！
            </p>
          </div>          
          <table class="table table-bordered">
            <thead>
              <tr><th>Key</th><th>Value</th><th>说明</th><th>Demo</th></tr>
            </thead>
            <tbody>
              <tr class="info">
                <td rowspan="5">q</td>
                <td>random</td>
                <td>随机返回影片信息</td>
                <td><a href="http://jike.freevar.com/api.php?q=random">http://jike.freevar.com/api.php?q=random</a></td>
              </tr>
              <tr class="info">
                <td>new</td>
                <td>根据收录时间递减排序返回影片信息</td>
                <td><a href="http://jike.freevar.com/api.php?q=new">http://jike.freevar.com/api.php?q=new</a></td>
              </tr>
              <tr class="info">
                <td>score</td>
                <td>根据评分递减排序返回影片信息</td>
                <td><a href="http://jike.freevar.com/api.php?q=score">http://jike.freevar.com/api.php?q=score</a></td>
              </tr>
              <tr class="info">
                <td>name</td>
                <td>根据影片名返回影片信息，使用参数<b>n</b>指定影片名</td>
                <td>详细使用方法查看下文</td>
              </tr>
              <tr class="info">
                <td>type</td>
                <td>根据影片类型返回影片信息，使用参数<b>t</b>指定影片类型</td>
                <td>详细使用方法查看下文</td>
              </tr>
              <tr class="success">
                <td></td>
                <td colspan="2"><b>Tip</b>: 可以加上参数 <b>count</b> 指定返回数据条数</td>
                <td><a href="http://jike.freevar.com/api.php?q=random&count=10  ">http://jike.freevar.com/api.php?q=random&count=10</a></td>
              </tr>
            </tbody>
          </table>

          <table class="table table-bordered">
            <thead>
              <tr><th>Key</th><th>Value</th><th>说明</th><th>Demo</th></tr>
            </thead>
            <tbody>
              <tr class="info">
                <td>n</td>
                <td><影片名关键字></td>
                <td>根据影片名返回影片信息</td>
                <td><a href="http://jike.freevar.com/api.php?q=name&n=速度与激情">http://jike.freevar.com/api.php?q=name&n=速度与激情</a></td>
              </tr>
              <tr class="success">
                <td></td>
                <td colspan="2"><b>Tip</b>: 可以加上参数 <b>count=1</b> 返回匹配度最高的一条数据</td>
                <td><a href="http://jike.freevar.com/api.php?q=name&n=速度与激情&count=1">http://jike.freevar.com/api.php?q=name&n=速度与激情&count=1</a></td>
              </tr>
            </tbody>
          </table>

          <table class="table table-bordered">
            <thead>
              <tr><th>Key</th><th>Value</th><th>说明</th><th>Demo</th></tr>
            </thead>
            <tbody>
              <tr class="info">
                <td rowspan="4">t</td>
                <td>电影</td>
                <td>返回电影相关信息</td>
                <td><a href="http://jike.freevar.com/api.php?q=type&t=电影">http://jike.freevar.com/api.php?q=type&t=电影</a></td>
              </tr>
              <tr class="info">
                <td>电视剧</td>
                <td>返回电视剧相关信息</td>
                <td><a href="http://jike.freevar.com/api.php?q=type&t=电视剧">http://jike.freevar.com/api.php?q=type&t=电视剧</a></td>
              </tr>
              <tr class="info">
                <td>动漫</td>
                <td>返回动漫相关信息</td>
                <td><a href="http://jike.freevar.com/api.php?q=type&t=动漫">http://jike.freevar.com/api.php?q=type&t=动漫</a></td>
              </tr>
              <tr class="info">
                <td>综艺</td>
                <td>返回综艺相关信息</td>
                <td><a href="http://jike.freevar.com/api.php?q=type&t=综艺">http://jike.freevar.com/api.php?q=type&t=综艺</a></td>
              </tr>
              <tr class="success">
                <td colspan="3"><b>Tip</b>: 可以加上参数 <b>count</b> 指定返回数据条数</td>
                <td><a href="http://jike.freevar.com/api.php?q=type&t=电影&count=10">http://jike.freevar.com/api.php?q=type&t=电影&count=10</a></td>
              </tr>
            </tbody>
          </table>
    <!-- 底部 start -->
    <?php include("footer.php") ?>
    <!-- 底部 end -->
    </div>
</body>
</html>