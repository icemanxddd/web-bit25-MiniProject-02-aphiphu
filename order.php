<?php
    session_start();
    if(!isset($_SESSION["username"])){
        header("location: login.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        * {
            box-sizing: border-box;
        }

        html, body {
            min-height: 100vh;
            margin: 0;
            padding: 0;
        }

        body {
            background: linear-gradient(135deg, #ffe6eb, #ffd1dc);
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        /* === NAVBAR === */
        .navbar {
            background: rgba(255, 255, 255, 0.65);
            backdrop-filter: blur(10px);
            padding: 12px 25px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.8);
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 90%;
            max-width: 1000px;
            margin-bottom: 20px;
        }

        .navbar-brand {
            font-size: 18px;
            font-weight: bold;
            color: #d85d7c;
            text-decoration: none;
        }

        .navbar-menu {
            display: flex;
            gap: 8px;
        }

        .nav-link {
            text-decoration: none;
            color: #555;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: bold;
            transition: background-color 0.3s, color 0.3s;
        }

        .nav-link:hover {
            background-color: #ff69b4;
            color: white;
        }

        /* === CONTAINER === */
        .container {
            background: rgba(255, 255, 255, 0.6);
            backdrop-filter: blur(10px);
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.8);
            width: 90%;
            max-width: 1000px;
            text-align: center;
        }

        h2 {
            text-align: center;
            color: #d85d7c;
            margin-top: 0;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 20px;
        }

        th {
            background-color: #ff69b4;
            color: white;
            padding: 12px;
            text-align: center;
        }

        td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ffb6c1;
            color: #555;
        }

        tr:hover {
            background-color: rgba(255, 230, 235, 0.5);
        }

        img {
            width: 120px;
            height: 100px;
            object-fit: cover;
            border-radius: 8px;
            border: 1px solid #ffb6c1;
        }

        .btn-link {
            display: inline-block;
            background-color: #ff69b4;
            color: white;
            padding: 10px 20px;
            border-radius: 20px;
            text-decoration: none;
            font-size: 15px;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .btn-link:hover {
            background-color: #ff1493;
        }

        /* === FOOTER === */
        .footer {
            margin-top: auto;
            padding-top: 20px;
            padding-bottom: 10px;
            text-align: center;
            color: #8d6b79;
            font-size: 13px;
        }
    </style>
</head>
<body>

    <nav class="navbar">
        <a href="index.php" class="navbar-brand">BRAINROT SHOP</a>
        <div class="navbar-menu">
            <a href="index.php" class="nav-link">หน้าหลัก</a>
            <a href="add_product.php" class="nav-link">เพิ่มสินค้า</a>
            <a href="manage_product.php" class="nav-link">จัดการสินค้า</a>
            <a href="order.php" class="nav-link">รายการสั่งสินค้า</a>
            <a href="logout.php" class="nav-link">Logout</a>
        </div>
    </nav>
    
    <!-- MAIN CONTAINER -->
    <div class="container">
        <h2>🦈 รายการสั่งสินค้าทั้งหมด</h2>

        <?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);

        include 'action/connect.php';

        $sql = "SELECT * FROM orders";
        $result = mysqli_query($con,$sql);
        ?>

        <table>
            <thead>
                <tr>
                    <th>รหัสออเดอร์</th>
                    <th>รหัสสินค้า</th>
                    <th>จำนวน</th>
                    <th>วันที่</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($result as $orders){
                ?>
                <tr>
                    <td><?= $orders["order_id"]?></td>
                    <td><?= $orders["product_id"]?></td>
                    <td><?= $orders["quantity"]?> ตัว</td>
                    <td><?= $orders["order_date"]?></td>
                    
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

        
    </div>

    <!-- FOOTER -->
    <footer class="footer">
        <p>© BRAINROT SHOP - ร้านขายสัตว์พิเศษ</p>
    </footer>
        
    

</body>
</html>