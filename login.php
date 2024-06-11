<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php require_once('connect.php'); ?>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form method="post" action="check_login.php">
        <label>Username </label><input type="text" name="l_user" id="l_user">
        <label>Password </label><input type="password" name="l_pass" id="l_pass">
        <button type="submit">Submit</button>
    </form>
    <div class="login-container">
        <div class="login-form">
            <div class="img">
                <img src="img/user.png" alt="User Icon" class="imgs">
            </div>
            <h2>LOGIN</h2>
            <form method="post" action="check_login.php">
                <div class=>
                    <label>Username </label><input type="text" name="l_user" id="l_user">
                    <label>Password </label><input type="password" name="l_pass" id="l_pass">
                </div>
                <div class="remember-me">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Remember me</label>
                </div>
                <div class="forgot-password">
                    <a href="forgot-password.html">Forgot password?</a>
                </div>
                <button type="submit">Login</button>
            </form>
            <div class="create-account">
                <p>Not a member? <a href="create-account.html">Create account</a></p>
            </div>
        </div>
    </div>
</body>
</html>