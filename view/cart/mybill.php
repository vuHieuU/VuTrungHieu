
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" style="margin-top:100px;">
        <thead>
            <tr>
                <th>Mã đơn hàng</th>
                <th>Số lượng mặt hàng</th>
                <th>Địa chỉ</th>
                <th>Phương thức thanh toán</th>
                <th>Ngày đặt</th>
                <th>Trạng thái</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                     foreach($loadbill as $bill){
                     extract($bill);
                     $count = loadall_cart_count($bill['id']);
                     ?>

            <td>PAD-<?php echo $id?></td>
            <td> <?php echo $count ?></td>
            <td> <?php echo $bill_address ?></td>
            <td><?php 
                if($bill_pttt==1){
                echo 'Thanh toán trực tiếp';
                }else if($bill_pttt==2){
                echo ('Thanh toán bằng thẻ');
                }else if($bill_pttt==3){
                echo ("Thanh toán");
                }
            ?></td>
            <td> <?php echo $ngaydathang  ?></td>
            <td><?php
                if($bill_status==1){
                    echo 'Đơn hàng đang xử lý';
                    }else if($bill_status==2){
                    echo ('Đang giao hàng');
                    }else if($bill_status==3){
                    echo ("Đã giao hàng");
                    }else{
                echo ("Đơn hàng mới");
                    }
            ?></td>
            </tr>
            <?php 
        }
        ?>
        </tbody>
    </table>
</body>
</html>