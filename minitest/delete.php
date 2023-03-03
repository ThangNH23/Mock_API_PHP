<?php
session_start();
?>

<?php
if (isset($_GET['index'])) {
    unset($_SESSION['infor'][$_GET['index']]);

    header ('Location:http://localhost:8080/php/minitest/show.php'); 
}