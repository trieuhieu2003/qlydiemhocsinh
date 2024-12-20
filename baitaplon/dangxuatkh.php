<?php
session_start();
if(isset($_SESSION['user_name'])){
    unset($_SESSION['user_name']);
}

?>
<a href="giaodienweb.php">HOME</a>