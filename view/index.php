<?php
    session_start();
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/thongbao.php";
    include "../model/taikhoan.php";
    include "../model/contact.php";
    include "../model/binhluan.php";
    include "../model/blog.php";
    include "../model/cart.php";

    $sphome = loadsp_home();
    $listdm = loadall_dm();
    $listblog = loadblog_home();
    if(!isset($_SESSION['mycart']))  $_SESSION['mycart']=[];

    include "header.php";
    include "global.php";

    if((isset($_GET['act']))&&($_GET['act'])){
        $act=$_GET['act'];
        switch ($act) {
            case 'dangki':
                if(isset($_POST['dangki'])&&($_POST['dangki'])){
                    $user = $_POST['user'];
                    $email = $_POST['email'];
                    $tel = $_POST['tel'];
                    $password_check = $_POST['password_check'];
                    $re_password = $_POST['re_password'];
                    if($password_check != $re_password){                  
                        saimk();
                    }else{
                        $pass = $password_check;
                        dangki_taikhoan($user,$pass,$email,$tel);
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
                    include "sanpham.php";
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
    // <<<<<<< Updatedupstream
            case 'quenmk':
                if(isset($_POST['send'])){
                    $user = $_POST['user'];
                    $email = $_POST['email'];
                    $checkpass=check_pass($user,$email);
                    if(is_array($checkpass)){
                        $password = $checkpass['password'];
                        tbpass($password);
                    }else{
                        khongtontai();
                    }
                }
                include "main.php";
                break;
            
// =======

            case 'sbcontact':
                if(isset($_POST['sbcontact'])&&($_POST['sbcontact'])) {
                    $user = $_POST['user'];
                    $email = $_POST['email'];
                    $title = $_POST['title'];
                    $content = $_POST['content'];
                    add_contact($user,$email,$title,$content);
                }
                include 'contact.php';
                break;
            case 'updatetk':
                $loadtk = loadall_tk();
                include 'updatetk.php';
                break;
            case 'update':
                if(isset($_POST['update'])&&($_POST['update']>0)){
                    $name = $_POST['name'];
                    $id = $_POST['id'];
                    $password = $_POST['password'];
                    $email = $_POST['email'];
                    $tel = $_POST['tel'];
                    $hinh = $_FILES['image']['name'];
                    $target_dir = "../Images/avatar/";
                    $target_file = $target_dir . basename($_FILES['image']['name']);
                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                       //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]['name'])). " has been upload."; 
                    } else {
                       //echo "Sorry, there was an error uploading your file.";
                    }
                    update_tk1($id,$name,$password,$email,$hinh,$tel,$role);
                    update_true();
                        }
                        include 'main.php';
                break;
            case 'addcart':
                    if(isset($_POST['addcart'])&&($_POST['addcart'])){
                        $id=$_POST['id'];
                        $name=$_POST['name'];
                        $image=$_POST['image'];
                        $price=$_POST['price'];
                        $soluong=1;
                        $ttien=$soluong * $price;
                             // tìm và so sánh sp trong giỏ hàng
                             $i=0;
                             $fg=0;
                        if(isset($_SESSION['mycart'])&&(count($_SESSION['mycart'])>0)){
                            foreach ($_SESSION['mycart'] as $sp) {
                                if($sp[0]==$id){
                                    // cập nhật mới số lượng
                                    $soluong+=$sp[4];
                                    $fg=1;
                                     // cập nhật mới số lượng vào giỏ hàng
                                     $_SESSION['mycart'][$i][4]=$soluong;
                                     break;
                                }
                                $i++;
                            }
                        }
                         if($fg==0){
                        $spadd=[$id,$name,$image,$price,$soluong,$ttien];
                        array_push($_SESSION['mycart'],$spadd);
                         }
                    }
                    include "thanhtoan.php";
                    break;
            case 'deletecart':
                    if(isset($_GET['id'])){
                        array_splice($_SESSION['mycart'],$_GET['id'],1);
                    }else{
                        $_SESSION['mycart']=[];
                    }
                    include "thanhtoan.php";
                    
                break;
            case'billconfirm':
                    if(isset($_POST['thanhtoan'])&&($_POST['thanhtoan'])) {
                        if(isset($_SESSION['name'])) $iduser = $_SESSION['name']['id'];
                        else $id = 0;
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $address = $_POST['address'];
                        $tel = $_POST['tel'];
                        $pttt = $_POST['pttt'];
                        $name_hh = $_POST['name_hh'];
                        $soluong = $_POST['soluong_hh'];
                        $ngaydathang = date('h:i:sa d/m/Y');
                        $tongdonhang = tongdonhang();
    
                        $idbill=  insert_bill($iduser,$name,$name_hh,$soluong,$email,$address,$tel,$pttt,$ngaydathang,$tongdonhang);
    
                        foreach($_SESSION['mycart'] as $cart){
                            insert_cart($_SESSION['name']['id'],$cart['0'],$cart['2'],$cart['1'],$cart['3'],$cart['4'],$cart['5'],$idbill);
                        }
                        array_splice($_SESSION['mycart'],$_GET['id'],1);
                    }
                    $bill = loadone_bill($idbill);
                    
                    include 'main.php';
                    break;
            case 'mybill':
                if(isset($_GET['id'])){
                $id_user = $_GET['id'];
                $loadbill = loadbill_user($id_user);
                }
            include 'cart/mybill.php';
            break;
// >>>>>>> Stashed changes
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