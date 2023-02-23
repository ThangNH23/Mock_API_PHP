<!DOCTYPE html>
<html>
<head>
    <title>Hình chữ nhật</title>
    <link rel="stylesheet" href="hcn.css">
</head>
<body>

    <form action="" method="post">
        <table>
            <tr class="center">
                <td colspan="2">
                    DIỆN TÍCH HÌNH CHỮ NHẬT
                </td>
            </tr>
            <tr>
                <td>
                    Chiều rộng
                </td>
                <td class = "chieu_rong">
                    <input id="width" type="text" name="rong"> <label> Nhập chiều rộng </label>
                </td>
            </tr>
            <tr>
                <td>
                    Chiều cao
                </td>
                <td class="chieu_cao">
                    <input id="height" type="text" name="cao"> <label> Nhập chiều cao </label>
                </td>
            </tr>
            
            <tr>
                <td>
                    Diện tích
                </td>
                <td>
                <?php
            $rong = $_POST["rong"] ;
            $cao = $_POST["cao"] ;
            $S = $rong * $cao ;
            $kq;

        // if ($S >= 200) {
        //     $kq = "Nên xây dựng vila";
        // }
        // elseif ($S >= 150) {
        //     $kq = "Nên xây biệt thự";
        // }
        // elseif ($S <= 100) {
        //     $kq = "Khỏi xây nhà";
        // }
        
        
            switch ($S) {
                case ($S >= 300):
                    $kq = "Mua iphone 14 pro max";
                    break;

                case ($S >= 200):
                    $kq = "Mua Samsung";
                    break;

                case ($S <= 100): 
                    $kq = "Mua cục gạch";
            }
        ?>
                    <input type="text" name="" value="<?php echo $S ?>">
                </td>
            </tr>
            <tr class="center">
                <td colspan="2">
                    <button type="submit">TÍNH</button>
                </td>
            </tr>
            <tr>
                <td>
                    kết quả:
                </td>
                <td class="chieu_cao">
                <input type="text" value="<?php echo $kq ?>">
                </td>
            </tr>
            
        </table>
    </form>
</body>
</html>
