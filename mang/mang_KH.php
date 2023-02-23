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
// mảng kết hợp
// đối với mảng một chiều $key sẽ ra index
// đối với mảng kết hợp $key sẽ là tên và $value sẽ là index
$age = array("Thắng"=>"35", "Thi"=>"37", "Quang"=>"43");

foreach($age as $key => $value) {
echo "- Name: " . $key . "<br> ".  "Tuổi: " . $value;
echo "<br>";
}

?>
<br>
<?php 
// mảng một chiều

$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
  echo "- " .$cars[$x];
  echo "<br>";
}
?>

</body>
</html>