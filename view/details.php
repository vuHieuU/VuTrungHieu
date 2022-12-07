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

                    </div>
                    <div class="product-box-btn">
                    <form action="index.php?act=addcart" method="POST">
                      <input type="hidden" name="id" value="'.$id.'">
                      <input type="hidden" name="image" value="'.$image.'">
                      <input type="hidden" name="name" value="'.$name.'">
                      <input type="hidden" name="price" value="'.$price.'"> 
                         <input class="add" type="submit" name="addcart" value="Add to cart">
                      </form>
                    </div>
                    ';?>
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
            <!-- sản phaame cùng loại -->
            <div class="sanphamcungloai">
               <h2>Sản Phẩm Cùng Loại</h2>
            </div>
            <div class="product-main-cungloai">
      <?php
      foreach ($spcungloai as $spcungloai) {
        extract($spcungloai);
        $link = "index.php?act=detail&id=" . $id;
        $loadsp = "index.php?act=listsp&cate_id=" . $id_cate;
        $img = $img_path . $image;
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
                <form action="index.php?act=addcart" method="POST">
                  <input type="hidden" name="id" value="'.$id.'">
                  <input type="hidden" name="image" value="'.$image.'">
                  <input type="hidden" name="name" value="'.$name.'">
                  <input type="hidden" name="price" value="'.$price.'"> 
                     <input class="add" type="submit" name="addcart" value="Add to cart">
                  </form>
                </div>
            </div>
                ';
      }
      ?>
    </div>
            <!--Bình luận -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                    <script>
                            $(document).ready(function(){                       
                                        $("#binhluan").load("comment.php", {product_id: <?=$id?>});
                    });
                    </script>
            <div class="cmt" id="binhluan">
            
            </div>

            <!--Hiển thị bình luận-->
            <div class="hienthi">
            </div>


            <script src="./chitiet.js"></script>
</body>

</html>