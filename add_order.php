<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มข้อมูลเกม</title>
    
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

        /* === FORM (จัดอยู่ตรงกลางแนวตั้งและแนวนอน) === */
        form {
            background: rgba(255, 255, 255, 0.6); 
            backdrop-filter: blur(10px);             
            padding: 30px;                          
            border-radius: 15px;                    
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); 
            width: 90%;
            max-width: 450px;                          
            border: 1px solid rgba(255, 255, 255, 0.8); 
            margin-top: auto;
            margin-bottom: auto;
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
            box-sizing: border-box;    
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
            font-weight: bold;
            margin-top: 20px;
            cursor: pointer;            
            transition: background-color 0.3s;
        }

        button:hover {
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

    <!-- NAVBAR -->
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
    <!-- FORM CONTAINER -->
    <form action="action/insert_order.php" method="post">
    <h2>🦈 เพิ่มออเดอร์</h2>

    <label>เลือกสินค้า</label>
    <select name="product_id" required>
        <option value="">-- กรุณาเลือกสินค้า --</option>
        <?php
            include 'action/connect.php';

            
            $sql = "SELECT product_id, product_name FROM products";
            $result = mysqli_query($con, $sql);

            if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<option value="' . $row['product_id'] . '">' . $row['product_id'] . ' - ' . htmlspecialchars($row['product_name']) . '</option>';
                }
            }
        ?>
    </select>

    <label>จำนวนสินค้า</label>
    <input type="number" name="quantity" min="1" required>

    <button type="submit">บันทึกข้อมูล</button>
</form>

    <!-- FOOTER -->
    <footer class="footer">
        <p>© BRAINROT SHOP - ร้านขายสัตว์พิเศษ</p>
    </footer>

</body>
</html>