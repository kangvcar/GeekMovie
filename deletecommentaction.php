<?php 
	if (isset($_POST['dcid'])) {
		$dcid = $_POST['dcid'];
		include("dbconnection.php");
		$deletecommentsql = "DELETE FROM comment WHERE cid='$dcid';";
		if ($result9 = $conn->query($deletecommentsql)) {
			print <<<EOC
				<div class="alert alert-dismissable alert-success" align="center">
					 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<strong>Success!</strong> 删除评论信息成功！
				</div>
EOC;
		}else{
			print <<<EOD
				<div class="alert alert-dismissable alert-danger" align="center">
					 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<strong>Warning!</strong> 删除评论信息失败！
				</div>
EOD;
		}
	}
?>