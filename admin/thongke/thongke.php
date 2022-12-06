<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../public/css/thongke.css">
</head>
<body>   
  <?php
    extract($listsp);
    extract($listdm);
    extract($listtk);
    extract($listbill);
    $count_product = count($listsp);
    $count_category = count($listdm);
    $count_user = count($listtk);
    $count_bill = count($listbill);
    // $total_revenue+=$ttien;
  ?>
        <div class="statistical">
            <div class="product">
                 <label for="">Sản phẩm</label>
                <p><?=$count_product?></p>
                <a href="index.php?act=sp">xem chi tiết <i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="user">
                 <label for="">Tài khoản</label>
                <p><?=$count_user?></p>
              <a href="index.php?act=tk">xem chi tiết <i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="category">
                 <label for="">Thể loại</label>
                 <p><?=$count_category?></p>
              <a href="index.php?act=dm">xem chi tiết <i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="bill">
                 <label for="">Đơn hàng</label>
                 <p><?=$count_bill?></p>
                <a href="index.php?act=listbill">xem chi tiết <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
        <div class="">
             <p> thống kê tổng doanh thu bán hàng</p>
        </div>
</body>
</html>