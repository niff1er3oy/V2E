<?php 
    session_start();
    require_once('connect.php');
    $labid = $_GET['labid'];
    $period = $_GET['period'];
    if($period==1){
        $stmt = $conn->prepare("UPDATE lab SET period_1 = 0 WHERE labid = :labid");
    }elseif($period==2){
        $stmt = $conn->prepare("UPDATE lab SET period_2 = 0 WHERE labid = :labid");
    }elseif($period==3){
        $stmt = $conn->prepare("UPDATE lab SET period_3 = 0 WHERE labid = :labid");
    }elseif($period==4){
        $stmt = $conn->prepare("UPDATE lab SET period_4 = 0 WHERE labid = :labid");
    }else{
        Header("Location: profile.php?4");
    }
    $stmt->bindParam(':labid', $labid , PDO::PARAM_INT);
    $stmt->execute();
    $stmt = $conn->prepare("DELETE FROM chat WHERE labid = $labid");
    $result = $stmt->execute();
    if($result){
        Header("Location: profile.php?5");
    }else{
        Header("Location: profile.php?6");
    }
?>