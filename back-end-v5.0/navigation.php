<?php 
	session_start(); 
	if (!isset($_SESSION['userName'])) {
		header("Location: login.php");
		exit;
	}
?>
<script type="text/javascript">
	var role = "<?php echo $_SESSION['role']; ?>"
	console.log(role);
	if (role != "superadmin") {
		alert("你的管理权限不足！只有超级管理员才能访问该页面！如有需要请联系超级管理员！");
		location.href="index.php";
	}
</script>
<ul id="navigation" align="center">
	<li><a href="index.php">总览</a></li>
	<li><a href="movie.php">影片管理</a></li>
	<li><a href="user.php">用户管理</a></li>
	<li><a href="comment.php">评论管理</a></li>
	<li><a href="logout.php" class="active">Logout</a></li>
</ul>