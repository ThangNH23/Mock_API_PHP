<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="products.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Shop pro</title>
</head>
<body>
    <?php 
    $products = 
    array (
    'Laptop Gaming' => array(
        array(
            'id'=>1,
            'name'=>"Ideapad Gaming",
            'code'=>"TC1025011BA",
            'price'=> '520.000',
            'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQW-PRlANNaldBdh6moMHj4oFdLcAT9MhtRig&usqp=CAU',
            
            ),
        array(
            'id'=>2,
            'name'=>"Star Labs Linux",
            'code'=>"TC1025011BA",
            'price'=> '580.200',
            'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS16lfjs1nDlTubdQX-5gG0fX8abyJv0ExebA&usqp=CAU',
            ),
      
      
        array(
            'id'=>1,
            'name'=>"Colorful Gaming Mouse",
            'code'=>"TC1025011BA",
            'price'=> '720.800',
            'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_lyOA1SztASf6jxCrw8ppWjjapddV0_8Xew&usqp=CAU',
            ),
        ),

    'Laptop popular' => array(
        array(
            'id'=>1,
            'name'=>"Labtop MK IV",
            'code'=>"TC1025011BA",
            'price'=> '120.000',
            'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSB8ZNHhU_swiwk6RUbn7FO7rrHlM9BqxI53A&usqp=CAU',
           ),
        array(
            'id'=>1,
            'name'=>"Surface Laptob",
            'code'=>"TC1025011BA",
            'price'=> '1.580.200',
            'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMO1U4baM4LH14osUBY1MACS2afVFJYjuxXky5H4uihGgcw0GNCOCftF9yaYbAoMttZLI&usqp=CAU',
            ),
        array(
            'id'=>1,
            'name'=>"Fruitful",
            'code'=>"TC1025011BA",
            'price'=> '900.500',
            'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4DZkXFUpAq8DkTydJsZwbQ1wyvUYt8AiCzA&usqp=CAU',
            ),
        ));
    ?>
    
    <div id="content">
        
        <?php 
        
        foreach ($products as $key => $value) { ?>
            <div class="style_man"> 
                <?php echo $key ?>
            </div>
            <div class="card-group">
                    <?php 
                    foreach ( $value as $k => $v ) {
                        ?>
                        <div class="card" id="card-item">
                        <div id="phone_img" class="card-img-top"><img src="<?php echo $v['img'] ?>"> </div>
                        <div class="card-body">
                            <div id="name" class="card-title"><?php echo $v['name'] ?> </div>
                            <div id="code" style="text-align:center; class="card-title"><?php echo $v['code'] ?> </div>
                            <div id="price" ><?php echo $v['price'] ?></div>
                            
                            <div id="button" onclick= "return confirm('Thank you your order')">
                            <button id="buy">Đặt mua</button></div>
                        </div>
                        </div>
                <?php }
                    ?>
                
            </div>
        <?php } ?>
    </div>
    </body>
    </html>