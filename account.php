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
<header class="full-page-block parallax d-flex align-items-center" style="background-image: url('resources/images/design/login-header.jpg'); background-position: top;"
data-paroller-factor="0.3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-white text-uppercase">GreenEarth Hub</h1>
                <a href="#login" class="btn btn-outline-secondary btn-lg btn-slim text-uppercase">Login</a> 
                <a href="#register" class="btn btn-outline-secondary btn-lg btn-slim text-uppercase">Register</a>
            </div>
        </div>
    </div>
</header>



<section class="text-block" id="startChange" data-midnight="white">
    <div class="container" >
        <p class="lead text-center">People power is the most powerful force on the planet, and it’s up to us to fight for the change we deserve.</p>
        <p class="text-center pb-5">GreenEarth Hub platform connects you with other volunteers, activists, and groups working on environmental 
            campaigns around the world. This is your meeting place to start groups, host events, run campaigns, share photos and videos, and 
            join with other interested activists eager to help.</p>
    </div>
</section>

<section id="login" class="full-page-block parallax d-flex align-items-center" style="background-image: url('resources/images/design/login-image-1.jpg'); 
background-position: top;" data-paroller-factor="0.3">
    <div class="container">    
        <div class="row">
            <div class="col-lg-12">
                <h5 class="pb-3" style="color: white; ">Login</h5>
                <form class="mx-auto" style="width: 400px;" action="./resources/login.php" method="POST">
                    <div class="form-row">
                        <label for="inputEmailL" class="col-sm-4 col-form-label" style="color: white; ">Email</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" name="login[email]" id="inputEmailL" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-row pb-1">
                        <label for="inputPasswordL" class="col-sm-4 col-form-label" style="color: white;">Password</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" name="login[password]" id="inputPasswordL" placeholder="Password">
                        </div>
                    </div>

                    <div class="form-row pb-3">
                        <div class="col-sm-12">
                            <div class="form-check">
                                <label class="form-check-label" style="color: white;">
                                    <input class="form-check-input" name="login[keepSignedIn]" type="checkbox" style="color: white;"> Keep me signed-in
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <button type="submit" class="btn btn-outline-primary" style="color: white;">Sign in</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<section id="register" class="full-page-block parallax d-flex align-items-center" style="background-image: url('resources/images/design/login-image-2.jpg'); 
background-position: top;" data-paroller-factor="0.3">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h5 class="text-center pb-3" style="color: white;">Register</h5>
                <form class="mx-auto" style="width: 400px;" action="./resources/register.php" method="POST">
                    <div class="form-row pb-1" >
                        <label for="inputFName" class="col-sm-4 col-form-label" style="color: white;">First Name</label>
                        <div class="col-sm-4" >
                            <input type="text" class="form-control" name="signup[firstName]" id="inputFName" placeholder="First Name">
                        </div>
                        <div class="col-sm-4" >
                            <input type="text" class="form-control" name="signup[lastName]" id="inputLName" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="form-row pb-1">
                        <label for="inputEmailR" class="col-sm-4 col-form-label" style="color: white;">Email</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" name="signup[email]" id="inputEmailR" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-row">
                        <label for="inputPasswordR" class="col-sm-4 col-form-label" style="color: white;">Password</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" name="signup[password]" id="inputPasswordR" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-row pb-1">
                        <label for="inputPasswordR2" class="col-sm-4 col-form-label" style="color: white;">Password (Again)</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" name="signup[password2]" id="inputPasswordR2" placeholder="Password (Again)">
                        </div>
                    </div>
                    <div class="form-row" >
                        <label for="inputAddressL1" class="col-sm-4 col-form-label" style="color: white;">Address</label>
                        <div class="col-sm-3" >
                            <input type="text" class="form-control" name="signup[addressL1]" id="inputAddressL1" placeholder="Line 1">
                        </div>
                        <div class="col-sm-5" >
                            <input type="text" class="form-control" name="signup[addressL2]" id="inputAddressL2" placeholder="Line 2">
                        </div>
                    </div>
                    <div class="form-row pb-3" >
                        <div class="col-sm-4 ml-auto" >
                            <input type="text" class="form-control" name="signup[city]" id="inputCity" placeholder="City">
                        </div>
                        <div class="col-sm-4" >
                            <input type="text" class="form-control" name="signup[country]" id="inputCountry" placeholder="Country">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <button type="submit" class="btn btn-outline-primary" style="color: white;">Create my account</button>
                        </div>
                    </div>
                </form>
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
