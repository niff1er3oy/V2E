<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>
    <?php require_once('connect.php'); ?>
</head>
<body>
    <div id="msgbox"></div>
    <?php 
        session_start();
        $labid = $_GET['labid'];
        $period = $_GET['period'];
        $userid = $_SESSION['userid'];
        echo '<a href="out_period.php?labid='.$labid.'&period='.$period.'"><button type="button">Out Lab</button></a>';
    ?>
    <input type="text" id="msgInput">
    <button onclick="sendMsg()">Send</button>

    <script type="text/javascript">
        function sendMsg() {
            var msg = document.getElementById('msgInput').value;
            var labid = <?php echo json_encode($labid); ?>;
            var userid = <?php echo json_encode($userid); ?>;
            
            $.ajax({
                type: 'POST',
                url: 'save_message.php',
                data: {
                    labid: labid,
                    msg: msg,
                    user: userid
                },
                success: function(response) {
                    document.getElementById('msgInput').value = ''; // Clear input field
                    console.log(response);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        }

        function fetchMessages() {
            var labid = <?php echo json_encode($labid); ?>;
            $.ajax({
                url: "realtimechat.php",
                method: "POST",
                data: { labid: labid },
                success: function(data) {
                    $("#msgbox").html(data);
                }
            });
        }

        setInterval(fetchMessages, 1000); // Fetch messages every 1 second
    </script>
</body>
</html>
