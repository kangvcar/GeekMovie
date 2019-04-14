<?php
    header('Content-Type:application/json;charset=utf-8');	
	include("dbconnection.php");
	if($conn){
		if(isset($_GET['count'])) {
			$count = $_GET['count'];
		}else{
			$count = 25;
		};
		$q = $_GET['q'];
		switch ($q) {
			case 'random':
				$startNum = rand(1333,20000);
				$endNum = 22879;
				$appSql = "SELECT * FROM movie WHERE mid BETWEEN $startNum AND $endNum LIMIT $count;";
				break;
			case 'score':
				$appSql = "SELECT * FROM movie ORDER BY mscore DESC LIMIT $count;";
				break;
			case 'new':
				$appSql = "SELECT * FROM movie ORDER BY mid DESC LIMIT $count;";
				break;
			case 'name':
				if (!isset($_GET['n'])) {
					echo "参数错误，请检查参数！ 缺少参数n=<影片名>";
					exit;
				}
				$n = $_GET['n'];
				$appSql = "SELECT * FROM movie WHERE mname LIKE '%$n%' LIMIT $count;";
				break;
			case 'type':
				if (!isset($_GET['t'])) {
					echo "参数错误，请检查参数！ 缺少参数t=[电视剧，电影，动漫，综艺]";
					exit;
				}
				$t = $_GET['t'];
				switch ($t) {
					case '电视剧':
						$appSql = "SELECT * FROM movie WHERE mtype LIKE '%剧_' LIMIT $count;";
						break;
					case '动漫':
						$appSql = "SELECT * FROM movie WHERE mtype LIKE '动漫_' LIMIT $count;";
						break;
					case '综艺':
						$appSql = "SELECT * FROM movie WHERE mtype LIKE '综艺_' LIMIT $count;";
						break;
					case '电影':
						$appSql = "SELECT * FROM movie WHERE mtype NOT LIKE '%剧_' AND mtype NOT LIKE '动漫_' AND mtype NOT LIKE '综艺_'LIMIT $count;";
						break;
					default:
						echo "参数错误，请检查参数！ 参数t=[电视剧，电影，动漫，综艺]";
						exit;
						break;
				}
				break;
			default:
				echo "参数错误，请检查参数！";
				exit;
				break;
		}


		$appResult = mysqli_query($conn,$appSql);
		if (!$appResult) {
			printf("Error: %s\n", mysqli_error($conn));
			exit();
		}

		$jarr = array();
		while ($rows=mysqli_fetch_array($appResult,MYSQL_ASSOC)){
			$count=count($rows);//不能在循环语句中，由于每次删除 row数组长度都减小  
			for($i=0;$i<$count;$i++){  
				unset($rows[$i]);//删除冗余数据  
			}
			array_push($jarr,$rows);
		}

		$jobj=new stdclass();//实例化stdclass，这是php内置的空类，可以用来传递数据，由于json_encode后的数据是以对象数组的形式存放的，
		//所以我们生成的时候也要把数据存储在对象中
		foreach($jarr as $key=>$value){
		$jobj->$key=$value;
		}
        echo json_encode($jobj);
		mysqli_close($conn);
	};
?>