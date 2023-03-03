<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Document</title>
</head>
<body>
    <center>
        <form action="" method = "post" id="forml">
            <label for="" >Full Name: </label>
                <input type="text"name="name"> <br> <br>
            <label for="">Emal: </label>
                <input type="email" name="email"> <br> <br>
            <label for="">SĐT: </label>
                <input type="number" name="number"> <br> <br>
            <label for="" id="gender">Giới tính  <br> <br>
                <input type="radio" name="gender" value="Nam"> Nam
                <input type="radio" name="gender" value="Nu"> Nữ
                <input type="radio" name="gender" value="khac"> Khác
            </label> <br> <br>
            <input type="submit" name="submit" id="submit"> 
        </form>
    </center>
</body>

</html>