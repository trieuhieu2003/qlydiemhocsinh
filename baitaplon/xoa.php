<?php
require "ketnoi.php";
if(isset($_GET["id"]))
{
   $id_sp = $_GET["id"];
}
?>
<?php
$sql = "DELETE FROM loaisp WHERE id_sp = $id_sp";
$result = mysqli_query($conn,$sql);
header("location: adminhome-sp.php");
?>