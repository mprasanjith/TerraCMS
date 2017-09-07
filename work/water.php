<?php
    $pageId = 6;
    $activePage = '';
    $projectId = 3;

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
<header class="full-page-block parallax d-flex align-items-center" style="background-image: url('/resources/images/content/work-water-header.jpg'); background-position: top;"
    data-paroller-factor="0.3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-white text-uppercase">Conserving Fresh Water</h1>
                <p class="text-white text-uppercase">Fresh water is the lifeblood of the planet. No one can survive without it.</p>
                <?php require_once(TEMPLATES_PATH . "/button-like.php"); ?>
            </div>
        </div>
    </div>
</header>

<section class="text-block" id="intro">
    <div class="container">
        <p class="lead">Water is life. It’s vital. It supports the immense diversity of life on Earth. It’s a source of food, health
            and energy. Fresh water makes civilization possible.​ But fresh water, in turn, isn’t possible without a
            healthy planet — and human actions are putting a healthy planet at risk.</p>
    </div>
</section>

<section class="text-block" id="why">
    <div class="container">
        <h3>What's the problem?</h3>
        <p class="lead">Climate Change
        </p>
        <p>
            As our climate changes, so does our planet’s supply and flow of fresh water. According to one estimate, as the Mediterranean
            region and southern Africa face reduced rainfall, 1 billion people who live in these already dry regions
            will face increased water scarcity.</p>
        <p class="lead">Deforestation
        </p>
        <p>Forests are nature’s “water factories” — capturing, storing, purifying and gradually releasing clean water to
            towns and cities located downstream. More than one-third of the world’s largest cities obtain a significant
            portion of their drinking water directly from forested protected areas.</p>
        <p class="lead">Pollution
        </p>
        <p>
            Pollution from human activities, especially agriculture, washes into streams, lakes, estuaries and oceans. Already, nearly
            60% of U.S. lakes are too polluted for fishing and swimming — and lakes such as Lake Erie have massive dead
            zones that put commercial activity like fishing at risk.</p>
    </div>
</section>

<section class="text-block" id="doing">
    <div class="container">
        <h3>What we are doing</h3>
        <p>We need a global transformation of the way the world manages fresh water. We are working to make that happen.
            We work to protect the places around the world that people rely on most for drinking water, agriculture and
            other uses. Our projects start with sound science and offer innovative solutions that can serve as models
            for conservation anywhere on Earth. Given the critical link between nature and human health, we work to break
            down the barriers that exist between conservation and health organizations, and we encourage leaders to consider
            the value of nature in the decisions they make, especially about dams and other large-scale development projects.
            By doing so, we’re promoting clean water for all.</p>
        <iframe width="855" height="480" src="https://www.youtube.com/embed/k4HXCtV1y-w?ecver=1" frameborder="0" allowfullscreen></iframe>
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
