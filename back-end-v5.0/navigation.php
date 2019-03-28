<?php 
	session_start(); 
	if (!isset($_SESSION['userName'])) {
		header("Location: login.php");
		exit;
	}
?>
<ul id="navigation" align="center">
	<li><a href="index.php">总览</a></li>
	<li><a href="movie.php">影片管理</a></li>
	<li><a href="user.php">用户管理</a></li>
	<li><a href="comment.php">评论管理</a></li>
	<li><a href="logout.php" class="active"><?php if (isset($_SESSION['userName'])){echo $_SESSION['userName'];}; ?></a></li>
</ul>