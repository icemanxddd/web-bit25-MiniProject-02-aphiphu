<?php
$product_id = $_POST["product_id"];
$product_name = $_POST["product_name"];
$price = $_POST["price"];
$img = $_POST["img"];
include 'connect.php';
$sql = "UPDATE `products` SET `product_name` = '$product_name', `price` = '$price', `img` = '$img' WHERE product_id = '$product_id' ";
$result = mysqli_query($con , $sql);
if(!$result){
    echo "error";
}else{
    header("location: ../manage_product.php");
    exit;
}