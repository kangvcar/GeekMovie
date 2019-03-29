<!DOCTYPE>
<html>
	<head>
		<title>登录管理系统 - Jike 极客影院</title>
		<?php include_once('head.php') ?>
	</head>
	<body>
		<h1 id="head" align="center">Jike 极客影院 - 管理系统</h1>
		<ul id="navigation" align="center"><h3>欢迎使用</h3></ul>
		<div id="content" class="container_16 clearfix">
			<div class="grid_2">&nbsp;</div>
			<div class="grid_8">
				<h2>关于Jike极客影院系统</h2>
				<p class="error"><b>⚠ 【本项目仅用于学习研究所用，请勿用于商业用途！】</b></p>
				<ul>
					<li>项目地址：<a href="https://github.com/kangvcar/jikemovie">https://github.com/kangvcar/jikemovie</a> <b>欢迎Star&Fork</b></li>
					<li>开发人员：<a href="https://github.com/kangvcar">https://github.com/kangvcar</a></li>
					<li>本项目包含了前端和后端管理
						<ul>
							<li>前端：<a href="http://jike.freevar.com">jike.freevar.com</a></li>
							<li>后端：<a href="http://jike.freevar.com/admin">jike.freevar.com/admin</a></li>
						</ul>
					</li>
					<li>技术栈：
						<ul>
							<li>HTML/CSS/JavaScript</li>
							<li>JQuery</li>
							<li>Ajax</li>
							<li>PHP</li>
							<li>MySQL</li>
						</ul>
					</li>
					<li>项目特点：
						<ul>
							<li>采用 960grid 网络布局系统</li>
							<li>采用大量 Ajax 请求，优化用户体验</li>
							<li>采用 MySQL 数据库引擎</li>
						</ul>
					</li>
					<li>测试账号：<b>(普通管理员只能查看基本数据，没有修改权限)</b>
						<ul>
							<li>用户名：admin</li>
							<li>密码：passwd</li>
						</ul>
					</li>
				</ul>
				<p class="success">
					本系统将不断完善，更多功能和更新敬请关注<a href="https://github.com/kangvcar/jikeMovie">项目</a><br>
					如发现本系统有任何问题或你有更好的Idea，你可进行二次开发，或到项目主页提交<a href="https://github.com/kangvcar/jikeMovie/issues">Issue</a>
				</p>
			</div>
			<form action="login_admin_process.php" method="POST">
				<div class="grid_4">
					<h2>管理员登录</h2>
					<div class="grid_4">
						<div class="grid_2"><label>用户名</label></div>
						<div class="grid_2"><input type="text" name="userName" size="20" maxlength="15" placeholder="请填写管理员账号"></div>
					</div>
					<div class="grid_4">
						<div class="grid_2"><label>密 码</label></div>
						<div class="grid_2"><input type="password" name="password" size="20" maxlength="15" placeholder="请填写密码"></div>
					</div>
					<div class="grid_4" align="center">
						<label>&nbsp;</label>
						<input type="submit" value="登录" />
					</div>
				</div>
			</form>
			<div class="grid_4">&nbsp;</div>
		</div>
		<?php include('page_foot.html') ?>
	</body>
</html>
