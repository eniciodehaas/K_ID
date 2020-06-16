<?php
include 'templates/nav.php';
?>
<main>
    <div class="slider">
        <div class="slider__wrapper">
            <div class="carousel" data-flickity='{ "autoPlay": 5000, "wrapAround": true, "pauseAutoPlayOnHover": false }'>
                <div class="carousel-cell">
                    <div class="package-header__info">
                        <img src="images/packages/adventurous.png" alt="adventurous package" class="package-header__img">
                        <div class="package-header__info-text">
                            <h3 class="package-header__info-title">Adventurous Package Details</h3>
                            <ul class="package-header__list">
                                <li class="package-header__list-item">5 Games</li>
                                <li class="package-header__list-item">At least 1 adventure game</li>
                                <li class="package-header__list-item">No duplicates</li>
                                <li class="package-header__list-item">Does <strong>NOT</strong> contain VR games</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="carousel-cell">
                    <div class="package-header__info">
                        <img src="images/packages/adventurous.png" alt="adventurous package" class="package-header__img">
                        <div class="package-header__info-text">
                            <h3 class="package-header__info-title">Adventurous Package Details</h3>
                            <ul class="package-header__list">
                                <li class="package-header__list-item">5 Games</li>
                                <li class="package-header__list-item">At least 1 adventure game</li>
                                <li class="package-header__list-item">No duplicates</li>
                                <li class="package-header__list-item">Does <strong>NOT</strong> contain VR games</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="carousel-cell">
                    <div class="package-header__info">
                        <img src="images/packages/adventurous.png" alt="adventurous package" class="package-header__img">
                        <div class="package-header__info-text">
                            <h3 class="package-header__info-title">Adventurous Package Details</h3>
                            <ul class="package-header__list">
                                <li class="package-header__list-item">5 Games</li>
                                <li class="package-header__list-item">At least 1 adventure game</li>
                                <li class="package-header__list-item">No duplicates</li>
                                <li class="package-header__list-item">Does <strong>NOT</strong> contain VR games</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about">
        <div class="about__wrapper">
            <div class="about__card">
                <img src="images/videogame_asset.svg" alt="controller icon" class="about__img">
                <h3 class="about__title">Our Packages</h3>
                <p class="about__text">These are our pre-made packages, choose a genre or special box, and also choose if you want it weekly or monthly. </p>
            </div>
            <div class="about__card">
                <img src="images/games.svg" alt="controller icon" class="about__img">
                <h3 class="about__title">New Games</h3>
                <p class="about__text">We never give a game twice, that way you will never have a duplicate! </p>
            </div>
            <div class="about__card">
                <img src="images/list_alt.svg" alt="list icon" class="about__img">
                <h3 class="about__title">Custom Packages</h3>
                <p class="about__text">You can customise a package by selecting your favourite genres, developer studio's and publishers.</p>
            </div>
        </div>
    </div>
    <div class="top-picks">
        <div class="top-picks__wrapper">
            <h2 class="top-picks__title">Top Picks</h2>
            <div class="top-picks__cards-wrapper">
                <a href="product.php?box=adventure" style="text-decoration: none; color: black;">
                <div class="top-picks__card">
                    <img src="images/packages/adventurous.png" alt="adventure" class="top-picks__card-img">
                    <div class="top-picks__card-inner">
                        <h3 class="top-picks__card-title">Adventurous</h3>
                        <p class="top-picks__card-text">Weekly or monthly package full of adventure games.</p>
                        <h4 class="top-picks__card-price"><span class="top-picks__card-amount"><sup>&euro;</sup>40.00</span>eur/month</h4>
                    </div>
                </div>
                </a>
                <div class="top-picks__card">
                    <img src="images/packages/puzzle.png" alt="puzzle" class="top-picks__card-img">
                    <div class="top-picks__card-inner">
                        <h3 class="top-picks__card-title">Puzzle 'm Silly</h3>
                        <p class="top-picks__card-text">Weekly or monthly package full of puzzle games.</p>
                        <h4 class="top-picks__card-price"><span class="top-picks__card-amount"><sup>&euro;</sup>20.00</span>eur/month</h4>
                    </div>
                </div>
                <div class="top-picks__card">
                    <img src="images/packages/vr.png" alt="vr" class="top-picks__card-img">
                    <div class="top-picks__card-inner">
                        <h3 class="top-picks__card-title">VR Crazy</h3>
                        <p class="top-picks__card-text">Weekly or monthly package full of VR games.</p>
                        <h4 class="top-picks__card-price"><span class="top-picks__card-amount"><sup>&euro;</sup>25.00</span>eur/month</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="more-packages">
        <div class="more-packages__wrapper">
            <h2 class="more-packages__title">More Packages</h2>
            <div class="more-packages__cards-wrapper">
                <div class="more-packages__card">
                    <img src="images/packages/sport.png" alt="sports" class="more-packages__card-img">
                    <div class="more-packages__card-inner">
                        <h3 class="more-packages__card-title">Sport 'n Play</h3>
                        <p class="more-packages__card-text">Weekly or monthly package full of sports games.</p>
                        <h4 class="more-packages__card-price"><span class="more-packages__card-amount"><sup>&euro;</sup>20.00</span>eur/month</h4>
                    </div>
                </div>
                <div class="more-packages__card">
                    <img src="images/packages/racing.png" alt="racing" class="more-packages__card-img">
                    <div class="more-packages__card-inner">
                        <h3 class="more-packages__card-title">Chasing Racing</h3>
                        <p class="more-packages__card-text">Weekly or monthly package full of racing games.</p>
                        <h4 class="more-packages__card-price"><span class="more-packages__card-amount"><sup>&euro;</sup>20.00</span>eur/month</h4>
                    </div>
                </div>
                <div class="more-packages__card">
                    <img src="images/packages/rpg.png" alt="RPG" class="more-packages__card-img">
                    <div class="more-packages__card-inner">
                        <h3 class="more-packages__card-title">RPGuru</h3>
                        <p class="more-packages__card-text">Weekly or monthly package full of RPG games.</p>
                        <h4 class="more-packages__card-price"><span class="more-packages__card-amount"><sup>&euro;</sup>35.00</span>eur/month</h4>
                    </div>
                </div>
                <div class="more-packages__card">
                    <img src="images/packages/shooter.png" alt="shooter" class="more-packages__card-img">
                    <div class="more-packages__card-inner">
                        <h3 class="more-packages__card-title">Mow Down</h3>
                        <p class="more-packages__card-text">Weekly or monthly package full of shooter games.</p>
                        <h4 class="more-packages__card-price"><span class="more-packages__card-amount"><sup>&euro;</sup>40.00</span>eur/month</h4>
                    </div>
                </div>
                <div class="more-packages__card">
                    <img src="images/packages/horror.png" alt="horror" class="more-packages__card-img">
                    <div class="more-packages__card-inner">
                        <h3 class="more-packages__card-title">Scared Straigt</h3>
                        <p class="more-packages__card-text">Weekly or monthly package full of horror games.</p>
                        <h4 class="more-packages__card-price"><span class="more-packages__card-amount"><sup>&euro;</sup>20.00</span>eur/month</h4>
                    </div>
                </div>
                <div class="more-packages__card">
                    <img src="images/packages/action.png" alt="action" class="more-packages__card-img">
                    <div class="more-packages__card-inner">
                        <h3 class="more-packages__card-title">Action Packed</h3>
                        <p class="more-packages__card-text">Weekly or monthly package full of action games.</p>
                        <h4 class="more-packages__card-price"><span class="more-packages__card-amount"><sup>&euro;</sup>40.00</span>eur/month</h4>
                    </div>
                </div>
                <div class="more-packages__card">
                    <img src="images/packages/strategy.png" alt="strategy" class="more-packages__card-img">
                    <div class="more-packages__card-inner">
                        <h3 class="more-packages__card-title">Tactical&nbsp;Thinking</h3>
                        <p class="more-packages__card-text">Weekly or monthly package full of strategy games.</p>
                        <h4 class="more-packages__card-price"><span class="more-packages__card-amount"><sup>&euro;</sup>30.00</span>eur/month</h4>
                    </div>
                </div>
                <div class="more-packages__card">
                    <img src="images/packages/simulation.png" alt="simulation" class="more-packages__card-img">
                    <div class="more-packages__card-inner">
                        <h3 class="more-packages__card-title">Sim Hymn</h3>
                        <p class="more-packages__card-text">Weekly or monthly package full of simulation games.</p>
                        <h4 class="more-packages__card-price"><span class="more-packages__card-amount"><sup>&euro;</sup>25.00</span>eur/month</h4>
                    </div>
                </div>
                <div class="more-packages__card">
                    <img src="images/packages/idle.png" alt="idle" class="more-packages__card-img">
                    <div class="more-packages__card-inner">
                        <h3 class="more-packages__card-title">Idle & AFK</h3>
                        <p class="more-packages__card-text">Weekly or monthly package full of idle games.</p>
                        <h4 class="more-packages__card-price"><span class="more-packages__card-amount"><sup>&euro;</sup>20.00</span>eur/month</h4>
                    </div>
                </div>
            </div>
            <h2 class="more-packages__bottom-title">Looking for more?</h2>
            <button class="more-packages__bottom-button">Shop all packages</button>
        </div>
    </div>
</main>
<?php
include 'templates/footer.php';