<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

include 'connect.php';


$product_id = $_POST["product_id"];
$quantity   = $_POST["quantity"];

$sql = "INSERT INTO orders(product_id, quantity, order_date) VALUES ('$product_id', '$quantity', NOW())";

$result = mysqli_query($con, $sql);

if(!$result){
    echo "Error: " . mysqli_error($con);
}else{
    header("location: ../order.php");
    exit;
}
?>