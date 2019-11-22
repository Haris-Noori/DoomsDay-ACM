<?php

    include "../connect.php";

    $op_name = $_POST["op_name"];

    $qry = " DELETE FROM operators WHERE operator_name = '".$op_name."' ";

    if($con->query($qry))
    {
        $msg = "Operator Removed !!";
        header("Location:add_operator.php?GoodMessage=$msg");
    }
    else
    {
        $msg="Not Removed!!";
        header("Location:add_operator.php?BadMessage=$msg");
    }
?>