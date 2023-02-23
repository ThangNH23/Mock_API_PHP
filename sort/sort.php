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
    $names = array("Son", "John", "Kane", "Mary", "Terry");
    sort($names);
    print_r($names);
    $nums = array(8, 2, 9, 4, 1);
    sort($nums);
    print_r($nums);
    ?>
</body>
</html>