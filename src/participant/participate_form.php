<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dooms Day</title>
    <link rel="stylesheet" href="../../css/participate_form.css">
</head>

<body>
    <nav>
        <img src="../../img/doomsday.JPG" alt="">
        <ul>
            <li>HOME</li>
            <li>ABOUT</li>
            <li>CONTACT</li>
            <li>FAQS</li>
        </ul>
    </nav>


    <h1>We Welcome You That You Made Your Mind!</h1>
    <p>Kindly Fill The Form To Proceed</p>

    <form action="insert.php" method="POST">


        <div class="main">
            <div id="input1">
                 <input type="text" name="Name" placeholder="Name" required>
            </div>

            <div id="input1">
                 <input type="number" name="CNIC" placeholder="CNIC" required>
            </div>

            <div id="input1">
                <input type="email" name="e-mail" placeholder="e-mail" required>
            </div>
            <div id="input1">
                <input type="number" name="contact" placeholder="Contact Number" required>
            </div>
            <div id="input2">
                <input type="radio" name="gender" value="Male" required> Male
                <input type="radio" name="gender" value="Female" required> Female 
                <input type="radio" name="gender" value="unknown" required> Unknown
            </div>

            <h2> PLEASE SELECT THE GAMES YOU WANT TO REGISTER! </h2>

            <div id="input3">
                <ul>
                    <li> <input type="checkbox" name="fruit" value="FIFA"> FIFA </li>
                    <li> <input type="checkbox" name="fruit" value="TEKKEN"> TEKKEN </li>
                    <li> <input type="checkbox" name="fruit" value="COD"> COD </li>
                    <li> <input type="checkbox" name="fruit" value="PUBG"> PUBG </li>
                    <li><input type="checkbox" name="fruit" value="NFS"> NFS </li>
                </ul>
            </div>

            <button type="submit">REGISTER</button>

        </div>
    </form>

</body>

</html>
