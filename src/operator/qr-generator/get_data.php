<?php
    session_start();
    include "../../connect.php";
    include "rand_num.php";

    $p_id = $random_number;
    $p_name = $_POST["content"];
    $cnic = $_POST["cnic"];
    $p_phone = $_POST["phone_no"];
    $event_name = $_POST["event_name"];
    $fee_paid = $_POST["event_fee"];
    $registered_by = $_SESSION["operator"];

    // echo $p_id;
    // echo $p_name;
    // echo $cnic;
    // echo $p_phone;
    // echo $event_name;
    // echo $fee_paid;
    // echo $registered_by;

    // echo "Hello from Hello file<br>";
    // echo $fileName;

    $qry = " INSERT INTO participants(p_id, p_name, p_cnic, p_phone, event_name, fee_paid, registered_by) 
    VALUES ('".$p_id."', '".$p_name."', '".$cnic."', '".$p_phone."', '".$event_name."', '".$fee_paid."', '".$registered_by."') ";
    
    // ----------------------- check if query working
    if($con->query($qry))
    {
        // echo "Query run success<br>"; 
    }
    else
    {
        echo "Query didn't run<br>";
    }
    // // ---------------------------------------

    require_once "generate-qr.php";

    echo "<br>";
    echo "<center style='font-size: 18px' >";
    echo "Participant ID: ".$p_id." <br>";
    echo "Participant name: ".$p_name." <br>";
    echo "Participant CNIC: ".$cnic." <br>";
    echo "</center>";

?>