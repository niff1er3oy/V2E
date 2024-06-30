<?php
require_once('connect.php');
session_start();

if (isset($_POST['labid']) && isset($_POST['msg']) && isset($_POST['user'])) {
    $labid = $_POST['labid'];
    $msg = $_POST['msg'];
    $user = $_POST['user'];

    $stmt = $conn->prepare("INSERT INTO chat (labid, msg, user) VALUES (:labid, :msg, :user)");
    $stmt->bindParam(':labid', $labid, PDO::PARAM_STR);
    $stmt->bindParam(':msg', $msg, PDO::PARAM_STR);
    $stmt->bindParam(':user', $user, PDO::PARAM_STR);
    $stmt->execute();

    echo "Message saved!";
} else {
    echo "Error: Invalid input.";
}
?>
