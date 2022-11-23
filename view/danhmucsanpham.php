<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Main/css/product.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Document</title>
    <style>
        #banner {
            background: url(../Images/banner/banner1.jpg);
            width: 100%;
            min-height: 350px;
            background-size: cover;
            margin: 0 auto;
            margin-top: 5px;
        }

        h1 {
            font-size: 45px;
        }
        .title {
            text-align: center;
            padding: 20px;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_GET['madanhmuc'])) {
        $madm = $_GET['madanhmuc'];
    }
    ?>

    <?php include "header.php" ?>

    <div class="wrapper">
        <<div id="banner">
            <div class="text_banner">
                
            </div>
    </div>

    <!---Hiển thị danh mục -->
    <div class="food-menu">
        <button class="button_name"><i class="fa-solid fa-list-check"></i><a href="index.php?act=sanpham">Tất cả</a></button>
        <?php
        $dsdm = loadall_dm();
        foreach ($dsdm as $key => $value) {
        ?>
            <button class="button_name"><a href="index.php?act=danhmucsanpham&madanhmuc=<?php echo $value['id_cate'] ?>"><?php echo $value['name_cate'] ?></a></button>
        <?php
        }
        ?>
    </div>


    <?php


    ?>
    <h2 class="title">Sản phẩm tìm kiếm được</h2>
    <div class="food-list">
        <?php
        $dsproduct = loadAll_sanpham("", $madm);
        //var_dump($dsproduct);
        foreach ($dsproduct as $sp) {
            extract($sp);
            $link = "index.php?act=detail&id=" . $id;
            $loadsp = "index.php?act=listsp&cate_id=" . $id_cate;
            $img = $img_path . $image;
            //$loadcart = "index.php?act=" . $id;
            echo '
                <div class="product-box">
                <a href="' . $link . '">
                <img src="' . $img . '" alt="">
                </a>
                <a style="text-decoration: none;" href="' . $loadsp . '"><button>' . $name_cate . '</button></a>
                <a href="' . $link . '">
                <p class="name">' . $name . '</p>
                <p class="price">' . $price . 'đ <del>' . $amount . 'đ</del></p>
                </a>
                <div class="product-box-btn">
                  <button class="add"><i class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                </div>
            </div>
                ';
        }
        ?>


    </div>

    </div>


</body>

</html>