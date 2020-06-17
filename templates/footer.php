<div class="login-modal" id="login-modal">
    <div class="login-modal__background close-modal"></div>
    <div class="login-modal__modal">
        <img src="images/GameWave-Logo.jpg" alt="logo" class="login-modal__modal-logo">
        <p class="login-modal__modal-text">Welcome back! Please sign in to manage your account!</p>
        <input type="email" class="login-modal__modal-input" placeholder="Email Adress">
        <input type="password" class="login-modal__modal-input" placeholder="Password">
        <button type="submit" class="login-modal__modal-button">Sign in</button>
        <a href="forgot-pass.php" class="login-modal__forgot-password">Forgot Password</a>
    </div>
</div>
<div class="register-modal" id="register-modal">
    <div class="register-modal__background close-modal"></div>
    <div class="register-modal__modal">
        <img src="images/GameWave-Logo.jpg" alt="logo" class="register-modal__modal-logo">
        <p class="register-modal__modal-text">Make an account and subscribe to one of our packages!</p>
        <input type="email" class="register-modal__modal-input" placeholder="Email Adress">
        <input type="password" class="register-modal__modal-input" placeholder="Password">
        <input type="first_name" class="register-modal__modal-input" placeholder="First Name">
        <input type="last_name" class="register-modal__modal-input" placeholder="Last Name">
        <button type="submit" class="register-modal__modal-button">Create Account</button>
        <p class="register-modal__bottom-text">Already have an account? <a href="#" class="register-modal__sign-in">Sign in</a></p>
    </div>
</div>
<footer>
    <div class="footer__wrapper">
        <div class="footer__top">
            <div class="footer__logo"></div>
            <form action="#" class="footer__form">
                <input type="email" name="email" class="footer__form-input" placeholder="Email Adress">
                <button type="submit" class="footer__form-button">Join</button>
            </form>
        </div>
        <div class="footer__bottom">
            <ul class="footer__list">
                <li class="footer__list-item">About</li>
                <li class="footer__list-item"><a href="who.php">Who we are</a></li>
                <li class="footer__list-item"><a href="how.php">How it works</a></li>
            </ul>
            <ul class="footer__list">
                <li class="footer__list-item">Support</li>
                <li class="footer__list-item"><a href="privacy_policy.php">Privacy policy</a></li>
                <li class="footer__list-item"><a href="#">Contact</a></li>
            </ul>
            <div class="footer__social-icons">
                <a href="#" class="footer__social-icon footer__social-icon--youtube"><i class="fab fa-youtube"></i></a>
                <a href="#" class="footer__social-icon footer__social-icon--instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" class="footer__social-icon footer__social-icon--twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" class="footer__social-icon footer__social-icon--facebook"><i class="fab fa-facebook-f"></i></a>
            </div>
        </div>
    </div>
</footer>
<script src="scripts/script.js"></script>
</body>
</html>