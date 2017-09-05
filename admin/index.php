<?php
    $pageId = 1;
    $activePage = 'home';

    // load config file
    require_once("./config.php");

    // setup database connection
    require_once(BACKEND_PATH . "/db.php");
    $conn = connectDatabase($db);
    
    // render header and navigation
    require_once(TEMPLATES_PATH . "/header.php");
    require_once(TEMPLATES_PATH . "/navigation.php");
?>


<?php
    // render donation block
    require_once(TEMPLATES_PATH . "/donate.php");
    
    // render footer
    require_once(TEMPLATES_PATH . "/footer.php");

    // close database connection
    closeConection($conn);
?>
