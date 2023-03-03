<?php
// var_dump($_FILES);
// move_uploaded_file ($_FILES['up_file']['tmp_name'],'uploads/'.$_FILES['up_file']['name']);

$foldel_path = 'uploads/';
$file_path = $foldel_path.$_FILES['up_file']['name'];
$flag = true;

if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["up_file"]["tmp_name"]);
    if ($check == $flag) {
        echo "" . $check["mime"] . "<br>";
        $flag = true; 
    }
    else {
        echo "Error: file này không phải là một hình ảnh " . "<br>";
        $flag = false;
    }
}

// check file bị trùng
if (file_exists($file_path)) {
    echo "Error: File này đã tồn tại " . "<br>";
    $flag = false;
}

// jpg, png, jpeg

$exten = array('JPG', 'png', 'jpeg');
$file_type = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));
if (!in_array($file_type,$exten)) {
    echo "Error: Loại file này không hợp lệ " . "<br>";
    $flag = false;
}

// check dung lượng up lên
if ($_FILES['up_file']['size']> 1000000)  {
    echo "Error: Dung lượng của file này quá lớn " . "<br>";
    $flag = false;
}
if ($flag) {
    move_uploaded_file ($_FILES['up_file']['tmp_name'],$file_path);
    echo "hình ảnh của bạn đã được upload vào thư mục, hãy vào thư mục của bạn để kiểm tra ! ";
}
else {
    echo "Error: File này không upload được " . "<br>" . "vui lòng chọn file khác!";
}
?>