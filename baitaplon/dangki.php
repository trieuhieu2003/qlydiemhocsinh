<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký tài khoản</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <style>
        .error {
            color: red;
        }
        .container{
            max-width: 760px;
            margin-top: 25px;
        }
    </style>
    <script>
    function validateForm() {
        var user_name = document.querySelector("#user_name").value;
        var pass = document.querySelector("#pass").value;
        var confirm_password = document.querySelector("#confirm_password").value;

        if (user_name === "" || pass === "" || confirm_password === "") {
            alert("Vui lòng điền đầy đủ thông tin.");
            return false;
        }

        if (user_name.length < 8) {
            alert('Tên đăng nhập phải có 8 kí tự trở lên');
            return false;
        }

        if (pass !== confirm_password) {
            alert("Mật khẩu không khớp. Vui lòng nhập lại.");
            return false;
        }

        return true;
    }
</script>
</head>
<body>
    <div class="container">
    <h1>Đăng ký tài khoản</h1>
    <form action="" method="get" onsubmit="return validateForm();">
        Tên đăng nhập: <br>
        <input type="text" name="user_name" id="user_name" class="form-control"> <br>
        Mật khẩu: <br>
        <input type="password" name="pass" id="pass" class="form-control"> <br>
        Nhập lại mật khẩu: <br>
        <input type="password" name="confirm_password" id="confirm_password" class="form-control"> <br>
        <input type="submit" name="Register" id="register" value="Đăng ký" class="btn btn-primary">
    </form>
    </div>

   
    <?php
    if (isset($_GET['Register'])) {
    $user_name = isset($_GET["user_name"]) ? $_GET["user_name"] : "";
    $pass = isset($_GET["pass"]) ? $_GET["pass"] : "";
    $confirm_password = isset($_GET["confirm_password"]) ? $_GET["confirm_password"] : "";

    // Kiểm tra và xử lý lỗi
    if (empty($user_name) || empty($pass) || empty($confirm_password)) {
        echo "<p class='error'>Vui lòng điền đầy đủ thông tin.</p>";
    } elseif ($pass !== $confirm_password) {
        echo "<p class='error'>Mật khẩu không khớp. Vui lòng nhập lại.</p>";
    }else {
        // kết nối
        require "ketnoi.php";

        $sql = "INSERT INTO user_customer(user_name, pass) VALUES ('$user_name', '$pass')";

        // Thực hiện truy vấn
        if ($conn -> query($sql)) {
            echo "Bạn đã đăng ký thành công!";
        } else {
            echo "<p class='error'>Có trục trặc" . $conn->error . "</p>";
        }

        $conn->close();
        session_start();
        $_SESSION['user_name']= $user_name;
        echo "Về trang đăng nhập.<a href = 'dangnhap_kh.php'>Đăng nhập</a>";
    }
}
?>
</body>
</html>