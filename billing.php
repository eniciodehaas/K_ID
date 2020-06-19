<?php 
include 'templates/nav.php';
?>
<main>
    <hr class="checkout__line">
    <div class="address-data">
        <div class="address-data__wrapper">
            <h2 class="address-data__title">Checkout</h2>
            <div class="address-data__div">
                <h2 class="address-data__div-title">Shipping Details <a class="address-data__edit" href="checkout.php">Edit</a></h2>
                <p class="address-data__text">Shipping Address</p>
                <p class="address-data__text">John Doe</p>
                <p class="address-data__text">Dorpstraat 18</p>
                <p class="address-data__text">Harkum, FR, NL, 8300 AA</p>
            </div>
        </div>
    </div>
    <div class="address-data">
        <div class="address-data__wrapper">
            <div class="address-data__div">
            <h2 class="address-data__div-title">Delivery</h2>
                <p class="address-data__text">Select A date you want the package to be delivered, it will be
delivered every month on the same date </p>
                <input type="date">
            </div>
        </div>
    </div>
    <div class="billing-details">
        <div class="billing-details__wrapper">
        <div class="billing-details__wrapper-div">
        <h2 class="billing-details__title">Billing Details</h2>
            <div class="billing-details__payment-methods">
                <div class="billing-details__payment-method credit">
                    <img src="images/credit-card.svg" alt="credit card" class="billing-details__payment-method-img">
                    <h3 class="billing-details__payment-method-title">Credit | Debit</h3>
                </div>
                <div class="billing-details__payment-method paypal">
                    <img src="images/paypal.svg" alt="paypal" class="billing-details__payment-method-img">
                    <h3 class="billing-details__payment-method-title">PayPal</h3>
                </div>
                <div class="billing-details__payment-method ideal">
                    <img src="images/ideal.svg" alt="ideal" class="billing-details__payment-method-img">
                    <h3 class="billing-details__payment-method-title">IDeal</h3>
                </div>
            </div>
            <div class="credit-details" style="display:none;">
                <div class="credit-details__name">
                    <input type="text" class="credit-details__first-name" placeholder="First Name">
                    <input type="text" class="credit-details__last-name" placeholder="Last Name">
                </div>
                <input type="text" class="credit-details__cart-number" placeholder="Card Number">
                <div class="credit-details__bottom">
                    <input type="text" class="credit-details__month" placeholder="MM">
                    <input type="text" class="credit-details__year" placeholder="YYYY">
                    <input type="text" class="credit-details__cvv" placeholder="CVV">
                </div>
            </div>
            <h3 class="paypal-details" style="display:none;">You have selected PayPal as your payment method.</h3>
            <h3 class="ideal-details" style="display:none;">You have selected IDeal as your payment method.</h3>
            <a href="confirmation.php" class="billing-details__button" style="display:none">Subscribe</a>
        </div>
        </div>
    </div>
</main>
<script type="text/javascript" src="scripts/billing.js"></script>
<?php
include 'templates/footer.php';
