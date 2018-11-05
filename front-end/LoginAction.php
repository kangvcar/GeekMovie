<?php 
	if (isset($_GET['action'])) {
		if ($_GET['action'] == 'logout') {
		session_start();
		unset($_SESSION['lid']);
		unset($_SESSION['lusername']);
	    header("Location:index.php");  
	    exit(); 
		}
	}
	if (isset($_POST['LoginSubmit'])) {
		$loginname = $_POST['username'];
		$loginpasswd = $_POST['password'];

		include("dbconnection.php");
		print("$loginname");
		print("$loginpasswd");
		$loginchecksql = "SELECT uid, username, password FROM user WHERE username='$loginname' AND password='$loginpasswd';";
		$result15 = $conn->query($loginchecksql);
		if ($result15->num_rows > 0) {
			// 登录成功
			$row = $result15->fetch_row();
			session_start();
			$_SESSION['lid'] = $row[0];
			$_SESSION['lusername'] = $loginname;
			header("Location:index.php");  
		    exit();
		}else{
			print <<<EOF
					<br>
					<div class="alert alert-dismissable alert-danger" align="center">
						 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<strong>Warning!</strong> 登录失败！
					</div>
EOF;

		}
	}
	if (isset($_POST['registerSubmit']) and (empty($_POST['registername']) or empty($_POST['registerpassword']))){
		print <<<EOK
			<br>
			<div class="alert alert-dismissable alert-danger" align="center">
				 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<strong>Warning!</strong> 用户名或密码不能为空！
			</div>
EOK;
	}elseif	(isset($_POST['registerSubmit']) and !empty($_POST['registername']) and !empty($_POST['registerpassword'])) {
		$registername = $_POST['registername'];
		$registerpassword = $_POST['registerpassword'];
		$registeremail = $_POST['registeremail'];
		include("dbconnection.php");
		$registerusersql = "INSERT INTO user(username, password, email) VALUES ('$registername', '$registerpassword', '$registeremail');";
		$conn->query($registerusersql);
		if ($conn->affected_rows > 0) {
			print <<<EOW
				echo "<script language=javascript>alert('注册成功！');location.href='LoginMain.php';</script>";
EOW;
		}else{
			print <<<EOQ
					<br>
					<div class="alert alert-dismissable alert-danger" align="center">
						 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<strong>Warning!</strong> 注册失败！用户名已存在！
					</div>
EOQ;
		}
	}
?>