<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบ</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Sukhumvit Set', 'Kanit', sans-serif;
        }

        body {
            /* ใส่รูป GIF เป็นพื้นหลัง */
            background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2Yu2HZtbSeXYI1ydYx1IChTk9MyWtyqk_h8ghm9c-6Q&s=10');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .login-card {
            background: rgba(255, 255, 255, 0.9); /* เพิ่มความโปร่งแสงเบาๆ เพื่อให้กลมกลืนกับพื้นหลัง */
            padding: 2.5rem;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            width: 90%;
            max-width: 380px;
            border: 2px solid #ffccd5;
            text-align: center;
            backdrop-filter: blur(5px); /* เพิ่มเอฟเฟกต์เบลอพื้นหลังด้านหลังการ์ด */
        }

        .login-icon {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }

        h2 {
            color: #ff5c8d;
            margin-bottom: 1.5rem;
            font-size: 1.6rem;
        }

        .input-group {
            text-align: left;
            margin-bottom: 1.2rem;
        }

        label {
            display: block;
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 0.4rem;
            font-weight: 500;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1.5px solid #ffccd5;
            border-radius: 12px;
            outline: none;
            font-size: 0.95rem;
            color: #333;
            background-color: #fff;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #ff85a2;
            box-shadow: 0 0 0 4px rgba(255, 133, 162, 0.15);
        }

        button {
            width: 100%;
            padding: 0.8rem;
            margin-top: 0.5rem;
            background-color: #ff85a2;
            color: white;
            border: none;
            border-radius: 25px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(255, 133, 162, 0.4);
        }

        button:hover {
            background-color: #ff5c8d;
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(255, 92, 141, 0.5);
        }
    </style>
</head>
<body>

    <div class="login-card">
        <div class="login-icon">🦈</div>
        <h2>Sign In</h2>

        <form action="check_login.php" method="post">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="กรอกชื่อผู้ใช้" required>
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="กรอกรหัสผ่าน" required>
            </div>

            <button type="submit">Login</button>
        </form>
    </div>

</body>
</html>