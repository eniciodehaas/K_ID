<?php
include 'templates/nav.php';
?>
<main>
    <div class="pick-size">
        <div class="pick-size__wrapper">
            <h2 class="pick-size__title">Step 1: Pick a size</h2>
            <div class="pick-size__flex">
                <label>
                    <div class="pick-size__card">
                        <img src="images/packages/adventurous.png" alt="Adventurous package" class="pick-size__img">
                        <h3 class="pick-size__title">Small</h3>
                        <input type="radio" name="size" id="small" value="small" class="pick-size__check">
                        <div class="pick-size__checkbox">
                            <span class="pick-size__checkmark"></span>
                        </div>
                    </div>
                    <h5 class="pick-size__price"><sup>€</sup>30.00</h5>
                </label>
                <label>
                    <div class="pick-size__card">
                        <img src="images/packages/adventurous.png" alt="Adventurous package" class="pick-size__img">
                        <h3 class="pick-size__title">Medium</h3>
                        <input type="radio" name="size" id="medium" value="medium" class="pick-size__check" checked>
                        <div class="pick-size__checkbox">
                            <span class="pick-size__checkmark"></span>
                        </div>
                    </div>
                    <h5 class="pick-size__price"><sup>€</sup>40.00</h5>
                </label>
                <label>
                    <div class="pick-size__card">
                        <img src="images/packages/adventurous.png" alt="Adventurous package" class="pick-size__img">
                        <h3 class="pick-size__title">Large</h3>
                        <input type="radio" name="size" id="large" value="large" class="pick-size__check">
                        <div class="pick-size__checkbox">
                            <span class="pick-size__checkmark"></span>
                        </div>
                    </div>
                    <h5 class="pick-size__price"><sup>€</sup>50.00</h5>
                </label>
            </div>
            <div class="pick-size__info">
                <h3 class="pick-size__info-title">Small</h3>
                <p class="pick-size__info-text">If you select <b>small</b> you will receive 3 games, with at least one
                    adventure game and no duplicates. </p>
            </div>
            <div class="pick-size__info">
                <h3 class="pick-size__info-title">Medium</h3>
                <p class="pick-size__info-text">If you select <b>medium</b> we will receive 5 games, with at least
                    one adventure game and no duplicates.</p>
            </div>
            <div class="pick-size__info">
                <h3 class="pick-size__info-title">Large</h3>
                <p class="pick-size__info-text">If you select <b>large</b> we will receive 7 games, with at least one
                    adventure game and no duplicates.</p>
            </div>
        </div>
    </div>
    <div class="pick-extra">
        <div class="pick-extra__wrapper">
            <h2 class="pick-extra__title">Step 2: Pick extra's</h2>
            <div class="pick-extra__flex">
                <label>
                    <div class="pick-extra__card">
                        <img src="images/clothing.png" alt="Extra clothing" class="pick-extra__img">
                        <h3 class="pick-extra__title">Clothing</h3>
                        <input type="checkbox" name="clothing" id="clothing" value="1" class="pick-extra__check">
                        <div class="pick-extra__checkbox">
                            <span class="pick-extra__checkmark"></span>
                        </div>
                    </div>
                    <h5 class="pick-extra__price"><sup>€</sup>20.00</h5>
                </label>
                <label>
                    <div class="pick-extra__card">
                        <img src="images/book-cover.png" alt="Extra others" class="pick-extra__img">
                        <h3 class="pick-extra__title">Others</h3>
                        <input type="checkbox" name="others" id="others" value="1" class="pick-extra__check">
                        <div class="pick-extra__checkbox">
                            <span class="pick-extra__checkmark"></span>
                        </div>
                    </div>
                    <h5 class="pick-extra__price"><sup>€</sup>20.00</h5>
                </label>
                <label>
                    <div class="pick-extra__card">
                        <img src="images/figures.png" alt="Extra figurines" class="pick-extra__img">
                        <h3 class="pick-extra__title">Figurines</h3>
                        <input type="checkbox" name="figurines" id="figurines" value="1" class="pick-extra__check">
                        <div class="pick-extra__checkbox">
                            <span class="pick-extra__checkmark"></span>
                        </div>
                    </div>
                    <h5 class="pick-extra__price"><sup>€</sup>20.00</h5>
                </label>
            </div>
            <div class="pick-extra__size">
                <div class="pick-extra__size-gender">
                    <label>
                        <input type="radio" name="gender" value="Mens" class="pick-extra__gender-box" checked>
                        <h3 class="pick-extra__gender mens">Mens</h3>
                        <span class="pick-extra__arrow"></span>
                    </label>
                    <label>
                        <input type="radio" name="gender" value="Womans" class="pick-extra__gender-box">
                        <h3 class="pick-extra__gender womans">Womans</h3>
                        <span class="pick-extra__arrow"></span>
                    </label>
                </div>
                <div class="pick-extra__size-size">
                    <label>
                        <input type="radio" name="clothing-size" value="S" class="pick-extra__size-box">
                        <h3 class="pick-extra__size-symbol">S</h3>
                    </label>
                    <label>
                        <input type="radio" name="clothing-size" value="M" class="pick-extra__size-box" checked>
                        <h3 class="pick-extra__size-symbol">M</h3>
                    </label>
                    <label>
                        <input type="radio" name="clothing-size" value="L" class="pick-extra__size-box">
                        <h3 class="pick-extra__size-symbol">L</h3>
                    </label>
                    <label>
                        <input type="radio" name="clothing-size" value="XL" class="pick-extra__size-box">
                        <h3 class="pick-extra__size-symbol">XL</h3>
                    </label>
                    <label>
                        <input type="radio" name="clothing-size" value="XXL" class="pick-extra__size-box">
                        <h3 class="pick-extra__size-symbol">XXL</h3>
                    </label>
                </div>
            </div>
            <div class="pick-extra__info">
                <h3 class="pick-extra__info-title">Clothing</h3>
                <p class="pick-extra__info-text">If you select <b>clothing</b> we will ship t-shirts, sweaters and other
