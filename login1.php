<?php
include("connection.php");
if (isset($_POST['submit'])) 
{
    $un = $_POST['username'];
    $pass = $_POST['password'];

    $query = "select * from airline where un = '$username' and pass = '$password'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        header("Location:index.html");
    } else {
        echo '<script>
        window.location.href = "signup.php";
        alert("Login Failed. Invalid Username or Password")
        </script>';
    }
}
?>