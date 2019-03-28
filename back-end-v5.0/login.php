<!DOCTYPE>
<html>
	<head>
		<title>登录管理系统 - Jike 极客影院</title>
		<?php include_once('head.php') ?>
	</head>
	<body>
		<h1 id="head" align="center">登录管理系统</h1>
		<div id="content" class="container_16 clearfix">
			<div class="grid_16"><p align="center"><small>请使用管理员账号登录</small></p></div>
			<div class="grid_6">&nbsp;</div>
			<form action="login_admin_process.php" method="POST">
				<div class="grid_4">
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
			<div class="grid_6">&nbsp;</div>
		</div>
		<?php include('page_foot.html') ?>
	</body>
</html>