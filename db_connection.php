<?php
    $servername    = "localhost"; // php admin server name
    $username      = "root";      // server username
    $password      = "";          // server password
    $dbname        = "employee"; // database name

    //database connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    //check databse connection
    if (!$conn)         
    {
        // database connection failed message
        die("Connection failed: " . mysqli_connect_error()); 
    }
?>