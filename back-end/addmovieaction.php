<?php 
	if (isset($_POST['amsubmit'])) {
		$amid = $_POST['amid'];
		$amname = $_POST['amname'];
		$amimgurl = $_POST['amimgurl'];
		$amscore = $_POST['amscore'];
		$amdirector = $_POST['amdirector'];
		$amstar = $_POST['amstar'];
		$amtype = $_POST['amtype'];
		$amarea = $_POST['amarea'];
		$amyear = $_POST['amyear'];
		$amsumary = $_POST['amsumary'];
		$amplayurl = $_POST['amplayurl'];
		//连接数据库
		include("dbconnection.php");
		$addmoviesql = "INSERT INTO movie(mid, mname, mimgurl, mscore, mdirector, mstar, mtype, marea, myear, msumary, mplayurl) VALUES ('$amid','$amname','$amimgurl','$amscore','$amdirector','$amstar','$amtype','$amarea','$amyear','$amsumary','$amplayurl')";
		// $result3 = $conn->query($addmoviesql);
		if ($result3 = $conn->query($addmoviesql)) {
			print <<<EOF
				<div class="alert alert-dismissable alert-success" align="center">
					 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<strong>Success!</strong> 添加电影信息成功！
				</div>
EOF;
		}else{
			print <<<EOF
				<div class="alert alert-dismissable alert-danger" align="center">
					 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<strong>Warning!</strong> 添加电影信息失败！
				</div>
EOF;
		}
	}
 ?>