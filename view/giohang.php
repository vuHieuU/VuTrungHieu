<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Main/css/giohang.css">
</head>
<body>
    <?php
        include "header.php"
    ?>
    <div class="cart">
        <!-- <div class="cart-box"> -->
            <div class="cart-left">
                <h3 class="cart-title">Giỏ Hàng Của Bạn</h3>
                <p>Bạn đang có 4 sản phẩm trong giỏ hàng</p>
            <div class="cart-product">
                <div class="cart-product-box">
                    <div class="cart-product-img">
                        <img src="./Images/img/img_raucuqua/sanpham/bapchuoi.jpg" alt="">
                    </div>
                    <div class="cart-product-price">
                        <p class="name-product">Bắp Chuối</p>
                        <p class="price-product">39.000đ <del>45.000đ</del></p>
                    </div>
                    <div class="cart-product-price">
                        <p class="price-sum-product">117.000đ</p>
                        <p class="len-product">3</p>
                    </div>
                </div>
                <div class="cart-product-box">
                    <div class="cart-product-img">
                        <img src="./Images/img/img_raucuqua/sanpham/cucaitrang.jpg" alt="">
                    </div>
                    <div class="cart-product-price">
                        <p class="name-product">Củ Cải</p>
                        <p class="price-product">27.000đ <del>35.000đ</del></p>
                    </div>
                    <div class="cart-product-price">
                        <p class="price-sum-product">117.000đ</p>
                        <p class="len-product">2</p>
                    </div>
                </div>
                <div class="cart-product-box">
                    <div class="cart-product-img">
                        <img src="./Images/img/img_raucuqua/sanpham/daubap.jpg" alt="">
                    </div>
                    <div class="cart-product-price">
                        <p class="name-product">Đậu Bắp</p>
                        <p class="price-product">7.000đ <del>12.000đ</del></p>
                    </div>
                    <div class="cart-product-price">
                        <p class="price-sum-product">117.000đ</p>
                        <p class="len-product">2</p>
                    </div>
                </div>
            </div>
            </div>
            <div class="cart-right">
                <h3 class="cart-title">Thông Tin Đơn Hàng</h3>
                <div class="cart-right-box">
                    <h3 class="cart-sum">Thời Gian Giao Hàng</h3>
                    <ul>
                        <li><input type="radio" name="" id="" disabled checked> Giao khi có hàng</li>
                    </ul>
                </div>
                <div class="cart-right-box">
                    <h3 class="cart-sum">Tổng Tiền: <b> 117.000đ</b></h3>
                    <ul>
                        <li>* Phí vận chuyển sẽ được tính ở trang thanh toán</li>
                        <li>* Bạn cũng có thể nhập mã giảm giá ở trang thanh toán</li>
                        <li>* Thời gian giao hàng trong mục thanh toán</li>
                    </ul>
                </div>
                <a href="thanhtoan.php"><button><p>Thanh Toán</p></button></a>
            </div>
        <!-- </div> -->
    </div>
    <?php
        include "footer.php"
    ?>
    <style>

    </style>
</body>
</html>