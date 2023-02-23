<html>
    <?php
    if (isset($_GET['delete']) && ($_GET['delete'] >= 0)) {
        array_splice($_SESSION['students'], $_GET['delete'], 1);
    }
    ?>
    <table style=" border:1px solid black; border-collapse:collapse;">
        <tr>
            <th>STT</th>
            <th>MaSV</th>
            <th>Họ và Tên</th>
            <th>Giới Tính</th>
            <th>Quê Quán</th>
            <th>Năm sinh</th>
            <th>Chuyên nghành</th>
            <th>Hàng động</th>
        </tr>
        <?php Show_table(); ?>
        <p><a href="push.php">Add</a></p>
    </table>
</html>