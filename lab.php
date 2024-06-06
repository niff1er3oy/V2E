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
</html>