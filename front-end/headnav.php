<!-- 导航栏 start -->
<nav class="navbar navbar-static-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle btn btn-primary" data-toggle="collapse" data-target=".navbar-responsive-collapse">
        <span class="fa fa-bars fa-1x"></span>
      </button>
    </div>
    <a class="navbar-brand navbar-collapse collapse" href="index.php">
      <i class="fa fa-codepen fa-1x"> 影音</i>
    </a>
    <div class="collapse navbar-collapse navbar-responsive-collapse">
      <ul class="nav navbar-nav">
        <li><a href="index.php"> 首页</a></li>
        <li><a href="#student">电影榜单</a></li>
        <li><a href="#moment">精彩瞬间</a></li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
          <ul class="nav navbar-nav navbar-right">
            <?php 
              session_start();
              if (isset($_SESSION['lid'])) {
                $username = $_SESSION['lusername'];
                print <<<EOT
                  <li>
                     <a href="#">$username</a>
                  </li>
                  <li>
                    <a href="LoginAction.php?action=logout">Logout</a>
                  </li>
EOT;
              }else{
                print <<<EOY
                  <li>
                    <a href="LoginMain.php">Login</a>
                  </li>
EOY;
              }
             ?>
          </ul>      
    </div>
  </div>
</nav>
<!-- 导航栏 end -->