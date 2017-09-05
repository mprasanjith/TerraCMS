<?php

    // Connect to the SQL database
    function connectDatabase($db)
    {
        $dbhost = $db["host"];
        $dbuser = $db["username"];
        $dbpass = $db["password"];
        $dbname = $db["dbname"];
        $port = $db["port"];

        // Create connection
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname, $port);

        // Check connection
        if (mysqli_connect_errno()) 
        {
            die("Failed to connect to MySQL: " . mysqli_connect_error());
        }
      
        return $conn;
    }
    
    function queryDatabase($conn, $query) 
    {
        $result = mysqli_query($conn, $query);
        return $result;
    }

    function closeConection($conn) 
    {
        mysqli_close($conn);
    }
?>