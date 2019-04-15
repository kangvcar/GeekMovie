<?php 
	include_once('dbconnection.php');
	$comment_page_sql = "SELECT cid, user_id, movie_id, content FROM comment ORDER BY cid ASC LIMIT 15";
	$result3 = $conn->query($comment_page_sql);
 ?>
<!DOCTYPE>
<html>
	<head>
		<title>评论信息管理 - Geek 极客影院</title>
		<?php include_once('head.php') ?>
		<script type="text/javascript">
			var currentPage = 1;
			function returnAnyList(page){
				//$.get("请求url","发送的数据对象","成功回调","返回数据类型");
				// 获取movie.php页的15条影片信息
				if (page<1) {return;}
				currentPage = page;
				$("#current_page_span").text("第"+currentPage+"页");
				$.get("./ajax_list_page.php",{'query_key': 'comment_list', 'page': page},
				    function(data){
				    	var comment_list_table_html = "";
						for (var i = 0; i < data.length; i++) {
							// console.log(data[i].mid);
							console.log(currentPage);
							comment_list_table_html += '<tr><td>' + data[i].cid + '</td><td>' + data[i].user_id + '</td><td>' + data[i].movie_id + ' </td><td>' + data[i].content + ' </td>'
							comment_list_table_html += '<td><a href="comment-edit.php?cid=' + data[i].cid + '" class="edit">Edit</a></td>'
							comment_list_table_html += '<td><a onclick="deleteCommentFunction('+data[i].cid+')" class="delete">Delete</a></td></tr>'
						};
						$("#comment_list_table").html(comment_list_table_html);
				},'json');
			}
			function deleteCommentFunction(id){
				$.get("./ajax_delete.php",{'query_key': 'comment_delete', 'cid': id},
				    function(data){
				    	if (data.isflag) {
				    		console.log(data.isflag);
				    		$("#flag").text('删除评论成功');
				    		$("#flag").attr("class", "success").show();
				    		returnAnyList(currentPage);
				    		var timeout=setTimeout(function () {
				    		        $("#flag").hide();
				    		    }, 1000);
				    	}else{
				    		console.log(data.isflag);
				    		$("#flag").text('删除评论失败');
				    		$("#flag").attr("class","error").show();
				    		var timeout=setTimeout(function () {
				    		        $("#flag").hide();
				    		    }, 1000);
				    	};
				},'json');
			}
		</script>
	</head>
	<body>
		
		<h1 id="head" align="center">评论信息管理</h1>
		<?php include('navigation.php') ?>
		<div id="content" class="container_16 clearfix">
			<div class="grid_5">&nbsp;</div>
			<div class="grid_4">
				<p>
					<label>关键字<small>输入评论关键字</small></label>
					<input id="search_comment" type="text" />
				</p>
			</div>
			<div class="grid_2">
				<p>
					<label>&nbsp;</label>
					<input type="submit" value="Search" onclick="searchCommemtFuncton()" />
				</p>
			</div>
			<script type="text/javascript">
				function searchCommemtFuncton(){
					var search_comment = $("#search_comment").val();
					console.log(search_comment);
					$.get("./ajax_search_page.php",{'query_key': 'comment_search', 'comment': search_comment},
				        function(data){
				        	var comment_list_table_html = "";
				    		for (var i = 0; i < data.length; i++) {
				    			// console.log(data[i].mid);
				    			console.log(currentPage);
				    			comment_list_table_html += '<tr><td>' + data[i].cid + '</td><td>' + data[i].user_id + '</td><td>' + data[i].movie_id + ' </td><td>' + data[i].content + ' </td>'
				    			comment_list_table_html += '<td><a href="comment-edit.php?cid=' + data[i].cid + '" class="edit">Edit</a></td>'
				    			comment_list_table_html += '<td><a onclick="deleteCommentFunction('+data[i].cid+')" class="delete">Delete</a></td></tr>'
				    		};
				    		$("#comment_list_table").html(comment_list_table_html);
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
							<th>用户ID</th>
							<th>影片ID</th>
							<th>评论</th>
							<th colspan="2" width="10%">操作</th>
						</tr>
					</thead>
					<tbody id="comment_list_table">
					<?php 
						if ($row = $result3->num_rows > 0) {
						    while ($row = $result3->fetch_row()) {
						      print <<<EOG
								<tr>
									<td>$row[0]</td>
									<td>$row[1]</td>
									<td>$row[2]</td>
									<td>$row[3]</td>
									<td><a href="comment-edit.php?cid=$row[0]" class="edit">Edit</a></td>
									<td><a onclick="deleteCommentFunction('$row[0]')" class="delete">Delete</a></td>
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