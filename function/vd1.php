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
        function Full_name ($fullname) {
            echo "Hello $fullname";
        }
        $name = $_POST["fullname"];
    ?>
    <form action="" method="post">  
        <label for="">Enter your fullname:</label>
        <input type="text" name="fullname"> <br> <br>

        <label for="" name="kq">Resoult: </label>
        <input type="text" name="resoult" value="<?php Full_name($_POST['fullname'])?> "> <br> <br>

        <button>OK</button>
    </form>

</body>
</html>