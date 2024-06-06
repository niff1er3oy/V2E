<<<<<<< HEAD
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lab";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
  echo "Connection failed: " . $e->getMessage();
}
=======
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lab";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
  echo "Connection failed: " . $e->getMessage();
}
>>>>>>> ef876eed22f943ee3ba159115c2dcb66f1e2affb
?>