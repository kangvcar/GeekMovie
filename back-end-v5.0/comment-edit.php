<?php 
	$edit_cid = $_GET['cid'];
?>
<!DOCTYPE>
<html>
	<head>
		<title>评论信息管理 - Jike 极客影院</title>
		<?php include_once('head.php') ?>
		<script type="text/javascript">
			$(document).ready(function getUserInfo(id){
				//$.get("请求url","发送的数据对象","成功回调","返回数据类型");
				// 获取movie.php页的15条影片信息
				$.get("./ajax_action_page.php",{'query_key':'comment_edit','cid': <?php echo $edit_cid; ?>},
				    function(data){
				    	console.log(data[0])
				    	$("#cid").val(data[0].cid);
				    	$("#user_id").val(data[0].user_id);
				    	$("#movie_id").val(data[0].movie_id);
				    	$("#content2").val(data[0].content);
				},'json');
			});
			function modifyCommentFunction(){
				var cid = $("#cid").val();
				var user_id = $("#user_id").val();
				var movie_id = $("#movie_id").val();
				var content2 = $("#content2").val();
				$.post("./ajax_add.php?query_key=comment_modify",{'cid': cid, 'user_id': user_id, 'movie_id': movie_id, 'content': content2},
					function(data){
						if (data.isflag) {
							console.log(data.isflag);
							$("#flag").text('修改评论信息成功');
							$("#flag").attr("class", "success").show();
							var timeout=setTimeout(function () {
							        $("#flag").hide();
							    }, 1000);
						}else{
							console.log(data.isflag);
							$("#flag").text('修改评论信息失败');
							$("#flag").attr("class","error").show();
							var timeout=setTimeout(function () {
							        $("#flag").hide();
							    }, 1000);
						};
					},'json');
			}
			function resetUserFunction(){
				$("input[type='text'], input[type='email']").val("");
			}
		</script>
	</head>
	<body>
	<h1 id="head" align="center">评论信息管理</h1>
	<?php include('navigation.php') ?>
			<div id="content" class="container_16 clearfix">
				<div class="grid_16">
					<h2>修改评论信息</h2>
					<p id="flag"></p>
				</div>

				<div class="grid_4">
					<p>
						<label>ID <small>不可修改.</small></label>
						<input id="cid" type="text" name="cid" disabled="true" />
					</p>
					<p>
						<label>用户ID <small>不可修改</small> </label>
						<input id="user_id" type="text" name="uname" disabled="true" />
					</p>
					<p>
						<label>影片ID <small>不可修改</small> </label>
						<input id="movie_id" type="text" name="uname" disabled="true" />
					</p>
					<p>
						<label>评论 </label>
						<textarea id="content2" rows="5" name="content"></textarea>
					</p>
				</div>
				<div class="grid_16">
					<p class="submit">
						<input type="reset" value="Reset" onclick="resetUserFunction()" />
						<input type="submit" value="Post" onclick="modifyCommentFunction()" />
					</p>
				</div>
			</div>
		<?php include('page_foot.html') ?>
	</body>
</html>