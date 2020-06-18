<?php
    include 'templates/nav.php';

    if ($_GET['box']) {
        $box = $_GET['box'];
    } else {
        echo '<div class="error">';
        echo 'Er is een fout opgetreden...';
        echo '<br>';
        echo '<a href="home.php">Terug naar de homepage</a>';
        echo '</div>';
        die();
    }

    switch ($box) {
        case 'adventure':
            $name = 'Adventurous';
            $price = 40.00;
            $gamesArray = ['Euro Truck Simulator 2', 'Human Fall Flat', 'The Elder Scrolls Online', 'Batman Arkham Orgins', 'Lego: Lord of the Rings'];
            $image = 'adventurous.png';
            break;
        
        default:
            echo '<div class="error">';
            echo 'Er is een fout opgetreden...';
            echo '<br>';
            echo '<a href="home.php">Terug naar de homepage</a>';
            echo '</div>';
            die();
            break;
    }
?>

<head><title><?php echo ucfirst($box) ?> Box</title></head>

<main>
    <div class="package-header">
        <div class="package-header__wrapper">
            <div class="package-header__share"><i class="fas fa-share-alt"></i></div>
            <div class="package-header__info">
                <img src="images/packages/<?php echo $image; ?>" alt="<?php echo $name; ?> package image" class="package-header__img">
                <div class="package-header__info-text">
                    <h3 class="package-header__info-title"><?php echo $name; ?> Package Details</h3>
                    <ul class="package-header__list">
                        <li class="package-header__list-item">5 Games</li>
                        <li class="package-header__list-item">At least 1 <?php echo $box; ?> game</li>
                        <li class="package-header__list-item">No duplicates</li>
                        <li class="package-header__list-item">Does <strong>NOT</strong> contain VR games</li>
                    </ul>
                </div>
            </div>
            <a href="product_choice.php"><div class="package-header__shopping-cart"></div></a>
        </div>
    </div>
    <div class="package-info">
        <div class="package-info__wrapper">
            <div class="package-info__title">
                <h3 class="package-info__title-title"><?php echo $name ?> Package</h3>
                <p class="package-info__title-text">Package full of <?php echo $box ?></p>
            </div>
            <div class="package-info__price">
                <h4 class="package-info__price-price"><span class="package-info__price-amount"><sup>&euro;</sup><?php echo number_format($price, 2); ?> </span>eur/month</h4>
            </div>
            <div class="package-info__content">
                <h3 class="package-info__content-title">Content</h3>
                <p class="package-info__content-text">You will receive this package once a month. In it will be 5 games, of these 5 games there will be at least 1 <?php echo $box ?> game.</p>
            </div>
            <div class="package-info__last-month">
                <h3 class="package-info__last-month-title">Last Months Package</h3>
                <ul class="package-info__last-month-list">
                    <?php 
                    for ($i=0; $i < count($gamesArray); $i++) {
                        echo '<li class="package-info__last-month-list-item">'.$gamesArray[$i].'</li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</main>
<?php
include 'templates/footer.php';