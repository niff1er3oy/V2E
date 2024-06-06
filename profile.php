<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <?php require_once('connect.php'); ?>
</head>
<script type="text/JavaScript">  
    setInterval(() => {
        const now = new Date();
        const options = { timeZone:'Asia/Bangkok', hour: '2-digit', minute: '2-digit', second: '2-digit',};
    document.getElementById('clock').innerText = now.toLocaleTimeString('th-TH',options);
    }, 1000);
</script>
<body>
    <table>
        <i id='clock'>Time</i>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>08:00 - 10:00</th>
            <th>10:00 - 12:00</th>
            <th>13:00 - 15:00</th>
            <th>15:00 - 17:00</th>
        </tr>
        <?php
            session_start();
            function check($id,$period,$status)
            {
                if($status==0){
                    return '<a href="get_period.php?labid='.$id.'&period='.$period.'">Empty</a>';
                }elseif($status==$_SESSION['userid']){
                    return '<a href="out_period.php?labid='.$id.'&period='.$period.'">Not Empty</a>';
                }else{
                    return 'Not Empty';
                }
            }
            $stmt = $conn->prepare("SELECT * FROM lab ORDER BY labid");
            $stmt->execute();
            while($row = $stmt->fetch(PDO::FETCH_BOTH)){
                $name = $row['name'];
                $type = $row['type'];
                $pre1 = check($row['labid'],1,$row['period_1']);
                $pre2 = check($row['labid'],2,$row['period_2']);
                $pre3 = check($row['labid'],3,$row['period_3']);
                $pre4 = check($row['labid'],4,$row['period_4']);
                echo '<tr>
                        <td>'.$name.'</td>
                        <td>'.$type.'</td>
                        <td>'.$pre1.'</td>
                        <td>'.$pre2.'</td>
                        <td>'.$pre3.'</td>
                        <td>'.$pre4.'</td>
                    </tr>';
            }
            echo '</table>';
            echo '<a href="index.php"><button>Home</button></a>';

            $periods = [
                ['start' => 8, 'end' => 10],
                ['start' => 10, 'end' => 12],
                ['start' => 13, 'end' => 15],
                ['start' => 15, 'end' => 23]
            ];
            $timeNow = date("H");
            for ($i = 1; $i <= 4; $i++) {
                $stmt = $conn->prepare("SELECT * FROM lab WHERE period_$i = :userid");
                $stmt->bindParam(':userid', $_SESSION['userid'], PDO::PARAM_STR);
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_BOTH);
                
                if ($stmt->rowCount() > 0 && $timeNow >= $periods[$i - 1]['start'] && $timeNow < $periods[$i - 1]['end']) {
                    $labid = $row['labid'];
                    echo '<a href="lab.php?labid='.$labid.'&period='.$i.'"><button>In Lab</button></a>';
                }
            }
        ?>
</body>
</html>