<?php include "../connect.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>All Participants | DOOMSDAY</title>
    <link rel="stylesheet" href="../../css/all_participants.css">
</head>
<body>
    <?php include "op_head.php" ?>

        <!-- All Participants Code Start -->
            <div class="container-fluid">
                <h1 class="mt-4">All Participants</h1>


                <form class="myform" action="" method="">
                    <div class="row">
                            <button type="submit" class="btn btn-success btn-mybtn">Paid</button>
                            <button type="submit" class="btn btn-success btn-mybtn">Not Paid</button>
                    </div>
                </form>


                <h3 class="head3">Participant Details</h3>

                <table class="table mytable">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Ticket No.</th>
                    <th scope="col">Participant Name</th>
                    <th scope="col">CNIC</th>
                    <th scope="col">Phone No.</th>
                    <th scope="col">Event Name</th>
                    <th scope="col">Fee Paid</th>
                    <th scope="col">Registered By</th>
                </tr>
            </thead>
            <?php  

                $qry = " SELECT * FROM participants ";
                $res = $con->query($qry);
                $result = "";

                if($res->num_rows > 0)
                {
                    // echo "Query working";
                    // $result .= " <table class'table mytable'> ";
                    // $result .= " <thead class='thead-dark'> ";
                    // $result .= " <tr>
                    //                 <th scope='col'>Ticket Number</th>
                    //                 <th scope='col'>Participant Name</th>
                    //                 <th scope='col'>CNIC</th>
                    //                 <th scope='col'>Phone No.</th>
                    //                 <th scope='col'>Event Name</th>
                    //                 <th scope='col'>Fee Paid</th>
                    //                 <th scope='col'>Registered By</th> 
                    //             </tr>";
                    // $result .= " </thead> ";

                    while($row = $res->fetch_assoc())
                    {
                        ?>

                <tbody>
                    <tr>
                        <th scope="row"> <?php echo " ".$row["p_id"]." " ?> </th>
                        <td><?php echo " ".$row["p_name"]." " ?></td>
                        <td><?php echo " ".$row["p_cnic"]." " ?></td>
                        <td><?php echo " ".$row["p_phone"]." " ?></td>
                        <td><?php echo " ".$row["event_name"]." " ?></td>
                        <td><?php echo " ".$row["fee_paid"]." " ?></td>
                        <td><?php echo " ".$row["registered_by"]." " ?></td>
                    </tr>

            <?php 
                        }
                    }
                    else{echo "No Results Found!!";}      
            ?>
                </tbody>
            </table>
            </div>
            <!-- All Participants Code End -->
    <?php include "op_foot.php" ?>