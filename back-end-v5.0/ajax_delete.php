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
				case 'movie_delete':
					if (!isset($_GET['mid'])) {
						echo "缺少参数，请检查参数！ ";
						exit;
					}else{
						$delete_mid = $_GET['mid'];
						$query_sql = "DELETE FROM movie WHERE mid=$delete_mid";
					}
					break;
				case 'user_delete':
					if (!isset($_GET['uid'])) {
						echo "缺少参数，请检查参数！ ";
						exit;
					}else{
						$delete_uid = $_GET['uid'];
						$query_sql = "DELETE FROM user WHERE uid=$delete_uid;";
					}
					break;
				case 'comment_delete':
					if (!isset($_GET['cid'])) {
						echo "缺少参数，请检查参数！ ";
						exit;
					}else{
						$delete_cid = $_GET['cid'];
						$query_sql = "DELETE FROM comment WHERE cid=$delete_cid;";
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

			$jarr = array('isflag' => $db_query);
			
	        echo json_encode($jarr);
			mysqli_close($conn);
		}
	}
 ?>