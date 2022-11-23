<?php
session_start();
if (!isset($_SESSION['giohang'])) $_SESSION['giohang'] = [];
//làm rỗng giỏ hàng
if (isset($_GET['delcart']) && ($_GET['delcart'] == 1)) unset($_SESSION['giohang']);
//xóa sp trong giỏ hàng
if (isset($_GET['delid']) && ($_GET['delid'] >= 0)) {
    array_splice($_SESSION['giohang'], $_GET['delid'], 1);
}
//lấy dữ liệu từ form
if (isset($_POST['addcart']) && ($_POST['addcart'])) {
    $hinh = $_POST['hinh'];
    $tensp = $_POST['name'];
    $gia = $_POST['gia'];
    $soluong = $_POST['soluong'];
    //kiem tra sp co trong gio hang hay khong?

    $fl = 0; //kiem tra sp co trung trong gio hang khong?

    for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {

        if ($_SESSION['giohang'][$i][1] == $tensp) {
            $fl = 1;
            $soluongnew = $soluong + $_SESSION['giohang'][$i][3];
            $_SESSION['giohang'][$i][3] = $soluongnew;
            break;
        }
    }
    //neu khong trung sp trong gio hang thi them moi
    if ($fl == 0) {
        //them moi sp vao gio hang
        $sp = [$hinh, $tensp, $gia, $soluong];
        $_SESSION['giohang'][] = $sp;
    }

    // var_dump($_SESSION['giohang']);
}
$tt = 0;
$tong = 0;
function showgiohang()
{
    if (isset($_SESSION['giohang']) && (is_array($_SESSION['giohang']))) {
        if (sizeof($_SESSION['giohang']) > 0) {
            global $tong;
            global $tt;
            $tong = 0;
            for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
                $tt = $_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
                $tong += $tt;
                echo '<tr>
                            <td>' . ($i + 1) . '</td>
                            <td><img height="100px" src="../Images/sanpham/sanphamok/' . $_SESSION['giohang'][$i][0] . '" alt=""></td>
                            <td>' . $_SESSION['giohang'][$i][1] . '</td>
                            <td>' . $_SESSION['giohang'][$i][2] . '</td>
                            <td>' . $_SESSION['giohang'][$i][3] . '</td>
                            <td>
                                <div>' . $tt . '</div>
                            </td>
                            <td>
                                <a href="/xampp/duan1-nhom2-web17320/view/thanhtoan.php?delid=' . $i . '">Xóa</a>
                            </td>
                        </tr>';
            }
            echo '<tr>
                        <th colspan="6">Tổng đơn hàng</th>
                        <th>
                            <div>' . $tong . '</div>
                        </th>
    
                    </tr>';
        } else {
            echo "Giỏ hàng rỗng!";
        }
    }
}
function insert_bill($name, $email, $address, $tel, $pttt, $ngaydathang){
    $sql="insert into bill (bill_name, bill_email, bill_address, bill_tel,bill_pttt,ngaydathang, total) values ('$name '$email', '$address', '$tel', '$pttt', '$ngaydathang')"; 
    pdo_execute($sql);
}
if(isset($_POST['dongydathang']) && ($_POST['dongydathang'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $tel=$_POST['tel'];
    $pttt=$_POST['pttt'];
    $ngaydathang=date('h:i:sa d/m/Y');
    //tao bill
    $idbill=insert_bill($name, $email, $address, $tel, $pttt, $ngaydathang);
    //xóa session cart
    $_SESSION['giohang']=[];
    }
?>

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
    <?php include "header.php" ?>
    <div class="cart">
        <!-- <div class="cart-box"> -->
        <div class="cart-left">
            <h3 class="cart-title">Thanh Toán</h3>
            <table>
                <tr>
                    <th>Id</th>
                    <th>Hình Ảnh</th>
                    <th>Tên</th>
                    <th>Giá</th>
                    <th>Số Lượng</th>
                    <th>Thành Tiền</th>
                    <th>Lựa chọn</th>
                </tr>
                <?php showgiohang();
                 ?>
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
                    <input type="text" value="" placeholder="Tên của bạn..">
                </div>
                <div class="diaChiGiaoHang-box">
                    <label for="">Số điện thoại</label>
                    <input type="text" value="" placeholder="Số điện thoại..">
                </div>
                <div class="diaChiGiaoHang-box">
                    <label for="">Địa chỉ</label>
                    <input type="text" value="" placeholder="Địa chỉ của bạn..">
                </div>
                <div class="diaChiGiaoHang-box">
                    <label for="">Dự tính thời gian giao hàng: </label>
                    <input type="text" value="Nội thành: 1-2 ngày; Các tỉnh khác từ 3-5 ngày" disabled>
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
                    <h3 class="cart-sum sum">Tổng Tiền: <b> <?php echo $tt ?></b></h3>
                    <h3 class="cart-sum">Tổng tiền sau khi giảm giá: <b> <?php echo $tt ?></b></h3>
                    <button>Thanh Toán</button>
                </form>
            </div>
        </div>
        <!-- </div> -->
    </div>
    </div>
    <?php include "footer.php" ?>
</body>

</html>