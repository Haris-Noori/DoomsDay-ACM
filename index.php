<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DOOMSDAY 2019</title>

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

    <link rel="stylesheet" href="css/bootstrap.min.css">    
    <link rel="stylesheet" href="css/index.css">

    <link href="https://fonts.googleapis.com/css?family=Big+Shoulders+Text&display=swap" rel="stylesheet">
</head>

<body>


    <nav class="navbar mynav">
        <div class="mydiv">
            <span><img src="img/doomslogo.png" width="150" class="d-inline-block align-top"></span>
            <a id="techvalley" href="index.php">
                DOOMSDAY 2019
            </a>
            <ul>
                <li>Home</li>
                <li>Team</li>
                <li> <a href="src/participant/participate_form.php">Participate</a> </li>
            </ul>
        </div>

    </nav>

    <div class="container mcontainer">
        <div class="row main-card">

            <div class="col-sm-6 col-md-3 cards" id="card1">
                <div class="card" style="width: 18rem;">
                    <img src="img/card.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Admin Login</h5>
                        <p class="card-text">This is for super admins only</p>
                        <a href="src/admin/admin_login.php" class="btn btn-dark">Login</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 cards" id="card2">
                <div class="card" style="width: 18rem;">
                    <img src="img/card.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Operator Login</h5>
                        <p class="card-text">Operational team can login from here</p>
                        <a href="src/operator/operator_login.php" class="btn btn-dark">Login</a>
                    </div>
                </div>
            </div>


        </div>
    </div>


    <footer class="foot" style="background: #020002">
        <div class="row align-center copyright">
            <div class="col-sm-12" align="center" style="color:whitesmoke">
                <br>
                <h3>&copy;DOOMSDAY 2019 - Designed & Developed by <a href="https://imharis.wordpress.com/" target="_blank">Haris Noori</a> & <a href="https://www.facebook.com/haider.tamsil" target="_blank">Haider Tamsil</a></h3>
                <!-- <p><img src="../images/footer.png" id ="img_footer"></span></p> -->
            </div>
        </div>
    </footer>


    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>