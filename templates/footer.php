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
<div class="shopping-cart-modal" id="shopping-cart-modal">
    <div class="shopping-cart-modal__background close-modal"></div>
    <div class="shopping-cart-modal__modal">
        <div class="shopping-cart__modal-header">
            <h3 class="shopping-cart__modal-title">Your cart</h3>
            <p class="shopping-cart__modal-close close-modal">Close</p>
        </div>
        <div class="shopping-cart__item">
            <img src="images/packages/adventurous.png" alt="Adventurous package" class="shopping-cart__item-img">
            <div class="shopping-cart__item-info">
                <h4 class="shopping-cart__item-title">Adventurous Package</h4>
                <h4 class="shopping-cart__price-price"><span class="shopping-cart__price-amount"><sup>&euro;</sup>40.00 </span>eur/month</h4>
            </div>
            <img src="images/delete.svg" alt="delete" class="shopping-cart__delete">
        </div>
        <div class="shopping-cart__item">
            <img src="images/packages/rpg.png" alt="RPGuru package" class="shopping-cart__item-img">
            <div class="shopping-cart__item-info">
                <h4 class="shopping-cart__item-title">RPGuru Package</h4>
                <h4 class="shopping-cart__price-price"><span class="shopping-cart__price-amount"><sup>&euro;</sup>35.00 </span>eur/month</h4>
            </div>
            <img src="images/delete.svg" alt="delete" class="shopping-cart__delete">
        </div>
        <div class="shopping-cart__total">
            <h3 class="shopping-cart__total-text">Total</h3>
            <h4 class="shopping-cart__price-price"><span class="shopping-cart__price-amount"><sup>&euro;</sup>75.00 </span>eur/month</h4>
        </div>
        <button class="shopping-cart__button">Check out</button>
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