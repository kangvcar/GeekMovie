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
				case 'movie_search':
					if (isset($_GET['mname']) && ($_GET['mname'] != "")) {
						$movie_search_name = $_GET['mname'];
						$query_sql = "SELECT mid, mname, mtype, myear FROM movie WHERE mname LIKE '%{$movie_search_name}%';";
					}elseif(isset($_GET['mid'])){
						$movie_search_id = $_GET['mid'];
						$query_sql = "SELECT mid, mname, mtype, myear FROM movie WHERE mid={$movie_search_id};";
					}else{
						echo "缺少参数，请检查参数！ ";
						exit;
					}

					break;
				case 'user_search':
					if (!isset($_GET['username'])) {
						echo "缺少参数，请检查参数！ ";
						exit;
					}else{
						$user_search_username = $_GET['username'];
						$query_sql = "SELECT uid, username, password, email FROM user WHERE username LIKE '%{$user_search_username}%';";
					}
					break;
				case 'comment_search':
					if (!isset($_GET['comment'])) {
						echo "缺少参数，请检查参数！ ";
						exit;
					}else{
						$comment_search_comment = $_GET['comment'];
						$query_sql = "SELECT cid, user_id, movie_id, content FROM comment WHERE content LIKE '%{$comment_search_comment}%';";
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