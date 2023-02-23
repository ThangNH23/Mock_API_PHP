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
    $ages = array("Son"=>30, "John"=>21, "Kane"=>29, "Mary"=>41, "Terry"=>19);
    asort($ages);
    print "<pre>";
    print_r($ages);
    print "</pre>";

    $capitals = array("VietNam"=>"Hanoi", "Japan"=>"Tokyo", "Canada"=>"Ottawa", 
                    "Qatar"=>"Doha", "England"=>"London");
    asort($capitals);
    print "<pre>";
    print_r($capitals);
    print "</pre>";
?>
</body>
</html>