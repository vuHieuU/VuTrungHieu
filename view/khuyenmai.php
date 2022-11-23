<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Main/css/khuyenmai.css">
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

    <div class="wrapper">
        <div id="banner">
            <div class="text_banner">
                <h1>Giảm giá cực sốc</h1>
                
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


        <!--Sản phẩm khuyễn mãi-->
        <?php

        ?>
        <h1>Sản phẩm khuyễn mãi</h1>
        <div class="khuyenmai">
            <div class="food-list">
                <?php
                $allsp = loadAll_product();
                foreach ($sphome as $sp) {
                    extract($sp);
                    $link = "index.php?act=detail&id=" . $id;
                    $loadsp = "index.php?act=listsp&cate_id=" . $id_cate;
                    $img = $img_path . $image;
                    echo '
                    <div class="food-item">
                        
                       
                            <div class="product-box">
                            <div class="sale">
                            <div class="iii">
                                <i width=" 40px" class="fas fa-bookmark"></i>
                            </div>
                            <p>10%</p>
                        </div>
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
                            
                    </div>
                    ';
                }

                ?>
            </div>

            <div class="boxright">
                <div class="product_like">
                    <h3>Top 5 sản phẩm yêu thích</h3>
                    <?php
                     $dstop5 = loadsp_home_top5();
                    foreach ($dstop5 as $sp) {
                       
                        extract($sp);
                        $link = "index.php?act=detail&id=" . $id;
                        $loadsp = "index.php?act=listsp&cate_id=" . $id_cate;
                        $img = $img_path . $image;
                        echo '
                                <div class="top">
                                    <img width="24%" src="' . $img . '" alt="">
                                    <a href="'.$link.'">' . $name . '</a>
                                </div>
                            ';
                    }
                    ?>

                    <!-- <ul>
                         
                        <li><a href="">Đậu bắp</a></li>
                        <li><a href="">Củ cải trắng</a></li>
                        <li><a href="">Cần tây</a></li>
                        <li><a href="">Táo tàu</a></li>
                        <li><a href="">Ớt chuông</a></li>
                    </ul> -->
                    
                    
                </div>
                <div class="top_blog">
                    <h3>Bài viết gần đây</h3>
                    <div class="blog_anh">
                        <img width="25%" src="../Images/sanpham/sanphamok/bido.png" alt="">
                        <div class="blog_content">
                            <span>19/11/2020 &emsp; <i class="far fa-comment-alt"></i> 3</span>
                            <p>Toàn năng cũng không kiểm soát được các văn bản mù quáng</p>
                        </div>
                    </div>
                    <div class="blog_anh1">
                        <img width="25%" src="../Images/sanpham/sanphamok/catim.png" alt="">
                        <div class="blog_content">
                            <span>19/11/2020 &emsp; <i class="far fa-comment-alt"></i> 3</span>
                            <p>Toàn năng cũng không kiểm soát được các văn bản mù quáng</p>
                        </div>
                    </div>
                    <div class="blog_anh2">
                        <img width="25%" src="../Images/sanpham/sanphamok/daubap.png" alt="">
                        <div class="blog_content">
                            <span>19/11/2020 &emsp; <i class="far fa-comment-alt"></i> 3</span>
                            <p>Toàn năng cũng không kiểm soát được các văn bản mù quáng</p>
                        </div>
                    </div>
                    <div class="blog_anh3">
                        <img width="25%" src="../Images/sanpham/sanphamok/rauma.png" alt="">
                        <div class="blog_content">
                            <span>19/11/2020 &emsp; <i class="far fa-comment-alt"></i> 3</span>
                            <p>Toàn năng cũng không kiểm soát được các văn bản mù quáng</p>
                        </div>
                    </div>
                </div>
            </div>
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