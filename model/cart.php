<?php
function tongdonhang(){
    $tong= 0;
    foreach ($_SESSION['mycart'] as $cart) {
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
    }
    return $tong;
}
function insert_bill($iduser,$name,$name_hh,$soluong,$email,$address,$tel,$pttt,$ngaydathang,$tongdonhang){
    $sql = "insert into bill(id_user,bill_name,name_hh,soluong,bill_email,bill_address,bill_tel,bill_pttt,ngaydathang,total) values ('$iduser','$name','$name_hh','$soluong','$email','$address','$tel','$pttt','$ngaydathang','$tongdonhang')";
    return pdo_execute_lastInsertId($sql);
}
function insert_cart($iduser,$idpro,$img,$name,$price,$soluong,$thanhtien,$idbill){
    $sql = "insert into cart(iduser,idpro,img,name,price,soluong,thanhtien,idbill) values ('$iduser','$idpro','$img','$name','$price','$soluong','$thanhtien','$idbill')";
    return pdo_execute($sql);
}

function loadone_bill($id){
    $sql = "select * from bill where id=$id";
    $bill = pdo_query_one($sql);
 return $bill;
 }
//function loadall_cart_count
function loadall_cart_count($idbill){
    $sql="select * from cart where idbill=". $idbill;
    $bill=pdo_query($sql);
    return sizeof($bill);  
}
function loadall_cart($idbill){
    $sql="select * from cart where idbill=". $idbill;
    $allbill=pdo_query($sql);
    return $allbill;  
}
function loadall_bill($kyw="",$iduser=0){
$sql="select * from bill where 1 ";
if($iduser>0) $sql.=" AND id_user=".$iduser;
if($kyw!="") $sql.=" AND id like '%".$iduser."%'";
$sql.="order by id desc";
$listbill=pdo_query($sql);
return $listbill;
}
function loadbill_user($id_user){
    $sql = "select * from bill where id_user=".$id_user;
    $bill = pdo_query($sql);
    return $bill;
}
// function get_ttdh
function get_ttdh($n){
    switch($n){
        case '0';
        $tt="đơn hàng mới";
        break;
        case '1';
        $tt="đang xử lý";
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
function get_pttt($n){
    switch($n){
        case '1';
        $tt="Trả Khi Nhận Hàng";
        break;
        case '2';
        $tt="Thanh Toán Bằng Thẻ";
        break;
        case '3';
        $tt="Không Trả";
        break;
        default:
        $tt="Trả Khi Nhận Hàng";
        break;
    }
    return $tt;
}


?>