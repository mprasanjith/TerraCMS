<?php
    $pageId = 7;
    $activePage = 'work';

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
<header class="full-width-block parallax d-flex align-items-center" style="background-image: url('resources/images/design/work-header.jpg'); background-position: top;"
    data-paroller-factor="0.3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-white text-uppercase">Unstoppable</h1>
                <p class="text-white text-uppercase">For a greener future and a healthier life</p>
            </div>
        </div>
    </div>
</header>

<section class="text-block parallax" id="work">
    <div class="container">
        <p class="lead">We've been campaigning for a green future for 10 years — and we're not stopping now. It's time to rise up like
            never before and fight for our climate and communities.</p>
        <p>We defend the natural world by investigating, exposing, and confronting environmental abuse, championing environmentally
            responsible solutions, and advocating for the well-being of all people.</p>
    </div>
</section>


<?php require_once(TEMPLATES_PATH . "/work.php"); ?>

<?php
    // render donation block
    require_once(TEMPLATES_PATH . "/donate.php");
    
    // render footer
    require_once(TEMPLATES_PATH . "/footer.php");

    // close database connection
    closeConection($conn);
?>
