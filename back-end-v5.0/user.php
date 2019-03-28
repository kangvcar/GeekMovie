<?php 
	include_once('dbconnection.php');
	$user_page_sql = "SELECT uid, username, password, email FROM user ORDER BY uid ASC LIMIT 15";
	$result2 = $conn->query($user_page_sql);
 ?>
<!DOCTYPE>
<html>
	<head>
		<title>用户信息管理 - Jike 极客影院</title>
		<?php include_once('head.php') ?>
		<script type="text/javascript">
			var currentPage = 1;
			function returnAnyList(page){
				//$.get("请求url","发送的数据对象","成功回调","返回数据类型");
				// 获取movie.php页的15条影片信息
				if (page<1) {return;}
				currentPage = page;
				$("#current_page_span").text("第"+currentPage+"页");
				$.get("./ajax_list_page.php",{'query_key': 'user_list', 'page': page},
				    function(data){
				    	var user_list_table_html = "";
						for (var i = 0; i < data.length; i++) {
							// console.log(data[i].mid);
							console.log(currentPage);
							user_list_table_html += '<tr><td>' + data[i].uid + '</td><td>' + data[i].username + '</td><td>' + data[i].password + ' </td><td>' + data[i].email + ' </td>'
							user_list_table_html += '<td><a href="user-edit.php?uid=' + data[i].uid + '" class="edit">Edit</a></td>'
							user_list_table_html += '<td><a onclick="deleteUserFunction('+data[i].uid+')" class="delete">Delete</a></td></tr>'
						};
						$("#user_list_table").html(user_list_table_html);
				},'json');
			}
			function deleteUserFunction(id){
				$.get("./ajax_delete.php",{'query_key': 'user_delete', 'uid': id},
				    function(data){
				    	if (data.isflag) {
				    		console.log(data.isflag);
				    		$("#flag").text('删除用户成功');
				    		$("#flag").attr("class", "success").show();
				    		returnAnyList(currentPage);
				    		var timeout=setTimeout(function () {
				    		        $("#flag").hide();
				    		    }, 1000);
				    	}else{
				    		console.log(data.isflag);
				    		$("#flag").text('删除用户失败');
				    		$("#flag").attr("class","error").show();
				    		var timeout=setTimeout(function () {
				    		        $("#flag").hide();
				    		    }, 1000);
				    	};
				},'json');
			};
		</script>
	</head>
	<body>
		
		<h1 id="head" align="center">用户信息管理</h1>
		<?php include('navigation.php') ?>
		<div id="content" class="container_16 clearfix">
			<div class="grid_4">&nbsp;</div>
			<div class="grid_4">
				<p>
					<label>用户名<small>可输入关键字</small></label>
					<input id="search_username" type="text" />
				</p>
			</div>
			<div class="grid_3">
				<p>
					<label>&nbsp;</label>
					<input type="submit" value="Search" onclick="searchUserFuncton()" />
					&nbsp;&nbsp;&nbsp;&nbsp;<a href="user-add.php"><input type="submit" value="Add"/></a>
				</p>
			</div>
			<script type="text/javascript">
				function searchUserFuncton(){
					var search_username = $("#search_username").val();
					console.log(search_username);
					$.get("./ajax_search_page.php",{'query_key': 'user_search', 'username': search_username},
					    function(data){
							console.log(data);
					    	var user_list_table_html = "";
							for (var i = 0; i < data.length; i++) {
								user_list_table_html += '<tr><td>' + data[i].uid + '</td><td>' + data[i].username + '</td><td>' + data[i].password + ' </td><td>' + data[i].email + ' </td>'
								user_list_table_html += '<td><a href="user-edit.php?uid=' + data[i].uid + '" class="edit">Edit</a></td>'
								user_list_table_html += '<td><a onclick="deleteUserFunction('+data[i].uid+')" class="delete">Delete</a></td></tr>'
							};
							$("#user_list_table").html(user_list_table_html);
					},'json');
					$("#swithButtom").hide();
				}
			</script>
			<div class="grid_5">&nbsp;</div>
			<div class="grid_16">
				<p id="flag"></p>
			</div>
			<div class="grid_16">
				<table>
					<thead>
						<tr>
							<th>ID</th>
							<th>用户名</th>
							<th>密码</th>
							<th>邮箱</th>
							<th colspan="2" width="10%">操作</th>
						</tr>
					</thead>
					<tbody id="user_list_table">
					<?php 
						if ($row = $result2->num_rows > 0) {
						    while ($row = $result2->fetch_row()) {
						      print <<<EOG
								<tr>
									<td>$row[0]</td>
									<td>$row[1]</td>
									<td>$row[2]</td>
									<td>$row[3]</td>
									<td><a href="user-edit.php?uid=$row[0]" class="edit">Edit</a></td>
									<td><a onclick="deleteUserFunction('$row[0]')" class="delete">Delete</a></td>
								</tr>
EOG;
						  	}
						}
					 ?>
					</tbody>
					<tfoot>
						<tr>
							<td colspan="6" class="pagination" id="swithButtom">
								<span class="active curved" onclick="returnAnyList(1)">首页</span>
								<span class="active curved" onclick="returnAnyList(--currentPage)">上一页</span>
								<span class="curved" id="current_page_span">第1页</span>
								<span class="active curved" onclick="returnAnyList(++currentPage)">下一页</span>
							</td>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
		<?php include('page_foot.html') ?>
	</body>
</html>