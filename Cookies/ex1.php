<html>
<?php 
setcookie ("my_cookies", "bx1", time()+ 30,'/');
echo 'the cookies has bees set for 30 seconds' ."</br>";
echo $_COOKIE['my-cookies'];
?>

</html>