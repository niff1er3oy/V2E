<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/paho-mqtt/1.0.1/mqttws31.js" type="text/javascript"></script>
    <!-- <script type="text/javascript" src="js/netpie.js"></script> -->
    <?php require_once('connect.php'); ?>
</head>
<body>
    <?php 
        session_start();
        $labid = $_GET['labid'];
        $period = $_GET['period'];
        $userid = $_SESSION['userid'];
        echo '<a href="out_period.php?labid='.$labid.'&period='.$period.'"><button type="button">Out Lab</button></a>';
        $stmt = $conn->prepare("SELECT * FROM chat ORDER BY labid");
        $stmt->execute();
        while($row = $stmt->fetch(PDO::FETCH_BOTH)){
            echo $row['msg'];
        }
        function msgg(){
            $stmt = $conn->prepare("INSERT INTO chat(labid, msg, user) VALUES (:labid, :msg, :user)");
            $stmt->bindParam(':labid', $labid , PDO::PARAM_STR);
            $stmt->bindParam(':msg', $msg , PDO::PARAM_STR);
            $stmt->bindParam(':user', $userid , PDO::PARAM_STR);
            $result = $stmt->execute();
        }
    ?>
    <input type="text">
    <button onclick="msgg()">msg</button>
</body>
</html>