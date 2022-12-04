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

<h3 style="margin-top: 10px;">Danh Sách Danh Mục</h3>
<form action="">
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Mã đơn hàng </th>
                    <th>Tên khách hàng</th>
                    <th>Tên mặt hàng</th>
                    <th>Địa Chỉ</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($listbill as $bill) {
                    extract($bill);
                    $status = get_ttdh($bill['bill_status']);
                    $pttt = get_pttt($bill['bill_pttt']);
                    $suadm = "index.php?act=chitietbill&id=" . $id;
                    $xoadm = "index.php?act=xoabill&id=" . $id;
                   ?>
                            <tr>
                                
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>PAD- <?php echo $id ?></td>
                                    <td><?php echo $bill_name ?></td>
                                    <td><?php echo $name_hh ?></td>
                                    <td> <?php echo $bill_address ?></td>
                                    <td style="text-align: center;">
                                        <a style="text-decoration: none;" href="<?php echo $suadm ?>">
                                            <input type="button" class="edit" value="Chi Tiết Đơn Hàng">
                                        </a>
                                        <a style="text-decoration: none;" href="<?php echo $xoadm ?>" >
                                            <input onclick="return confirm('Bạn có chắc chắn muốn xóa không')" type="button" class="delete" value="Xóa">
                                            
                                        </a>

                                    </td>
                            </tr>   
                        
                <?php
                }
                ?>
            </tbody>
        </table>
        <div class="table-btn">
            <input type="button" value="Chọn Tất Cả">
            <input type="button" value="Bỏ Chọn Tất Cả">
            <input type="button" value="Xóa Các Mục Đã Chọn">
            <a href="index.php?act=adddm"><input type="button" value="Nhập Thêm"></a>
        </div>
        </form>
    </div>
    </div>
</body>

</html>