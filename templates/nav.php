<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="dist/hamburgers.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e8099e14eb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</head>
<body>
    <nav class="nav">
        <div class="nav__wrapper">
            <a href="home.php" class="nav__link"><img src="images/GameWave-Logo.jpg" alt="Logo" class="nav__logo"></a>
            <button class="nav__hamburger hamburger hamburger--squeeze" type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
            <div class="nav__inner">
                <h3 class="nav__login-btn" id="login-btn">Login</h3>
                <button class="nav__register-btn" id="register-btn">Register</button>
                <img src="images/shopping-cart.png" alt="Shopping cart" class="nav__shopping-cart" id="cart-btn">
            </div>
        </div>
    </nav>
