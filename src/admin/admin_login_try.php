<?php
    include "../connect.php";

    $admin = $_POST["username"];
    $pass = $_POST["password"];

    $qry = "SELECT * FROM admins WHERE admin_name = '".$admin."' ";

    // ----------------------- check if query working
    /*if($con->query($qry))
    {
        echo "Query run success"; 
    }
    else
    {
        echo "Query didn't run";
    }*/
    //---------------------------------------
    $res = $con->query($qry);
    $msg = "";

    if($res->num_rows > 0)
    {   //admin exists
        $row = $res->fetch_assoc();

        if($row["pass"] == $pass)
        {   //password is correct
            $_SESSION["admin"] = $admin;
            //echo $SESSION["user"];
            header("Location:admin_dashboard.php");  // -->Move next
        }
        else
        {   //password is incorrect
            $msg = "Invalid Password";
            header("Location:admin_login.php?Message=$msg");
        }
    }
    else
    {   //admin does not exist
        $msg = " ".$admin." does not exist";
        header("Location:admin_login.php?Message=$msg");
    }

?>