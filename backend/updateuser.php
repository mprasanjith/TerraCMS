<?php
    // load config file
    require_once("../config.php");

    // setup database connection
    require_once(BACKEND_PATH . "/db.php");
    $conn = connectDatabase($db);
    
    // get POST request data
    $userId = $_POST['userId'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $addressL1 = $_POST['addressL1'];
    $addressL2 = $_POST['addressL2'];
    $city = $_POST['city'];
    $country = $_POST['country'];

    // Validate data
    $isValid = true;
    if (!$userId) $isValid = false;
    if (!$firstName || !$lastName) $isValid = false;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $isValid = false;
    if (!$password || !$password2 || $password != $password2) $isValid = false;
    if (!$addressL1 || !$addressL2 || !$city || !$country) $isValid = false;
    
    
    
    //  check if user exists in database
    $queryUserData = "SELECT * from Users WHERE userId = $userId AND email = '$email'";
    $queryResult = queryDatabase($conn, $queryUserData);
    if (!mysqli_num_rows($queryResult)) $isValid = false;

    if ($isValid) 
    {
        // Update user data
        $sqlUpdateUser = "Update Users SET firstName='$firstName', lastName='$lastName', 
        passwrd='$password', Address_Line1 = '$addressL1', Address_Line2 = '$addressL2',
        City = '$city', Country = '$country' WHERE userId = $userId AND email = '$email'";
        queryDatabase($conn, $sqlUpdateUser);
        
        echo "okay";
    }
    else
    {
        echo "error";
    }
?>