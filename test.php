<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ESP32-CAM Live Stream</title>
  <script>
    function refreshImage() {
      document.getElementById("video_feed").src = "video_feed.jpg?" + new Date().getTime();
    }
    setInterval(refreshImage, 100);
  </script>
</head>
<body>
  <h1>ESP32-CAM Live Stream</h1>
  <img id="video_feed" src="video_feed.jpg" width="640" height="480">
</body>
</html>