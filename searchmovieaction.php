<?php 
	if (isset($_POST['navsearch'])) {
		$smname = $_POST['smname'];
		include("dbconnection.php");
		$namesearchmoviesql = "SELECT mid, mname, myear FROM movie LIMIT $start_from, $num_rec_per_page;";
	}
 ?>