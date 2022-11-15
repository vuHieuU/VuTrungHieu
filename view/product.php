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
            min-height: 430px;
            background-size: cover;
            margin: 0 auto;
            margin-top: 5px;
        }

        h1 {
            padding: 10px;
        }
    </style>
</head>

<body>

    <?php include "header.php" ?>

    <div class="wrapper">
        <div id="banner">
            <div class="text_banner">
                <h1>Tìm kiếm sản phẩm</h1>
                <form action="" method="POST">
                    <input type="text" name="search" placeholder="Tìm kiếm sản phẩm ...">
                    <button type="submit" name="btn_search" style="border: none;"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
        </div>

        <!---Hiển thị danh mục -->
        <div class="food-menu">
            <button class="button_name"><a href="index.php?act=sanpham">Tất cả</a></button>
            <?php
            $dsdm = loadall_dm();
            foreach ($dsdm as $key => $value) {
            ?>
                <button class="button_name"><a href="index.php?act=danhmucsanpham&madanhmuc=<?php echo $value['id_cate'] ?>"><?php echo $value['name_cate'] ?></a></button>
            <?php
            }
            ?>
        </div>


        <!--********* HTML  *************-->
        <!--Hiển thị giống bên danh mục-->
        <!-- <div class="food-menu">
            <button class="active" type-food="all">All food</button>
            <button type-food="salad">Salad</button>
            <button type-food="meat">Meat</button>
            <button type-food="drinks">Vegetable</button>
            <button type-food="dessert">fruit</button>
        </div> -->

        <!--Hiển thị trang sản phẩm-->
        <!-- <div class="food-list">
            <div class=" food-item" type-food="meat">
                <img src="../Images/sanpham/bapcaitim.jpg" alt="">
                <p class="name">Bắp cải tim Organic 500g</p>
                <p class="price">30.000đ <del>45.000đ</del></p>
                <div class="product-box-btn">
                    <button class="add"><i class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                </div>
            </div>
            <div class=" food-item" type-food="dessert">
                <img src="../Images/sanpham/bingoi.jpg" alt="">
                <p class="name">Bắp cải tim Organic 500g</p>
                <p class="price">30.000đ <del>45.000đ</del></p>
                <div class="product-box-btn">
                    <button class="add"><i class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                </div>
            </div>
            <div class=" food-item" type-food="salad">
                <img src="../Images/sanpham/dualeo.jpg" alt="">
                <p class="name">Bắp cải tim Organic 500g</p>
                <p class="price">30.000đ <del>45.000đ</del></p>
                <div class="product-box-btn">
                    <button class="add"><i class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                </div>
            </div>
            <div class=" food-item" type-food="meat">
                <img src="../Images/sanpham/raucantay.jpg" alt="">
                <p class="name">Bắp cải tim Organic 500g</p>
                <p class="price">30.000đ <del>45.000đ</del></p>
                <div class="product-box-btn">
                    <button class="add"><i class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                </div>
            </div>
            <div class=" food-item" type-food="salad">
                <img src="../Images/sanpham/rauma.jpg" alt="">
                <p class="name">Bắp cải tim Organic 500g</p>
                <p class="price">30.000đ <del>45.000đ</del></p>
                <div class="product-box-btn">
                    <button class="add"><i class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                </div>
            </div>
            <div class=" food-item" type-food="drinks">
                <img src="../Images/sanpham/bapchuoi.jpg" alt="">
                <p class="name">Bắp cải tim Organic 500g</p>
                <p class="price">30.000đ <del>45.000đ</del></p>
                <div class="product-box-btn">
                    <button class="add"><i class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                </div>
            </div>
            <div class=" food-item" type-food="dessert">
                <img src="../Images/sanpham/táo.jpg" alt="">
                <p class="name">Bắp cải tim Organic 500g</p>
                <p class="price">30.000đ <del>45.000đ</del></p>
                <div class="product-box-btn">
                    <button class="add"><i class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                </div>
            </div>
            <div class=" food-item" type-food="drinks">
                <img src="../Images/sanpham/cucaitrang.jpg" alt="">
                <p class="name">Bắp cải tim Organic 500g</p>
                <p class="price">30.000đ <del>45.000đ</del></p>
                <div class="product-box-btn">
                    <button class="add"><i class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                </div>
            </div>
        </div> -->
        <!--********* END HTML  *************-->


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
                            <div class="food-item">
                                <a href="<?php echo $value['id'] ?>">
                                    <img width="200px" src="../Images/sanpham/sanphamok/<?php echo $value['image'] ?>" alt="">
                                </a>

                                <span class="name"><a href="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></a></span><br>
                                <span class="price"><a href="<?php echo $value['id'] ?>"><?php echo $value['price'] ?></a></span><br>
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
    <!-- <script>
        const foodBtns = document.querySelectorAll('.food-menu button')
        const foodList = document.querySelectorAll('.food-item')

        foodBtns.forEach((btn) => {
            btn.addEventListener('click', (e) => {
                const type = e.target.getAttribute('type-food')

                // remove and set active fpr button
                document.querySelector('.food-menu button.active')
                    .classList.remove('active')
                e.target.classList.add('active')

                // filter elements
                foodList.forEach((item) => {
                    if (type == 'all' || item.getAttribute('type-food') == type)
                        item.classList.remove('hide')
                    else item.classList.add('hide')
                })
            })
        })
    </script> -->
</body>

</html>