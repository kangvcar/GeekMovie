<?php 
	session_start(); 
	if (!isset($_SESSION['userName'])) {
		header("Location: login.php");
		exit;
	}
?>
<!DOCTYPE>
	<head>
		<title>管理系统 - Jike 极客影院</title>
		<?php include_once('head.php') ?>
		<script src="dashboard_ajax.js"></script>
	</head>
	<body>

		<h1 id="head" align="center">Jike 极客影院 - 管理系统</h1>
		<ul id="navigation" align="center">
			<li><a href="index.php">总览</a></li>
			<li><a href="movie.php">影片管理</a></li>
			<li><a href="user.php">用户管理</a></li>
			<li><a href="comment.php">评论管理</a></li>
			<li><a href="logout.php" class="active">Logout</a></li>
		</ul>
			<div id="content" class="container_16 clearfix">
				<div class="grid_5">
					<div class="box">
						<h2>你附近的天气</h2>
						<div id="tp-weather-widget"></div>
						<script>(function(T,h,i,n,k,P,a,g,e){g=function(){P=h.createElement(i);a=h.getElementsByTagName(i)[0];P.src=k;P.charset="utf-8";P.async=1;a.parentNode.insertBefore(P,a)};T["ThinkPageWeatherWidgetObject"]=n;T[n]||(T[n]=function(){(T[n].q=T[n].q||[]).push(arguments)});T[n].l=+new Date();if(T.attachEvent){T.attachEvent("onload",g)}else{T.addEventListener("load",g,false)}}(window,document,"script","tpwidget","//widget.seniverse.com/widget/chameleon.js"))</script>
						<script>
							tpwidget("init", {
							    "flavor": "slim",
							    "location": "WEBTS3XR5D0W",
							    "geolocation": "enabled",
							    "language": "zh-chs",
							    "unit": "c",
							    "theme": "chameleon",
							    "container": "tp-weather-widget",
							    "bubble": "enabled",
							    "alarmType": "badge",
							    "uid": "U3CE2B4087",
							    "hash": "b81f5ddcd68d0293db7e1be08d113962"
							});
							tpwidget("show");
						</script>
					</div>
					<div class="box">
						<h2>系统信息</h2>
						<p>
							<strong>当前时间： </strong><span id="timeShow">正在载入...</span><br>
							<strong>最后登录于 : </strong> <?php echo $showtime=date("Y-m-d H:i:s");?><br />
							<strong>服务器IP地址 : </strong> <?php echo $_SERVER["REMOTE_ADDR"]; ?><br />
							<strong>服务器 OS : </strong> <?php echo php_uname('s'); ?><br />
							<strong>用户的IP地址 : </strong> <?php echo $_SERVER['REMOTE_ADDR']; ?><br />
							<strong>PHP 版本 : </strong> <?php echo PHP_VERSION; ?><br />
							<strong>MYSQL 版本 : </strong> 5.5.60<br />
							<strong>ZEND 版本 : </strong> <?php echo Zend_Version(); ?><br />
							<strong>最大上传限制 : </strong> <?php echo get_cfg_var ("upload_max_filesize")?get_cfg_var ("upload_max_filesize"):"不允许上传附件"; ?><br />
							<strong>服务器域名 : </strong> <?php echo $_SERVER["HTTP_HOST"]; ?><br />
							<strong>服务器解译引擎 : </strong> <?php echo $_SERVER['SERVER_SOFTWARE']; ?><br />
							<strong>服务器Web端口 : </strong> <?php echo $_SERVER['SERVER_PORT']; ?><br />
							<strong>服务器语言 : </strong> <?php echo $_SERVER['HTTP_ACCEPT_LANGUAGE']; ?><br />
							<strong>剩余存储空间 : </strong> <?php echo round((disk_free_space(".")/(1024*1024)),2).'M'; ?><br />
							<strong>浏览器信息 : </strong> <?php echo substr($_SERVER['HTTP_USER_AGENT'], 0, 40); ?><br />
						</p>
					</div>
								
				</div>
				<div class="grid_6">
					<div class="box">
						<h2>Messages</h2>
						<h4 class="center">管理员：<b> <?php echo $_SESSION['userName']; ?> </b></h4>
						<p class="center">你好，欢迎使用管理系统，你的操作将实时同步到前端电影系统，请谨慎操作!</p>
					</div>
					
					<div class="box">
						<h2>最新评论</h2>
						<div class="utils">
							<a href="comment.php">View More</a>
						</div>
						<table>
							<tbody id="comment_table">
								<tr><td>正在获取最新数据...</td></tr>
							</tbody>
						</table>
					</div>
					<div class="box">
						<h2>用户信息</h2>
						<div class="utils">
							<a href="user.php">View More</a>
						</div>
						<table>
							<tbody id="user_table">
								<tr><td>正在获取最新数据...</td></tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="grid_5">
					<div class="box">
						<h2>统计信息</h2>
						<table>
							<tbody>
								<tr id="vod_total_table"><td>正在获取最新数据...</td></tr>
								<tr id="user_total_table"><td>正在获取最新数据...</td></tr>
								<tr id="comment_total_table"><td>正在获取最新数据...</td></tr>
							</tbody>
						</table>
					</div>
					<div class="box">
						<h2>影片类型</h2>
						<table>
							<tbody>
								<tr id="mov_total_table"><td>正在获取最新数据...</td></tr>
								<tr id="dianshiju_total_table"><td>正在获取最新数据...</td></tr>
								<tr id="dongman_total_table"><td>正在获取最新数据...</td></tr>
								<tr id="jilupian_total_table"><td>正在获取最新数据...</td></tr>
								<tr id="other_total_table"><td>正在获取最新数据...</td></tr>
							</tbody>
						</table>
					</div>
					<div class="box">
						<h2>Music</h2>
						<iframe frameborder="no" border="0" marginwidth="0" marginheight="0" width=280 height=110 src="//music.163.com/outchain/player?type=1&id=74265751&auto=1&height=90"></iframe>
					</div>	
				</div>
			</div>
		<div id="foot">
			<div class="container_16 clearfix">
				<div class="grid_16">
					<a href="http://jike.freevar.com">jike.freevar.com</a> / Jike 极客影院
				</div>
			</div>
		</div>
	</body>
</html>
