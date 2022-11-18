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
            background: url(../Images/Footer/variety-fresh-tasty-vegetables-dark.jpg);
            width: 100%;
            min-height: 200px;
            background-size: cover;
            margin: 0 auto;
            margin-top: 5px;
            /* opacity: .3; */
        }

    </style>
</head>

<body>

    <?php include "header.php" ?>

    <div class="wrapper">
        
        <div id="banner">
            <div class="text_banner">
                <form action="" method="POST">
                    <input type="text" name="search" placeholder="Tìm kiếm sản phẩm..">
                    <button type="submit" name="btn_search" style="border: none;"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
        </div>
        
        <!---Hiển thị danh mục -->
        <div class="food-menu">
            <button class="button_name"><i class="fa-solid fa-list-check"></i><a href="index.php?act=sanpham">Tất cả</a></button>
            <?php
            $dsdm = loadall_dm();
            foreach ($dsdm as $key => $value) {
            ?>
                <button class="button_name"><i class="fa-solid fa-carrot"></i><a href="index.php?act=danhmucsanpham&madanhmuc=<?php echo $value['id_cate'] ?>"><?php echo $value['name_cate'] ?></a></button>
            <?php
            }
            ?>
        </div>
        
        <!--Sản phẩm tìm kiếm-->
        <?php
        if (isset($_POST['btn_search'])) {
            $keyword = $_POST['search'];
            $sqlsearch = "SELECT * FROM products WHERE name LIKE '%$keyword%'";

        ?>
            <h1>Sản phẩm tìm kiếm được</h1>
            <div class="food-list">
                <?php
                foreach ($kqsearch as $key => $value) {
                ?>
                    <div class="food-item">
                        <a href="<?php echo $value['id'] ?>">
                            <img src="../Images/sanpham/sanphamok/<?php echo $value['image'] ?>" alt="">
                        </a>
                        <span class="name"><a href="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></a></span><br>
                        <span class="price"><a href="<?php echo $value['id'] ?>"><?php echo $value['price'] ?></a></span><br>
                        <div class="product-box-btn">
                            <button class="add"><i class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                        </div>
                    </div>
                <?php
                }
            } else {
                ?>
                <h1>Sản phẩm nổi bật</h1>
                <div class="food-list">
                    <?php
                    $allsp = loadAll_sanpham_home();
                    foreach ($allsp as $key => $value) {
                    ?>
                        <div class="food-item product-box">
                            <a href="<?php echo $value['id'] ?>">
                                <img src="../Images/sanpham/sanphamok/<?php echo $value['image'] ?>" alt="">
                            </a>
                            <span class="name"><a href="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></a></span>
                            <span class="price"><a href="<?php echo $value['id'] ?>"><?php echo $value['price'] ?></a></span>
                            <div class="product-box-btn">
                                <button class="add"><i class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                            </div>
                        </div>
                        
                <?php
                    }
                }
                ?>
                </div>
            </div>
    </div>
</body>

</html>