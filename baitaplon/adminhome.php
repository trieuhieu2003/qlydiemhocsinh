<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="adminhome.css" />
  </head>
  <body>
    <header>
      <div class="container-fluid bg-top1">
        <ul>
          <?php
            session_start();
            if(isset($_SESSION['userID'])){
              echo "<li>Xin chào: " . $_SESSION['userID'] . "</li>";
          } else {
              echo "<li><a href = 'dangnhapadmin.php'>Đăng nhập</a></li>";
          }
            ?>
          <li class="infor-right"><a href="">Trang chủ</a></li>
          <li class="infor-right"><a href="dangxuatadmin.php">Đăng xuất</a></li>
        </ul>
      </div>
    </header>
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <ul>
            <li class="edit-bg"><h3>Admin menu</h3></li>
            <div class="option-admin">
              <li><a href="adminhome-kh.php">Xem thông tin khách hàng</a></li>
              <li><a href="adminhome-sp.php">Sản phẩm</a></li>
              <li><a href="donhang.php">Đơn hàng</a></li>
            </div>
          </ul>
        </div>
        <div class="col-lg-8">
          <div class="infor-box">
        </div>
      </div>
    </div>
  </body>
</html>
