<!-- 点击“评论管理”后显示的内容 start -->
<h3 align="center" class="text-center text-info">所有评论信息</h3>
<table class="table table-striped table-hover" width="100%">
	<thead>
		<tr>
			<th>ID</th>
			<th>用户ID</th>
			<th>影片ID</th>
			<th>评论</th>
			<th>操作</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			include("dbconnection.php");
			$selectcommentsql = "SELECT * FROM comment;";
			$result8 = $conn->query($selectcommentsql);
			if ($result8->num_rows > 0) {
				while ($row = $result8->fetch_row()) {
					print <<<EOA
						<tr class="success">
							<td>$row[0]</td>
							<td>$row[1]</td>
							<td>$row[2]</td>
							<td>$row[3]</td>
							<td>
								<form action="" method="POST"> 
								 	<button name="dcid" value="$row[0]" type="submit" class="btn btn-danger btn-xs btn-block">删除</button>
								 </form>
							</td>
						</tr>
EOA;
				}
			}else{
				print <<<EOB
					<div class="alert alert-dismissable alert-danger" align="center">
					 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<strong>Warning!</strong> 没有查询到评论！
				</div>
EOB;
			}
		 ?>
	</tbody>
</table>
<!-- 点击“评论管理”后显示的内容 end -->