<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="phone.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <?php 
    $list_phones = 
    array (
    'Sản phẩm nổi bật' => array(
        array(
            'img' => 'https://thekeyluxury.vn/uploads/dong-ho-rolex-doi-1.jpg',
                    'name' => 'Rolex',
                    'price' => '300.000.000',
            'feedback' => array(
                                'quatity_star' => 3,
                                'quatity_feedback' => "9999 đánh giá"),
            ),
        array(
            'img' => 'https://chonhangchuan.com/wp-content/uploads/2022/03/Cac-hang-dong-ho-noi-tieng-6.jpg',
                    'name' => 'Texcon',
                    'price' => '210.000.000',
            'feedback' => array(
                                'quatity_star' => 5,
                                'quatity_feedback' => "9999 đánh giá" ),
            ),
        array(
            'img' => 'https://a.ipricegroup.com/media/Bich/dong-ho-noi-tieng-the-gioi-tag-heuer.jpg',
                    'name' => 'Alunix',
                    'price' => '360.000.000',
            'feedback' => array(
                                'quatity_star' => 5,
                                'quatity_feedback' => "9999 đánh giá" ),
        ),
      
        array(
            'img' => 'https://luxewatch.vn/wp-content/uploads/2018/04/2312.jpg',
                    'name' => 'Marin',
                    'price' => '80.000.000',
            'feedback' => array(
                                'quatity_star' => 5,
                                'quatity_feedback' => "9999 đánh giá" ),
             ),
  
            ),


    'Sản phẩm mới nhất' => array(
        array(
            'img' => 'https://cdn.tgdd.vn/hoi-dap/1453131/top-20-cac-thuong-hieu-dong-ho-noi-tieng-chiem-linh-thi%20(23)-800x481.jpg',
                    'name' => 'Omega',
                    'price' => '480.000.000',
            'feedback' => array(
                                'quatity_star' => 2,
                                'quatity_feedback' => "9999 đánh giá" ),
           ),
        array(
            'img' => 'https://dongholuxury8668.com/wp-content/uploads/2020/02/hang-dong-ho-noi-tieng.jpg',
                    'name' => 'Tomas',
                    'price' => '120.000.000',
            'feedback' => array(
                                'quatity_star' => 4,
                                'quatity_feedback' => "9999 đánh giá" ),
            ),
        array(
            'img' => 'https://chiaki.vn/upload/news/content/2022/03/hang-dong-ho-casio-png-1646819669-09032022165429.png',
                    'name' => 'Sun',
                    'price' => '210.000.000',
            'feedback' => array(
                                'quatity_star' => 5,
                                'quatity_feedback' => "9999 đánh giá" ),
            ),
        array(
            'img' => 'https://euluxury.vn/upload_images/20220409/files/franck_muller_v41_vang_hong.jpg',
                    'name' => 'Muler',
                    'price' => '102.000.000',
            'feedback' => array(
                                'quatity_star' => 4,
                                'quatity_feedback' => "9999 đánh giá" ),
            ),
        
        ));
?>

<div id="content">
    <?php 
    foreach ($list_phones as $key => $value) { ?>
        <div class="title"> 
            <?php echo $key ?>
        </div>
        <div class="card-group">
                <?php 
                foreach ( $value as $k => $v ) {
                    ?>
                    <div class="card" id="card-item">
                    <div id="phone_img" class="card-img-top"><img src="<?php echo $v['img'] ?>"> </div>
                    <div class="card-body">
                        <div id="phone_name" class="card-title"><b> <?php echo $v['name'] ?></b> </div>
                        <div id="phone_price" ><?php echo $v['price'] ?></div>
                        <div id="phone_feedback">
                            <?php 
                                $quatity_star= $v['feedback']['quatity_star'];
                                for ($i=0; $i< $quatity_star; $i++) {
                                    echo '<span class="star"><i class="fa-sharp fa-solid fa-star"></i></span>';};
                            
                            echo '<span>  ' .$v['feedback']['quatity_feedback']. '</span>';
                            ?>
                        </div>
                    </div>
                    </div>
            <?php }
                ?>
            
        </div>
    <?php } ?>
</div>
</body>
</html>