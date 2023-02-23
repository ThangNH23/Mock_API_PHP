<?php 
// Lấy danh sach sinh viên trong session
function getAllStudents()
{
    return isset($_SESSION['students']) ? $_SESSION['students'] : array();
}

// Lấy chi tiết một sinh viên dựa vào sinh viên id
function getStudent($student_id)
{
    // Lấy danh sách sinh viên để tìm
    $students = getAllStudents();
     
    // Duyệt qua từng phần tử, nếu xuất hiện ID giống nhau thì tức là đã tìm thấy sinh viên
    foreach ($students as $item)
    {
        if ($item['student_id'] == $student_id){
            return $item;
        }
    }
     
    return array();
}

// Xóa sinh viên bởi sinh viên ID
function deleteStudent($student_id)
{
    // Lấy danh sách sinh viên để tìm
    $students = getAllStudents();
     
    /// Duyệt qua từng phần tử, nếu xuất hiện ID giống nhau thì tức là đã tìm thấy sinh viên
    foreach ($students as $key => $item)
    {
        // Đã tìm thấy thì dùng hàm unset để xóa
        if ($item['student_id'] == $student_id){
            unset($students[$key]);
        }
    }
     
    // Cập nhật lại Session
    $_SESSION['students'] = $students;
     
    return $students;
}

// Hàm thêm và sửa sinh viên
function updateStudent($student_id, $student_name, $student_email)
{
    // Lấy danh sách sinh viên
    $students = getAllStudents();
     
    // Khai báo cấu trúc lưu trữ một sinh viên
    $new_student = array(
        'student_id' => $student_id,
        'student_name' => $student_name,
        'student_email' => $student_email
    );
     
    // Trường hợp update
    $is_update_action = false;
    foreach ($students as $key => $item)
    {
        if ($item['student_id'] == $student_id){
            $students[$key] = $new_student;
            $is_update_action = true; // khai báo đây là action update
        }
    }
     
    // Trường hợp add, tứ là $is_update_action = false
    if (!$is_update_action){
        $students[] = $new_student;
    }
     
    // Cập nhật dữ liệu trong Session
    $_SESSION['students'] = $students;
     
    return $students;
}

 $students=[
    "2015478"=>[
        "Name"=> "Nguyễn Thị Hồng Loan",
        "Gender"=> "nu",
        "QueQuan"=> "Hiệp Hòa-Băc Giang",
        "NgaySinh"=> "1999",
        "NghanhHoc"=> "Cong nghệ thông tin"
        ],
    "2017501"=>[
        "Name"=> "Vũ Giang sơn",
         "Gender"=> "nam",
         "QueQuan"=> "Móng Cái-Quang Ning",
         "NgaySinh"=> "1999",
         "NghanhHoc"=> "Cơ điện tử"
        ],
    "2017300"=>[
        "Name"=> "Bùi Thanh Lam",
         "Gender"=> "nu",
         "QueQuan"=> "Tiền Hải-Thai Bình",
         "NgaySinh"=> "2001",
         "NghanhHoc"=> "kế Toán"
        ],
        "2017105"=>[
            "Name"=> "Phạm Quốc Huy",
             "Gender"=> "nam",
             "QueQuan"=> "Phủ Lý-Hà Nam",
             "NgaySinh"=> "2000",
             "NghanhHoc"=> "văn hóa học"
        ],
        "2017594"=>[
            "Name"=> "Nguyễn Thanh Phương",
             "Gender"=> "nu",
             "QueQuan"=> "Ninh Giang-Hải Dương",
             "NgaySinh"=> "1998",
             "NghanhHoc"=> "Công nghệ thông tin"
            ],
        "2018320"=>[
            "Name"=> "Tô Cát Anh",
                "Gender"=> "nu",
                "QueQuan"=> "Yên Khánh-Ninh Bình",
                "NgaySinh"=> "2000",
                "NghanhHoc"=> "Ngôn ngữ anh"
            ],
        "2018794"=>[
            "Name"=> "Phạm Hồng Quang",
                "Gender"=> "nam",
                "QueQuan"=> "Lục Ngạn-Bắc Giang",
                "NgaySinh"=> "1998",
                "NghanhHoc"=> "Công nghệ thông tin"
            ],
        "2017533"=>[
            "Name"=> "Hoàng Thu Hạnh",
                "Gender"=> "nu",
                "QueQuan"=> "Gia Lộc-Hải Dương",
                "NgaySinh"=> "1999",
                "NghanhHoc"=> "Thiết kế thời trang"
            ],
        "2017199"=>[
            "Name"=> "Trần Nguyễn Ngọc Sơn",
                "Gender"=> "nam",
                "QueQuan"=> "Nho Quan-Ninh Bình",
                "NgaySinh"=> "1999",
                "NghanhHoc"=> "Cơ khí"
            ],
   ]
?>
<html>
    <head>
            <link rel="stylesheet" href="test.css">
    </head>
    <body>
   <center>
    <h1>quick test</h1>
    <h4>Danh sách sinh viên</h4>
    <form action="#" method="post">
    <input type="text" name="masv" id="masv" placeholder="kiếm theo mã sinh viên...">
    <input type="submit" name="tim" value="tìm">
    <input type="submit" value="tất cả" name="show">
    </form>

    <table class="tableStyle">
        <tr>
            <th>Mã Sinh viên</th>
            <th>Họ Và Tên</th>
            <th>Giới Tính</th>
            <th>Quê Quán</th>
            <th>Ngày Sinh</th>
            <th>Nghành Học</th>
            <th>Tác vụ</th>
        </tr>
        <?php foreach($students as $key=>$value){ ?>
        <tr>
            <th><?php echo $key;?></th><th><?php echo $value["Name"];?></th>
            <th><?php echo $value["Gender"];?></th>
            <th><?php echo $value["QueQuan"];?></th>
            <th><?php echo $value["NgaySinh"];?></th>
            <th><?php echo $value["NghanhHoc"];?></th>
            <th><a href="#">Sửa</a><a class="xoa" href="#">Xóa</a></th>
        </tr>
        <?php }?>
    </table>
            <input type="button" value=" ADD" name="add">
   </center>
    </body>
</html>