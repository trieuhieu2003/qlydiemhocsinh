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
    <form action="" method="get">
    <h1>Đăng nhập</h1>
        Tên đăng nhập: <br>
        <input type="text" name="userID" id="" class="form-control"><br>
        Mật khẩu: <br>
        <input type="password" name="pass" id="" class="form-control"> <br>
        <input class="btn btn-primary" type="submit" name="Login" id="" value = "Login">
    </form>
    </div>
    <?php
    if(isset($_GET['Login']))
    {
    require "ketnoi.php";
    $userID = $_GET['userID'];
    $pass = $_GET['pass'];
    mysqli_set_charset($conn, 'UTF8');
    $sql = "SELECT * FROM user_admin WHERE userID = '$userID' AND pass = '$pass'";
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
    $_SESSION['userID']= $userID;
    echo "Xin chao". $userID. ".Ban da dang nhap thanh cong.<a href = 'adminhome-kh.php'>Ve trangchu</a>";
    }
    ?>
</body>
</html>