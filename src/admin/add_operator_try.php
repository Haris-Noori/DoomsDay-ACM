<?php

    include "../connect.php";

    $op_name = $_POST["op_name"];
    $op_pass = $_POST["op_pass"];

    $qry = " INSERT INTO operators(operator_name, operator_pass) VALUES ('".$op_name."', '".$op_pass."') ";

    if($con->query($qry))
    {
        $msg = "Operator Added !!";
        header("Location:add_operator.php?GoodMessage=$msg");
    }
    else
    {
        $msg="Not Added!!";
        header("Location:add_operator.php?BadMessage=$msg");
    }
?>