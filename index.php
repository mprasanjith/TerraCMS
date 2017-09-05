<?php
    $pageId = 1;
    $activePage = 'home';

    // load config file
    require_once("./resources/config.php");

    // setup database connection
    require_once("./resources/db.php");
    $conn = connectDatabase($db);
    
    // render header
    require_once(TEMPLATES_PATH . "/header.php");

    // render navigation
    require_once(TEMPLATES_PATH . "/navigation.php");
?>

<div id="container">
    <div id="content">
        
    </div>
</div>

<?php
    // render footer
    require_once(TEMPLATES_PATH . "/footer.php");

    // close database connection
    closeConection($conn);
?>
