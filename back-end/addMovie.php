<!-- 点击“添加电影信息”后显示的内容 start -->
<h3 align="center"  class="text-center text-info">根据提示填写如下电影信息</h3>
<form role="form" action="" method="POST">
	<div class="form-group">
		 <label>ID <span style="color: red;">(ID不能重复)</span></label><input name="amid" type="number" class="form-control" />
		 <label>片名</label><input name="amname" type="text" class="form-control" />
		 <label>图片url</label><input name="amimgurl" type="url" class="form-control" />
		 <label>评分</label><input name="amscore" type="text" class="form-control" />
		 <label>导演</label><input name="amdirector" type="text" class="form-control" />
		 <label>演员</label><input name="amstar" type="text" class="form-control" />
		 <label>类型</label><input name="amtype" type="text" class="form-control" />
		 <label>地区</label><input name="amarea" type="text" class="form-control" />
		 <label>上映年份</label><input name="amyear" type="text" class="form-control" />
		 <label>简介</label><textarea name="amsumary" rows="5" cols="20" class="form-control"></textarea>
		 <label>在线播放url</label><input name="amplayurl" type="url" class="form-control" />
	</div>
	<button name="amsubmit" value="add" type="submit" class="btn btn-success btn-block">添加</button>
</form>
<!-- 点击“添加电影信息”后显示的内容 end -->
