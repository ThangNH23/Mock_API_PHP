<?php
error_reporting(0);
session_start();
// if(isset($_SESSION['students'])&& is_array($_SESSION['students'])){
    if(isset($_GET['update']) && ($_GET['update'])>=0){
        for ($i=0; $i <sizeof($_SESSION['students']); $i++) { 
            $stt=$_SESSION['students'][$i][0];
            $name=$_SESSION['students'][$i][1];
            $gt=$_SESSION['students'][$i][2];
            $qq=$_SESSION['students'][$i][3];
            $ns=$_SESSION['students'][$i][4];
            $nh=$_SESSION['students'][$i][5];
        }
    
    }

    if(isset($_POST['submit'])){
        $MaSV=$_POST['id'];
        $Name=$_POST['name'];
        $Gioi_tinh=$_POST['sex'];
        $Que_quan=$_POST['qquan'];
        $Nam_sinh=$_POST['year'];
        $Nghanh_hoc=$_POST['nhoc'];
        $arr_student=[$MaSV,$Name,$Gioi_tinh,$Que_quan,$Nam_sinh,$Nghanh_hoc];
        $_SESSION['students'][$_GET['update']]=$arr_student;
        header("location:Show_student.php");
      
    }

?>

<form action="" method="post">
    <label for="">MaSV</label>
    <input type="text" name="id" value="<?php  echo $stt; ?>">  <br>
    <label for="">Họ và Tên</label>
    <input type="text" name="name" value="<?php  echo $name; ?>">  <br>
    <label for="">Giới Tính</label>
    <input type="text" name="sex" value="<?php  echo $gt; ?>">  <br>
    <label for="">Quê Quán</label>
    <input type="text" name="qquan" value="<?php  echo $qq; ?>">  <br>
    <label for="">Năm sinh</label>
    <input type="number" name="year" value="<?php  echo $ns; ?>">  <br>
    <label for="">Nghành học</label>
    <input type="text" name="nhoc" value="<?php  echo $nh; ?>">  <br>
    <button name="submit">Cập Nhật</button>
</form>

