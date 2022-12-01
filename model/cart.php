<?php
//function loadall_cart_count
function loadall_cart_count($idbill){
    $sql="select * from bill where idbill ";
    $bill=pdo_query($sql);
    return sizeof($bill);  
}
function loadall_bill($kyw="",$iduser=0){
$sql="select * from bill where 1 ";
if($iduser>0) $sql.=" AND isuser=".$iduser;
if($kyw!="") $sql.=" AND id like '%".$iduser."%'";
// $sql="order by id desc";
$listbill=pdo_query($sql);
return $listbill;
}
//function get_ttdh
function get_ttdh($n){
    switch($n){
        case '0';
        $tt="đơn hàng mơi";
        break;
        case '1';
        $tt="đang sử lý";
        break;
        case '2';
        $tt="đang giao hàng";
        break;
        case '3';
        $tt="hoàn tất";
        break;
        default:
        $tt="đơn hàng mới";
        break;
    }
    return $tt;
}


?>