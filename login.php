<?php
session_start ();

require_once 'connect.php';
include("connect.php"); //Establishing connection to our database
if (empty($_POST ["username"]) || empty($_POST ["password"])) {
    echo "Both fields are required.";
} else {
    $username = $_POST ["username"];
    $password = $_POST ["password"];
    echo $username;
    echo $password;
    $MySql = "SELECT * FROM users WHERE username='$username' and password='$password'";
    $result = mysqli_query($db, $MySql);
    if (mysqli_num_rows($result) == 1) {
        header("location: home.php"); // Redirecting to another page
    } else {
        echo "Incorrect username or password";
    }
}
session_destroy ();
?>