clothing with with your order. </p>
            </div>
            <div class="pick-extra__info">
                <h3 class="pick-extra__info-title">Others</h3>
                <p class="pick-extra__info-text">If you select <b>others</b> we will ship books, comics and other
collectibles with your order.</p>
            </div>
            <div class="pick-extra__info">
                <h3 class="pick-extra__info-title">Figurines</h3>
                <p class="pick-extra__info-text">If you select <b>figurines</b> we will figurines, plushies and other
collectibles with your order.</p>
            </div>
        </div>
    </div>
    <div class="pick-duration">
        <div class="pick-duration__wrapper">
            <h2 class="pick-duration__title">Step 3: Duration</h2>
            <div class="pick-duration__flex">
                <label>
                    <div class="pick-duration__card">
                        <img src="images/rank-1.png" alt="1 Month" class="pick-duration__img">
                        <h3 class="pick-duration__title">1 Month</h3>
                        <input type="radio" name="duration" id="small" value="small" class="pick-duration__check">
                        <div class="pick-duration__checkbox">
                            <span class="pick-duration__checkmark"></span>
                        </div>
                    </div>
                </label>
                <label>
                    <div class="pick-duration__card">
                        <img src="images/rank-2.png" alt="3 Months" class="pick-duration__img">
                        <h3 class="pick-duration__title">3 Months</h3>
                        <input type="radio" name="duration" id="medium" value="medium" class="pick-duration__check" checked>
                        <div class="pick-duration__checkbox">
                            <span class="pick-duration__checkmark"></span>
                        </div>
                    </div>
                </label>
                <label>
                    <div class="pick-duration__card">
                        <img src="images/rank-3.png" alt="6 Months" class="pick-duration__img">
                        <h3 class="pick-duration__title">6 Months</h3>
                        <input type="radio" name="duration" id="large" value="large" class="pick-duration__check">
                        <div class="pick-duration__checkbox">
                            <span class="pick-duration__checkmark"></span>
                        </div>
                    </div>
                </label>
            </div>
            <div class="pick-duration__info">
                <h3 class="pick-duration__info-title">1 Month</h3>
                <p class="pick-duration__info-text">If you select <b>1 month</b> you will receive no extra’s. </p>
            </div>
            <div class="pick-duration__info">
                <h3 class="pick-duration__info-title">3 Months</h3>
                <p class="pick-duration__info-text">If you select <b>3 months</b> you will receive 1 extra game and a 
goodie bag.</p>
            </div>
            <div class="pick-duration__info">
                <h3 class="pick-duration__info-title">6 Monts</h3>
                <p class="pick-duration__info-text">If you select <b>6 months</b> you will receive 2 extra games and a
goodie bag.</p>
            </div>
        </div>
    </div>
    <div class="add-to-cart">
        <div class="add-to-cart__wrapper">
            <h2 class="add-to-cart__title">Step 4: Add to cart</h2>
            <div class="add-to-cart__info">
                <h3 class="add-to-cart__info-title">Only one step left?</h3>
                <p class="add-to-cart__info-text">Yes that is right! Just click the button below and add your
awesome game package to your cart!</p>
        </div>
        <button class="add-to-cart__button">Add to cart</button>
    </div>
</main>
<?php 
include 'templates/footer.php';