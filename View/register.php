<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
</head>
<body>
    <h1 style="color: blue;">Đăng ký hệ thống</h1>

    <form action="../Controller/RegisterController.php" method="POST">
        <label for="txtAccount">Nhập tài khoản:</label>
        <input type="text" id="txtAccount" name="txtAccount" required>
        <br>
        <br>
        <label for="txtPassword">Nhập mật khẩu:</label>
        <input type="password" id="txtPassword" name="txtPassword" required>
        <br>
        <br>
        <input type="submit" value="Đăng ký">
    </form>

</body>
</html>
