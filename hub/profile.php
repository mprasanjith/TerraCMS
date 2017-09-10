<?php
    $activePage = 'Profile';    
    $userType = 1;

    // load config file
    require_once("../config.php");
    
    // check if user is logged in
    require_once(TEMPLATES_PATH . "/onlymembers.php");
    
    // setup database connection
    require_once(BACKEND_PATH . "/db.php");
    $conn = connectDatabase($db);
    
    // render header
    require_once(TEMPLATES_PATH . "/header.php");
    
    // render sidebar and navigation
    require_once(TEMPLATES_PATH . "/cp-navigation.php");
    require_once(TEMPLATES_PATH . "/cp-sidebar.php");
?>

<?php
    $userId = $_SESSION["user"];
    $queryUserData = "SELECT * from Users WHERE userId = $userId";
    $queryResult = queryDatabase($conn, $queryUserData);
    
    $row = mysqli_fetch_assoc($queryResult);
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
                url:"/<?php echo BACKEND_URL ?>/updateuser.php",
                type:"POST",
                data:{
                    userId: userId,
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
                        alertify.success("Your profile information has been updated.");
                        setTimeout(function(){
                            location.reload();
                        }, 500);
                    } else {
                        alertify.error("Error updating profile. Please check the details and try again.");
                    }
                }
             });
    }
    
</script>

<div class="admin-content col-sm-9 ml-sm-auto col-md-10 pt-4">
    <h1>Profile</h1>

    <form class="mx-auto" style="width: 400px;">
        <div class="form-row pb-1" >
            <label for="inputFName" class="col-sm-4 col-form-label">First Name</label>
            <div class="col-sm-4 pb-2" >
                <input type="text" class="form-control" name="signup[firstName]" id="inputFName" placeholder="First Name" value="<?php echo $row['firstName']; ?>">
            </div>
            <div class="col-sm-4 pb-2" >
                <input type="text" class="form-control" name="signup[lastName]" id="inputLName" placeholder="Last Name" value="<?php echo $row['lastName']; ?>">
            </div>
        </div>
        <div class="form-row pb-1">
            <label for="inputEmailR" class="col-sm-4 col-form-label">Email</label>
            <div class="col-sm-8 pb-2">
                <input type="email" class="form-control" name="signup[email]" id="inputEmail" placeholder="Email" value="<?php echo $row['email']; ?>" readonly>
            </div>
        </div>
        <div class="form-row pb-1">
            <label for="inputPasswordR" class="col-sm-4 col-form-label">Password</label>
            <div class="col-sm-8 pb-2">
                <input type="password" class="form-control" name="signup[password]" id="inputPassword" placeholder="Password" value="<?php echo $row['passwrd']; ?>">
            </div>
        </div>
        <div class="form-row pb-1">
            <label for="inputPasswordR2" class="col-sm-4 col-form-label">Password (Again)</label>
            <div class="col-sm-8 pb-2">
                <input type="password" class="form-control" name="signup[password2]" id="inputPassword2" placeholder="Password (Again)" value="<?php echo $row['passwrd']; ?>">
            </div>
        </div>
        <div class="form-row pb-1" >
            <label for="inputAddressL1" class="col-sm-4 col-form-label">Address</label>
            <div class="col-sm-3 pb-2" >
                <input type="text" class="form-control" name="signup[addressL1]" id="inputAddressL1" placeholder="Line 1" value="<?php echo $row['Address_Line1']; ?>">
            </div>
            <div class="col-sm-5 pb-2" >
                <input type="text" class="form-control" name="signup[addressL2]" id="inputAddressL2" placeholder="Line 2" value="<?php echo $row['Address_Line2']; ?>">
            </div>
        </div>
        <div class="form-row pb-3" >
            <div class="col-sm-4 ml-auto" >
                <input type="text" class="form-control" name="signup[city]" id="inputCity" placeholder="City" value="<?php echo $row['City']; ?>">
            </div>
            <div class="col-sm-4 pb-2" >
                <input type="text" class="form-control" name="signup[country]" id="inputCountry" placeholder="Country" value="<?php echo $row['Country']; ?>">
            </div>
        </div>
        <div class="form-row pb-2">
            <div class="col">
                <button type="button" class="btn btn-outline-primary" onclick="validateForm();">Update my profile</button>
            </div>
        </div>
    </form>
</div>

<?php
    // render footer
    require_once(TEMPLATES_PATH . "/cp-footer.php");

    // close database connection
    closeConection($conn);
?>
