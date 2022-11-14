<?php
    include "header.php";
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
  
    include "global.php";
    $sphome = loadsp_home();
    $listdm = loadall_dm();
    if((isset($_GET['act']))&&($_GET['act'])){
        $act=$_GET['act'];
        switch ($act) {
            case 'listsp':
                if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                      $kyw=$_POST['kyw'];
                }else{
                      $kyw= "";
                }
                if(isset($_GET['cate_id'])&&($_GET['cate_id']>0)){
                      $cate_id = $_GET['cate_id'];
                }else{
                      $cate_id=0;
                }
                $sphome = loadall_sanpham($kyw,$cate_id);
                $tendm = load_ten_dm($cate_id);
                include "main.php";
                break;
            }
    }else{
        include "main.php";
    }
    include "footer.php";
?>