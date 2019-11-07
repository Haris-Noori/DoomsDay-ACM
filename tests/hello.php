<?php

    include "connect.php";

    $p_id = rand(1,10000);
    $p_name = $_POST["content"];
    $cnic = $_POST["cnic"];
    echo "Participant ID: ".$p_id." <br>";
    echo "Participant name: ".$p_name." <br>";
    echo "Participant CNIC: ".$cnic." <br>";

    // echo "Hello from Hello file<br>";
    // echo $fileName;

    $qry = " INSERT INTO students(p_id, p_name, cnic) VALUES ('".$p_id."', '".$p_name."', '".$cnic."') ";
    
    // ----------------------- check if query working
    if($con->query($qry))
    {
        echo "Query run success<br>"; 
    }
    else
    {
        echo "Query didn't run<br>";
    }
    // ---------------------------------------

    require_once "generate-qr.php";

?>