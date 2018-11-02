<!-- 点击“用户管理”后显示的内容 start -->
<h3 align="center" class="text-center text-info">所有注册用户</h3>
<table class="table table-striped table-hover" width="100%">
	<thead>
		<tr>
			<th>ID</th>
			<th>用户名</th>
			<th>密码</th>
			<th>E-mail</th>
			<th>操作</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			include("dbconnection.php");
			$selectusersql = "SELECT * FROM user;";
			$result5 = $conn->query($selectusersql);
			if ($result5->num_rows > 0) {
				while ($row = $result5->fetch_row()) {
					print <<<EOA
						<tr class="success">
							<td>$row[0]</td>
							<td>$row[1]</td>
							<td>$row[2]</td>
							<td>$row[3]</td>
							<td>
								<form action="" method="POST"> 
								 	<button name="duid" value="$row[0]" type="submit" class="btn btn-danger btn-xs btn-block">删除</button>
								 </form>
							</td>
						</tr>
EOA;
				}
			}else{
				print <<<EOB
					<div class="alert alert-dismissable alert-danger" align="center">
					 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<strong>Warning!</strong> 没有注册用户！
				</div>
EOB;
			}
		 ?>
		<tr>
		 	<form action="" method="POST">
				<td>ID</td>
				<td><input type="text" class="form-control" name="ausername"></td>
				<td><input type="password" class="form-control" name="apassword"></td>
				<td><input type="email" class="form-control" name="aemail"></td>
				<td>
					<button name="auser" value="on" type="submit" class="btn btn-danger btn-xs btn-block">添加</button>
				</td>
			</form>
		</tr>	
	</tbody>
</table>
<!-- 点击“用户管理”后显示的内容 end -->