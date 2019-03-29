<?php
    include_once("dbconnection.php");
    $userName = addslashes($_POST['userName']);
    $password = addslashes($_POST['password']);
    $loginSQL = "SELECT username,role  FROM admin WHERE username='$userName' AND password='$password'";
    echo $loginSQL;
    $resultLogin = mysqli_query($conn, $loginSQL);
    if (mysqli_num_rows($resultLogin) > 0) {
        session_start();
        $_SESSION['userName'] = $userName;
        $row = mysqli_fetch_assoc($resultLogin);
        if ($row['role'] == '1') {
            $_SESSION['role'] = 'superadmin';
        }else{
            $_SESSION['role'] = 'commonadmin';
        }
        // echo $_SESSION['role'];
        header("Location: index.php"); 
        exit;
    } else {
        echo "登录失败";
        header("Location: login.php"); 
        exit;
    }
    mysqli_close($conn);
?>
