<?php
    session_start();
    require_once('connect.php');
    $l_user = $_POST['l_user'];
    $l_pass = $_POST['l_pass'];
    $stmt = $conn->prepare("SELECT * FROM member WHERE username = :username and password = :password");
    $stmt->bindParam(':username', $l_user , PDO::PARAM_STR);
    $stmt->bindParam(':password', $l_pass , PDO::PARAM_STR);
    $result = $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_BOTH);
    if($result){
        $_SESSION['userid'] = $row['id'];
        Header("Location: index.php");
    }else{
        Header("Location: login.php");
    }
?>