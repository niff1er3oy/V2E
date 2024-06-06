<<<<<<< HEAD
<?php
    session_start();
    require_once('connect.php');
    $r_user = $_POST['r_user'];
    $r_pass = $_POST['r_pass'];
    $r_email = $_POST['r_email'];
    $name = $_POST['r_first']." ".$_POST['r_last'];
    $stmt = $conn->prepare("INSERT INTO member(username, password, email, name, status) VALUES (:username, :password, :email, :name, 'student')");
    $stmt->bindParam(':username', $r_user , PDO::PARAM_STR);
    $stmt->bindParam(':password', $r_pass , PDO::PARAM_STR);
    $stmt->bindParam(':email', $r_email , PDO::PARAM_STR);
    $stmt->bindParam(':name', $name , PDO::PARAM_STR);
    $result = $stmt->execute();
    if($result){
        Header("Location: login.php");
    }else{
        Header("Location: register.php");
    }
=======
<?php
    session_start();
    require_once('connect.php');
    $r_user = $_POST['r_user'];
    $r_pass = $_POST['r_pass'];
    $r_email = $_POST['r_email'];
    $name = $_POST['r_first']." ".$_POST['r_last'];
    $stmt = $conn->prepare("INSERT INTO member(username, password, email, name, status) VALUES (:username, :password, :email, :name, 'student')");
    $stmt->bindParam(':username', $r_user , PDO::PARAM_STR);
    $stmt->bindParam(':password', $r_pass , PDO::PARAM_STR);
    $stmt->bindParam(':email', $r_email , PDO::PARAM_STR);
    $stmt->bindParam(':name', $name , PDO::PARAM_STR);
    $result = $stmt->execute();
    if($result){
        Header("Location: login.php");
    }else{
        Header("Location: register.php");
    }
>>>>>>> ef876eed22f943ee3ba159115c2dcb66f1e2affb
?>