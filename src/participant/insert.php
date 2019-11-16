<?php
    include "../connect.php";      
    
    $name = $_POST['Name'];
    $cnic = $_POST['CNIC'];
    $email = $_POST['e-mail'];
    $contact = $_POST['contact'];
    $gender = $_POST["gender"];
    $game = $_POST["fruit"];
    
    $qry = " INSERT INTO participants(p_name , p_cnic, p_email , p_phone , p_gender , p_game ) 
    VALUES ('".$name."', '".$cnic."', '".$email."', '".$contact."', '".$gender."', '".$game."') ";

   if($con->query($qry))
   {
       header("Location:participate_form.php");
       echo '<script>alert("Successfully Registered")</script>';
   }
   else{
       echo ' NOT Inserted';
   }
    

?>
