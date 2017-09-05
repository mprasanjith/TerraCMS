<?php
    $pageId = 1;
    $activePage = 'home';

    // load config file
    require_once("./resources/config.php");

    // setup database connection
    require_once("./resources/db.php");
    $conn = connectDatabase($db);
    
    // render header and navigation
    require_once(TEMPLATES_PATH . "/header.php");
    require_once(TEMPLATES_PATH . "/navigation.php");
?>

<!-- Image-based header  -->
<header class="full-page-block parallax d-flex align-items-center" style="background-image: url('resources/images/design/home-header.jpg'); background-position: top;"
data-paroller-factor="0.3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-white text-uppercase">Your planet is beautiful.</h1>
                <p class="text-white text-uppercase">But it needs your help to keep being so.</p>
                <a href="#knowMore" class="btn btn-outline-secondary btn-lg btn-slim text-uppercase">Why should I care?</a>
            </div>
        </div>
    </div>
</header>

<section class="text-block parallax" id="aboutUs startchange" data-midnight="white">
    <div class="container">
        <h3>Who we are</h3>
        <p class="lead">People need nature — and for almost 10 years, GreenEarth Foundation has worked to protect it. Through cutting-edge
            science, innovative policy and global reach, we empower people to protect the nature that we rely on for
            food, fresh water and livelihoods.</p>
    </div>
</section>

<section class="slider-block" id="knowMore" data-midnight="white">

<!-- Bootstrap carousel  -->
<div id="knowMoreCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img class="d-block img-fluid" src="resources/images/design/home-slider-1.jpg">
            <div class="carousel-caption">
                <h3>Pollution has killed more than 100 million people to-date</h3>
                <p class="h6">Pollution is leading the next generation to a weaker immune system making them more vulnerable to
                    diseases.
                </p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block img-fluid" src="resources/images/design/home-slider-2.jpg">
            <div class="carousel-caption">
                <p class="h6">We are destroying our environment and in-turn killing ourselves bit-by-bit.</p>
                <h3>1 million species have vanished, humans may be next</h3>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block img-fluid" src="resources/images/design/home-slider-3.jpg">
            <div class="carousel-caption">
                <h3>Population growth in the last 50 years is faster than past four million years.</h3>
                <p class="h6">We are using up 50% more natural resources than the Earth can provide. How long can our Earth hold
                    up?
                </p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block img-fluid" src="resources/images/design/home-slider-4.jpg">
            <div class="carousel-caption">
                <p class="h6">Rainforests have taken thousands of years to form.</p>
                <h3>Every second a forest the size of a football field is destroyed</h3>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#knowMoreCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#knowMoreCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
</section>

<section class="text-block" id="ourWork" data-midnight="white">
    <!-- Work portfolio -->
    <div class="container">
        <h3>What we do</h3>
        <div class="row pt-4">
            <div class="col-md-4">
                <div class="icon icon-basic-pencil-ruler" style="font-size: 48px;"></div>
                <h4>Analyze</h4>
                <p>GreenEarth Foundation measures and monitors the species and ecosystems that we need the most, while making
                    that information available to the governments and businesses that need it.</p>
            </div>
            <div class="col-md-4">
                <div class="icon icon-basic-message-multiple" style="font-size: 48px;"></div>
                <h4>Inform</h4>
                <p>We combine science with partnerships to inform smart decisions about protecting nature — and provide
                    the funding, training and expertise to make it happen.</p>
            </div>
            <div class="col-md-4">
                <div class="icon icon-basic-helm" style="font-size: 48px;"></div>
                <h4>Involve</h4>
                <p>With offices in more than 30 countries, we work directly with the people who live closest to the forests,
                    oceans and grasslands that benefit us all.</p>
            </div>
        </div>
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
