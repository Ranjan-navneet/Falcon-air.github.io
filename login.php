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
    <title>Login</title>
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
        <div class="container" style="margin-top:200px; font-family:montserrat;color:white;font-size:x-large;margin-left:20px;">
            <label>Username : </label><br>
            <input type="text" placeholder="Enter Username" name="username" style="width:50%;height:30px; border-radius:8px;" required><br><br>
            <label>Password : </label><br>
            <input type="password" placeholder="Enter Password" name="password" style="width:50%;height:30px; border-radius:8px;" ><br><br>
            <button type=" button " style="width:80px;height:40px; border-radius:8px; margin-left:270px; cursor:pointer; font-family:montserrat; color:white;font-weight:bold;background-image: radial-gradient( circle 325px at 19.2% 64.8%, rgba(254, 62, 101, 1) 9.7%, rgba(166, 24, 146, 1) 91.3%);">Submit</button><br><br>
        </div>
    </form>



    <div class="footer ">
        <p> Copyright &copy 2023 Falcon Air. All Rights Reserved</p>
    </div>

</body>

</html>
