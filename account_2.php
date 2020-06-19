<?php
include 'templates/nav.php';
?>
<main>
    <h1 class="account__title">Manage account</h1>
    <div class="subscriptions">
        <div class="subscriptions__wrapper">
            <h3 class="subscriptions__title">Your subscriptions<a href="home.php" class="how__back">Back to packages</a></h3>
            <div style="display:flex; margin-top:40px">
            <div class="more-packages__card" style="margin-right:80px">
                    <img src="images/packages/rpg.png" alt="RPG" class="more-packages__card-img">
                    <div class="more-packages__card-inner">
                        <h3 class="more-packages__card-title">RPGuru</h3>
                        <p class="more-packages__card-text">Weekly or monthly package full of RPG games.</p>
                        <h4 class="more-packages__card-price"><span class="more-packages__card-amount"><sup>&euro;</sup>35.00</span>eur/month</h4>
                    </div>
                </div>
            <div class="top-picks__card">
                    <img src="images/packages/adventurous.png" alt="adventure" class="top-picks__card-img">
                    <div class="top-picks__card-inner">
                        <h3 class="top-picks__card-title">Adventurous</h3>
                        <p class="top-picks__card-text">Weekly or monthly package full of adventure games.</p>
                        <h4 class="top-picks__card-price"><span class="top-picks__card-amount"><sup>&euro;</sup>40.00</span>eur/month</h4>
                    </div>
                </div>
</div>
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