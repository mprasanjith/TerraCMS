<?php
    // load config file
    require_once("../config.php");

    // setup database connection
    require_once(BACKEND_PATH . "/db.php");
    $conn = connectDatabase($db);

    $firstName = $_POST['signup']['firstName'];
    $lastName = $_POST['signup']['lastName'];
    $email = $_POST['signup']['email'];
    $password = $_POST['signup']['password'];
    $password2 = $_POST['signup']['password2'];
    $addressL1 = $_POST['signup']['addressL1'];
    $addressL2 = $_POST['signup']['addressL2'];
    $city = $_POST['signup']['city'];
    $country = $_POST['signup']['country'];

    // Validate user data
    $isValid = true;
    if ($password != $password2) $isValid = false;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $isValid = false;

    if ($isValid) 
    {
        // Check whether email exists in the database
        $sqlCheckUser = "SELECT DISTINCT * FROM users WHERE email='$email'";
        $queryResult = queryDatabase($conn, $sqlCheckUser);

        if (mysqli_num_rows($queryResult))
        {
            echo "Account exists.";
        }
        else
        {
            // add user data to the database
            $sqlCreateUser = "INSERT INTO users(firstName, lastName, email, passwrd, Address_Line1, Address_Line2, City, Country)
            VALUES('$firstName', '$lastName', '$email', '$password', '$addressL1', '$addressL2', '$city', '$country')";

            if (queryDatabase($conn, $sqlCreateUser)) 
            {
                echo "okay.";
            }
            else
            {
                echo "Error: " . mysqli_error($conn);
            }                       
        }
    }
    else
    {
        echo "Invalid form data.";
    }
?>