导航栏固定在顶部 start -->
<script type="text/javascript">
function showTime(){
    nowtime=new Date();
    year=nowtime.getFullYear();
    month=nowtime.getMonth()+1;
    date=nowtime.getDate();
    document.getElementById("mytime").innerText=year+"年"+month+"月"+date+" "+nowtime.toLocaleTimeString();
}
setInterval("showTime()",1000);
</script>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="navbar-header">
		 <a class="navbar-brand" href="./admin.php">后台管理系统 -- 极客Movie</a>
	</div>
	
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<!-- <ul class="nav navbar-nav">
			<li class="active">
				 <a href="#">Link</a>
			</li>
			<li>
				 <a href="#">Link</a>
			</li>
		</ul> -->
		<!-- 影片搜索框Form start -->
		<form action="" method="POST" class="navbar-form navbar-left" role="search">
			<div class="form-group">
				<input name="smname" type="text" class="form-control" />
			</div> 
			<button name="navsearch" name="on" type="submit" class="btn btn-default">影片搜索</button>
		</form>
		<!-- 影片搜索框Form start -->
		<ul class="nav navbar-nav navbar-right">
			<li>
				<a><span id="mytime"></span></a>
			</li>
			<li>
				 <a href="#"><?php echo($_SESSION['username']); ?></a>
			</li>
			<li>
				<a href="LoginAction.php?action=logout">Logout</a>
			</li>
		</ul>
	</div>
</nav>
<!-- 导航栏固定在顶部 end