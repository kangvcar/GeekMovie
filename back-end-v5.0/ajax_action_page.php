<?php 
    header('Content-Type:application/json;charset=utf-8');	
	include("dbconnection.php");
	if($conn){
		if (!isset($_GET['query_key'])) {
			echo "参数错误，请检查参数！ ";
			exit;
		}else{
			$query_key = $_GET['query_key'];
			switch ($query_key) {
				case 'movie_edit':
					if (!isset($_GET['mid'])) {
						echo "缺少参数，请检查参数！ ";
						exit;
					}else{
						$edit_mid = $_GET['mid'];
						$query_sql = "SELECT mid, mname, mimgurl, mscore, mdirector, mstar, mtype, marea, myear, msumary, mplayurl FROM movie WHERE mid=$edit_mid;";
					}
					break;
				case 'user_edit':
					if (!isset($_GET['uid'])) {
						echo "缺少参数，请检查参数！ ";
						exit;
					}else{
						$edit_uid = $_GET['uid'];
						$query_sql = "SELECT uid, username, password, email FROM user WHERE uid=$edit_uid;";
					}
					break;
				case 'comment_edit':
					if (!isset($_GET['cid'])) {
						echo "缺少参数，请检查参数！ ";
						exit;
					}else{
						$edit_cid = $_GET['cid'];
						$query_sql = "SELECT cid, user_id, movie_id, content FROM comment WHERE cid=$edit_cid;";
					}
					break;
				default:
					$query_sql = "";
					echo "参数错误，请检查参数！";
					break;
			}
			$db_query = mysqli_query($conn,$query_sql);
			if (!$db_query) {
				printf("Error: %s\n", mysqli_error($conn));
				exit();
			}

			$jarr = array();
			while ($rows=mysqli_fetch_array($db_query,MYSQL_ASSOC)){
				$count=count($rows);//不能在循环语句中，由于每次删除 row数组长度都减小  
				for($i=0;$i<$count;$i++){  
					unset($rows[$i]);//删除冗余数据  
				}
				array_push($jarr,$rows);
			}
	        echo json_encode($jarr);
			mysqli_close($conn);
		}
	}
 ?>