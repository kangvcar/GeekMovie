<!-- 点击“查询所有电影信息”后显示的内容 start -->

<?php 
	echo "<h3 align='center' class='text-center text-info'>本站已收录如下影片</h3>";
 ?>
<table class="table table-hover">
	<thead>
		<tr>
			<th>ID</th>
			<th>片名</th>
			<th>年份</th>
			<th>修改</th>
			<th>删除</th>
		</tr>
	</thead>
	<tbody>
		<?php
			if (isset($_GET['page']) && $_GET['page'] > 0 && !isset($_POST['navsearch'])) {
			 	$page = $_GET['page'];
			 }else{
			 	$page = 1;
			 }
			 $num_rec_per_page=10;   // 每页显示数量
			 $start_from = ($page-1) * $num_rec_per_page;
			 include("dbconnection.php");
			 if (isset($_POST['navsearch'])) {
			 	$smname = $_POST['smname'];
			 	// $namesearchmoviesql = "SELECT mid, mname, myear FROM movie WHERE mname like '%$smname%';";
			 	$allmovieinfosql = "SELECT mid, mname, myear FROM movie WHERE mname like '%$smname%' LIMIT $start_from, $num_rec_per_page;";
			 }else{
			 	// $allmovieinfosql = "SELECT mid, mname, myear FROM movie LIMIT $start_from, $num_rec_per_page;";
			 	$allmovieinfosql = "SELECT mid, mname, myear FROM movie LIMIT $start_from, $num_rec_per_page;";
			 }

			
			
			if ($result2 = $conn->query($allmovieinfosql)) {
				if ($result2->num_rows == 0) {
					print <<<EOT
					<br>
					<div class="alert alert-dismissable alert-danger" align="center">
						 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<strong>Warning!</strong> 没有更多影片！
					</div>
EOT;
				}
				while ($row = $result2->fetch_row()) {
					echo "<tr>";
					// echo "<td><input readonly type='text' value='"."$row[0]"."' /></td>"."<td>"."$row[1]"."</td>"."<td>"."$row[2]"."</td>";
					// echo "<td>";
					// <td> <input type="text" name="fmid" value="$row[0]"> </td>
					print <<<EOU
						<form action="" method="POST">
							<input type="hidden" name="fmid" value="$row[0]">
							<td> $row[0] </td>
							<td> $row[1]</td>
							<td> $row[2] </td>
						 	<td> <button name="fbuttom" value="on" type="submit" class="btn btn-danger btn-xs btn-block">修改</button> </td>
						</form>
EOU;
					print <<<EOF
						<td>
						<form action="" method="POST"> 
						 	<button name="dmid" value="$row[0]" type="submit" class="btn btn-danger btn-xs btn-block">删除</button>
						</form>
						</td>
EOF;
					echo "</td>";
					echo "</tr>";
				}
			}
		 ?>
	</tbody>
</table>
<?php 
	if (!isset($smname)) {
		echo '<div align="center">';
		echo '<ul class="pagination pagination-lg" align="center"><li>';
		echo '<a href="'.'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?allmovie=on'.'&page='.($page-1).'"'.'>Prev</a></li><li>';
		echo '<a href="'.'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?allmovie=on'.'&page='.($page+1).'"'.'>Prev</a></li></ul></div>';	
	}
 ?>

<!-- 点击“查询所有电影信息”后显示的内容 end