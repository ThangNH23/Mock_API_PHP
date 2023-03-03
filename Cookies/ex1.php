<html>
<?php 
    setcookie ("Thang", "19", time()+30);
    echo $_COOKIE["Thang"];

    if(isset($_COOKIE["Thang"]))
    {
        echo "Welcome" . $_COOKIE["Thang"];
    }
    else {
        echo "Tên này không tồn tại";
    }
?>
</html>

