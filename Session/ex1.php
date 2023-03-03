<html>
    <?php 
    // bước đầu khai báo session
        session_start();

    // đăng ký tên cho một session
        $_SESSION["name"] = "Thắng";
        echo "If you want to know my name !"
    ?>
    <div>Please <a href="session1.php">Click here</a></div>
</html>