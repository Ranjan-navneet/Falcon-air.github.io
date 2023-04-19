<?php
include("connection.php");
error_reporting(0);

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="icon" type="image/x-icon" href="fav-icon.png">
        <title>Sign Up</title>
    </head>

    <body class="body">
        <div id="navbar">
        <ul>
            <li><a class="active" href="file:///D:/xampp/htdocs/project/index.html">Home</a></li>
            <li><a href="file:///D:/xampp/htdocs/project/news.html">Guidelines</a></li>
            <li><a href="file:///D:/xampp/htdocs/project/login.html">Login</a></li>
            <li><a href="file:///D:/xampp/htdocs/project/signup.html">Book Flight</a></li>

        </ul>

        </div>

        <form action="" method="POST">
            <div class="container" style="margin-top:200px; font-family:montserrat;color:white;font-size:large;margin-left:20px;">
                <label>Username : </label><br>
                <input type="text" placeholder="Enter Username" name="username" style="width:50%;height:30px; border-radius:8px;" required><br><br>
                <label>Email Id : </label><br>
                <input type="email" placeholder="Enter Email" name="email" style="width:50%;height:30px; border-radius:8px;" required><br><br>
                <label>Date of birth : </label><br>
                <input type="date" placeholder="Enter Date of birth" name="DOB" style="width:50%;height:30px; border-radius:8px;" required><br><br>
                <label>Password : </label><br>
                <input type="password" placeholder="Enter Password" name="password" style="width:50%;height:30px; border-radius:8px;" required><br><br>
                <label>Confirm Password : </label><br>
                <input type="Confirm password" placeholder="Enter Password" name="password" style="width:50%;height:30px; border-radius:8px;" required><br><br>
                <label>FROM : </label>
                <select name="city1" style="width:400px;height:30px; border-radius:8px; text-align:center; font-family:montserrat;cursor:pointer;">
                    <option>Select City</option>
                    <option value="Chennai">Chennai</option>
                    <option value="Mumbai">Mumbai</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Kolkatta">Kolkatta</option>
                </select>
                <label style="margin-left:100px;">TO : </label>
                <select name="city2" style="width:400px;height:30px; border-radius:8px; text-align:center; font-family:montserrat; cursor:pointer;">
                <option>Select City</option>
                <option value="Mumbai">Mumbai</option>
                <option value="Delhi">Delhi</option>
                <option value="Kolkatta">Kolkatta</option>
                <option value="Chennai">Chennai</option>
                </select><br><br>
                <label style="margin-left:100px;">Number of Passengers :</label>
                <select name="passenger" style="width:400px;height:30px; border-radius:8px; text-align:center; font-family:montserrat; cursor:pointer;">
                <option>Passengers Number</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                </select><br><br>
                <label>Enter DATE of Travel : </label><br>
                <input type="date" placeholder="Date & time" name="time" style="width:50%;height:30px; border-radius:8px;" required><br><br>
                
                
                
                <button type=" button " name ="submit" style="width:80px;height:40px; border-radius:8px; margin-left:270px; cursor:pointer; font-family:montserrat; color:white;font-weight:bold;background-image: radial-gradient( circle 325px at 19.2% 64.8%, rgba(254, 62, 101, 1) 9.7%, rgba(166, 24, 146, 1) 91.3%);">Submit</button><br><br>
            </div>
        </form>



        <div class="footer ">
            <p> Copyright &copy 2023 Falcon Air. All Rights Reserved</p>
        </div>

    </body>

    </html>

    <?php
        $un = $_POST['username'];
        $m = $_POST['email'];
        $dob = $_POST['DOB'];
        $pass = $_POST['password'];
        $cpass = $_POST['password'];
        $st = $_POST['city1'];
        $st2 = $_POST['city2'];
        $passenger = $_POST['passenger'];
        $time = $_POST['time'];

            $query = "insert into airline values('$un','$m','$dob','$pass','$cpass','$st','$st2','$passenger','$time')";
            $data = mysqli_query($conn, $query);

        if ($data) {
           echo "Data Inserted";
        } else {
            echo "Failed to enter";
        }
    
?>