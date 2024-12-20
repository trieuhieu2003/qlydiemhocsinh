<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin khách hàng</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
</head>
<body>
    <h1 style="text-align: center;">Thông tin khách hàng</h1>
    <br>
    <div class ="container" >
        <table class="table ">
            <thead class = "table-dark">
            <tr>
                <th>ID</th>
                <th>Họ tên</th>
                <th>Số điện thoại</th>
                <th>Email</th>
                <th>Address</th>
            </tr>
            </thead>   
            <tbody>
            <?php
                require "ketnoi.php";
                $sql = "SELECT * FROM khachhang";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['hoten'];?></td>
                    <td><?php echo $row['sdt'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['address'];?></td>
                </tr>
                <?php
                }

                $conn->close();
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>