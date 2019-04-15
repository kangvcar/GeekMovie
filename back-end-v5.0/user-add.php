<!DOCTYPE>
<html>
	<head>
		<title>用户信息管理 - Geek 极客影院</title>
		<?php include_once('head.php') ?>
		<script type="text/javascript">
			function addUserFunction(){
				var uid = $("#uid").val();
				var username = $("#username").val();
				var password = $("#password").val();
				var email = $("#email").val();
				$.post("./ajax_add.php?query_key=user_add",{'uid': uid, 'username': username, 'password': password, 'email': email},
					function(data){
						if (data.isflag) {
							console.log(data.isflag);
							$("#flag").text('添加用户成功');
							$("#flag").attr("class", "success").show();
							var timeout=setTimeout(function () {
							        $("#flag").hide();
							    }, 1000);
						}else{
							console.log(data.isflag);
							$("#flag").text('添加用户失败');
							$("#flag").attr("class","error").show();
							var timeout=setTimeout(function () {
							        $("#flag").hide();
							    }, 1000);
						};
					},'json');
			};
			function resetUserFunction(){
				$("input[type='text'], input[type='email']").val("");
			}
		</script>
	</head>
	<body>
	<h1 id="head" align="center">用户信息管理</h1>
	<?php include('navigation.php') ?>
			<div id="content" class="container_16 clearfix">
				<div class="grid_16">
					<h2>添加用户信息</h2>
					<p id="flag"></p>
				</div>
				<div class="grid_4">
					<p>
						<label>ID <small>不可重复.</small></label>
						<input id="uid" type="text" name="uid" />
					</p>
					<p>
						<label>用户名 </label>
						<input id="username" type="text" name="uname" />
					</p>
					<p>
						<label>密码 </label>
						<input id="password" type="text" name="upassword" />
					</p>
					<p>
						<label>邮箱 </label>
						<input id="email" type="email" name="ueamil" />
					</p>
				</div>
				<div class="grid_16">
					<p class="submit">
						<input type="reset" value="Reset" onclick="resetUserFunction()" />
						<input type="submit" value="Post" onclick="addUserFunction()" />
					</p>
				</div>
			</div>
		<?php include('page_foot.html') ?>
	</body>
</html>