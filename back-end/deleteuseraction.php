<?php 
	if (isset($_POST['duid'])) {
		$duid = $_POST['duid'];
		include("dbconnection.php");
		$deleteusersql = "DELETE FROM user WHERE uid='$duid';";
		if ($result6 = $conn->query($deleteusersql)) {
			print <<<EOC
				<div class="alert alert-dismissable alert-success" align="center">
					 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<strong>Success!</strong> 删除用户信息成功！<br>该用户的所有评论也被删除！
				</div>
EOC;
		}else{
			print <<<EOD
				<div class="alert alert-dismissable alert-danger" align="center">
					 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<strong>Warning!</strong> 删除电影信息失败！
				</div>
EOD;
		}
	}elseif (isset($_POST['auser'])) {
		$ausername = $_POST['ausername'];
		$apassword = $_POST['apassword'];
		$aemail = $_POST['aemail'];
		include("dbconnection.php");
		$addusersql = "INSERT INTO user(username, password, email) VALUES ('$ausername', '$apassword', '$aemail');";
		$result7 = $conn->query($addusersql);
		if ($result7) {
			print <<<EOE
				<div class="alert alert-dismissable alert-success" align="center">
					 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<strong>Success!</strong> 添加用户信息成功！
				</div>
EOE;
		}else{
			print <<<EOF
				<div class="alert alert-dismissable alert-danger" align="center">
					 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<strong>Warning!</strong> 删除用户信息失败！
				</div>
EOF;
		}
	}
 ?>