<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/css/style.css">
    <style>
        table tbody tr td input[type=text]{
             border:none;
             width: 100%;
             outline: none;
             background-color:unset;
        }
    </style>
</head>
<body>
<form action="index.php?act=update_bill" method="POST">
<?php
if (is_array($bill)){
    extract($bill);
    $status = get_ttdh($bill['bill_status']);
    $pttt = get_pttt($bill['bill_pttt']);
}
?>
    <table>
        <thead>
            <tr>
                <th>Mã người đặt</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                  <td><input type="text" value="VTH-<?=$id_user?>"></td>
                </tr>
        </tbody>
    <table>
    <table>
        <thead>
            <tr><th colspan="2">Thông tin đặt hàng</th></tr>
        </thead>
        <tbody>
            <tr>
                <th>Người đặt hàng</th>
                <td><input type="text" name="name" value="<?=$bill_name?>"></td>
            </tr>
            <tr>
                <th>Địa chỉ</th>
                <td><input type="text"  name="bill_address" value="<?=$bill_address?>"></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><input type="text"  name="bill_email" value="<?=$bill_email?>"></td>
            </tr>
            <tr>
                <th>Số điện thoại</th>
                <td><input type="text"  name="bill_tel" value="<?=$bill_tel?>"></td>
            </tr>
            <tr>
                <th>Ngày đặt hàng</th>
                <td><input type="text"  name="ngaydathang" value="<?=$ngaydathang?>" disabled></td>
            </tr>
        </tbody>
    </table>
    <table>
        <thead><tr><th>Phương thức thanh toán</th></tr></thead>
        <tbody>
            <tr>
            <td><p style="color: red; font-weight: bold;"><input type="text" name="pttt" value="<?=$pttt?>"></p></td>
            </tr>
        </tbody>
    </table>
    <table>
        <thead><tr><th>Trạng Thái</th></tr></thead>
        <tbody>
            <tr>
            <td><p style="color: red; font-weight: bold;"> 
            <select name="bill_status" id="">       
                    <option name="bill_status" value="0"><?=$status?></option>
                    <option name="bill_status" value="1">Đang sử lí</option>
                    <option name="bill_status" value="2">Đang giao hàng</option>
                    <option name="bill_status" value="3">hoàn tất</option>
            </select>
                </p></td>
            </tr>
        </tbody>
    </table>
    <table>

        <tbody>
            <thead>
                <tr>
                    <th>Mã mặt hàng</th>
                    <th>ảnh mặt hàng</th>
                    <th>Tên mặt hàng</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                </tr>
                <?php
                foreach ($allbill as $bi){
                    extract($bi);
                    $img = $img_path.$img;
                    $ttien=$soluong * $price;
          echo '
                <tr>
                    <td>PAD- '.$id.'</td>
                    <td><img style="width:80px; height:80px"; src="'.$img.'"></td>
                    <td>'.$name.'</td>
                    <td>'.$soluong.'</td>
                    <td> <p style="color: black; font-weight:bold;">'.$ttien.'</p> </td>
                </tr>
                ';
            }
        ?>
            </thead>
        </tbody>
    </table>
            <input type="hidden" name="id" value="<?=$id?>">
            <input type="submit" name="update" value="Cập nhật">
        </form>

</body>
</html>