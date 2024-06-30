<?php
require_once('connect.php');

if (isset($_POST['labid'])) {
    $labid = $_POST['labid'];

    $stmt = $conn->prepare("SELECT * FROM chat WHERE labid = :labid ORDER BY id_chat DESC");
    $stmt->bindParam(':labid', $labid, PDO::PARAM_STR);
    $stmt->execute();

    echo '<table>
            <tr>
                <td>msg</td>
                <td>user</td>
            </tr>';

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $msg = htmlspecialchars($row['msg']);
        $user = htmlspecialchars($row['user']);
        echo '<tr>
                <td>'.$msg.'</td>
                <td>'.$user.'</td>
              </tr>';
    }

    echo '</table>';
} else {
    echo "Error: Invalid labid.";
}
?>
