<?php
include 'templates/nav.php';
?>
<main>
    <h1 class="account__title">Manage account</h1>
    <div class="subscriptions">
        <div class="subscriptions__wrapper">
            <h3 class="subscriptions__title">Your Adventurous Package<a href="account_2.php" class="how__back">Back&nbsp;to&nbsp;account</a></h3>
            <div style="display:flex; margin-top:40px">
                <div class="top-picks__card">
                    <img src="images/packages/adventurous.png" alt="adventure" class="top-picks__card-img">
                    <div class="top-picks__card-inner">
                        <h3 class="top-picks__card-title">Adventurous</h3>
                        <p class="top-picks__card-text">Weekly or monthly package full of adventure games.</p>
                        <h4 class="top-picks__card-price"><span
                                class="top-picks__card-amount"><sup>&euro;</sup>40.00</span>eur/month</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="profile">
        <div class="profile__wrapper">
            <div class="profile__div step">
                <b class="how__step">Step 1:</b>
                <p class="how__text">You selected the <b>medium</b> package.</p>
            </div>
            <div class="profile__div step">
                <b class="how__step">Step 2:</b>
                <p class="how__text">You did not select any extra’s.</p>
            </div>
            <div class="profile__div step">
                <b class="how__step">Step 3:</b>
                <p class="how__text">You selected <b>3 months.</b></p>
            </div>
            <a href="account.php" class="subscriptions__button cancel">Cancel Subscription</a>
        </div>
    </div>
</main>
<?php
include 'templates/footer.php';
?>