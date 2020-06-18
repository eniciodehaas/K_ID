<?php
include 'templates/nav.php';
?>
<main>
    <div class="pick-size">
        <div class="pick-size__wrapper">
            <h2 class="pick-size__title">Step 1: Pick a size</h2>
            <div class="pick-size__flex">
                <label for="small">
                    <div class="pick-size__card">
                        <img src="images/packages/adventurous.png" alt="Adventurous package" class="pick-size__img">
                        <h3 class="pick-size__title">Small</h3>
                        <div class="pick-size__checkbox">
                            <span class="pick-size__checkmark"></span>
                        </div>
                    </div>
                    <h5 class="pick-size__price"><sup>€</sup>30.00</h5>
                </label>
                <input type="radio" name="size" id="small" value="small">
                <label for="medium">
                <div class="pick-size__card">
                    <img src="images/packages/adventurous.png" alt="Adventurous package" class="pick-size__img">
                    <h3 class="pick-size__title">Medium</h3>
                    <div class="pick-size__checkbox">
                        <span class="pick-size__checkmark"></span>
                    </div>
                </div>
                <h5 class="pick-size__price"><sup>€</sup>40.00</h5>
            </label>
            <input type="radio" name="size" id="medium" value="medium">
            <label for="large">
                <div class="pick-size__card">
                    <img src="images/packages/adventurous.png" alt="Adventurous package" class="pick-size__img">
                    <h3 class="pick-size__title">Large</h3>
                    <div class="pick-size__checkbox">
                        <span class="pick-size__checkmark"></span>
                    </div>
                </div>
                <h5 class="pick-size__price"><sup>€</sup>50.00</h5>
            </label>
            <input type="radio" name="size" id="large" value="large">
            </div>
        </div>
    </div>
</main>
<?php 
include 'templates/footer.php';