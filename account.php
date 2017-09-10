<?php
    $pageId = 2;
    $activePage = 'account';

    // load config file
    require_once("./config.php");

    // setup database connection
    require_once(BACKEND_PATH . "/db.php");
    $conn = connectDatabase($db);
    
    // render header and navigation
    require_once(TEMPLATES_PATH . "/header.php");
    require_once(TEMPLATES_PATH . "/navigation.php");
?>


<script type="text/javascript">
    // add event listeners
    window.onload = function() {
        let inputFName = document.getElementById('inputFName');
    	inputFName.addEventListener("keyup", function () {
    		validateStringNotEmpty(inputFName);
    	});
    	
    	let inputLName = document.getElementById('inputLName');
    	inputLName.addEventListener("keyup", function () {
    		validateStringNotEmpty(inputLName);
    	});
    
        let inputEmail = document.getElementById('inputEmail');
    	inputEmail.addEventListener("keyup", function () {
    		validateEmail(inputEmail);
    	});
    	
    	let inputPassword = document.getElementById('inputPassword');
    	let inputPassword2 = document.getElementById('inputPassword2');
    	inputPassword.addEventListener("keyup", function () {
    		validateStringNotEmpty(inputPassword);
    		validatePasswordsMatching(inputPassword, inputPassword2);
    	});
    	inputPassword2.addEventListener("keyup", function () {
    		validateStringNotEmpty(inputPassword2);
    		validatePasswordsMatching(inputPassword, inputPassword2);
    	});
    	
    	let inputAddressL1 = document.getElementById('inputAddressL1');
    	inputAddressL1.addEventListener("keyup", function () {
    		validateStringNotEmpty(inputAddressL1);
    	});
    	
    	let inputAddressL2 = document.getElementById('inputAddressL2');
    	inputAddressL2.addEventListener("keyup", function () {
    		validateStringNotEmpty(inputAddressL2);
    	});
    	
    	let inputCity = document.getElementById('inputCity');
    	inputCity.addEventListener("keyup", function () {
    		validateStringNotEmpty(inputCity);
    	});
    	
    	let inputCountry = document.getElementById('inputCountry');
    	inputCountry.addEventListener("keyup", function () {
    		validateStringNotEmpty(inputCountry);
    	});
    };
    
    // processing form on submission
	function validateForm() {
	    let inputFName = document.getElementById('inputFName');
    	let inputLName = document.getElementById('inputLName');
        let inputEmail = document.getElementById('inputEmail');
    	let inputPassword = document.getElementById('inputPassword');
    	let inputPassword2 = document.getElementById('inputPassword2');
    	let inputAddressL1 = document.getElementById('inputAddressL1');
    	let inputAddressL2 = document.getElementById('inputAddressL2');
    	let inputCity = document.getElementById('inputCity');
    	let inputCountry = document.getElementById('inputCountry');
	    
        const validName = validateStringNotEmpty(inputFName) && validateStringNotEmpty(inputLName);
        const validEmail = validateEmail(inputEmail);
        const validPassword = validateStringNotEmpty(inputPassword) && validateStringNotEmpty(inputPassword2) && validatePasswordsMatching(inputPassword, inputPassword2);
        const validAddress = validateStringNotEmpty(inputAddressL1) && validateStringNotEmpty(inputAddressL2) && validateStringNotEmpty(inputCity) && validateStringNotEmpty(inputCountry);
        
        let isValid = true;
        let errorMessage = "<b class='text-white'>The following errors were found: </b><br>";
        
        if (!validName) {
            isValid = false;
            errorMessage += "Pease enter your full name.<br>";
        }
        
        if (!validEmail) {
            isValid = false;
            errorMessage += "Please enter a valid email address.<br>";
        }
        
        if (!validPassword) {
            isValid = false;
            errorMessage += "Password fields are not matching or empty.<br>";
        }
        
        if (!validAddress) {
            isValid = false;
            errorMessage += "Your address cannot be empty.<br>";
        }
        
        if (!isValid) {
            alertify.error(errorMessage);
        } else {
            processForm();
        }
    }
    
    function processForm() {
        let userId = "<?php echo $userId; ?>";
        let inputFName = document.getElementById('inputFName');
    	let inputLName = document.getElementById('inputLName');
        let inputEmail = document.getElementById('inputEmail');
    	let inputPassword = document.getElementById('inputPassword');
    	let inputPassword2 = document.getElementById('inputPassword2');
    	let inputAddressL1 = document.getElementById('inputAddressL1');
    	let inputAddressL2 = document.getElementById('inputAddressL2');
    	let inputCity = document.getElementById('inputCity');
    	let inputCountry = document.getElementById('inputCountry');
        
        $.ajax({
                url:"/<?php echo BACKEND_URL ?>/register.php",
                type:"POST",
                data:{
                    firstName: inputFName.value,
                    lastName: inputLName.value,
                    email: inputEmail.value,
                    password: inputPassword.value,
                    password2: inputPassword2.value,
                    addressL1: inputAddressL1.value,
                    addressL2: inputAddressL2.value,
                    city: inputCity.value,
                    country: inputCountry.value
                },
                success: function(response){
                    if (response == "okay") {
                        alertify.success("Your account has been created. You can now login.");
                        document.getElementById('registration-form').reset();
                    } else if (response == "exists") {
                        alertify.error("An account already exists for the given email. Please login.");
                    } else if (response == "invalid") {
                        alertify.error("Please check the information you've provided and try again.");
                    } else {
                        alertify.error("An error occured while processing the data. Please try again in a while.");
                    }
                }
             });
    }
    
</script>


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
                <form class="mx-auto" style="width: 400px;" action="<?php echo BACKEND_URL . '/login.php' ?>" method="POST">
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
                <form class="mx-auto" id="registration-form" style="width: 400px;">
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
                        <label for="inputEmail" class="col-sm-4 col-form-label" style="color: white;">Email</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" name="signup[email]" id="inputEmail" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-row">
                        <label for="inputPassword" class="col-sm-4 col-form-label" style="color: white;">Password</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" name="signup[password]" id="inputPassword" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-row pb-1">
                        <label for="inputPassword2" class="col-sm-4 col-form-label" style="color: white;">Password (Again)</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" name="signup[password2]" id="inputPassword2" placeholder="Password (Again)">
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
                            <button type="button" class="btn btn-outline-primary" style="color: white;" onclick="validateForm();">Create my account</button>
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
