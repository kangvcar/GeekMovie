<?php 
	if (isset($_POST['dmid'])) {
		$dmid = $_POST['dmid'];
		include("dbconnection.php");
		$deletesql = "DELETE FROM movie WHERE mid =  '$dmid';";
		if ($conn->query($deletesql)) {
			print <<<EOF
				<div class="alert alert-dismissable alert-success" align="center">
					 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<strong>Success!</strong> 删除影片信息成功！<br>该影片的所有评论也被删除！
				</div>
EOF;
		}else{
			print <<<EOF
				<div class="alert alert-dismissable alert-danger" align="center">
					 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<strong>Warning!</strong> 删除影片信息失败！
				</div>
EOF;
		}		
	}
 ?>
















<?php 
	// include("dbconnection.php");
	// $parameter = parse_url($_SERVER['QUERY_STRING']);
	// $dmid = explode('=', $parameter['path'])[1];
	// // echo "$url['path']";
	// // printf($parameter['path']);
	// // $dmid = $_REQUEST['dmid'];
	// // echo "$dmid";
	// // include("dbconnection.php");
	// // DELETE FROM movie WHERE mid =  "22470"
	// // $allmovieinfosql = "SELECT mid, mname, myear FROM movie;";
	// $deletesql = "DELETE FROM movie WHERE mid =  '$dmid';";
	// if ($conn->query($deletesql)) {
	// 	echo "删除成功！";
	// }else{
	// 	echo "删除失败！";
	// }
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	
 	<title></title>
 </head>
 <body>
 	<!-- <a href="javascript:" onclick="self.location=document.referrer;">方法二：返回上一页并刷新</a>  -->
 	<!--  -->
 <!-- <script language="javascript"> window.history.back(); </script> -->
 </body>
 </html>