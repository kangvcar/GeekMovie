<!DOCTYPE html>
<html>
<head>
	<title>后台管理系统 by jiekemovie</title>
	<meta charset="utf-8"> 
	<link rel="stylesheet" type="text/css" href="bootstrap-3.0.1/dist/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-3.0.1/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-4 column">
		</div>
		<div class="col-md-4 column">
			<br><br><br><br><br><br>
			<?php 
				include("LoginForm.php");
				include("LoginAction.php");
			 ?>
		</div>
		<div class="col-md-4 column">
		</div>
	</div>
</div>
<script type="text/javascript" src="bootstrap-3.0.1/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="bootstrap-3.0.1/jquery/jquery-3.3.1.min.js"></script>
</body>
</html>