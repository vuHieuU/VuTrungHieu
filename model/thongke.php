<?php

  function sumtotal(){
    $sql = "select sum(total) as 'doanhthu' from bill";
    $sumtotal = pdo_query($sql);
    return $sumtotal;
  }
  function thongke(){
    $max_date = 10;
  $sql = "SELECT DATE_FORMAT(ngaydathang, '%e-%m') as 'day', sum(total) as 'doanhthu' from bill where date(ngaydathang) >= CURDATE() - INTERVAL $max_date DAY  group by DATE_FORMAT(ngaydathang, '%e-%m')";
  $thongke = pdo_query($sql);
  return $thongke;
 }

?>