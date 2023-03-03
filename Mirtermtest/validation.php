<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="validation.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
<?php 

function validateform()
{

}
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $error = array(); 
    // kiểm tra lỗi username
    if (empty($_POST['username'])) {
        $error['username'] = "Bạn cần nhập username";
    }
    else {
        $username = $_POST['username'];
    }
    // kiểm tra lỗi 
    if (empty($_POST['dienthoai'])) {
        $error['dienthoai'] = "Bạn cần nhập số điện thoại";
    }
    else {
        $dienthoai = $_POST['dienthoai'];
    }

    if (empty($_POST['email'])) {
        $error['email'] = "Bạn cần nhập email";
    }
    else {
        $email = $_POST['email'];
    }

    if (empty($_POST['noidung'])) {
        $error['noidung'] = "Bạn cần nhập nội dung";
    }
    else {
        $noidung = $_POST['noidung'];
    }

    if(empty($error)) {
        echo "<div style='border:2px solid;width: 35%;text-align: center;'><h1>Thông tin của bạn</h1>" . "<br>" . 
        "<h4>Full name:</h4>  "."{$username} </br> <h4>Phone number:</h4> {$dienthoai} <br> <h4>Email:</h4>  {$email} <br> <h4>Content:</h4>  {$noidung}</div>";
        // xử lý theo tình huống đã nhập đầy đủ
    }
}
?>

    <h1 class="login">Form đăng nhập</h1>
    <form action="" method="post" id="forml">
        <label for="username">User name: </label>  
        <input type="text" name="username" id="username" value="<?php if (isset($username)) echo $username ?>"> <br> 
        <?php 
            if (isset($error['username'])) {
            ?>  
            <span style="color: red";><?php echo $error['username']; ?> </span> <br><br>
        <?php } ?> 
        <label for="password">Điện thoại: </label>
        <input type="number" name="dienthoai" id="dienthoai"> <br> 
        <?php 
            if (isset($error['dienthoai'])) {
            ?> 
            <span style="color: red";><?php echo $error['dienthoai']; ?> </span> <br>  <br>
        <?php } ?>

        <label for="email">Email: </label>  
        <input type="text" name="email" id="email"> <br> 
        <?php 
            if (isset($error['email'])) {
            ?>  
            <span style="color: red";><?php echo $error['email']; ?> </span> <br><br>
        <?php } ?> 

        <label for="email">Nội dung: </label>  
        <input type="text" name="noidung" id="noidung"> <br> 
        <?php 
            if (isset($error['noidung'])) {
            ?>  
            <span style="color: red";><?php echo $error['noidung']; ?> </span> <br><br>
        <?php } ?> 

        <input type="submit" name="submit_login" class="dang_nhap" value="Đăng nhập">
    </form>
</body>
</html>