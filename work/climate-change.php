<?php
    $pageId = 7;
    $activePage = 'work';

    // load config file
    require_once("../config.php");

    // setup database connection
    require_once(BACKEND_PATH . "/db.php");
    $conn = connectDatabase($db);
    
    // render header and navigation
    require_once(TEMPLATES_PATH . "/header.php");
    require_once(TEMPLATES_PATH . "/navigation.php");
?>

<!-- Image-based header  -->
<header class="full-page-block parallax d-flex align-items-center" style="background-image: url('resources/images/content/work-climate-header.jpg'); background-position: top;"
    data-paroller-factor="0.3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-white text-uppercase">Fighting Global Warming</h1>
                <p class="text-white text-uppercase">To win the fight against climate change, it’s time for a renewable energy [r]evolution.</p>
            </div>
        </div>
    </div>
</header>

<section class="text-block" id="intro">
    <div class="container">
        <p class="lead">The devastating impacts of climate change are clear. Our world is warmer than ever before, and people and wildlife
            are already suffering the consequences. But that’s nothing compared to what we’re leaving future generations
            if these trends continue. It’s time to stop the destruction. It’s time for an energy [r]evolution.</p>
    </div>
</section>

<section class="text-block" id="why">
    <div class="container">
        <h3>What's the problem?</h3>
        <p class="lead">The climate has always been changing — but the pace at which it is now changing is faster than humans have ever
            seen.
        </p>
        <p>Climate change threatens to make parts of the planet uninhabitable or inhospitable for life as we know it while
            worsening poverty, swamping coastlines and destroying infrastructure. In short, it is the most pressing
            global challenge we have ever faced.</p>
    </div>
</section>

<section class="text-block" id="doing">
    <div class="container">
        <h3>What we are doing</h3>
        <p class="lead">GreenEarth Foundation addresses climate change on two fronts:</p>
        <p><strong>Adaptation:</strong> Helping communities adapt to the effects of climate change that are already happening
            and that are expected to accelerate, such as sea-level rise.
            <br> <strong>Mitigation:</strong> Working to prevent further climate change by reducing emissions, enhancing
            carbon storage, etc.</p>
        <iframe width="855" height="481" src="https://www.youtube.com/embed/9IWGGBcahV4?ecver=1" frameborder="0" allowfullscreen></iframe>
    </div>
</section>

<section class="text-block" id="vision">
    <div class="container">
        <h3>Our Vision</h3>
        <p>Conservation International envisions a world where nature’s contribution to addressing climate change is fully
            maximized. This means that nature not only lives up to its potential to mitigate climate change — tropical
            forests alone can deliver 30% of mitigation action needed to prevent catastrophic climate change — but also
            is fully deployed in places where ecosystems can help vulnerable populations adapt to the already-present
            and future effects of climate change.</p>
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
