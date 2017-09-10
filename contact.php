<?php
    $pageId = 11;
    $activePage = 'contact';

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
        let inputName = document.getElementById('inputName');
    	inputName.addEventListener("keyup", function () {
    		validateStringNotEmpty(inputName);
    	});
    
        let inputEmail = document.getElementById('inputEmail');
    	inputEmail.addEventListener("keyup", function () {
    		validateEmail(inputEmail);
    	});
    
        let inputMessage = document.getElementById('inputMessage');
    	inputMessage.addEventListener("keyup", function () {
    		validateStringNotEmpty(inputMessage);
    	});
    };
	
	// processing form on submission
	function validateForm() {
	    let inputName = document.getElementById('inputName');
	    let inputEmail = document.getElementById('inputEmail');
	    let inputMessage = document.getElementById('inputMessage');
	    
        const validName = validateStringNotEmpty(inputName);
        const validEmail = validateEmail(inputEmail);
        const validMessage = validateStringNotEmpty(inputMessage);
        
        let isValid = true;
        let errorMessage = "<b class='text-white'>The following errors were found: </b><br>";
        
        if (!validName) {
            isValid = false;
            errorMessage += "Please enter your name.<br>";
        }
        
        if (!validEmail) {
            isValid = false;
            errorMessage += "Please enter a valid email address.<br>";
        }
        
        if (!validMessage) {
            isValid = false;
            errorMessage += "Please enter a message.<br>";
        }
        
        if (!isValid) {
            alertify.error(errorMessage);
        } else {
            processForm();
        }
    }
    
    function processForm() {
        let inputName = document.getElementById('inputName');
	    let inputEmail = document.getElementById('inputEmail');
	    let inputMessage = document.getElementById('inputMessage');
        
        $.ajax({
                url:"/<?php echo BACKEND_URL ?>/contact.php",
                type:"POST",
                data:{
                    name: inputName.value,
                    email: inputEmail.value,
                    message: inputMessage.value
                },
                success: function(response){
                    if (response == "sent") {
                        alertify.success("Thank you for contacting us! We will get back to you soon.");
                        document.getElementById('contactform').reset();
                    } else {
                        alertify.error("Error submitting the form. Please check the form and try again.");
                    }
                }
             });
    }
</script>

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
                <form id="contactform" novalidate>
                    <div class="form-group">
                        <label for="inputName">Your Name *</label>
                        <input type="text" class="form-control" name="contact[name]" id="inputName" placeholder="Enter your name" required>
                    </div>
                  
                    <div class="form-group">
                        <label for="inputEmail">Email address *</label>
                        <input type="email" class="form-control" name="contact[email]" id="inputEmail" placeholder="Enter your email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="inputMessage">Message *</label>
                        <textarea class="form-control" name="contact[message]" id="inputMessage" rows="5" placeholder="Enter your message" required></textarea>
                    </div>
                    
                    <button type="button" class="btn btn-outline-primary" onclick="validateForm();">Send</button>
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
