<?php 
	if (isset($_POST['commentsubmit'])) {
		$user_id = $_POST['user_id'];
		$movie_id = $_POST['movie_id'];
		$commentcontent = $_POST['commentcontent'];
		include("dbconnection.php");
		$addcommentsql = "INSERT INTO comment(user_id, movie_id, content) VALUES ('$user_id', '$movie_id', '$commentcontent');";
		$conn->query($addcommentsql);
		if ($conn->affected_rows > 0) {
			print <<<EOW
				<div class="alert alert-dismissable alert-success" align="center">
					 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<strong>Success!</strong> 评论成功！
				</div>
EOW;
		}else{
			print <<<EOW
				<div class="alert alert-dismissable alert-danger" align="center">
					 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<strong>Warning!</strong> 评论失败！
				</div>
EOW;
		}
	}
 ?>