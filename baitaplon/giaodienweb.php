<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Giao diện web</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <style>
     .option-web {
        list-style: none;

      }

      .option-web li {
        display: inline-block;
        position: relative;
      }

      .option-web li a {
        display: block;
        text-decoration: none;
        color: #333;
      }

      .sub-menu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        background-color: #f9f9f9;
        border: 1px solid #ddd;
        border-with

      }

      .option-web li:hover .sub-menu {
        display: block;
      }
    </style>
  </head>
  <body>
    <header>
      <div class="container-fluid bg-top1">
        <div class="container header_contain">
          <div class="row">
            <div class="col-lg-1">
              <h3 class="logo-web"><a href="#">BTN</a></h3>
            </div>
            <div class="col-lg-4">
              <ul class="option-web option-web-left">
                <li><a href="sanpham.html">Sản phẩm</a></li>
                <li><a href="#">Nam</a></li>
                <li><a href="#">Nữ</a></li>
              </ul>
            </div>
            <div class="col-lg-2">
              <div class="search-container">
                <input
                  type="search"
                  class="search-input"
                  placeholder="Search..."
                />
                <div class="search-icon">
                  <img src="search-icon.jpg" alt="" />
                </div>
              </div>
            </div>
            <div class="col-lg-5">
              <ul class="option-web option-web-right" id = "main-menu">
                <li><a href="#">tra cứ đơn hàng</a></li>
                <li><a href="#">Yêu thích</a></li>
                <li><a href="#">Giỏ hàng</a></li>
                <?php
                session_start();
                if(isset($_SESSION['user_name'])){
                echo "<li>Xin chào
                <ul class = 'sub-menu'>
                  <li><a href = 'nhapbang_kh.php'>Điền thông tin</a>
                  <li><a href = 'dangxuatkh.php'>Đăng xuất</a>
                </ul>
                </li>";
                }
                else{
                echo "<li><a href = 'dangnhap_kh.php'>Đăng nhập</a>";
                }
                ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-top2"></div>
    </header>
    <div class="container" style="max-width: 1440px">
      <img src="img/Web1920-1.jpeg" alt="" style="width: 100%" />
    </div>
    <div class="container-infor">
      <div class="col-md-3">
        <div class="card">
          <img src="img/anh1.jpg" alt="" class="w-100" />
          <div class="card-body">
            <a href="#" class="card-link">SNEAKER FEST VIETNAM VÀ SỰ KẾT HỢP</a>
            <p>
              Urbas Corluray Pack đem đến lựa chọn “làm mới mình” với sự kết hợp
              5 gam màu mang sắc thu; phù hợp với những người trẻ năng động,
              mong muốn thể...
            </p>
            <a href="#">đọc thêm</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <img src="img/anh3.jpg" alt="" class="w-100" />
          <div class="card-body">
            <a href="#" class="card-link">URBAS CORLURAY PACK</a>
            <p>
              Việc sử dụng dáng giày Vulcanized High Top của Ananas trong thiết
              kế và cảm hứng bắt nguồn từ linh vật Peeping - đại diện cho tinh
              thần xuyên...
            </p>
            <a href="#">đọc thêm</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <img src="img/anh2.jpg" alt="" class="w-100" />
          <div class="card-body">
            <a href="#" class="card-link">VINTAS SAIGON 1980s</a>
            <p>
              Với bộ 5 sản phẩm, Vintas Saigon 1980s Pack đem đến một sự lựa
              chọn “cũ kỹ thú vị” cho những người trẻ sống giữa thời hiện đại
              nhưng lại yêu nét...
            </p>
            <a href="#">đọc thêm</a>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="container-fluid footer-container">
        <div class="row footer-top">
          <div class="col-md-4 footer-house">
            <h1 style="color: white; margin-top: 40px; font-size: 50px">BTN</h1>
          </div>
          <div class="col-md-2">
            <a class="footer-chinhsach" href="#">Sản Phẩm</a>
            <ul class="footer-hotro">
              <li><a class="footer-luachon" href="#">Giày Nam</a></li>
              <li><a class="footer-luachon" href="#">Giày Nữ</a></li>
              <li>
                <a class="footer-luachon" href="#">Thời trang & Phụ kiện</a>
              </li>
              <li><a class="footer-luachon" href="#">Sale-off</a></li>
            </ul>
          </div>
          <div class="col-md-2">
            <a class="footer-chinhsach" href="#">Về Công Ty</a>
            <ul class="footer-hotro">
              <li><a class="footer-luachon" href="#">Dứa tuyển dụng</a></li>
              <li>
                <a class="footer-luachon" href="#">Liên hệ nhượng quyền</a>
              </li>
              <li><a class="footer-luachon" href="#">Về Ananas</a></li>
            </ul>
          </div>
          <div class="col-md-2">
            <a class="footer-chinhsach" href="#">Hỗ Trợ</a>
            <ul class="footer-hotro">
              <li><a class="footer-luachon" href="#">FAQS</a></li>
              <li><a class="footer-luachon" href="#">Bảo mật thông tin</a></li>
              <li><a class="footer-luachon" href="#">Chính sách chung</a></li>
              <li><a class="footer-luachon" href="#">Tra cứu đơn hàng</a></li>
            </ul>
          </div>
          <div class="col-md-2">
            <a class="footer-chinhsach" href="#">Liên Hệ</a>
            <ul class="footer-hotro">
              <li><a class="footer-luachon" href="#">Email góp ý</a></li>
              <li><a class="footer-luachon" href="#">Hotline</a></li>
              <li><a class="footer-luachon" href="#">0963 429 729</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 footer-map">
            <form action="">
              <button class="box-map">TÌM CỬA HÀNG</button>
            </form>
          </div>

          <div class="col-md-2 footer-social">
            <h4>BTN SOCIAL</h4>
            <img
              class="img-social"
              src="img/360_F_392719944_L0LYv3e7QozB2tsj3CfUN0HPC8eZQOWb.jpg"
              alt=""
            />
          </div>
          <div class="col-md-2 footer-social">
            <p>ĐĂNG KÝ NHẬN MAIL</p>
            <input type="text" name="input-mail" id="" style="width: 100%" />
          </div>
          <div class="col-md-4 footer-logo"></div>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6 footer-end">
              Copyright © 2022 Ananas. All rights reserved.
            </div>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
