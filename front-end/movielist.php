<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>影片排行榜</title>
	<link rel="shortcut icon" href="./0.jpg">
	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="./css/css.css">

	<script src="https://cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="./js/myjs.js"></script>
	<script src="https://cdn.bootcss.com/masonry/4.1.1/masonry.pkgd.min.js"></script>
</head>
<body>
<div class="container">
	<div class="row clearfix">
		<?php include("headnav.php") ?>
		<div class="col-md-2 column">
		</div>
		<div class="col-md-8 column">
			<!-- 电影排行榜 start  -->
			<h1 align="center"  class="text-center text-info">电影排行榜</h1><br>
			<table class="table table-hover table-striped">
				<thead>
					<tr>
						<th>影片名</th>
						<th>评分</th>
					</tr>
				</thead>
				<tbody>
					
					<?php 
						include("dbconnection.php");
						$movielistsql = "SELECT mid, mname, mscore FROM movie WHERE mtype NOT LIKE '__剧_' AND NOT mtype='动漫' ORDER BY mscore DESC LIMIT 10;";
						$result21 = $conn->query($movielistsql);
						if ($row = $result21->num_rows > 0) {
							while ($row = $result21->fetch_row()) {
								print <<< EOE
									<tr class="warning">
									<td><a href="./details.php?movieid=$row[0]">$row[1]</a></td>
									<td>$row[2]</td>
									</tr>
EOE;
							}
						}
					 ?>
					
				</tbody>
			</table>
			<!-- 电影排行榜 end  -->

			<!-- 动漫排行榜 start  -->
			<h1 align="center"  class="text-center text-info">动漫排行榜</h1><br>
			<table class="table table-hover table-striped">
				<thead>
					<tr>
						<th>动漫名</th>
						<th>评分</th>
					</tr>
				</thead>
				<tbody>
					
					<?php 
						include("dbconnection.php");
						$movielistsql = "SELECT mid, mname, mscore FROM movie WHERE mtype='动漫' ORDER BY mscore DESC LIMIT 10;";
						$result23 = $conn->query($movielistsql);
						if ($row = $result23->num_rows > 0) {
							while ($row = $result23->fetch_row()) {
								print <<< EOE
									<tr class="warning">
									<td><a href="./details.php?movieid=$row[0]">$row[1]</a></td>
									<td>$row[2]</td>
									</tr>
EOE;
							}
						}
					 ?>
					
				</tbody>
			</table>
			<!-- 动漫排行榜 end  -->

			<!-- 电视剧排行榜 start  -->
			<h1 align="center"  class="text-center text-info">电视剧排行榜</h1><br>
			<table class="table table-hover table-striped">
				<thead>
					<tr>
						<th>电视剧名</th>
						<th>评分</th>
					</tr>
				</thead>
				<tbody>
					
					<?php 
						include("dbconnection.php");
						$movielistsql = "SELECT mid, mname, mscore FROM movie WHERE mtype LIKE '__剧_' ORDER BY mscore DESC LIMIT 10;";
						$result22 = $conn->query($movielistsql);
						if ($row = $result22->num_rows > 0) {
							while ($row = $result22->fetch_row()) {
								print <<< EOE
									<tr class="warning">
									<td><a href="./details.php?movieid=$row[0]">$row[1]</a></td>
									<td>$row[2]</td>
									</tr>
EOE;
							}
						}
					 ?>
					
				</tbody>
			</table>
			<!-- 电视剧排行榜 end  -->


		</div>
		<div class="col-md-2 column">
		</div>
	</div>
	<!-- 底部 start -->
    <?php include("footer.php") ?>
    <!-- 底部 end -->
</div>
</body>
</html>