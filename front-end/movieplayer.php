<br><h3 class="text-center text-info">在线播放</h3><br>
<div class="row clearfix">
<div class="col-md-2 column"></div>
<div class="col-md-8 column">
<?php 
	print <<<EEE
	<script type="text/javascript" src="ckplayer/ckplayer.js"></script>
	<div class="video" style="width: 100%;height: 300px;"></div>
	<script type="text/javascript">
		var videoObject = {
			container: '.video',//“#”代表容器的ID，“.”或“”代表容器的class
			variable: 'player',//该属性必需设置，值等于下面的new chplayer()的对象
			autoplay:true,//自动播放
			video:'$row[10]'//视频地址
		};
		var player=new ckplayer(videoObject);
	</script>
EEE;
?>
	<br>
</div>
<div class="col-md-2 column"></div>
</div>

