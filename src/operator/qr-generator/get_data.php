<?php
    session_start();
    include "../../connect.php";
    include "rand_num.php";

    $p_id = $random_number;
    $p_name = $_POST["content"];
    $cnic = $_POST["cnic"];
    $p_phone = $_POST["phone_no"];
    $event_name = $_POST["event_name"];
    $other_members = "";
    // $fee_paid = $_POST["event_fee"];
    if($event_name == "Free")
    {
        $fee_paid = 0;
    }
    elseif($event_name == "Visitor")
    {
        $fee_paid = 200;
    }
    elseif($event_name == "PUBG")  //ONLY SQUAD
    {
        $fee_paid = 1200;
        $other_members = "";

        if(!empty($_POST["mem1"]))
        {
            $other_members .= $_POST["mem1"];
        }
        if(!empty($_POST["mem2"]))
        {   
            $other_members .= ", ";
            $other_members .= $_POST["mem2"];
        }
        if(!empty($_POST["mem3"]))
        {   
            $other_members .= ", ";
            $other_members .= $_POST["mem3"];
        }
        if(!empty($_POST["mem4"]))
        {
            $other_members .= ", ";
            $other_members .= $_POST["mem4"];
        }
        
    }
    elseif($event_name == "Tekken")
    {
        $fee_paid = 350;
    }
    elseif($event_name == "COD")  //ONLY FOR SQUAD
    {
        $fee_paid = 1500;
        $other_members = "";

        if(!empty($_POST["mem1"]))
        {
            $other_members .= $_POST["mem1"];
        }
        if(!empty($_POST["mem2"]))
        {   
            $other_members .= ", ";
            $other_members .= $_POST["mem2"];
        }
        if(!empty($_POST["mem3"]))
        {   
            $other_members .= ", ";
            $other_members .= $_POST["mem3"];
        }
        if(!empty($_POST["mem4"]))
        {
            $other_members .= ", ";
            $other_members .= $_POST["mem4"];
        }
    }
    elseif($event_name == "NFS")
    {
        $fee_paid = 350;
    }
    elseif($event_name == "FIFA")
    {
        $fee_paid = 350;
    }
    elseif($event_name == "DOTA")
    {
        $fee_paid = 350;
        $other_members = "";

        if(!empty($_POST["mem1"]))
        {
            $other_members .= $_POST["mem1"];
        }
        if(!empty($_POST["mem2"]))
        {   
            $other_members .= ", ";
            $other_members .= $_POST["mem2"];
        }
        if(!empty($_POST["mem3"]))
        {   
            $other_members .= ", ";
            $other_members .= $_POST["mem3"];
        }
        if(!empty($_POST["mem4"]))
        {
            $other_members .= ", ";
            $other_members .= $_POST["mem4"];
        }
    }
    elseif($event_name == "CS-GO")
    {
        $fee_paid = 1500;
        $other_members = "";

        if(!empty($_POST["mem1"]))
        {
            $other_members .= $_POST["mem1"];
        }
        if(!empty($_POST["mem2"]))
        {   
            $other_members .= ", ";
            $other_members .= $_POST["mem2"];
        }
        if(!empty($_POST["mem3"]))
        {   
            $other_members .= ", ";
            $other_members .= $_POST["mem3"];
        }
        if(!empty($_POST["mem4"]))
        {
            $other_members .= ", ";
            $other_members .= $_POST["mem4"];
        }
    }
    elseif($event_name == "Ludo 1 Player")
    {
        $fee_paid = 200;
    }
    elseif($event_name == "Cards 1 Player")
    {
        $fee_paid = 200;
    }
    elseif($event_name == "Chess 1 Player")
    {
        $fee_paid = 200;
    }
    elseif($event_name == "Little Artist 1 Player")
    {
        $fee_paid = 200;
    }
    elseif($event_name == "Spelling Bee 1 Player")
    {
        $fee_paid = 200;
    }
    elseif($event_name == "Henna 1 Player")
    {
        $fee_paid = 100;
    }
    elseif($event_name == "Singing 1 Player")
    {
        $fee_paid = 100;
    }
    elseif($event_name == "Painting 1 Player")
    {
        $fee_paid = 100;
    }
    else
    {$fee_paid = 0; }
    

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

    $qry = " INSERT INTO participants(p_id, p_name, p_cnic, p_phone, event_name, fee_paid, registered_by, other_members) 
    VALUES ('".$p_id."', '".$p_name."', '".$cnic."', '".$p_phone."', '".$event_name."', '".$fee_paid."', '".$registered_by."' , '".$other_members."') ";
    
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

    //Generating QR-Code
    require_once "generate-qr.php";

    echo "<br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://fonts.googleapis.com/css?family=Russo+One&display=swap" rel="stylesheet">
</head>
<body>

    <center style="font-size: 15px" >

        <div class="jumbotron container" style="border: 3px solid; width:300px; margin-top: 10px">
            <img width="60px" src="../../../img/nuces-acm-st-chap.png" style="float:left">
            <img width="60px" src="../../../img/FAST.png" style="float:right">
            <br>
            <br>
            <br>
            <br>
            <div style="text-align:center"><img width="150px" src="../../../img/doomslogo.png"></div>
            
            <h1 class="display-6" style="font-family: 'Russo One', sans-serif">DOOMSDAY 19</h1>
            <p class="lead">Thank You for participating</p>

            <hr class="my-4">

            <div class="container" style="text-align:center">

                <div class="row" style="text-align:center" >
                    <div class="col-md-12"> Participant: <?php echo $p_name; ?> </div>
                </div>

                <div class="row" style="text-align:center">
                    <div class="col-md-12">Ticket#: <?php echo $p_id; ?> </div>
                </div>

                <div class="row" style="text-align:center">
                    <div class="col-md-12">Event: <?php echo $event_name; ?> </div>
                </div>

                <div class="row" style="text-align:center">
                    <div class="col-md-12">Fee: <?php echo $fee_paid; ?> </div>
                </div>

                <?php 
                    if(!empty($other_members))
                    {
                        echo " <div class='row' style='text-align:center> ";
                        echo "     <div class='col-md-12'>Team Members: $other_members </div> ";
                        echo " </div> ";
                    }
                ?>
            </div>
            <!-- <br> -->
            <img width="120px" src="<?php echo "$urlRelativeFilePath" ?>"> 
            <br>
            <p style="text-align:center; font-size: 15px"> Generated By: <span style="text-decoration:underline"><?php echo $registered_by ?></span> </p>
            
        </div>

    </center>

    
</body>
</html>
<!--  -->