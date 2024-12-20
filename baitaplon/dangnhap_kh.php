<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <h1>Đăng nhập</h1>
    <form action="" method="get">
        Tên đăng nhập: <br>
        <input type="text" name="user_name" id="" class="form-control"><br>
        Mật khẩu: <br>
        <input type="text" name="pass" id="" class="form-control"> <br>
        <a href="dangki.php">Đăng kí</a> <br> <br>
        <input class="btn btn-primary" type="submit" name="Login" id="" value = "Login">
    </form>
    </div>
    <?php
    if(isset($_GET['Login']))
    {
    require "ketnoi.php";
    $user_name = $_GET['user_name'];
    $pass = $_GET['pass'];
    mysqli_set_charset($conn, 'UTF8');
    $sql = "SELECT * FROM user_customer WHERE user_name = '$user_name' AND pass = '$pass'";
    $result = $conn->query($sql);
    if ($result -> num_rows == 0)
    {
        echo "Tên đăng nhập không tồn tại";
        exit;
    }
    $row = $result -> fetch_assoc();
    if($pass != $row['pass'])
    {
        echo " Mat khau khong dung. Vui long dang nhap lai.";
        exit;
    }
    
    session_start();
    $_SESSION['user_name']= $user_name;
    echo "Xin chao". $user_name. ".Ban da dang nhap thanh cong.<a href = 'giaodienweb.php'>Ve trangchu</a>";
    }
    ?>
</body>
</html>