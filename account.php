<?php
include 'templates/nav.php';
?>
<main>
    <h1 class="account__title">Manage account</h1>
    <div class="subscriptions">
        <div class="subscriptions__wrapper">
            <h3 class="subscriptions__title">Your subscriptions<a href="home.php" class="how__back">Back&nbsp;to&nbsp;packages</a></h3>
            <p class="subscriptions__text">When you purchase a subscription package,<br> you will see your order here!</p>
            <a href="account_2.php" class="subscriptions__button">Add Subscription</a>
        </div>
    </div>
    <div class="profile">
        <div class="profile__wrapper">
            <div class="profile__div">
            <h2 class="profile__title">Your profile<a id="edit-btn" class="profile__edit">Edit</a></h2>
            <div class="profile__field">
                <h4 class="profile__field-name">Full Name:</h4>
                <p class="profile__field-value">John Doe</p>
            </div>
            <div class="profile__field">
                <h4 class="profile__field-name">Password:<a href="forgot-pass.php">Change</a></h4>
                <p class="profile__field-value">********</p>
            </div>
            <div class="profile__field">
                <h4 class="profile__field-name">Email:</h4>
                <p class="profile__field-value">johndoe@gmail.com</p>
            </div>
</div>
        </div>
    </div>
</main>
<?php
include 'templates/footer.php';
?>