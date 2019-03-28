<?php 
    header('Content-Type:application/json;charset=utf-8');	
	include("dbconnection.php");
	if($conn){
		if (!isset($_GET['query_key']) or !isset($_GET['page'])) {
			echo "参数错误，请检查参数！ ";
			exit;
		}else{
			$query_key = $_GET['query_key'];
			$page = 15 * ($_GET['page'] - 1);
			switch ($query_key) {
				case 'movie_list':
					$query_sql = "SELECT mid, mname, mtype, myear FROM movie ORDER BY mid ASC LIMIT $page,15;";
					break;
				case 'user_list':
					$query_sql = "SELECT uid, username, password, email FROM user ORDER BY uid ASC LIMIT $page,15;";
					break;
				case 'comment_list':
					$query_sql = "SELECT cid, user_id, movie_id, content FROM comment ORDER BY cid ASC LIMIT $page,15;";
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