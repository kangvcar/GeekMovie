<?php
// 定义登陆信息
$servername = "localhost";
$username = "1124406";
$password = "..loginweb123";
$database = "1124406";
// $username = "root";
// $password = "root";
// $database = "okmovie3";
// 创建连接
$conn = new mysqli($servername, $username, $password, $database);
// 检测连接
if ($conn->connect_errno) {
	die("数据库连接失败：". $conn->connect_error);
}
?>