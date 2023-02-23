<?php
$a=1249;
$c=0;
$sum =0;
while($c <= $a){
    $sum=$sum+($a%10);
    $c +=($a/10);
    echo $sum;
    echo "<br/>";  
}

?>