<?php
if (is_array($bill)){
    extract($bill);
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
        </tbody>
    </table>
    <table>
        <thead><tr><th>Phương thức thanh toán</th></tr></thead>
        <tbody>
            <tr>
            <td><p style="color: red; font-weight: bold;"><?php 
                if($bill_pttt==1){
                echo 'Thanh toán trực tiếp';
                }else if($bill_pttt==2){
                echo ('Thanh toán bằng thẻ');
                }else if($bill_pttt==3){
                echo ("Thanh toán");
                }
            ?></p></td>
            </tr>
        </tbody>
    </table>
    <table>

        <tbody>
            <thead>
                <tr>
                    <th>Mã mặt hàng</th>
                    <th>Tên mặt hàng</th>
                    <th>Số lượng</th>
                    <th>Ngày đặt hàng</th>
                    <th>Thành tiền</th>
                    <th>Trạng thái</th>
                </tr>
                <?php
                // foreach ($bill1 as $bi){
                //     extract($bi);
                ?>
                <tr>
                    <td>PAD- <?php echo $id ?></td>
                    <td><?php echo $name_hh ?></td>
                    <td><?php echo $soluong ?></td>
                    <td><?php echo $ngaydathang ?></td>
                    <td> <p style="color: black; font-weight:bold;"><?php echo $total ?></p> </td>
                    <td><p style="color: red; font-weight: bold;"><?php
                    if ($bill_status == 1) {
                        echo 'Đơn hàng đang xử lý';
                    } else if ($bill_status == 2) {
                        echo ('Đang giao hàng');
                    } else if ($bill_status == 3) {
                        echo ("Đã giao hàng");
                    } else {
                        echo ("Đơn hàng mới");
                    }
                    ?></p></td>
                </tr>
                <?php 
            // }
        ?>
            </thead>
        </tbody>
    </table>
    <form action="index.php?act=listbill" method="POST" class="table-btn">
            <input type="submit" name="back" value="Trở lại">
        </form>

</body>
</html>