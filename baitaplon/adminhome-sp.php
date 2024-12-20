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
            <h3>Danh sách sản phẩm</h3>
            <button type="button" class="btn btn-info"><a href="nhapthongtinsp.php">Thêm sản phẩm</a></button>
            <table class="table ">
            <thead class = "table-dark">
            <tr>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Giá tiền</th>
                <th>Thao tác</th>
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
                    <td><a href="edit.php?id=<?php echo $row['id_sp'];?>" class="btn btn-primary">Sửa</a> 
                    <a onclick ="return confirm('Bạn có muốn xóa không?');" href="xoa.php?id=<?php echo $row['id_sp'];?>" class="btn btn-danger">Xóa</a>
                    </td>
                    </tr>
                    <?php
                }

                $conn->close();
            ?>
            </tbody>
        </table>
        </div>
      </div>
    </div>
  </body>
</html>
