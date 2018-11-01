<?php 
	if (isset($_GET['action'])) {
		if ($_GET['action'] == 'logout') {
		session_start();
		unset($_SESSION['id']);
		unset($_SESSION['username']);
	    header("Location:LoginMain.php");  
	    exit(); 
		}
	}
	
	// 检测是否点击了登陆按钮
	// if (isset($_POST['submit'])) {
	// 	exit('非法访问！');
	// }
	if (isset($_POST['submit'])) {
		# code...
	
		$adminuser = $_POST['username'];
		$adminpass = $_POST['password'];
		// echo "$username <br> $password";

		include("dbconnection.php");
		$adminchecksql = "SELECT id, username, password FROM admin WHERE username='$adminuser' AND password='$adminpass';";
		$result12 = $conn->query($adminchecksql);
		if ($result12->num_rows > 0) {
			// 登录成功
			$row = $result12->fetch_row();
			session_start();
			$_SESSION['id'] = $row[0];
			$_SESSION['username'] = $adminuser;
			header("Location:admin.php");  
		    exit();
		}else{
			print <<<EOF
					<br>
					<div class="alert alert-dismissable alert-danger" align="center">
						 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<strong>Warning!</strong> 登录失败！
					</div>
EOF;

			/////////////////////////////////////////////////////////////////////////////////
			// echo "<script language=javascript>alert('登录失败！');history.back();</script>"; //
			/////////////////////////////////////////////////////////////////////////////////
		}
	}
?>