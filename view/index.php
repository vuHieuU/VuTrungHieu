<?php

    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/thongbao.php";
    include "../model/taikhoan.php";
    $sphome = loadsp_home();
    $listdm = loadall_dm();
    
    session_start();
    include "header.php";
    include "global.php";

    if((isset($_GET['act']))&&($_GET['act'])){
        $act=$_GET['act'];
        switch ($act) {
            case 'dangki':
                if(isset($_POST['dangki'])&&($_POST['dangki'])){
                    $user = $_POST['user'];
                    $email = $_POST['email'];
                    $status = $_POST['status'];
                    $password_check = $_POST['password_check'];
                    $re_password = $_POST['re_password'];
                    if($password_check != $re_password){                  
                        saimk();
                    }else{
                        $pass = $password_check;
                        dangki_taikhoan($user,$pass,$email,$status);
                    }
                }
                include 'main.php';
                break;
            case 'dangnhap':
                if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                    $name = $_POST['name'];
                    $password = $_POST['password'];
                    $checkuser = check_user($name,$password);
                    if(is_array($checkuser)){
                        $_SESSION['name']=$checkuser;
                        // header("Location: header.php");
                    }   
                    else{
                        login_false();
                    }
                }
                include 'header.php';
                include 'main.php';
                break;
            case 'logout':
                session_unset();
                // header("Location: header.php");
                include 'header.php';
                include 'main.php';                
                break;
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
              case 'detail':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $onesp=loadone_sp($_GET['id']);
                    extract($onesp);
                    include "details.php";
                }else{
                    include "main.php";
                }
                break;

            
            case 'sanpham':
                include "product.php";
                break;
            case 'danhmucsanpham':
                include "danhmucsanpham.php";
                break;
            case 'khuyenmai':
                include "khuyenmai.php";
                break;
            case 'giohang':
                include "thanhtoan.php";
                break;
            case 'tintuc':
                include "tintuc.php";
                break;
            case "contact":
                include "contact.php";
                break;
            case "gioithieu":
                include "gioithieu.php";
                break;

                default:
                include "main.php";
                break;
        }
    }else{
        include "main.php";
    }
    include "footer.php";
?>