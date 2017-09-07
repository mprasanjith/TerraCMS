<?php
    $pageId = 5;
    $activePage = '';
    $projectId = 2;

    // load config file
    require_once("../config.php");

    // setup database connection
    require_once(BACKEND_PATH . "/db.php");
    $conn = connectDatabase($db);
    
    // render header and navigation
    require_once(TEMPLATES_PATH . "/header.php");
    require_once(TEMPLATES_PATH . "/navigation.php");
    
    
    // notifications on liking / unliking
    require_once(TEMPLATES_PATH . "/notifications-like.php");
?>

<!-- Image-based header  -->
<header class="full-page-block parallax d-flex align-items-center" style="background-image: url('/resources/images/content/work-forest-header.jpg'); background-position: top;"
    data-paroller-factor="0.3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-white text-uppercase">Protecting Forests</h1>
                <p class="text-white text-uppercase">When a forest is lost anywhere, people feel it everywhere.</p>
                <?php require_once(TEMPLATES_PATH . "/button-like.php"); ?>
            </div>
        </div>
    </div>
</header>

<section class="text-block" id="intro">
    <div class="container">
        <p class="lead">Forests are crucial for the health and well-being of people, wildlife, and our planet. They’re home to roughly
            two-thirds of all land-dwelling plant and animal species, critical lifelines for communities big and small,
            and one of the last lines of defense against catastrophic climate change.</p>
    </div>
</section>

<section class="text-block" id="why">
    <div class="container">
        <h3>What's the problem?</h3>
        <p class="lead">Decades of exploitation have destroyed and degraded much of the Earth’s natural forests. In fact, we’ve already
            lost half of global forest land.
        </p>
        <p>The world has lost nearly half its forests for agriculture, development or resource extraction. Yet the value
            of the benefits that standing forests provide is immense: Tropical forests alone account for at least 30
            percent of the global mitigation action needed to halt climate change. Yet this value remains largely invisible.</p>
    </div>
</section>

<section class="text-block" id="doing">
    <div class="container">
        <h3>What we are doing</h3>
        <iframe width="855" height="480" src="https://www.youtube.com/embed/Swj5_-CgHPc?ecver=1" frameborder="0" allowfullscreen></iframe>
    </div>
</section>

<section class="text-block" id="vision">
    <div class="container">
        <h3>Our Vision</h3>
        <p>GreenEarth Foundation is campaigning for a future that will allow our forests to thrive. We envision a world
            where our forests sustain local communities and economies, are filled with unique wildlife, and keep our
            air clean and pollution-free.</p>
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
