<?php 
	include_once('dbconnection.php');
	$movie_page_sql = "SELECT mid, mname, mtype, myear FROM movie ORDER BY mid ASC LIMIT 15";
	$result1 = $conn->query($movie_page_sql);
 ?>
<!DOCTYPE>
<html>
	<head>
		<title>影片信息管理 - Geek 极客影院</title>
		<?php include_once('head.php') ?>
		<script type="text/javascript">
			var currentPage = 1;
			function returnAnyList(page){
				//$.get("请求url","发送的数据对象","成功回调","返回数据类型");
				// 获取movie.php页的15条影片信息
				if (page<1) {return;}
				currentPage = page;
				$("#current_page_span").text("第"+currentPage+"页");
				$.get("./ajax_list_page.php",{'query_key': 'movie_list', 'page': page},
				    function(data){
				    	var movie_list_table_html = "";
						for (var i = 0; i < data.length; i++) {
							// console.log(data[i].mid);
							console.log(currentPage);
							movie_list_table_html += '<tr><td>' + data[i].mid + '</td><td>' + data[i].mname + '</td><td>' + data[i].mtype + ' </td><td>' + data[i].myear + ' </td>'
							movie_list_table_html += '<td><a href="movie-edit.php?mid=' + data[i].mid + '" class="edit">Edit</a></td>'
							movie_list_table_html += '<td><a onclick="deleteMovieFunction('+data[i].mid+')" class="delete">Delete</a></td></tr>'
						};
						$("#movie_list_table").html(movie_list_table_html);
				},'json');
			};
			function deleteMovieFunction(id){
				$.get("./ajax_delete.php",{'query_key': 'movie_delete', 'mid': id},
				    function(data){
				    	if (data.isflag) {
							console.log(data.isflag);
							$("#flag").text('删除影片信息成功');
							$("#flag").attr("class", "success").show();
							returnAnyList(currentPage);
							var timeout=setTimeout(function () {
							        $("#flag").hide();
							    }, 1000);
						}else{
							console.log(data.isflag);
							$("#flag").text('删除影片信息失败');
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
		
		<h1 id="head" align="center">影片信息管理</h1>
		<?php include('navigation.php') ?>
		<div id="content" class="container_16 clearfix">
			<div class="grid_2">&nbsp;</div>
			<div class="grid_3">
				<p>
					<label>影片名<small>可输入关键字</small></label>
					<input id="search_name" name="mname" type="text" />
				</p>
			</div>
			<div class="grid_1">
				<p>
					<label>/</label>或
				</p>
			</div>
			<div class="grid_4">
				<p>
					<label>影片ID<small>影片名和ID输入其一即可</small></label>
					<input id="search_id" name="mid" type="text" value="">
				</p>
			</div>
			<div class="grid_3">
				<p>
					<label>&nbsp;</label>
					<input type="submit" value="Search" onclick="searchMovieFuncton()" />
					&nbsp;&nbsp;&nbsp;&nbsp;<a href="movie-add.php"><input type="submit" value="Add"/></a>
				</p>
			</div>
			<script type="text/javascript">
				function searchMovieFuncton(){
					var search_name = $("#search_name").val();
					var search_id = $("#search_id").val();
					console.log(search_id+search_name);
					$.get("./ajax_search_page.php",{'query_key': 'movie_search', 'mname': search_name, 'mid': search_id},
					    function(data){
							console.log(data);
					    	var movie_list_table_html = "";
							for (var i = 0; i < data.length; i++) {
								movie_list_table_html += '<tr><td>' + data[i].mid + '</td><td>' + data[i].mname + '</td><td>' + data[i].mtype + ' </td><td>' + data[i].myear + ' </td>'
								movie_list_table_html += '<td><a href="movie-edit.php?mid=' + data[i].mid + '" class="edit">Edit</a></td>'
								movie_list_table_html += '<td><a onclick="deleteMovieFunction('+data[i].mid+')" class="delete">Delete</a></td></tr>'
							};
							$("#movie_list_table").html(movie_list_table_html);
						},'json');
				}
			</script>
			<div class="grid_16" >
				<p id="flag"></p>
			</div>
			<div class="grid_3">&nbsp;</div>
			<div class="grid_16">
				<table>
					<thead>
						<tr>
							<th>ID</th>
							<th>片名</th>
							<th>类型</th>
							<th>年份</th>
							<th colspan="2" width="10%">操作</th>
						</tr>
					</thead>
					<tbody id="movie_list_table">
						<?php 
							if ($row = $result1->num_rows > 0) {
							    while ($row = $result1->fetch_row()) {
							      print <<<EOG
									<tr>
										<td>$row[0]</td>
										<td>$row[1]</td>
										<td>$row[2]</td>
										<td>$row[3]</td>
										<td><a href="movie-edit.php?mid=$row[0]" class="edit">Edit</a></td>
										<td><a onclick="deleteMovieFunction($row[0])" class="delete">Delete</a></td>
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