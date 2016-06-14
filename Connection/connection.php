<?php
    $DB_NAME = "HomeDrinkDB";
    $DB_USER = "HomeDrinkDU2dq3";
    $DB_PASSWORD = "qv?dqr[5F_*N";
    $DB_HOST = "localhost";

        // Create database connection
    $conn = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);
    if ($conn->connect_error)
    {
        die("Database selection failed: " . $conn->connect_error);
    }

    


?>
