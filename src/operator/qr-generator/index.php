<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QR Code Generator</title>
</head>

<body>

    <div class="myform">
        <form action="hello.php" method="post">

            <div class="items">
                <label>Enter name:</label>
                <input name="content" type="text">
            </div>

            <!-- <br> -->
            <div class="items">
                <label>CNIC (Must be13-Digits)</label>
                <input name="cnic" id="cnic" type="number" required min="1000000000000" max="9999999999999">
            </div>
            <!-- <br> -->

            <button type="submit">Generate Code</button>
        </form>
    </div>


    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>


<style>
    .myform {
        /* margin-right: 500px; */
        margin-left: 450px;
        margin-top: 200px;
    }

    .items{
        margin: 10px;
    }

    button
    {
        margin-left: 100px;
        /* margin-right: 0px; */
    }
</style>