<?php
if (is_array($bill)){
    extract($bill);
    $status = get_ttdh($bill['bill_status']);
    $pttt = get_pttt($bill['bill_pttt']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Mã người đặt</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>VTH-<?php echo $id_user?></td>
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
                <td><?php echo $bill_name?></td>
            </tr>
            <tr>
                <th>Địa chỉ</th>
                <td><?php echo $bill_address?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $bill_email?></td>
            </tr>
            <tr>
                <th>Số điện thoại</th>
                <td><?php echo $bill_tel?></td>
            </tr>
            <tr>
                <th>Ngày đặt hàng</th>
                <td><?php echo $ngaydathang?></td>
            </tr>
        </tbody>
    </table>
    <table>
        <thead><tr><th>Phương thức thanh toán</th></tr></thead>
        <tbody>
            <tr>
            <td><p style="color: red; font-weight: bold;"><?php echo $pttt ?></p></td>
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
                    <th>Trạng thái</th>
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
                    <td><p style="color: red; font-weight: bold;">'.$status.'</p></td>
                </tr>
                ';
            }
        ?>
            </thead>
        </tbody>
    </table>
    <form action="index.php?act=listbill" method="POST" class="table-btn">
            <input type="submit" name="back" value="Trở lại">
        </form>

</body>
</html>