<?php
    include "header.php";
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "./global.php";
  
    // include "global.php";
    // $sphome = loadsp_home();
    // $listdm = loadall_dm();
    if((isset($_GET['act']))&&($_GET['act'])){
        $act=$_GET['act'];
        switch ($act) {
            default:
                include "main.php";
                break;
        }
    }else{
    }
    include "main.php";
    include "footer.php";
?>