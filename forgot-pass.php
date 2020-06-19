<?php 
include 'templates/nav.php';
?>
<main>
    <hr class="forgot-pass__line">
    <h3 class="forgot-pass__title">Forgot Password</h3>
    <p class="forgot-pass__text">Please enter your email below.</p>
    <form class="forgot-pass__form">
        <input type="email" name="email" class="forgot-pass__form-input" placeholder="Email Adress">
        <button type="submit" class="forgot-pass__form-button">Reset</button>
    </form>
</main>
<?php 
include 'templates/footer.php';
?>