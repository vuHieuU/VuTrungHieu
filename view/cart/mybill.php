
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
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                     foreach($loadbill as $bill){
                     extract($bill);
                     $count = loadall_cart_count($bill['id']);
                     $detail = "index.php?act=detail_bill&id=".$id;
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
                if($bill_status==0){
                    echo 'Chưa xử lí';
                  }else if($bill_status==1){
                    echo ('Đã xử lí');
                  }else if($bill_status==2){
                    echo ("Đang giao hàng");
                  }else if($bill_status==3){
                    echo ("Đã Hoàn thành");
                  }else if($bill_status==4){
                    echo "Đơn đã bị hủy";
                  }else{
                    echo "Chưa xử lí";
                  }
            ?>
            </td>
            <td><a href="<?php echo $detail ?>">Chi Tiết</a></td>
            </tr>
            
            <?php 
        }
        ?>
        </tbody>
    </table>
    <style>
        table{
            width: 90vw;
            margin: 0 auto;
            border-collapse: collapse;
        }
        table tr,td, th{
            padding: 8px;
            max-width: 80px;
            border: none;
            box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
        }


        table thead{
            background-color: green;
            color: #fff;
        }

        table td{
            text-decoration: none;
            text-align: center;
        }

        table td a{
            text-decoration: none;
            /* font-weight: bold; */
            padding: 4px 8px;
            opacity: .95;
            background-color: green;
            color: #fff;
            border-radius: 8px;
        }
    </style>
</body>
</html>