<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhập thông tin sản phẩm</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
</head>
<body>
    <h1>Nhập thông tin sản phẩm</h1>
    <form action="" method="get">
        Mã sản phẩm: <br>
        <input type="text" name="id_sp" id=""><br>
        Tên sản phẩm: <br>
        <input type="text" name="ten_sp" id=""> <br>
        Giá tiền: <br>
        <input type="text" name="gia" id=""> <br>
        <input type="submit" name="ADD" id="" value = "ADD">
    </form>
    <?php
    if(isset($_GET['ADD']))
    {
        $id_sp = $_GET['id_sp'];
        $ten_sp = $_GET['ten_sp'];
        $gia = $_GET['gia'];


        require "ketnoi.php";

        $sql = "INSERT INTO loaisp(id_sp, ten_sp, gia) VALUE ('$id_sp', '$ten_sp', '$gia')";
        if($conn -> query($sql))
        {
            echo "Bạn đã nhập thông tin thành công!";
        }else{
            echo "Hệ thống có trục trặc!";  
        }

        $conn -> close();
    }
    ?>
    <br>
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
                    <tr>
                <?php
                }

                $conn->close();
            ?>
            </tbody>
        </table>
        <button type ="button" class="btn btn-info"><a href="adminhome-sp.php" style ="text-decoration: none; color: black;">Về trang chủ</a></button>
    </div>
</body>
</html>