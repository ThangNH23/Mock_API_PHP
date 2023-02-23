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
        $school = array (
            'student' => array (
                'SV01' => array (
                    'name' => 'Nguyễn Hữu Thắng',
                    'birthday' => '11-10-2003',
                    'gender' => 'Nam'
                ),
                'SV02' => array (
                    'name' => 'A Thi',
                    'birthday' => '08-12-2003',
                    'gender' => 'Nam'
                ),
                'SV03' => array (
                    'name' => 'A Quang',
                    'birthday' => '02-10-2003',
                    'gender' => 'Nam'
                ),
                'SV04' => array (
                    'name' => 'A Lực',
                    'birthday' => '01-08-2003',
                    'gender' => 'Nam'
                ),
                'SV05' => array (
                    'name' => 'Út Viên',
                    'birthday' => '11-03-2003',
                    'gender' => 'Nam'
                ),
            ),
            'Teacher' => array (
                'GV01' => array (
                    'name' => 'Cô Uyên',
                    'birthday' => '11-11-1990',
                    'gender' => 'Nữ'
                ),
                'GV02' => array (
                    'name' => 'Cô Trang',
                    'birthday' => '20-08-1996',
                    'gender' => 'Nữ'
                ),
                'GV03' => array (
                    'name' => 'Thầy Đình',
                    'birthday' => '18-12-1989',
                    'gender' => 'Nam'
            ),
        )
    );    
    ?>

    <div id="content">
        <?php 
            foreach($school as $k => $v) {
                ?>
                <h1 class="list_title"><?php echo $k; ?></h1>
                <ul class="list_school">
                    <?php foreach ($v as $k1 => $v1) {
                        ?>
                        <li>
                            <p><span>MaSV: </span><?php echo $k1; ?></p>
                            <p><span>Tên: </span><?php echo $v1 ['name'] ?></p>
                            <p><span>Ngày sinh: </span><?php echo $v1 ['birthday'] ?></p>
                            <p><span>Giới tính: </span><?php echo $v1 ['gender'] ?></p>
                        </li>
                    <?php } ?>
                </ul>
                <?php
            }
        ?>
    </div>
</body>
</html>