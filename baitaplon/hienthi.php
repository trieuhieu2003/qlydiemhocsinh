<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 style="text-align: center;">Thông tin sản phẩm</h1>
    <br>
    <div class ="container" >
        <table class="table ">
            <thead class = "table-dark">
            <tr>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Giá tiền</th>
            </tr>
            </thead>   
            <tbody>
            <?php
                require "ketnoi.php";
                $sql = "SELECT * FROM loaisp";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                    <td><?php echo $row['id_sp'];?></td>
                    <td><?php echo $row['ten_sp'];?></td>
                    <td><?php echo $row['gia'];?></td>
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