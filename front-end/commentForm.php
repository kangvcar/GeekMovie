

<div class="row clearfix">
<div class="col-md-2 column"></div>
<div class="col-md-8 column">
		<br><h3 align="center" class="text-center text-info">网友评论</h3>
		<?php 
			include("commentAction.php");
			if (isset($_GET['movieid'])) {
				$movieid = $_GET['movieid'];
				include("dbconnection.php");
				$eachcommentsql = "SELECT user.username, comment.content FROM comment JOIN user ON comment.user_id=user.uid AND movie_id='$movieid';";
				$result19 = $conn->query($eachcommentsql);
				if ($row = $result19->num_rows > 0) {
					while ($row = $result19->fetch_row()) {
						print <<<EOC
							<div class="alert alert-dismissable alert-info" align="left">
								 <strong>$row[0]:</strong> $row[1]
							</div>
EOC;
					}
				}
			}
		 ?>
				<?php 
					if (isset($_SESSION['lid'])) {
						$user_id = $_SESSION['lid'];
						$movie_id = $_GET['movieid'];
						print <<<EOO
						<form class="form-horizontal" role="form" action="" method="POST">
							<div class="form-group">
								<label class="col-sm-2 control-label">评 论</label>
								<div class="col-sm-10">
									<input type="hidden" name="user_id" value="$user_id">
									<input type="hidden" name="movie_id" value="$movie_id">
									<input name="commentcontent" class="form-control"/>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									 <button name="commentsubmit" class="btn btn-success btn-block">添加评论</button>
								</div>
							</div>
						</form>
EOO;
					}else{
						print <<<EOC
							<div class="alert alert-dismissable alert-info" align="center">
								 <strong>登录后才能评论！</strong><a href="LoginMain.php">跳转到登陆页面</a>
							</div>
EOC;
					}
					
				 ?>
				
</div>
<div class="col-md-2 column"></div>
</div>