<?php
    $pageId = 3;
    $activePage = 'about';

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
<header class="full-width-block parallax d-flex align-items-center" style="background-image: url('resources/images/design/about-header.jpg'); background-position: top;"
    data-paroller-factor="0.3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-white text-uppercase">Defending the Earth</h1>
                <p class="text-white text-uppercase">Because we know the value of life.</p>
            </div>
        </div>
    </div>
</header>

<section class="text-block parallax" id="intro">
    <div class="container">
        <p class="lead">GreenEarth Foundation is the leading conservation organization working around the world to protect ecologically
            important lands and waters for nature and people. We address the most pressing conservation threats at the
            largest scale. Thanks to the support of our more than 1 million members, we’ve built a tremendous record
            of success since our founding.</p>
    </div>
</section>

<?php require_once(TEMPLATES_PATH . "/work.php"); ?>

<section class="text-block parallax" id="why">
    <div class="container">
        <h3>Why we exist</h3>
        <p class="lead">Nature doesn’t need people. People need nature. Our food, our water, our health, our jobs — they all rely on
            the health of the planet’s ecosystems.</p>
        <p>But we’re taking more from nature than nature can give. We’re weakening the Earth’s ability to provide the clean
            air, fresh water and food we depend on.<br> In short, we’re creating a crisis.<br> We can end this crisis.
            But we need big ideas and even bigger solutions. GreenEarth Foundation works at every level, from remote
            villages to the offices of presidents and CEOs, to find these solutions. Our work is moving entire societies
            toward a healthier, more sustainable development path — so that we don’t use up today what we’re going to
            need tomorrow.</p>
    </div>
</section>

<section class="text-block parallax" id="goal">
    <div class="container">
        <h3>Our Goal</h3>
        <p class="lead">At GreenEarth, we measure success in human terms. Our ultimate goal is to protect the most fundamental things that nature
            provides to all of us: our food, our fresh water, our livelihoods and a stable climate.</p>
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
