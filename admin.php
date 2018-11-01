<?php  
session_start();  
//检测是否登录，若没登录则转向登录界面  
if(!isset($_SESSION['id'])){  
    header("Location:LoginMain.php");  
    exit();  
}
?>  
<!DOCTYPE html>
<html>
<head>
	<title>后台管理系统 by极客Movie</title>
	<meta charset="utf-8"> 
	<link rel="stylesheet" type="text/css" href="bootstrap-3.0.1/dist/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-3.0.1/dist/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-3.0.1/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-3.0.1/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<div class="row clearfix">
		<!-- 此布局为空 start -->
		<div class="col-md-2 column">
		</div>
		<!-- 此布局为空 end -->
		<div class="col-md-8 column">
			<!-- 导航栏固定在顶部 start -->
			<?php include("headnav.php") ?>
			<!-- 导航栏固定在顶部 end -->
			<!-- 按钮选项 start -->
			<hr><hr>
			<form action="" method="GET">
				<button name="allmovie" value="on" class="btn btn-lg  btn-block">查询所有电影信息</button> 
				<button name="addmovie" value="on" class="btn btn-info btn-lg btn-block">添加电影信息</button> 
				<button name="fmdmovie" value="on" class="btn btn-warning btn-lg btn-block"><span>查询/修改/删除电影信息</span></button> 
				<button name="commentmovie" value="on" class="btn btn-danger btn-lg btn-block">评论管理</button> 
				<button name="usermanagenment" value="on" class="btn btn-lg btn-primary btn-block">用户管理</button>
			</form>

			<hr>
			<!-- 按钮选项 end -->
			<?php 
				// if (isset($_GET['allmovie'])) {
				// 	// echo "查询所有电影信息";
				// }
			 ?>
			<!-- 页面默认显示信息 start -->
			<?php if ((!isset($_POST['navsearch']) & !isset($_GET['allmovie']) & !isset($_GET['addmovie']) & !isset($_GET['fmdmovie']) & !isset($_GET['commentmovie']) & !isset($_GET['usermanagenment']))) {
				include("welcome.php");
			} ?>
			<!-- 页面默认显示信息 end -->

			<!-- 点击“查询所有电影信息”后显示的内容 start -->
			<?php if (isset($_GET['allmovie']) or isset($_POST['navsearch'])) {
				// include("deletemovie.php");
				if (!isset($_POST['fbuttom']) && !isset($_POST['modifymid']) && !isset($_POST['dmid'])) {
					include("allMovie.php");
				}else{
					include("deletemovie.php");
					include("modifymovieaction.php");
					include("fmdMovie.php");
				}
			} ?>
			<!-- 点击“查询所有电影信息”后显示的内容 end -->

			<!-- 点击“添加电影信息”后显示的内容 start -->
			<?php if (isset($_GET['addmovie']) & !isset($_POST['navsearch'])) {
				
				include("addmovieaction.php");				 
				include("addMovie.php");
			} ?>
			<!-- 点击“添加电影信息”后显示的内容 end -->
			
			<!-- 点击“查询/修改/删除电影信息”后显示的内容 start -->
			<?php if (isset($_GET['fmdmovie']) & !isset($_POST['navsearch'])) {
				// include("fmdmovieaction.php");
				include("deletemovie.php");
				include("modifymovieaction.php");
				include("fmdMovie.php");
			} ?>
			<!-- 点击“查询/修改/删除电影信息”后显示的内容 end -->

			<!-- 点击“评论管理”后显示的内容 start -->
			<?php if (isset($_GET['commentmovie']) & !isset($_POST['navsearch'])) {
				include("deletecommentaction.php");
				include("commentMovie.php");
			} ?>
			<!-- 点击“评论管理”后显示的内容 end -->
			
			<!-- 点击“用户管理”后显示的内容 start -->
			<?php if (isset($_GET['usermanagenment']) & !isset($_POST['navsearch'])) {
				include("deleteuseraction.php");
				include("userManagenment.php");
			} ?>
			<!-- 点击“用户管理”后显示的内容 end -->
		</div>

		<!-- 此布局为空 start -->
		<div class="col-md-2 column">
		</div>
		<!-- 此布局为空 end -->
	</div>
</div>
<script type="text/javascript" src="bootstrap-3.0.1/dist/js/bootstrap.js"></script>
<script type="text/javascript" src="bootstrap-3.0.1/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="bootstrap-3.0.1/jquery/jquery-3.3.1.js"></script>
<script type="text/javascript" src="bootstrap-3.0.1/jquery/jquery-3.3.1.min.js"></script>
</body>
</html>