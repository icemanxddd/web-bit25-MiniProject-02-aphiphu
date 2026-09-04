<?php
$product_id = $_POST["product_id"];
$product_name = $_POST["product_name"];
$price = $_POST["price"];
$img = $_POST["img"];
include 'connect.php';
$sql = "INSERT INTO products(product_id, product_name, price, img) VALUES ('$product_id','$product_name','$price','$img')";
$result = mysqli_query($con , $sql);
if(!$result){
    echo "error";
}else{
    header("location: ../index.php");
    exit;
}