<!-- 影片图片 & 影片信息 start -->
<div class="row clearfix">
<div class="col-md-2 column"></div>
<?php 
	if (isset($_GET['movieid'])) {
		$mid = $_GET['movieid'];
		include("dbconnection.php");
		$detailsql = "SELECT mid, mname, mimgurl, mscore, mdirector, mstar, mtype, marea, myear, msumary, mplayurl FROM movie WHERE mid='$mid';";
		$result6 = $conn->query($detailsql);
		if ($row = $result6->fetch_row()) {
			print <<<EOL
			<div class="col-md-4 column">
				<div class="img-class">
					<img src="$row[2]" alt="$row[1]">
				</div>
			</div>
			<div class="col-md-4 column">
				<br>
				<dl>
					<dt>片名：</dt>
					<dd>$row[1]</dd>
					<dt>评分：</dt>
					<dd>$row[3]</dd>
					<dt>导演：</dt>
					<dd>$row[4]</dd>
					<dt>演员：</dt>
					<dd>$row[5]</dd>
					<dt>类型：</dt>
					<dd>$row[6]</dd>
					<dt>地区：</dt>
					<dd>$row[7]</dd>
					<dt>上映时间：</dt>
					<dd>$row[8]</dd>
					<dt>影片简介：</dt>
					<dd>$row[9]</dd>
				</dl>
			</div>
		 <div class="col-md-2 column"></div>

EOL;
		}
	}
 ?>
</div>
<!-- 影片图片 & 影片信息 end-->

