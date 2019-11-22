<?php 
    $p_id = $_GET["p_id"];
    $p_name = $_GET["p_name"];
    $fee_paid = $_GET["fee_paid"];
    $registered_by = $_GET["regBy"];
    $event_name = $_GET["event"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../../css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Russo+One&display=swap" rel="stylesheet">
</head>
<body>

<center style="font-size: 18px" >

<div class="jumbotron container" style="border: 3px solid; width:360px; margin-top: 20px; padding-top:15px;">
    <img width="90px" src="../../img/nuces-acm-st-chap.png" style="float:left">
    <img width="90px" src="../../img/FAST.png" style="float:right">
    <img width="150px" src="../../img/doomslogo.png" style=" display:block;
    margin-right:67px; padding-top:30px;">
    
    <h2  style="font-family: 'Russo One', sans-serif">DOOMSDAY 2K19</h2>
    <p class="lead">Thanks for Participation</p>

    <hr class="my-4">

    <div class="container">
        <div class="row">
            <div class="col-md-10" style="text-align:center"> Participant: <?php echo $p_name ?> </div>
        </div>
        <div class="row">
            <div class="col-md-10" style="text-align:center">Ticket : <?php echo $p_id ?> </div>
        </div>
        <div class="row">
            <div class="col-md-10" style="text-align:center">Event : <?php echo $event_name ?> </div>
        <div>
        <div class="row">
            <div class="col-md-12" style="text-align:center">Fee : <?php echo $fee_paid ?> </div>
        </div>
        <hr>
    </div>
    <!-- <br> -->
    <img width="120px" src="<?php echo "./qr-generator/qrcodes/qr-".$p_id.".png"?>" style="display:block;
    margin-left:20px; padding-top:50px;"> 
    <br>
    <p style="float:right; font-size: 15px"> Generated By: <span style="text-decoration:underline"><?php echo $registered_by ?></span> </p>
    
</div>

</center>
</body>
</html>