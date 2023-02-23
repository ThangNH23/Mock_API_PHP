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
    $mang = [  
        "Thắng", "Thi", "Sơn", "Lực"
    ];
    if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            if (in_array($name,$mang)) {
                $kq = "Đã tìm thấy";
            }
            else {
                $kq = "Bạn đang nơi nào";
            };
    };
    ?>

    <form action="bt.php" method="post">
    <label for="" name="name">Search:</label>
    <input type="text" name="name" >
    <p>kết quả: <?php echo $kq; ?></p>
    <input type="submit" name="submit">
    </form>
    
</body>
</html>