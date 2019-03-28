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
				case 'movie_add':
					$mid = $_POST['mid'];
					$mname = $_POST['mname'];
					$mtype = $_POST['mtype'];
					$marea = $_POST['marea'];
					$mscore = $_POST['mscore'];
					$myear = $_POST['myear'];
					$mstar = $_POST['mstar'];
					$mdirector = $_POST['mdirector'];
					$msumary = $_POST['msumary'];
					$mimgurl = $_POST['mimgurl'];
					$mplayurl = $_POST['mplayurl'];
					$query_sql = "INSERT INTO movie(mid, mname, mimgurl, mscore, mdirector, mstar, mtype, marea, myear, msumary, mplayurl) VALUES ($mid, $mname, $mimgurl, $mscore, $mdirector, $mstar, $mtype, $marea, $myear, $msumary, $mplayurl);";
					break;
				case 'user_add':
					$uid = $_POST['uid'];
					$username = $_POST['username'];
					$password = $_POST['password'];
					$email = $_POST['email'];
					$query_sql = "INSERT INTO user(uid, username, password, email) VALUES ($uid, '$username', '$password', '$email');";
					break;
				case 'movie_modify':
					$mid = $_POST['mid'];
					$mname = $_POST['mname'];
					$mtype = $_POST['mtype'];
					$marea = $_POST['marea'];
					$mscore = $_POST['mscore'];
					$myear = $_POST['myear'];
					$mstar = $_POST['mstar'];
					$mdirector = $_POST['mdirector'];
					$msumary = $_POST['msumary'];
					$mimgurl = $_POST['mimgurl'];
					$mplayurl = $_POST['mplayurl'];
					$query_sql = "UPDATE movie SET mname='$mname', mimgurl='$mimgurl', mscore='$mscore', mdirector='$mdirector', mstar='$mstar', mtype='$mtype', marea='$marea', myear='$myear', msumary='$msumary', mplayurl='$mplayurl' WHERE mid=$mid;";
					break;
				case 'user_modify':
					$uid = $_POST['uid'];
					$username = $_POST['username'];
					$password = $_POST['password'];
					$email = $_POST['email'];
					$query_sql = "UPDATE user SET username='$username', password='$password', email='$email' WHERE uid=$uid;";
					break;
				case 'comment_modify':
					$cid = $_POST['cid'];
					$user_id = $_POST['user_id'];
					$movie_id = $_POST['movie_id'];
					$content = $_POST['content'];
					$query_sql = "UPDATE comment SET user_id='$user_id', movie_id='$movie_id', content='$content' WHERE cid=$cid;";
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