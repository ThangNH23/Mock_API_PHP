<!DOCTYPE html>
<html>
<head>
    <title>Hóa đơn thanh toán </title>

<style>
    #tinhtien{
        text-align: center;
        background-color: #f53b57;
        font-weight: bold;
        font-size: 30px;
      
    }
    table{
        background-color: #f78fb3;
        margin-left: auto;
        margin-right: auto;
    }
    #tinh{
        margin-left: 100px;
    }
    #submit{
        margin-left: 200px;
        
    }
   
    
</style>
</head>
<body>
<?php
    $giat = $_POST["giatla"];
    $an = $_POST["ansang"];
    $tam = $_POST["tamhoi"];
    $moneyMeal = $_POST["meals"];
    $typeRoom = $_POST["typeroom"];
    $checkin = strtotime( $_POST["checkin"]);
    $checkout = strtotime($_POST["checkout"]); 
    $date = abs($checkout- $checkin)  ;
    $rental_hours = (floor($date / (60*60*24)))*24;
    $service = $giat + $an + $tam;
    $total = (int)$moneyMeal +(int) $service + ((int)$typeRoom * (int)$rental_hours);

?>
    <form action="" method="post">
        <table  >
            <tr class="title">
                <td id="tinhtien" colspan="2">
                    TÍNH TIỀN
                </td>
            </tr>
            <tr>
                <td>
                     LOẠI PHÒNG
                </td>
                <td>
                    <select name="typeroom">
                        <option value="1000">A</option>
                        <option value="500">B</option>
                        <option value="200">C</option>
                        
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    CHECK-IN
                </td>
                <td>
                    <input type="date" name="checkin" value="">
                </td>
            </tr>
            <tr>
                <td>
                    CHECK-OUT
                </td>
                <td>
                    <input type="date" name="checkout"  value="">
                </td>
            </tr>           
            <tr>
                <td>
                    TIỀN ĂN
                </td>
                <td>
                    <input type="text" name="meals" value=" ">
                </td>
            </tr>
            <tr>
                <td>
                    DỊCH VỤ
                    
                </td>
                <td >
                    <input  type="checkbox" name="giatla" value="300 ">GIẶT LÀ 
                    <input  type="checkbox" name="ansang" value="500">ĂN SÁNG
                    <input  type="checkbox" name="tamhoi" value="200 ">TẮM HƠI 
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button id="tinh" type="submit">Tính</button>
                    <button id="cancel" type="cancel">Cancel</button>
                </td>
                 
            </tr>

        
        </table>
    </form >
    <h1>BILL</h1>
    <form action=""  method="post">
        TypeRoom: <input type="text" value="<?php echo $typeRoom ?>"> <br> <br>
        Rental hours: <input type="text" value="<?php echo $rental_hours?>"> <br> <br>
        Money for meals: <input type="text" value="<?php echo $moneyMeal ?>"> <br> <br>
        Money for service: <input type="text" value="<?php echo $service ?>"> <br> <br>
        Total: <input type="text" value="<?php echo $total?>"> <br> <br>
    </form>
</body>
</html>