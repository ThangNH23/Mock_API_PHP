<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="shows.css">
    <title>Document</title>
</head>
<body>
    <table>
        <thead id="hien_thi">
            <td>Name</td>
            <td>Email</td>
            <td>Class</td>
            <td>Address</td>
            <td>Gender</td>
            <td>More</td>
        </thead>
    
    <?php

        if (isset($_SESSION['infor'])) {
            // tạo một biến vả gán giá trị của biến  $_SESSION['infor'] vào
            $show = $_SESSION['infor'];
            foreach (
                // 
                $show as $key => $value
            )
            {
                echo '<tr><td>'.$value[0].'</td>';
                echo '<td>'.$value[1].'</td>';
                echo '<td>'.$value[2].'</td>';
                echo '<td>'.$value[3].'</td>';
                echo '<td>'.$value[4].'</td>';
                echo '<td><span id="edit_dele"><a href="http://localhost:8080/php/minitest/edit.php?index='.$key.'">Edit </span> 
                </a> <span id="edit_dele"><a href="http://localhost:8080/php/minitest/delete.php?index='.$key.'">Delete</span> </a></td></tr>';
            }
        }
    ?>
    </table>

    <form action="" method ="post" class="them">
        <button type="add" name="add" class="them_add">Add</button>
    </form>
    
    <?php
        if(isset($_POST['add'])) {
            header ('Location:http://localhost:8080/php/minitest/add.php');
        }
    ?>
</body>
</html>