<?php
    $pageId = 9;
    $activePage = 'action';

    // load config file
    require_once("./config.php");

    // setup database connection
    require_once(BACKEND_PATH . "/db.php");
    $conn = connectDatabase($db);
    
    // render header and navigation
    require_once(TEMPLATES_PATH . "/header.php");
    require_once(TEMPLATES_PATH . "/navigation.php");
?>

<!-- Image-based header  -->
<header class="full-width-block parallax d-flex align-items-center" style="background-image: url('/resources/images/design/take-action-header.jpg'); background-position: top;"
    data-paroller-factor="0.3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-white text-uppercase">Let your voice be heard</h1>
                <p class="text-white text-uppercase">It's time to be part of the solution.</p>
            </div>
        </div>
    </div>
</header>


<section class="text-block text-block-inverted" id="hub">
    <div class="container">
        <h3>Visit the Merchandise Store.</h3>
        <p class="lead">Help us protect the spectacular, but vulnerable parts of nature that people need to survive and thrive.</p>

        <a href="/store.php" class="btn btn-outline-secondary btn-lg">Go to the Store</a>
    </div>
</section>

<section class="text-block" id="hub">
    <div class="container">
        <h3>Join GreenEarth Hub.</h3>
        <h6>Meet. Learn. Share. Volunteer.</h6>

        <p class="lead">People power is the most powerful force on the planet, and it’s up to us to fight for the change we deserve.</p>
        <p>GreenEarth Hub platform connects you with other volunteers, activists, and groups working
            on environmental campaigns around the world. This is your meeting place to start groups, host events,
            run campaigns, share photos and videos, and join with other interested activists eager to help.</p>

        <a href="signup.html" class="btn btn-outline-primary btn-lg">Signup now. Its free!</a>
        <a href="#"><img src="/resources/images/design/appstore-icon.jpg" alt="Download from App Store" style="height: 50px; width: auto;"></a>
        <a href="#"><img src="/resources/images/design/play-icon.jpg" alt="Download from Google Play" style="height: 48px; width: auto;"></a>
    </div>
</section>

<section class="text-block" id="social">
    <div class="container">
        <h3>Spread the word.</h3>
        <p class="lead">Tell your friends and followers about us. Let's all unite and make a better impact.</p>

        <a href="#" class="btn btn-outline-primary btn-lg"><span class="socicon-facebook"></span></a>
        <a href="#" class="btn btn-outline-primary btn-lg"><span class="socicon-twitter"></span></a>
        <a href="#" class="btn btn-outline-primary btn-lg"><span class="socicon-googleplus"></span></a>
    </div>
</section>

<?php
    // render donation block
    require_once(TEMPLATES_PATH . "/donate.php");
    
    // render footer
    require_once(TEMPLATES_PATH . "/footer.php");

    // close database connection
    closeConection($conn);
?>
