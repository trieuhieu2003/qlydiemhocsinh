<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
</head>
<body>
<h1>Nhập thông tin học sinh</h1>
    <form action="" method="get">
        Mã sản phẩm: <br>
        <input type="text" name ="id_sp" class="form-control"><br>
        Tên sản phẩm: <br>
        <input type="text" name="ten_sp" id="" class="form-control"><br>
        Giá tiền: <br>
        <input type="text" name="gia" id="" class="form-control"><br>
        <input type="submit" name="Update" id="" class="btn btn-primary">
    </form>
    <?php
    ?>
    <?php
    if(isset($_GET['Update']))
    {
        $id_sp = $_GET["id_sp"];
        $ten_sp = $_GET["ten_sp"];
        $gia = $_GET["gia"];
        require "ketnoi.php";
        $sql = "UPDATE loaisp SET id_sp = '$id_sp', ten_sp ='$ten_sp', gia = '$gia' WHERE id_sp = $id_sp";
        if(mysqli_query($conn, $sql))
        {
            header("location: adminhome-sp.php");
        }

    }
    ?>
</body>
</html>