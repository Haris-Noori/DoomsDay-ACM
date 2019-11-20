<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register Participant | Operator</title>
    
    <!-- <link type="text/css" rel="stylesheet" href="../../css/register_participant.css"> -->
</head>

<body>
    <?php include "op_head.php"; ?>
    <link type="text/css" rel="stylesheet" href="../../css/register_participant.css">
    <!-- Register Participant Code Start -->
    <div class="container-fluid">
        <h1 class="mt-4">Participant Registration Form</h1>


        <form class="myform" action="qr-generator/get_data.php" method="post">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Participant Name</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="Full Name" name="content">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">CNIC Number</label>
                    <input type="number" name="cnic" class="form-control" id="inputPassword4"
                        placeholder="Must be 13 Digits" required min="1000000000000" max="9999999999999">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputPassword4">Contact Number</label>
                    <input type="number" name="phone_no" class="form-control" id="inputPassword4" placeholder="03xxxx 11-Digits">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Select Event</label>

                    <select class="custom-select" name="event_name">
                        <option value="PUBG">PUBG</option>
                        <option value="Tekken">Tekken</option>
                        <option value="COD">COD</option>
                        <option value="FIFA">FIFA</option>
                        <option value="NFS">NFS</option>
                        <option value="DOTA">DOTA</option>
                        <option value="CS-GO">CS-GO</option>
                        <option value="Ludo 1 Player">Ludo 1 Player</option>
                        <option value="Cards 1 Player">Cards 1 Player</option>
                        <option value="Chess 1 Player">Chess 1 Player</option>
                        <option value="Little Artist 1 Player">Little Artist 1 Player</option>
                        <option value="Spelling Bee 1 Player">Spelling Bee 1 Player</option>
                        <option value="Henna 1 Player">Henna 1 Player</option>
                        <option value="Singing 1 Player">Singing 1 Player</option>
                        <option value="Painting 1 Player">Painting 1 Player</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputPassword4">Event Fee</label>
                    <input type="number" name="event_fee" class="form-control" id="inputPassword4" placeholder="$$">
                </div>
            </div>

            <button type="submit" class="btn btn-success btn-lg">Register</button>
        </form>


        <h3 class="head3">E-Gaming Events</h3>
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
                    <td>PUBG</td>
                    <td>1200</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Tekken</td>
                    <td>350</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>COD</td>
                    <td>1500</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>NFS</td>
                    <td>350</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>FIFA</td>
                    <td>350</td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>DOTA</td>
                    <td>350</td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>CS-GO</td>
                    <td>1500</td>
                </tr>
            </tbody>
        </table>

        <h3 class="head3">Indoor Gaming</h3>
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
                    <td>Ludo 1 Player</td>
                    <td>200</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Cards 1 Player</td>
                    <td>200</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Chess 1 Player</td>
                    <td>200</td>
                </tr>
            </tbody>
        </table>

        <h3 class="head3">Kids Modules</h3>
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
                    <td>Little Artist 1 Player</td>
                    <td>200</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Spelling Bee 1 Player</td>
                    <td>200</td>
                </tr>
            </tbody>
        </table>

        <h3 class="head3">Female Modules</h3>
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
                    <td>Henna 1 Player</td>
                    <td>100</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Singing 1 Player</td>
                    <td>100</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Painting 1 Player</td>
                    <td>100</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Operator Team Code End -->
    <?php include "op_foot.php" ?>