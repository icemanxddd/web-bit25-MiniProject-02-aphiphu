<?php
    

    $con = mysqli_connect("localhost", "root", "", "brainrot_db");

    $username = $_POST["username"];
    $password = $_POST["password"];

    session_start();

    $q = "SELECT * FROM users
    Where username = '$username' 
    AND password = '$password' ";

$result = mysqli_query($con, $q);


if(mysqli_num_rows($result) > 0){
    $user = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $user['username'];
    header("location: index.php");
    exit;

}else{
    header("location: login.php");
    exit;
}