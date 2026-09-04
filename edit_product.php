<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        html, body {
        height: 100%;
        margin: 0;
        padding: 0;
    }

    body {
        background: linear-gradient(135deg, #ffe6eb, #ffd1dc);
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        padding: 20px;
    }

    form {
        background: rgba(255, 255, 255, 0.6);
        backdrop-filter: blur(10px);
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 360px;
        border: 1px solid rgba(255, 255, 255, 0.8);
        margin: auto;
    }

    h2 {
        text-align: center;
        color: #d85d7c;
        margin-top: 0;
        margin-bottom: 20px;
    }

    label {
        font-weight: bold;
        color: #555;
        display: block;
        margin-top: 10px;
        margin-bottom: 5px;
    }

    input[type="text"], 
    input[type="number"], 
    select {
        width: 100%;
        padding: 8px;
        border: 1px solid #ffb6c1;
        border-radius: 8px;
        background-color: rgba(255, 255, 255, 0.8);
    }

    button {
        width: 100%;
        background-color: #ff69b4;
        color: white;
        padding: 10px;
        border: none;
        border-radius: 20px;
        font-size: 16px;
        margin-top: 20px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: #ff1493;
    }
</style>
<body>
   <?php
    $id = $_GET['id'];

    include 'action/connect.php';

    $sql = "SELECT * FROM products WHERE product_id = '$id' ";

    $result = mysqli_query($con,$sql);

    $products = mysqli_fetch_assoc($result);
?>

<form action="action/update_product.php" method="post">
    <h2>แก้ไขข้อมูลสินค้า</h2>

    <label>รหัสสินค้า</label>
    <input type="text" name="product_id" value="<?= $products['product_id'] ?>" readonly>

    <label>ชื่อสินค้า</label>
    <input type="text" name="product_name" value="<?= $products['product_name'] ?>">

    <label>ราคาสินค้า</label>
    <input type="number" name="price" value="<?= $products['price'] ?>">

    <label>ลิงค์ปกสินค้า</label>
    <input type="text" name="img" value="<?= $products['img'] ?>">


    <button type="submit">บันทึกการแก้ไข</button>
</form>
</body>
</html>