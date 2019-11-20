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

?>

<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>

    <center style='font-size: 18px' >
        <!-- Participant ID: ".$p_id." <br>
        Participant name: ".$p_name." <br>
        Participant CNIC: ".$cnic." <br> -->

        <div class="jumbotron container" style="border: 2px solid">
            <img width="90px" src="../../../img/nuces-acm-st-chap.png" style="float:left">
            <img width="90px" src="../../../img/FAST.png" style="float:right">
            <img width="150px" src="../../../img/doomslogo.png">
            
            <h1 class="display-4">DOOMSDAY 2019</h1>
            <p class="lead">Thank You for participating</p>

            <hr class="my-4">
            <div class="container">
                <h5 style="float:left; margin-left:200px">Participant: <?php echo " $p_name " ?> </h5>
                <h5 style="float:right; margin-right:200px">Ticket#: <?php echo " $p_id " ?> </h5>
            </div>
            <br>
            <div class="container">
                <h5 style="float:left; margin-left:200px">Event: <?php echo " $event_name " ?> </h5>
                <h5 style="float:right; margin-right:200px">Fee: <?php echo " $fee_paid " ?> </h5>
            </div>
            <br>
            <img width="80px" src="<?php echo "$urlRelativeFilePath" ?>"> 
            
        </div>

    </center>

    
</body>
</html>