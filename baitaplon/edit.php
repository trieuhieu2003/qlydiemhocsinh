<?php
require "ketnoi.php";
$id_sp = $_GET["id"];
$sql = "SELECT * FROM loaisp WHERE id_sp = $id_sp";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
</head>
<body>
    <h1>Update thông tin sản phẩm</h1>
    <form action="update.php" method="get">
        <input type="hidden" name="id" id="" value ="<?php echo $id?>"  class="form-control">
        ID sản phẩm: <br>
        <input type="text" name ="id_sp" value = "<?php echo $row['id_sp'];?>"  class="form-control"><br>
        Tên sản phẩm: <br>
        <input type="text" name="ten_sp" id="" value = "<?php echo $row['ten_sp'];?>"  class="form-control"><br>
        Giá: <br>
        <input type="text" name="gia" id="" value ="<?php echo $row['gia'];?>"  class="form-control"><br>
        <input type="submit" name="Update" id="" value = "Update" class="btn btn-primary">
    </form>
</body>
</html>