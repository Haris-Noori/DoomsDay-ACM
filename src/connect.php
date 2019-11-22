<?php

    $server = "localhost";
    $user = "phpmyadmin";
    $pass = "root123";
    $dbname = "acm_db";

    $con = new MySQLi($server, $user, $pass, $dbname);

    if($con->connect_error)
    {
        echo "<script>alert('not connected')</script>";
        echo "Error: ".$con->connect_error;
    }
    else
    {
        // echo "<script> alert('Successfully connected to database')</script>";
    }
?>
