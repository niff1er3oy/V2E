<<<<<<< HEAD
<?php 
    session_start();
    require_once('connect.php');
    $labid = $_GET['labid'];
    $period = $_GET['period'];
    $userid = $_SESSION['userid'];
    if($period==1){
        $stmt = $conn->prepare("SELECT * FROM lab WHERE period_1 = :userid");
        $stmt->bindParam(':userid', $userid , PDO::PARAM_STR);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            Header("Location: profile.php?4");
        }else{
            $stmt = $conn->prepare("UPDATE lab SET period_1 = :userid WHERE labid = :labid");
        }
    }elseif($period==2){
        $stmt = $conn->prepare("SELECT * FROM lab WHERE period_2 = :userid");
        $stmt->bindParam(':userid', $userid , PDO::PARAM_STR);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            Header("Location: profile.php?4");
        }else{
            $stmt = $conn->prepare("UPDATE lab SET period_2 = :userid WHERE labid = :labid");
        }
    }elseif($period==3){
        $stmt = $conn->prepare("SELECT * FROM lab WHERE period_3 = :userid");
        $stmt->bindParam(':userid', $userid , PDO::PARAM_STR);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            Header("Location: profile.php?4");
        }else{
            $stmt = $conn->prepare("UPDATE lab SET period_3 = :userid WHERE labid = :labid");
        }
    }elseif($period==4){
        $stmt = $conn->prepare("SELECT * FROM lab WHERE period_4 = :userid");
        $stmt->bindParam(':userid', $userid , PDO::PARAM_STR);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            Header("Location: profile.php?4");
        }else{
            $stmt = $conn->prepare("UPDATE lab SET period_4 = :userid WHERE labid = :labid");
        }
    }else{
        Header("Location: profile.php?1");
    }
    $stmt->bindParam(':labid', $labid , PDO::PARAM_INT);
    $stmt->bindParam(':userid', $userid , PDO::PARAM_INT);
    $result = $stmt->execute();
    if($result){
        Header("Location: profile.php?2");
    }else{
        Header("Location: profile.php?3");
    }
=======
<?php 
    session_start();
    require_once('connect.php');
    $labid = $_GET['labid'];
    $period = $_GET['period'];
    $userid = $_SESSION['userid'];
    if($period==1){
        $stmt = $conn->prepare("SELECT * FROM lab WHERE period_1 = :userid");
        $stmt->bindParam(':userid', $userid , PDO::PARAM_STR);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            Header("Location: profile.php?4");
        }else{
            $stmt = $conn->prepare("UPDATE lab SET period_1 = :userid WHERE labid = :labid");
        }
    }elseif($period==2){
        $stmt = $conn->prepare("SELECT * FROM lab WHERE period_2 = :userid");
        $stmt->bindParam(':userid', $userid , PDO::PARAM_STR);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            Header("Location: profile.php?4");
        }else{
            $stmt = $conn->prepare("UPDATE lab SET period_2 = :userid WHERE labid = :labid");
        }
    }elseif($period==3){
        $stmt = $conn->prepare("SELECT * FROM lab WHERE period_3 = :userid");
        $stmt->bindParam(':userid', $userid , PDO::PARAM_STR);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            Header("Location: profile.php?4");
        }else{
            $stmt = $conn->prepare("UPDATE lab SET period_3 = :userid WHERE labid = :labid");
        }
    }elseif($period==4){
        $stmt = $conn->prepare("SELECT * FROM lab WHERE period_4 = :userid");
        $stmt->bindParam(':userid', $userid , PDO::PARAM_STR);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            Header("Location: profile.php?4");
        }else{
            $stmt = $conn->prepare("UPDATE lab SET period_4 = :userid WHERE labid = :labid");
        }
    }else{
        Header("Location: profile.php?1");
    }
    $stmt->bindParam(':labid', $labid , PDO::PARAM_INT);
    $stmt->bindParam(':userid', $userid , PDO::PARAM_INT);
    $result = $stmt->execute();
    if($result){
        Header("Location: profile.php?2");
    }else{
        Header("Location: profile.php?3");
    }
>>>>>>> ef876eed22f943ee3ba159115c2dcb66f1e2affb
?>