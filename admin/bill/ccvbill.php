<?php
if (is_array($bill)){
    extract($bill);
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
            <tr>
                <th>Trạng Thái</th>
                <td><p style="color: red; font-weight: bold;">
                <?php
                if($bill_status==0){
                      echo 'Chưa xử lí';
                    }else if($bill_status==1){
                      echo ('Đã xử lí');
                    }else if($bill_status==2){
                      echo ("Đang giao hàng");
                    }else if($bill_status==3){
                      echo ("Đã Hoàn thành");
                    }else if($bill_status==4){
                      echo ("Đơn đã bị hủy");
                    }else{
                       echo "Chưa xử lí";
                    }
            ?>
                   </p>
               </td>
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
        <thead><tr><th>Cập Nhật Trạng Thái</th></tr></thead>
        <tbody>
            <tr>
            <td><p style="color: red; font-weight: bold;"> 
            <form action="index.php?act=update_status" method="POST">
                <input type="hidden" name="id" value="<?=$id?>">
                      <select name="bill_status" id="">
                      <option value="0">  <?php
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
                      ?></option>
                          <option value="0">Chưa xử lí</option>
                          <option value="1">Đã xử lí</option>
                          <option value="2">Đang Giao Hàng</option>
                          <option value="3">Đã Hoàn Thành</option>
                          <option value="4">hủy đơn</option>
                      </select>
                      <button type="submit">Cập Nhật</button>
                </form>
            </p></td>
            </tr>
            <style>
                
            </style>
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
    <form action="index.php?act=listbill" method="POST" class="table-btn">
            <input type="submit" name="back" value="Trở lại">
        </form>

</body>
</html>