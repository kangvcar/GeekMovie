<?php 
	$edit_uid = $_GET['uid'];
?>
<!DOCTYPE>
<html>
	<head>
		<title>用户信息管理 - Geek 极客影院</title>
		<?php include_once('head.php') ?>
		<script type="text/javascript">
			$(document).ready(function getUserInfo(id){
				//$.get("请求url","发送的数据对象","成功回调","返回数据类型");
				// 获取movie.php页的15条影片信息
				$.get("./ajax_action_page.php",{'query_key':'user_edit','uid': <?php echo $edit_uid; ?>},
				    function(data){
				    	console.log(data[0])
				    	$("#uid").val(data[0].uid);
				    	$("#username").val(data[0].username);
				    	$("#password").val(data[0].password);
				    	$("#email").val(data[0].email);
				},'json');
			});
			function modifyUserFunction(){
				var uid = $("#uid").val();
				var username = $("#username").val();
				var password = $("#password").val();
				var email = $("#email").val();
				$.post("./ajax_add.php?query_key=user_modify",{'uid': uid, 'username': username, 'password': password, 'email': email},
					function(data){
						if (data.isflag) {
							console.log(data.isflag);
							$("#flag").text('修改用户信息成功');
							$("#flag").attr("class", "success").show();
							var timeout=setTimeout(function () {
							        $("#flag").hide();
							    }, 1000);
						}else{
							console.log(data.isflag);
							$("#flag").text('修改用户信息失败');
							$("#flag").attr("class","error").show();
							var timeout=setTimeout(function () {
							        $("#flag").hide();
							    }, 1000);
						};
					},'json');
			}
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
					<h2>修改用户信息</h2>
					<p id="flag"></p>
				</div>
				<div class="grid_4">
					<p>
						<label>ID <small>不可修改.</small></label>
						<input id="uid" type="text" name="uid" disabled="true" />
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
						<input type="submit" value="Post" onclick="modifyUserFunction()" />
					</p>
				</div>
			</div>
		<?php include('page_foot.html') ?>
	</body>
</html>