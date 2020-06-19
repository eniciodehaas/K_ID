<?php 
include 'templates/nav.php';
?>
<main>
<hr class="checkout__line">
    <div class="overview">
        <div class="overview__wrapper">
        <h2 class="overview__title">Checkout</h2>
            <div class="overview__wrapper-div">
                <h2 class="overview__div-title">Overview</h2>
                <div class="overview__grid">
                <div class="top-picks__card">
                    <img src="images/packages/adventurous.png" alt="adventure" class="top-picks__card-img">
                    <div class="top-picks__card-inner">
                        <h3 class="top-picks__card-title">Adventurous</h3>
                        <p class="top-picks__card-text">Weekly or monthly package full of adventure games.</p>
                        <h4 class="top-picks__card-price"><span class="top-picks__card-amount"><sup>&euro;</sup>40.00</span>eur/month</h4>
                    </div>
                </div>
                <div class="overview__info">
                    <b class="overview__step">Step 1:</b>
                    <p class="overview__step-text">You selected the <b>medium</b> package.</p>
                    <br>
                    <b class="overview__step">Step 2:</b>
                    <p class="overview__step-text">You did not select any extra’s.</p>
                    <br>
                    <b class="overview__step">Step 3:</b>
                    <p class="overview__step-text">You selected <b>3 months</b>.</p>
                </div>
                <div class="overview__price">
                    <b class="overview__total">Your Total:</b>
                    <p class="overview__price-amount"><sup>&euro;</sup>120.00 EUR</p>
                </div>
                <a href="checkout.php" class="overview__button">Continue</a>
</div>
            </div>
        </div>
    </div>
</main>
<?php 
include 'templates/footer.php';