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
            <th>Tên người đặt</th>
            <th>Địa chỉ</th>
            <th>Số điện thoại</th>
            <th>Tên mặt hàng</th>
            <th>Số lượng</th>
            <th>Email</th>
            <th>Phương thức thanh toán</th>
            <th>Thời gian đặt</th>
            <th>Trang thái</th>
            <th>Thành tiền</th>
        </tr>
        </thead>
       <tbody>
       <tr>
            <td>PAD-<?php echo $id_user?></td>
            <td><?php echo $bill_name?></td>
            <td><?php echo $bill_address?></td>
            <td><?php echo $bill_tel?></td>
            <td><?php echo $name_hh?></td>
            <td><?php echo $soluong?></td>
            <td><?php echo $bill_email?></td>
            <td><?php 
                if($bill_pttt==1){
                echo 'Thanh toán trực tiếp';
                }else if($bill_pttt==2){
                echo ('Thanh toán bằng thẻ');
                }else if($bill_pttt==3){
                echo ("Thanh toán");
                }
            ?></td>
            <td><?php echo $ngaydathang?></td>
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
            <td> <p style="color: red; font-weight:bold;"><?php echo $total?></p> </td>
        </tr>
       </tbody>
    </table>
    <form action="index.php?act=listbill" method="POST" class="table-btn">
            <input type="submit" name="back" value="Trở lại">
        </form>
</body>
</html>