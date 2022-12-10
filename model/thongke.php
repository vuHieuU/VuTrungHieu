<?php

  function sumtotal(){
    $sql = "select sum(total) as 'doanhthu' from bill";
    $sumtotal = pdo_query($sql);
    return $sumtotal;
  }


?>