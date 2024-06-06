<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <?php require_once('connect.php'); ?>
</head>
<body>
    <?php
        session_start();
        if(isset($_SESSION["userid"])){
            echo '<a href="profile.php"><button type="button">Profile</button></a>
            <a href="logout.php"><button type="button">Logout</button></a>';
        }else{
            echo '<a href="login.php"><button type="button">Login</button></a>
            <a href="register.php"><button type="button">Register</button></a>';
        }
    ?>
</body>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <?php require_once('connect.php'); ?>
</head>
<body>
    <?php
        session_start();
        if(isset($_SESSION["userid"])){
            echo '<a href="profile.php"><button type="button">Profile</button></a>
            <a href="logout.php"><button type="button">Logout</button></a>';
        }else{
            echo '<a href="login.php"><button type="button">Login</button></a>
            <a href="register.php"><button type="button">Register</button></a>';
        }
    ?>
</body>
>>>>>>> ef876eed22f943ee3ba159115c2dcb66f1e2affb
</html>