<?php
    include_once("dbconnection.php");
    $userName = addslashes($_POST['userName']);
    $password = addslashes($_POST['password']);
    $loginSQL = "select * from admin where username='$userName' and password='$password'";
    echo $loginSQL;
    $resultLogin = mysqli_query($conn, $loginSQL);
    if ($resultLogin->fetch_row() > 0) {
        session_start();
        $_SESSION['userName'] = $userName;
        header("Location: index.php"); 
        exit;
    } else {
        echo "登录失败";
        header("Location: login.php"); 
        exit;
    }
    mysqli_close($conn);
?>