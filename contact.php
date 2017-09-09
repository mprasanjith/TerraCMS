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
                <h1 class="text-white text-uppercase">Contact Us</h1>
                <p class="text-white text-uppercase">Send us your comments and suggestions</p>
            </div>
        </div>
    </div>
</header>

<section class="text-block" id="contact">
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="<?php echo BACKEND_URL . '/contact.php' ?>" method="POST">
                  <div class="form-group">
                    <label for="inputName">Your Name</label>
                    <input type="text" class="form-control" name="contact[name]" id="inputName" placeholder="Enter your name">
                  </div>
                  
                  <div class="form-group">
                    <label for="inputEmail">Email address</label>
                    <input type="email" class="form-control" name="contact[email]" id="emailInput" placeholder="Enter your email">
                  </div>
                  
                  <div class="form-group">
                    <label for="inputMessage">Message</label>
                    <textarea class="form-control" name="contact[message]" id="inputMessage" rows="5" placeholder="Enter your message"></textarea>
                  </div>
                  
                  <button type="submit" class="btn btn-outline-primary">Send</button>
                </form>
            </div>
            <div class="col">
                <h6>Get in touch</h6>
                <p>GreenEarth Foundation<br>
                Ottho Heldringstraat 5<br>
                1066 AZ Amsterdam<br>
                The Netherlands<br><br>

                Phone: +31 (0) 20 718 20 00<br>
                Fax: +31 (0) 20 718 20 02<br></p>
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
