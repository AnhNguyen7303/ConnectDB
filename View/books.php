<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer List</title>
</head>
<body>
    <h1>Account List</h1>
    <table border="1">
        <tr>
            <th>Account</th>
            <th>PassWord</th>
        </tr>
        <?php foreach ($data_account as $data): ?>
            <tr>
                <td><?php echo $data['MaSach']; ?></td>
                <td><?php echo $data['TenSach']; ?></td>
                <td><?php echo $data['SoLuong']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <?php
        echo ("<br/><br/>");
        echo ("<a href='logout.php'>Logout</a>");
    ?>
</body>
</html>
