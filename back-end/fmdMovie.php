<!-- 点击“查询/修改/删除电影信息”后显示的内容 start -->
<h3 align="center" class="text-center text-info">请输入影片ID进行查询,再进行修改</h3>
<form role="form" action="" method="POST">
	<div class="form-group">
		<label>ID <span style="color: red;">*ID不可修改</span></label><input name="fmid" value="<?php if(isset($_POST['fmid'])) echo($_POST['fmid']); ?>" type="number" class="form-control" />
		<br>
		<button name="fbuttom" value="on" type="submit" class="btn btn-success btn-block">请输入影片ID进行查询</button><br>
<?php
	if (isset($_POST['fbuttom'])) {
		if (!empty($_POST['fmid'])) {
			$fmid = $_POST['fmid'];
			include("dbconnection.php");
			$findmidsql = "SELECT * FROM movie WHERE mid='$fmid';";
			$result4 = $conn->query($findmidsql);
			if ($result4->num_rows > 0) {
				$row = $result4->fetch_row();
				print <<<EOT
				<label>片名</label><input name="fmname" value="$row[1]" type="text" class="form-control" />
				<label>图片url</label><input name="fmimgurl" type="url" value="$row[2]" class="form-control" />
				<label>评分</label><input name="fmscore" type="number" value="$row[3]" class="form-control" />
				<label>导演</label><input name="fmdirector" type="text" value="$row[4]" class="form-control" />
				<label>演员</label><input name="fmstar" type="text" value="$row[5]" class="form-control" />
				<label>类型</label><input name="fmtype" type="text" value="$row[6]" class="form-control" />
				<label>地区</label><input name="fmarea" type="text" value="$row[7]" class="form-control" />
				<label>上映年份</label><input name="fmyear" type="text" value="$row[8]" class="form-control" />
				<label>简介</label><textarea name="fmsumary" rows="5" cols="20"  class="form-control">$row[9]</textarea>
				<label>在线播放url</label><input name="fmplayurl" type="url" value="$row[10]" class="form-control" />
				</div>
				<button type="submit" name="modifymid" value="$row[0]" class="btn btn-warning btn-block">应用修改</button>
				<button type="submit" name="dmid" value="$row[0]" class="btn btn-danger btn-block">删除影片</button>
EOT;
			}else{
				print <<<EOF
				<div class="alert alert-dismissable alert-danger" align="center">
					 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<strong>Warning!</strong> 没有找到此ID相关的影片信息！
				</div>
EOF;
			}
		}else{
			print <<<EOF
				<div class="alert alert-dismissable alert-danger" align="center">
					 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<strong>Warning!</strong> <br> 请输入影片ID进行查询,再进行修改！<br>(可通过“查看所有影片信息”按钮查看影片ID)
				</div>
EOF;
		}
	}
 ?>
<!-- 点击“查询/修改/删除电影信息”后显示的内容 end -->