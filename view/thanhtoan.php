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
                    <td>
                        <form action="/action_page.php">
                            <input type="number" id="quantity" name="quantity" min="1" max="5">
                        </form>
                    </td>
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
            <div class="cart-right-box">
                <h3 class="cart-sum">Phiếu giảm giá</h3>
                <ul>
                    <li><input type="text" placeholder="Nhập mã giảm giá.."></li>
                    <button>Áp Dụng</button>
                </ul>
            </div>
        </div>

        <div class="cart-right">
            <h3 class="cart-title">Thông Tin Đơn Hàng</h3>

            <form class="diaChiGiaoHang">
                <h3 class="cart-sum">Địa Chỉ Thanh Toán</h3>
                <div class="diaChiGiaoHang-box">
                    <label for="">Tên</label>
                    <input type="text" value="Name" placeholder="Tên của bạn.." disabled>
                </div>
                <div class="diaChiGiaoHang-box">
                    <label for="">Số điện thoại</label>
                    <input type="text" value="Số điện thoại" placeholder="Số điện thoại.." disabled>
                </div>
                <div class="diaChiGiaoHang-box">
                    <label for="">Địa chỉ</label>
                    <input type="text" value="Địa chỉ" placeholder="Địa chỉ của bạn.." disabled>
                </div>
                <div class="diaChiGiaoHang-box">
                    <label for="">Dự tính thời gian giao hàng: </label>
                    <input type="text" value="xx/xx/2022" disabled>
                </div>

                <button style="background-color: var(--main-color);">Cập Nhật</button>
            </form>
            <style>
                .diaChiGiaoHang-box input,
                label {
                    width: 50%;
                    padding: 0.4em 0;
                    outline: none;
                    border: none;
                    margin-bottom: 2px;
                    margin-left: 10px;
                }

                .diaChiGiaoHang-box input {
                    margin-left: 20px;
                }

                .diaChiGiaoHang-box {
                    display: flex;

                }

                .diaChiGiaoHang {
                    padding: 10px;
                    border-radius: 4px;
                    box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;
                }

                .cart-right-box button {
                    width: 100%;
                    border: none;
                    border-radius: 4px;
                    padding: 14px;
                    color: #fff;
                    text-transform: uppercase;
                }
            </style>
            <div class="money-sum">
                <form action="#">
                    <h4 style="margin-top: 10px;">Hình Thức Thanh Toán</h4>
                    <input type="radio" id="home" name="fav_language" value="home" checked>
                    <label for="home">Trả Khi Nhận Hàng</label><br>
                    <input type="radio" id="credit" name="fav_language" value="credit" disabled>
                    <label style="opacity: .7;" for="credit">Credit( Đang phát triển)</label><br>
                    <input type="radio" id="momo" name="fav_language" value="momo" disabled>
                    <label style="opacity: .7;" for="momo">Momo( Đang phát triển)</label>

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