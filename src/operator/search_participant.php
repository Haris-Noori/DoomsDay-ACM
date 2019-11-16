<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search Participant | Operator</title>
    <link rel="stylesheet" href="../../css/search_participant.css">
</head>

<body>
    <?php include "op_head.php" ?>
            <!-- Operator Team Code Start -->
            <div class="container-fluid">
                <h1 class="mt-4">Search for a Participant</h1>


                <form class="myform">

                    <div class="form-row">
                        <div class="form-group col-md-4">

                            <input type="number" class="form-control" id="inputEmail4"
                                placeholder="Participant ID xxxx">

                        </div>
                        <div class="form-group col-md-4">
                            <button type="submit" class="btn btn-success">Search 🔍</button>
                        </div>

                    </div>

                </form>


                <h3 class="head3">Participant Details</h3>

                <table class="table mytable">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Participant ID</th>
                            <th scope="col">Participant Name</th>
                            <th scope="col">CNIC</th>
                            <th scope="col">Phone No.</th>
                            <th scope="col">Event</th>
                            <th scope="col">Paid</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">5221</th>
                            <td>Haris Noori</td>
                            <td>1234567890123</td>
                            <td>03331234567</td>
                            <td>FIFA 19</td>
                            <td>Yes</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Operator Team Code End -->
    <?php include "op_foot.php" ?>