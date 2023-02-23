<!DOCTYPE html>
<html>
<head>
    <title>Trang tính tiền</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

<center>
<?php
error_reporting(0);

function validation(){
    
}
function cancel(){
    if(isset($_POST["cancel"])){
        echo "<script>document.location='index.php';";
    }
}
function dateDiffInDay($daycheckIn,$daycheckOut){
    $diff = strtotime($daycheckOut)-strtotime($daycheckIn);
    return abs(round($diff/86400));
}
if(isset($_POST["submit"])){
    $typeRoom =$_POST["typeRoom"];
    if($typeRoom =="A"){
        $priceRoom =1000;
    }elseif($typeRoom =="B"){
        $priceRoom=500;
    }
    else{
        $priceRoom =200;}

    // get day in checkIn and checkOut;
$daycheckOut  =($_POST["checkOut"]); // or your date as well
$daycheckIn =($_POST["checkIn"]);
$datediff =(int) dateDiffInDay($daycheckOut,$daycheckIn);
    
    $money =$_POST["money"];
    $laundry=$_POST["gl"];
    $sauna =$_POST["th"];
    $breakfast=$_POST["as"];
    $MoneyServices=$laundry + $sauna +$breakfast;
    $tatol=($MoneyServices +$priceRoom+$money)*$datediff;


}

?>
    <form method="POST" name="frm" class="form-control">
        <h1 class="title">TÍNH TIỀN</h1>
        <table>
            <tr id="ss">
                <th>Loại phòng:</th>
                <th><select name="typeRoom" id="a">
                <option value="A">A</option>
                <option value="B">B</option>
                </select></th>
            </tr>
            <tr>
                <th>Check in:</th>
                <th><input type="date" name="checkIn" id="daycheckIn">
            <br></th>
            </tr>
            <tr>
                <th>Check out:</th>
                <th> <input type="date" name="checkOut" id="daycheckOut"></th>
            </tr>
            <tr>
                <th> Tiền ăn:</th>
                <th><input type="number" name="money" id="money" placeholder="enter your money"></th>
            </tr>
            <tr>
                <th></th>
                <th><input type="checkbox" id="gl" value="30000" name="gl">
                <label for="gl">Giặt là</label>
                </th>
            </tr>
            <br>
            <tr>
                <th></th>
                <th><input type="checkbox" id="as" value="500" name="as">
                <label for="as">Ăn sáng</label>
                </th>
            </tr>
            <tr>
                <th>Dịch vụ</th>
                <th></th>
            </tr>
            <tr>
                <th></th>
                <th><input type="checkbox" id="th" value="300" name="th">
                <label for="th">Tắm hơi</label></th>
            </tr>
           
        </table>
         <button type="submit" name="submit" class="submit">OK</button>
         <button type="submit" name="cancel" class="submit">cancel</button>
    </form>
   
        
</center>
    <h1>BILL</h1>
    <div class="container">
        <div class="titlebill">
<div>TypeRoom: </div>
            <div>rental Hours: </div>
            <div>money for meals: </div> 
            <div>money for services:</div>
            <div>tatol:</div>
        </div>
        <div class="result">
            <div> <?php echo $typeRoom; ?> </div>
            <div><?php echo $datediff." day";?></div> 
            <div> <?php echo $money; ?> </div>
            <div> <?php echo $MoneyServices; ?> </div>
            <div><?php echo $tatol;?> </div>

        </div>

    </div>


</body>
</html>