<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <?php require_once('connect.php'); ?>
</head>
<body>
    <form method="post" action="check_register.php">
        <label>Username </label><input type="text" name="r_user" id="r_user">
        <label>Password </label><input type="password" name="r_pass" id="r_pass">
        <label>E-Mail </label><input type="text" name="r_email" id="r_email">
        <label>First Name </label><input type="text" name="r_first" id="r_first">
        <label>Last Name </label><input type="text" name="r_last" id="r_last">
        <button type="submit">Submit</button>
    </form>
</body>
</html>