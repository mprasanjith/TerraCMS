/**
 * Site initialization
 */

$(document).ready(function () {

	// Activate paroller for parallax scrolling
	$("parallax").paroller();

    // Animations for scrolling on page
	$('a[href^="#"]').on('click', function (e) {
		e.preventDefault();

		var target = this.hash;
		var $target = $(target);

		$('html, body').stop().animate({
			'scrollTop': $target.offset().top
		}, 900, 'swing', function () {
			window.location.hash = target;
		});
	});
	
	// setup simpleCart
	simpleCart({
    checkout: {
      type: "PayPal",
      email: "test@paypal.com"
    },
    cartStyle: "table"
  });
});


/**
 * Form Validation
 */

// display validation feedback via bootstrap classes
    function displayValidation(elem, status) {
        let classes = elem.classList;
        
        if (status == false) {
            classes.remove("is-valid");
            classes.add("is-invalid");
        } else {
            classes.remove("is-invalid");
            classes.add("is-valid");
        }
    }
    
    // validate string to be not empty
    function validateStringNotEmpty(elem) {
        let status = (elem.value) ? true : false;
        
        displayValidation(elem, status);
        return status;
    }
    
    // validate email
    function validateEmail(elem) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        let status = re.test(elem.value);
        
        displayValidation(elem, status);
        return status;
    }
    
    // validate passwords to be matching
    function validatePasswordsMatching(elem1, elem2) {
        let status = (elem1.value == elem2.value) ? true : false;
        
        displayValidation(elem1, status);
        displayValidation(elem2, status);
        return status;
    }