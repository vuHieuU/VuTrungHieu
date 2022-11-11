<?php
    include "header.php";
    include "slide.php";
    include "../model/sanpham.php";
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "global.php";

    $spnew = loadAll_sanpham_home();

    if((isset($_GET['act']))&&($_GET['act'])){
        $act=$_GET['act'];
        switch ($act) {
            case 'sanpham':
                include 'product.php'; 
                break;
            }
        }
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../global.php";
  
    // include "global.php";
    $sphome = loadsp_home();
    $listdm = loadall_dm();
    if((isset($_GET['act']))&&($_GET['act'])){
        $act=$_GET['act'];
        switch ($act) {
 
            default:
                include "main.php";
                break;
        }
    }else{
        include "main.php";
    }
    include "../Main/footer.php";
    include "footer.php";
?>