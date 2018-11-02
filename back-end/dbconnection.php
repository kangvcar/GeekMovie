<?php
// 定义登陆信息
$servername = "localhost";
$username = "root";
$password = "root";
$database = "okmovie";
// 创建连接
$conn = new mysqli($servername, $username, $password, $database);
// 检测连接
if ($conn->connect_errno) {
	die("数据库连接失败：". $conn->connect_error);
}
// else{
// 	echo "数据库连接成功!";
// }
?>