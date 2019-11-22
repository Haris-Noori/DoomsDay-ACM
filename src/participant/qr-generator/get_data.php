<?php

    include "../../connect.php";
    include "rand_num.php";

    $p_id = $random_number;
    $p_name = $_POST["content"];
    $cnic = $_POST["cnic"];

    // echo "Hello from Hello file<br>";
    // echo $fileName;

    $qry = " INSERT INTO students(p_id, p_name, p_cnic) VALUES ('".$p_id."', '".$p_name."', '".$cnic."') ";
    
    // ----------------------- check if query working
    if($con->query($qry))
    {
        // echo "Query run success<br>"; 
    }
    else
    {
        echo "Query didn't run<br>";
    }
    // ---------------------------------------

    require_once "generate-qr.php";

    // echo "<br>";
    echo "<center style='font-size: 18px' >";
    echo "Participant Ticket ID: ".$p_id." <br>";
    echo "Participant name: ".$p_name." <br>";
    echo "Participant CNIC: ".$cnic." <br>";
    echo "</center>"

?>