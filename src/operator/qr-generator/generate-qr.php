<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registered Participant </title>
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
</head>
<body>
    <!-- <center> -->
        <!-- <h1>Participant Registered Success</h1> -->

</body>

<?php

// include "connect.php";
include('phpqrcode/qrlib.php');
// include('config.php');

// how to save PNG codes to server

$tempDir = "qrcodes/";

$codeContents .= "Ticket: ";
$codeContents .= $p_id;
$codeContents .= "\n";

$codeContents .= "Name: ";
$codeContents .= $p_name;
$codeContents .= "\n";

$codeContents .= "Event: ";
$codeContents .= $event_name;
$codeContents .= "\n";

if(!empty($other_members))
{
    $codeContents .= "Team: ";
    $codeContents .= $other_members;
    $codeContents .= "\n";
}

$codeContents .= "Phone: ";
$codeContents .= $p_phone;
$codeContents .= "\n";

// we need to generate filename somehow, 
// with md5 or with database ID used to obtains $codeContents...
$fileName = 'qr-'.$p_id.'.png';
// echo $fileName;
// include "hello.php";


$pngAbsoluteFilePath = $tempDir.$fileName;
$urlRelativeFilePath = $tempDir.$fileName;

// generating
if (!file_exists($pngAbsoluteFilePath)) {
    QRcode::png($codeContents, $pngAbsoluteFilePath);
    // echo 'File generated!';
    // echo '<hr width="500px" />';
} else {
    // echo 'File already generated! We can use this cached file to speed up site on common codes!';
    // echo '<hr />';
}

// echo 'Server PNG File: '.$pngAbsoluteFilePath;
// echo '<hr />';

// displaying
// echo '<img width="80px" src="'.$urlRelativeFilePath.'" /> </center>';
// include "hello.php";

?>