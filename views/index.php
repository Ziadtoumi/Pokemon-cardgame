<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Pakimon Cardgame</title>
    <link rel="stylesheet" href="../css/home.css">
</head>
<body>

    <header>
        <div class="logo">JZ</div>
        <div class="auth-links">
            <div class="login"><a href="login.php">Login</a></div>
            <div class="register"><a href="register.php">Register</a></div>
        </div>
    </header>

    <div class="logo-container">
        <div class="pakimon">PAKIMON</div>
        <div class="trading-card">TRADING CARD GAME</div>
    </div>

    <nav>
        <ul>
            <li><a href="#">Packs</a></li>
            <li><a href="#">Fight</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>

</body>

<script>
    let leftImage = document.querySelector('.background .left');
    let rightImage = document.querySelector('.background .right');

    let scaleValue = 1;
    let movingLeft = true;

    function animateBackground() {
        // Zoom in and out effect
        if (scaleValue >= 1.1) movingLeft = false;
        if (scaleValue <= 1) movingLeft = true;

        scaleValue += movingLeft ? 0.001 : -0.001;

        // Apply scale transformation
        leftImage.style.transform = `scale(${scaleValue})`;
        rightImage.style.transform = `scale(${scaleValue})`;

        requestAnimationFrame(animateBackground);
    }

    // Start the animation loop
    animateBackground();
</script>

</html>