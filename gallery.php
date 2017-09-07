<?php
    $pageId = 8;
    $activePage = 'gallery';

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
<header class="full-width-block parallax d-flex align-items-center" style="background-image: url('/resources/images/design/gallery-header.jpg'); background-position: top;"
    data-paroller-factor="0.3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-white text-uppercase">Explore GreenEarth</h1>
                <p class="text-white text-uppercase">GreenEarth Foundation at work</p>
            </div>
        </div>
    </div>
</header>

<?php require_once(TEMPLATES_PATH . "/gallery-images.php"); ?>
<?php require_once(TEMPLATES_PATH . "/gallery-videos.php"); ?>

<?php
    // render donation block
    require_once(TEMPLATES_PATH . "/donate.php");
    
    // render footer
    require_once(TEMPLATES_PATH . "/footer.php");

    // close database connection
    closeConection($conn);
?>
