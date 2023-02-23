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
        ini_set ('display_errors',0);
        function kilometers ($km) {
            return $km * 0.62;
        }
    ?>
    <form action="" method="post">
        Kilometer: <input type="text"  name="kilo" value=""> <br> <br>
        Kết Quả :  <input type="text"  value="<?php echo kilometers($_POST['kilo']) ?>"> <br> <br>
        <button type="submit"> OK</button>
    </form>
</body>
</html>