<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php require_once('connect.php'); ?>
    <link rel="stylesheet" href="styles.css">
    <title>Realistic Rainfall Animation</title>
    <style>
        body {
            background-color: black;
            overflow: hidden;
        }
        
        canvas {
            position: absolute;
            top: 0;
            left: 0;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-form">
            <div class="img">
                <img src="img/user.png" alt="User Icon" class="imgs">
            </div>
            <h2>LOGIN</h2>
            <form method="post" action="check_login.php">
                <div class="input-group">
                    <label>Username </label><input type="text" name="l_user" id="l_user">
                </div>
                <div class="input-group">
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
            <div class="Register">
                <p>Not a member? <a href="Register.php">Register</a></p>
            </div>
        </div>
    </div>
    <canvas id="rainfall"></canvas>

    <script>
        const canvas = document.getElementById('rainfall');
        const ctx = canvas.getContext('2d');

        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;

        const raindrops = [];

        function createRaindrop() {
            const x = Math.random() * canvas.width;
            const y = -5;
            const speed = Math.random() * 5 + 2;
            const length = Math.random() * 20 + 10;

            raindrops.push({ x, y, speed, length });
        }

        function updateRaindrops() {
            for (let i = 0; i < raindrops.length; i++) {
                const raindrop = raindrops[i];

                raindrop.y += raindrop.speed;

                if (raindrop.y > canvas.height) {
                    raindrops.splice(i, 1);
                    i--;
                }
            }
        }

        function drawRaindrops() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);

            ctx.strokeStyle = 'white';
            ctx.lineWidth = 2;

            for (let i = 0; i < raindrops.length; i++) {
                const raindrop = raindrops[i];

                ctx.beginPath();
                ctx.moveTo(raindrop.x, raindrop.y);
                ctx.lineTo(raindrop.x, raindrop.y + raindrop.length);
                ctx.stroke();
            }
        }

        function animate() {
            createRaindrop();
            updateRaindrops();
            drawRaindrops();

            requestAnimationFrame(animate);
        }

        animate();
    </script>
</body>
</html>