<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    <form action="up.php" method ="post" enctype="multipart/form-data">
        <h3>Chọn hình ảnh</h3>
        <input type="file" name ="up_file">
        <button type = "submit" name = "submit">Upload</button>
    </form>
</body>
</html>