<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
<?php 
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $error = array(); 
    // hàm empty dùng để kiểm tra
    // kiểm tra lỗi username
    // hàm empty là hàm giúp kiểm tra một biến có rỗng hay k
    // hàm trả về true nếu $var k xác định hoặc mang giá trị null
    if (empty($_POST['username'])) {
        $error['username'] = "Bạn cần nhập username";
    }
    else {
        $username = $_POST['username'];
    }
    // kiểm tra lỗi password
    if (empty($_POST['password'])) {
        $error['password'] = "Bạn cần nhập password";
    }
    else {
        $password = $_POST['password'];
    }

    // kết luận
    // kiểm tra xem error có lỗi hay không
    // không có lỗi
    if(empty($error)) {
        echo "{$username} </br> {$password}";
        // xử lý theo tình huống đã nhập đầy đủ
    }
}
?>

    <h1>Form đăng nhập</h1>
    <form action="" method="post">
        <label for="username">Tên đăng nhập: </label>  
        <input type="text" name="username" id="username" value="<?php if (isset($username)) echo $username ?>"> <br> 
        <?php 
        // isset giúp kiểm tra xem một biến nào đó đã đc khởi tạo hay chưa, nếu tồn tại => true ,else => false
            if (isset($error['username'])) {
            ?>  
            <span style="color: red";><?php echo $error['username']; ?> </span> <br><br>
        <?php } ?> 
        <label for="password">password: </label>
        <input type="password" name="password" id="password"> <br> 
        <?php 
            if (isset($error['password'])) {
            ?> 
            <span style="color: red";><?php echo $error['password']; ?> </span> <br>  <br>
        <?php } ?>
        <input type="submit" name="submit_login" value="Đăng nhập">
    </form>

</body>
</html>