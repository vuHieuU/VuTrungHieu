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
             <p style="margin: 20px 0px; font-size:18px"> Thống kê tổng doanh thu bán hàng : <strong style="color:red;"> <?php   
             foreach ($sumtotal as $tol) {
             extract($tol);
             echo $tol['doanhthu'];
             } 
             ?>VNĐ </strong>
              </p>
        </div>
        <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<figure class="highcharts-figure">
  <div id="container"></div>
  <p class="highcharts-description">
    Biểu đồ thống kê
  </p>
</figure>

  <?php 
 
     echo "<br>";
      $max_date = 10;
      $arr = [];
      $today = date('d');
      if($today < $max_date){
        $get_day_last_month = $max_date - $today;
        $last_month = date('m', strtotime("-1 month"));
        $last_month_date = date('y-m-d', strtotime("-1 month"));
        $max_day_last_month = (new DateTime($last_month_date))->format('t');
        $start_day_last_month = $max_day_last_month - $get_day_last_month;
        
            for($i= $start_day_last_month; $i<=$max_day_last_month; $i++){
              $key = $i . '-' . $last_month;
                $arr[$key] = 0;
            }
            $start_date_this_month = 1;
      } else {
        $start_date_this_month = $today - $max_date;
      }
      $this_month = date('m');

      for($i = $start_date_this_month; $i<=$today; $i++){
        $key = $i . '-' . $this_month;
          $arr[$key] = 0;
      }
    
        foreach ($thongke as $list) {
         $arr[$list['day']] = (float)$list['doanhthu'];
        
      }
        // echo json_encode($arr);
      $arrX = array_Keys($arr);
     
      $arrY = array_values($arr);
     
  ?>
  <script>
 Highcharts.chart('container', {

title: {
  text: '  Biểu đồ thống kê'
},

yAxis: {
  title: {
    text: 'VNĐ'
  }
},

xAxis: {
  categories: <?php echo json_encode($arrX) ?>
  
},

legend: {
  layout: 'vertical',
  align: 'right',
  verticalAlign: 'middle'
},

plotOptions: {
  series: {
    label: {
      connectorAllowed: false
    }
  }
},

series: [{
  name: 'Doanh Thu',
  data: <?php echo json_encode($arrY) ?>
}],

responsive: {
  rules: [{
    condition: {
      maxWidth: 500
    },
    chartOptions: {
      legend: {
        layout: 'horizontal',
        align: 'center',
        verticalAlign: 'bottom'
      }
    }
  }]
}

});
</script>
</body>
</html>