<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register Participant | Operator</title>
    <link rel="stylesheet" href="../../css/register_participant.css">
</head>

<body>
    <?php include "op_head.php" ?>
            <!-- Register Participant Code Start -->
            <div class="container-fluid">
                <h1 class="mt-4">Participant Registration Section</h1>


                <form class="myform" action="qr-generator/get_data.php" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">Participant Name</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Full Name" name="content">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputPassword4">CNIC Number</label>
                            <input type="number" name="cnic" class="form-control" id="inputPassword4" placeholder="13 Digit number" required min="1000000000000" max="9999999999999">
                        </div>
                        <!-- <div class="form-group col-md-3">
                            <label for="inputPassword4">Upload Image</label>
                            <input type="file" class="form-control" id="inputPassword4" placeholder="Father's Name">
                        </div> -->
                    </div>

                    <!-- <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">Events</label>
                            
                            <select class="custom-select">
                                <option selected>Select Event</option>
                                <option value="1">FIFA 19</option>
                                <option value="2">PUBG</option>
                                <option value="3">COD4</option>
                                <option value="3">CS-GO</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputPassword4">Event Fee</label>
                            <input type="text" class="form-control" id="inputPassword4" placeholder="$$">
                        </div>
                    </div> -->

                    <button type="submit" class="btn btn-success btn-lg">Register</button>
                </form>


                <h3 class="head3">Available Events & Fees</h3>

                <table class="table mytable">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Event Name</th>
                            <th scope="col">Fee</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>FIFA 19</td>
                            <td>500</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>PUBG</td>
                            <td>400</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>COD4</td>
                            <td>300</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>CS-GO</td>
                            <td>400</td>
                        </tr>
                    </tbody>
                </table>
            </div>
             <!-- Operator Team Code End -->
    <?php include "op_foot.php" ?>