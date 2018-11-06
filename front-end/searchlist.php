<div class="container">
	<div class="row clearfix">
		<div class="col-md-2 column">
		</div>
		<div class="col-md-8 column">
			<h1 align="center"  class="text-center text-info">搜索结果</h1><br>
			<table class="table table-hover table-striped">
				<thead>
					<tr>
						<th>影片名</th>
						<th>评分</th>
						<th>演员</th>
						<th>类型</th>
						<th>年份</th>
					</tr>
				</thead>
				<tbody>
					<?php
						if (isset($_POST['navsearchsubmit'])) {
						$searchname = $_POST['navsearchname'];
						include("dbconnection.php");
						$movielistsql = "SELECT mid, mname, mscore, mstar, mtype, myear FROM movie WHERE mname LIKE '%$searchname%';";
						$result24 = $conn->query($movielistsql);
						if ($row = $result24->num_rows > 0) {
								while ($row = $result24->fetch_row()) {
									print <<<EOR
										<tr>
										<td><a href="./details.php?movieid=$row[0]">$row[1]</a></td>
										<td>$row[2]</td>
										<td>$row[3]</td>
										<td>$row[4]</td>
										<td>$row[5]</td>
										</tr>
EOR;
								}
							}
						}
					?>
				</tbody>
			</table>
		</div>
		<div class="col-md-2 column">
		</div>
	</div>
</div>