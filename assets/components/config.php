<?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); //strict show the error

    //for localhost development
     define("DB_SERVER", "localhost");
     define("DB_USERNAME", "root"); 
     define("DB_PASSWORD", ""); 
     define("DB_DATABASE", "qcu_student"); 


            $conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

        // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
             }
?>
