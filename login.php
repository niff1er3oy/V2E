<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php require_once('connect.php'); ?>
</head>
<body>
    <form method="post" action="check_login.php">
        <label>Username </label><input type="text" name="l_user" id="l_user">
        <label>Password </label><input type="password" name="l_pass" id="l_pass">
        <button type="submit">Submit</button>
    </form>
</body>
</html>