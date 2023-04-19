<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "srm";

$conn = mysqli_connect($servername, $username, $password, $db , 3329);
if($conn)
{
   // echo "Connection Established";
}
else
{
    echo "Connection failed";
}
?>