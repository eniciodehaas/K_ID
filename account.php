<?php
include 'templates/nav.php';
?>
<main>
    <div class="account-title">
        <h1 class="account-title__title">Manage account</h1>
    </div>
    <div class="subscriptions">
        <div class="subscriptions__wrapper">
            <h3 class="subscriptions__title">Your subscriptions</h3>
            <p class="subscriptions__text">When you purchase a subscription package, you will see your order here!</p>
            <button class="subscriptions__button">Add Subscription</button>
        </div>
    </div>
    <div class="profile">
        <div class="profile__wrapper">
            <h2 class="profile__title">Your profile</h2>
            <a href="#" class="profile__edit">Edit</a>
            <div class="profile__field">
                <h4 class="profile__field-name">Full Name:</h4>
                <p class="profile__field-value">John Doe</p>
            </div>
            <div class="profile__field">
                <h4 class="profile__field-name">Email:</h4>
                <p class="profile__field-value">johndoe@gmail.com</p>
            </div>
            <div class="profile__field">
                <h4 class="profile__field-name">Password:</h4>
                <p class="profile__field-value">********</p>
            </div>
        </div>
    </div>
</main>
<?php
include 'templates/footer.php';
?>