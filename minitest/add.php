<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="add.css">
    <title>Document</title>
</head>
<body>
<center>
        <form action="" method = "post" id="forml">
            <label for="" >Full Name: </label>
                <input type="text"name="name"> <br> <br>
            <label for="">Emal: </label>
                <input type="email" name="email"> <br> <br>
            <label for="" >class: </label>
                <input type="text" name="class"> <br> <br>
            <label for="" >Address: </label>
                <input type="text" name="address" > <br> <br>
            <label for="" id="gioitinh">Giới tính  <br> <br>
                <input type="radio" name="gender" value="Nam"> Nam
                <input type="radio" name="gender" value="Nu"> Nữ
                <input type="radio" name="gender" value="khac"> Khác
            </label> <br> <br>
            <button type="submit" name="submit" id="submit"> Add </button>
        </form>
    </center>
</body>
<?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $Email = $_POST['email'];
        $Class = $_POST['class'];
        $Address = $_POST['address'];
        $Gender = $_POST['gender'];

        $array = [$name, $Email, $Class, $Address, $Gender];
        $_SESSION['infor'][] = $array;

        header ('Location:http://localhost:8080/php/minitest/show.php');
    }


?>
</html>