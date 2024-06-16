<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <?php require_once('connect.php'); ?>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
        <div class="login-container">
            <div class="login-form">
                <h2>Registration</h2>
                <form action="check_register.php" method="post">
                <div class="input-group">
                    <label>Username </label><input type="text" name="r_user" id="r_user">
                    <label>Password </label><input type="password" name="r_pass" id="r_pass">
                    <label>E-Mail </label><input type="text" name="r_email" id="r_email">
                    <label>First Name </label><input type="text" name="r_first" id="r_first">
                    <label>Last Name </label><input type="text" name="r_last" id="r_last">
                    <div class="remember-me">
                        <input type="checkbox" id="remember" name="remember">
                        <label for="remember">NORobot</label>
                    </div>
                </div>
                     <button type="submit">Submit</button>
                 </form>
            </div>
        </div>
</body>
<canvas id="rainfall"></canvas>
<script type="text/javascript" src="rainfall.js">
</script>
</html>