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
				case 'db_comment':
					$query_sql = "SELECT user.username, comment.content FROM user, comment WHERE user.uid=comment.user_id LIMIT 5;";
					break;
				case 'db_user':
					$query_sql = "SELECT username, email FROM user LIMIT 5;";
					break;
				case 'db_vod_total':
					$query_sql = "SELECT count(*) AS total FROM movie;";
					break;
				case 'db_user_total':
					$query_sql = "SELECT count(*) AS total FROM user;";
					break;
				case 'db_comment_total':
					$query_sql = "SELECT count(*) AS total FROM comment;";
					break;
				case 'db_movie_total':
					$query_sql = "SELECT count(*) AS total FROM movie WHERE mtype LIKE '%片';";
					break;
				case 'db_dianshiju_total':
					$query_sql = "SELECT count(*) AS total FROM movie WHERE mtype LIKE '%剧';";
					break;
				case 'db_dongman_total':
					$query_sql = "SELECT count(*) AS total FROM movie WHERE mtype LIKE '动漫';";
					break;
				case 'db_jilupian_total':
					$query_sql = "SELECT count(*) AS total FROM movie WHERE mtype LIKE '纪录片';";
					break;
				case 'db_other_total':
					$query_sql = "SELECT count(*) AS total FROM `movie` WHERE mtype IN ('美女热舞写真','VIP视频秀','街拍美女视频');";
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

			// $jobj=new stdclass();//实例化stdclass，这是php内置的空类，可以用来传递数据，由于json_encode后的数据是以对象数组的形式存放的，
			// //所以我们生成的时候也要把数据存储在对象中
			// foreach($jarr as $key=>$value){
			// 	$jobj->$key=$value;
			// }
	        // echo json_encode($jobj);
	        echo json_encode($jarr);
			mysqli_close($conn);
		}
	}
 ?>