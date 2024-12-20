<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhập thông tin khách hàng</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <style>
        .container{
            max-width: 760px;
            margin-top: 25px;
        }
    </style>
</head>
<body>
    <div class="container">
    <h1>Nhập thông tin khách hàng</h1>
    <form action="" method="get">
        Họ tên: <br>
        <input type="text" name="hoten" id="" class="form-control"><br>
        Số điện thoại: <br>
        <input type="text" name="sdt" id="" class="form-control"><br>
        Email: <br>
        <input type="text" name="email" id="" class="form-control"><br>
        Địa chỉ: <br>
        <input type="text" name="address" id="" class="form-control"><br>
        <input type="submit" name="submit" id="" class="btn btn-primary">
    </form>
    </div>
    <?php
    if(isset($_GET['submit']))
    {
        $hoten = $_GET["hoten"];
        $sdt = $_GET["sdt"];
        $email = $_GET["email"];
        $address = $_GET["address"];
        
        //kết nối
        require "ketnoi.php";

        //lệnh 
        $sql = "INSERT INTO khachhang(hoten, sdt, email, address) VALUE ('$hoten', '$sdt', '$email', '$address')";

        //Thực hiện lệnh sql và check
        if($conn -> query($sql))
        {
            echo "Bạn đã nhập thông tin thành công!";
        }else{
            echo "[error:]" . $sql . "<br>". $conn -> error;
        }
        $conn->close();
    }
    ?>
    <a href="giaodienweb.php">Về trang chủ</a>
</body>
</html>