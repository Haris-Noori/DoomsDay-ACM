<!DOCTYPE html>
<html lang="en">

<head>
    <title>Remove Operator | Admin</title>

    <link rel="stylesheet" href="../../css/admin-dashboard.css">
</head>
<body>
    <?php include "admin_header.php" ?>
        <!-- Admin Dashboard Code Start-->

            <div class="container-fluid">
                <h1 class="mt-4">Remove Operator</h1>
                
                <form class="myform" action="remove_operator_try.php" method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">Operator Name</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Full Name" name="op_name" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success btn-lg">Add</button>
                    <br>
                    <br>
                    <div class="form group-row">
                        <?php
                            if(isset($_GET["BadMessage"]))
                            {
                                echo "<div class='col-sm-4 alert alert-danger'>";
                                echo $_GET["BadMessage"];
                                echo "</div>";
                            }
                            if(isset($_GET["GoodMessage"]))
                            {
                                echo "<div class='col-sm-4 alert alert-success'>";
                                echo $_GET["GoodMessage"];
                                echo "</div>";
                            }
                        ?>
                    </div>
                </form>
            </div>
        <!-- Admin Dashboard Code End-->
    <?php include "admin_foot.php" ?>