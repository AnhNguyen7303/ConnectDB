<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
</head>
<body>
    <h1 style="color: blue;">Đăng nhập hệ thống</h1>

    <form action="../Controller/LoginController.php" method="POST">
        <label for="txtAccount">Nhập tài khoản:</label>
        <input type="text" id="txtAccount" name="txtAccount" required>
        <br>
        <br>
        <label for="txtPassword">Nhập mật khẩu:</label>
        <input type="password" id="txtPassword" name="txtPassword" required>
        <br>
        <br>
        <input type="submit" value="Đăng nhập">
    </form>

</body>
</html>
