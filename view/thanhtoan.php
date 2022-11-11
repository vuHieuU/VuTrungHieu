<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Main/css/thanhtoan.css">
</head>
<body>
    <?php
        include "header.php"
    ?>
    <div class="cart">
        <!-- <div class="cart-box"> -->
            <div class="cart-left">
                <h3 class="cart-title">Thanh Toán</h3>
                <table>
                    <tr>
                        <th>Hình Ảnh</th>
                        <th>Tên</th>
                        <th>Giá</th>
                        <th>Số Lượng</th>
                        <th>Link</th>
                        <th>Thành Tiền</th>
                    </tr>
                    <tr>
                        <td>                    
                            <div class="cart-product-img">
                                <img src="./Images/img/img_raucuqua/sanpham/bapchuoi.jpg" alt="">
                            </div>
                        </td>
                        <td>Hoa Chuối</td>
                        <td>39.000đ <del>45.000đ</del></td>
                        <td>3</td>
                        <td>#</td>
                        <td>xxx.xxx đ</td>
                    </tr>
                    <tr>
                        <td>                    
                            <div class="cart-product-img">
                                <img src="./Images/img/img_raucuqua/sanpham/bapchuoi.jpg" alt="">
                            </div>
                        </td>
                        <td>Hoa Chuối</td>
                        <td>39.000đ <del>45.000đ</del></td>
                        <td>3</td>
                        <td>#</td>
                        <td>xxx.xxx đ</td>
                    </tr>
                    <tr>
                        <td>                    
                            <div class="cart-product-img">
                                <img src="./Images/img/img_raucuqua/sanpham/bapchuoi.jpg" alt="">
                            </div>
                        </td>
                        <td>Hoa Chuối</td>
                        <td>39.000đ <del>45.000đ</del></td>
                        <td>3</td>
                        <td>#</td>
                        <td>xxx.xxx đ</td>
                    </tr>
                    <tr>
                        <td>                    
                            <div class="cart-product-img">
                                <img src="./Images/img/img_raucuqua/sanpham/bapchuoi.jpg" alt="">
                            </div>
                        </td>
                        <td>Hoa Chuối</td>
                        <td>39.000đ <del>45.000đ</del></td>
                        <td>3</td>
                        <td>#</td>
                        <td>xxx.xxx đ</td>
                    </tr>
            </table>
        </div>

            <div class="cart-right">
                <h3 class="cart-title">Thông Tin Đơn Hàng</h3>
                <div class="cart-right-box">
                    <h3 class="cart-sum">Phiếu giảm giá</h3>
                    <ul>
                        <li><input type="text" placeholder="Nhập mã giảm giá.."></li>
                        <button>Áp Dụng</button>
                    </ul>
                </div>
                <div class="cart-right-box sanpham">
                    <ul>
                        <li>Củ Cải <b>39.000d</b><b>3*</b></li>
                        <li>Củ Cải <b>39.000d</b><b>3*</b></li>
                        <li>Củ Cải <b>39.000d</b><b>1*</b></li>
                    </ul>
                </div>
                <div class="money-sum">
                    <form action="#">
                        <h4 style="margin-top: 10px;">Hình Thức Thanh Toán</h4>
                            <input type="radio" id="home" name="fav_language" value="home">
                            <label for="home">Trả Khi Nhận Hàng</label><br>
                            <input type="radio" id="credit" name="fav_language" value="credit">
                            <label for="credit">Credit</label><br>
                            <input type="radio" id="momo" name="fav_language" value="momo">
                            <label for="momo">Momo</label>
                            <h3 class="cart-sum sum">Tổng Tiền: <b> 117.000đ</b></h3>
                            <h3 class="cart-sum">Tổng tiền sau khi giảm giá: <b> 99.000đ</b></h3>
                            <button>Thanh Toán</button>
                    </form>
                </div>
            </div>
        <!-- </div> -->
        </div>
    </div>
    <?php
        include "footer.php"
    ?>
    <style>

    </style>
</body>
</html>