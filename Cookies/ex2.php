    <?php 
        $user_name = "Thắng";
        $values = "19";

        setcookie($user_name, $values, time()+60);
    ?>

<html>
    <?php
        if(!isset($_COOKIE[$user_name])) 
        {
            echo "Tên cookies: " . $user_name . " chưa được tạo" . "<br>";
        }
        else
        {
            echo "Tên user: " . $user_name . " đã được tạo" . "<br>";
            echo "Giá trị của user là: ". $_COOKIE[$user_name] . "<br>";
            echo "Hello " . $user_name;
        }
    ?>
</html>