<?php 
include 'templates/nav.php';
?>
<link rel="stylesheet" href="css/custom-dropdown.css">
<main>
<hr class="checkout__line">
<div class="checkout">
    <div class="checkout__wrapper">
        <h2 class="checkout__title">Checkout</h2>
        <div class="checkout__form-wrapper">
            <form class="checkout__form">
                <h2 class="checkout__form-title">Shipping Details</h2>
                <div class="custom-select-wrapper">
                    <div class="custom-select">
                        <div class="custom-select__trigger"><span>Netherlands</span>
                            <div class="arrow"></div>
                        </div>
                        <div class="custom-options">
                            <span class="custom-option selected" data-value="nl">Netherlands</span>
                            <span class="custom-option" data-value="be">Belgium</span>
                            <span class="custom-option" data-value="de">Germany</span>
                        </div>
                    </div>
                </div>
                <div class="checkout__name">
                    <input type="text" placeholder="First Name" class="checkout__first-name">
                    <input type="text" placeholder="Last Name" class="checkout__last-name">
                </div>
                <input type="text" placeholder="Address" class="checkout__address">
                <input type="text" placeholder="Adress 2(Optional)" class="checkout__second-address">
                <div class="checkout__city-wrapper">
                    <input type="text" placeholder="City" class="checkout__city">
                    <input type="text" placeholder="Postal Code" class="checkout__postal-code">
                </div>
                <a href="" class="checkout__button">Continue</a>
            </form>
        </div>
    </div>
</div>
</main>
<script type="text/javascript" src="scripts/custom-dropdown.js"></script>
<?php
include 'templates/footer.php';