<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // lấy giá trị từ session infor
        if(isset($_GET['index'])) {
            $_SESSION['infor'][$_GET['index']];
            $name = $_SESSION['infor'][$_GET['index']][0];
            $Email = $_SESSION['infor'][$_GET['index']][1];
            $Class = $_SESSION['infor'][$_GET['index']][2];
            $Address = $_SESSION['infor'][$_GET['index']][3];
            $Gender = $_SESSION['infor'][$_GET['index']][4];  
        }
    ?>
    <center>
        <form action="" method = "post" id="forml">
            <label for="" >Full Name: </label>
                <input type="text"name="name" value="<?php echo $name ?>"> <br> <br>
            <label for="">Emal: </label>
                <input type="email" name="email" value="<?php echo $Email ?>"> <br> <br>
            <label for="">class: </label>
                <input type="text" name="class" value="<?php echo $Class ?>"> <br> <br>
            <label for="">Address: </label>
                <input type="text" name="address" value="<?php echo $Address ?>"> <br> <br>
            <label for="" id="gioitinh">Giới tính  <br> <br>
            <!-- nếu biến gender mà có giá trị bằng Nam thì nó sẽ cho nút click ở ô nam  -->
                <input type="radio" name="gender"  value="Nam" <?php if($Gender == "Nam") {echo 'checked';}?>> Nam 
                <input type="radio" name="gender" value="Nu"<?php if($Gender == "Nu") {echo "checked";}?>> Nữ
                <input type="radio" name="gender" value="khac"<?php if($Gender == "khac") {echo "checked";}?> > Khác
            </label> <br> <br>
            <button type="submit" name="submit" id="submit"> Edit </button>
        </form>
    </center>

    <?php
    // khi ấn nút submit thì sẽ lấy giá trị từ form
        if(isset($_POST['submit'])) {
            $name = $_POST['name'];
            $Email = $_POST['email'];
            $Class =$_POST['class'];
            $Address = $_POST['address'];
            $Gender = $_POST['gender'];
        
        echo $name. $Email. $Class. $Address. $Gender;
        $array = [$name, $Email, $Class, $Address, $Gender];
        $_SESSION['infor'][$_GET['index']] = $array;

        header ('Location:http://localhost:8080/php/minitest/show.php'); 
        }
    ?>

</body>
</html>