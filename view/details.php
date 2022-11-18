<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Product Card/Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../Main/css/details.css">">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
</head>

<body>
    <?php
    include "header.php";
    extract($onesp);
    ?>
    <div class="card-wrapper">
        <div class="card">
            <!-- card left -->
            <div class="product-imgs">
                <div class="img-display">
                    <div class="img-showcase">
                        <?php
                        $img = $img_path . $image;
                        echo '
                            <img src="' . $img . '" alt="organic-food">
                            <!-- <img src="./Images/img/img_raucuqua/sanpham/bapchuoi.jpg" alt="organic-food">
                            <img src="./Images/img/img_raucuqua/sanpham/bi-do.jpg" alt="organic-food">
                            <img src="./Images/img/img_raucuqua/sanpham/bingoi.jpg" alt="organic-food"> -->
                        </div>
                    </div>
                    <!-- <div class="img-select">
                        <div class="img-item">
                            <a href="#" data-id="1">
                                <img src="./Images/img/img_raucuqua/sanpham/bapcaitim.jpg" alt="organic-food">
                            </a>
                        </div>
                        <div class="img-item">
                            <a href="#" data-id="2">
                                <img src="./Images/img/img_raucuqua/sanpham/bapchuoi.jpg" alt="organic-food">
                            </a>
                        </div>
                        <div class="img-item">
                            <a href="#" data-id="3">
                                <img src="./Images/img/img_raucuqua/sanpham/bi-do.jpg" alt="organic-food">
                            </a>
                        </div>
                        <div class="img-item">
                            <a href="#" data-id="4">
                                <img src="./Images/img/img_raucuqua/sanpham/bingoi.jpg" alt="organic-food">
                            </a>
                        </div>
                    </div> -->
                </div>
                <!-- card right -->
                <div class="product-content">
                 
                    <h2 class="product-title">' . $name . '</h2>
                    <a href="./index.php" class="product-link">Cửa hàng</a>
                    <div class="product-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span>4.7(21)</span>
                    </div>

                    <div class="product-price">
                        <p class="last-price">Giá cũ: <span>$' . $amount . '</span></p>
                        <p class="new-price">Giá mới: <span>$' . $price . '</span></p>
                    </div>

                    <div class="product-detail">
                        <h2>Thông tin sản phẩm: </h2>
                        <p>' . $content . '</p>
                        <ul>
                            <li>Tình trạng: <span>Còn hàng</span></li>
                            <li>Phân loại <span>' . $name_cate . '</span></li>
                            <li>Khu vực vận chuyển: <span>Nội thành</span></li>
                            <li>Giá vận chuyển: <span>Free</span></li>
                        </ul>
                    </div>

                    <div class="purchase-info">
                        <input type="number" min="0" value="1">
                        <button type="button" class="btn">
            Add to Cart <i class="fas fa-shopping-cart"></i>
          </button>
                    </div>
                    ';
                        ?>
                        <div class="social-links">
                            <p>Share At: </p>
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-pinterest"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Bình luận -->
            <div class="cmt">
                <h2>Đánh giá</h2>
                <form action="" method="POST">
                    <div class="formbold-mb-3">


                        <div class="form-comment">
                            <div class="soluong-comment">32 Comment</div>

                            <div class="form-addcmt">
                                <div class="anh"><img src="../Images/avatar/dungdeptrai.jpg" alt=""></div>
                                <div class="chucnang-cmt">
                                    <input style="outline: none;" class="add-comment" type="text" name="" id="" placeholder="Nhập bình luận...">
                                    <input type="submit" value="Comment">
                                </div>
                            </div>



                            <div class="ome-comment">
                                <div class="nd-comment">
                                    <div class="anh"><img src="../Images/avatar/dungdeptrai.jpg" alt=""></div>
                                    <div class="name-comment">
                                        <p>Phạm Anh Dũng xau trai</p>
                                    </div>
                                    <p class="nd">Bạn coder tên Phạm Hùng đẹp trai quá <3< /p>
                                </div>

                                <div class="like-comment">
                                    <i class="fa-solid fa-thumbs-up"></i>
                                    <i class="fa-solid fa-thumbs-down mgl"></i>
                                    <p class="traloi">Trả lời</p>
                                </div>
                            </div>


                            <div class="one-comment">
                                <div class="nd-comment">
                                    <div class="anh"><img src="../Images/avatar/dungdeptrai.jpg" alt=""></div>
                                    <div class="name-comment">
                                        <p>Phạm Anh Dũng xau trai</p>
                                    </div>
                                    <p class="nd">Bạn coder tên Phạm Hùng đẹp trai quá <3< /p>
                                </div>

                                <div class="like-comment">
                                    <i class="fa-solid fa-thumbs-up"></i>
                                    <i class="fa-solid fa-thumbs-down mgl"></i>
                                    <p class="traloi">Trả lời</p>
                                </div>
                            </div>

                            <div class="one-comment">
                                <div class="nd-comment">
                                    <div class="anh"><img src="../Images/avatar/dungdeptrai.jpg" alt=""></div>
                                    <div class="name-comment">
                                        <p>Phạm Anh Dũng xau trai</p>
                                    </div>
                                    <p class="nd">Bạn coder tên Phạm Hùng đẹp trai quá <3< /p>
                                </div>

                                <div class="like-comment">
                                    <i class="fa-solid fa-thumbs-up"></i>
                                    <i class="fa-solid fa-thumbs-down mgl"></i>
                                    <p class="traloi">Trả lời</p>
                                </div>
                            </div>

                            <div class="one-comment">
                                <div class="nd-comment">
                                    <div class="anh"><img src="../Images/avatar/dungdeptrai.jpg" alt=""></div>
                                    <div class="name-comment">
                                        <p>Phạm Anh Dũng xau trai</p>
                                    </div>
                                    <p class="nd">Bạn coder tên Phạm Hùng đẹp trai quá <3< /p>
                                </div>

                                <div class="like-comment">
                                    <i class="fa-solid fa-thumbs-up"></i>
                                    <i class="fa-solid fa-thumbs-down mgl"></i>
                                    <p class="traloi">Trả lời</p>
                                </div>
                            </div>
                        </div>
                </form>
            </div>

            <!--Hiển thị bình luận-->
            <div class="hienthi">
            </div>


            <script src="./chitiet.js"></script>
</body>

</html>