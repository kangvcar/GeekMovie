<?php 
	if (isset($_POST['modifymid'])) {
		$fmdi = $_POST['modifymid'];
		$fmname = $_POST['fmname'];
		$fmimgurl = $_POST['fmimgurl'];
		$fmscore = $_POST['fmscore'];
		$fmdirector = $_POST['fmdirector'];
		$fmstar = $_POST['fmstar'];
		$fmtype = $_POST['fmtype'];
		$fmarea = $_POST['fmarea'];
		$fmyear = $_POST['fmyear'];
		$fmsumary = $_POST['fmsumary'];
		$fmplayurl = $_POST['fmplayurl'];
		include("dbconnection.php");
		$updatesql = "UPDATE movie SET mname='$fmname',mimgurl='$fmimgurl',mscore='$fmscore',mdirector='$fmdirector',mstar='$fmstar',mtype='$fmtype',marea='$fmarea',myear='$fmyear',msumary='$fmsumary',mplayurl='$fmplayurl' WHERE mid='$fmdi';";
		if ($conn->query($updatesql)) {
			print <<<EOF
				<div class="alert alert-dismissable alert-success" align="center">
					 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<strong>Success!</strong> 更新影片信息成功！<br>
				</div>
EOF;
		}else{
			print <<<EOF
				<div class="alert alert-dismissable alert-danger" align="center">
					 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<strong>Warning!</strong> 更新影片信息失败！
				</div>
EOF;
		}		
		// print($fmdi);
		// print($fmname);
		// print($fmimgurl);
		// print($fmscore);
		// print($fmdirector);
		// print($fmstar);
		// print($fmtype);
		// print($fmarea);
		// print($fmyear);
		// print($fmsumary);
		// print($fmplayurl);
	}
 ?>