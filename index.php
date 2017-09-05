<?php    
    // load up your config file
    require_once("./resources/config.php");
    
    // render header
    require_once(TEMPLATES_PATH . "/header.php");
?>

<div id="container">
    <div id="content">
        <p>Page content</p>
    </div>
</div>

<?php
    // render footer
    require_once(TEMPLATES_PATH . "/footer.php");
?>