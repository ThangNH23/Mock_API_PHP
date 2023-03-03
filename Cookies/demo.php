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
        $filename = '../mang/mangnhieuchieu.php';

        if (file_exists($filename)) 
        {
            echo "<h1>file này đã tồn tại</h1>";
        }
        else 
        {
            echo "<h1>file này không tồn tại! Vui  lòng kiểm tra lại</h1>";
        }
    ?>
</body>
</html>