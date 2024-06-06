<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/paho-mqtt/1.0.1/mqttws31.js" type="text/javascript"></script>
    <script type="text/javascript" src="netpie.js"></script>
    <?php require_once('connect.php'); ?>
</head>
<body>
    <?php 
        session_start();
        $labid = $_GET['labid'];
        $period = $_GET['period'];
        echo '<a href="out_period.php?labid='.$labid.'&period='.$period.'"><button type="button">Out Lab</button></a>';
    ?>
</body>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab</title>
    <?php require_once('connect.php'); ?>
</head>
<body>
    <?php 
        session_start();
        $labid = $_GET['labid'];
        $period = $_GET['period'];
        echo '<a href="out_period.php?labid='.$labid.'&period='.$period.'"><button type="button">Out Lab</button></a>';
    ?>
</body>
>>>>>>> ef876eed22f943ee3ba159115c2dcb66f1e2affb
</html>