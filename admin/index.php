<?php
session_start();
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
include "../model/thongbao.php";
include "../view/global.php";
include "header.php";
     if(isset($_GET['act'])){
      $act = $_GET['act'];
         switch ($act) {
                  case 'dm':
                     $listdm = loadall_dm();
                        include "danhmuc/list.php";
                           break;
                  case 'adddm':
                     if(isset($_POST['them'])&&($_POST['them'])){
                        $tenloai = $_POST['name_cate'];
                        insert_danhmuc($tenloai);
                        $listdm = loadall_dm();
                       
                     }
                        include "danhmuc/add.php";
                           break;
                  case 'suadm':
                     if(isset($_GET['id'])&&($_GET['id']>0)){
                        $id = $_GET['id'];
                        $dm = loadone_dm($id);
                     
                        }
                        
                        include "danhmuc/update.php";
                        break;
                  case 'updatedm':
                     if(isset($_POST['update'])&&($_POST['update'])){
                        $id = $_POST['id'];
                        $name = $_POST['name'];
                        update_danhmuc($id,$name);
                        $listdm = loadall_dm();
                     }
                     include "danhmuc/list.php";
                     break;
                  case "xoadm":
                     if(isset($_GET['id'])&&($_GET['id']>0)){
                        $id = $_GET['id'];
                        delete_danhmuc($id);
                        }
                        $listdm = loadall_dm();
                        include 'danhmuc/list.php';
                        break;
                  case 'sp':
                        $listsp = loadall_sp();
                        $listdm = loadall_dm();
                        include "sanpham/list.php";
                        break;

                  case 'addsp':
                     if(isset($_POST['them'])&&($_POST['them'])){
                        $name = $_POST['name'];
                        $soluong = $_POST['soluong'];
                        $price = $_POST['price'];
                        $mota = $_POST['content'];
                        $id_dm = $_POST['id_dm'];
                        $hinh=$_FILES['image']['name'];
                        $target_dir = "../public/img";
                        $target_file = $target_dir . basename($_FILES['image']['name']);
                        if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)){
                            //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]['name'])). " has been upload."; 
                        }else{
                            //echo "Sorry, there was an error uploading your file.";
                        }
                  insert_sanpham($name,$price,$hinh,$mota,$soluong,$id_dm);
               }
               $listdm=loadall_dm();
                        include "sanpham/add.php";
                           break;
                  case 'suasp':
                     if(isset($_GET['id'])&&($_GET['id']>0)){
                        $id = $_GET['id'];
                        $sp = loadone_sp($id);
                        $listdm=loadall_dm();
                        }
                     include 'sanpham/update.php';
                     break;
                  case 'updatesp':
                     if(isset($_POST['update'])&&($_POST['update'])){
                        $id = $_POST['id'];
                        $name = $_POST['name'];
                        $price = $_POST['price'];
                        $soluong = $_POST['soluong'];
                        $mota = $_POST['mota'];
                        $id_dm = $_POST['id_dm'];
                        $hinh=$_FILES['image']['name'];
                        $target_dir = "../public/img";
                        $target_file = $target_dir . basename($_FILES['image']['name']);
                        if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)){
                            //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]['name'])). " has been upload."; 
                        }else{
                            //echo "Sorry, there was an error uploading your file.";
                        }
                        update_sp($id,$name,$price,$hinh,$mota,$soluong,$id_dm);
                     }
                     $listsp = loadall_sp();
                     include "sanpham/list.php";
                     break;
                  case 'xoasp':
                     if(isset($_GET['id'])&&($_GET['id']>0)){
                        $id = $_GET['id'];
                        delete_sanpham($id);
                        }
                        $listsp = loadall_sp();
                        include "sanpham/list.php";
                        break;
                  case 'listdm':
                           if(isset($_POST['listok'])&&($_POST['listok'])){
                                 $kyw=$_POST['kyw'];
                                 $iddm=$_POST['cate_id'];
                           }else{
                                 $kyw="";
                                 $iddm=0;
                           }
                           $listdm = loadall_dm();
                           $listsp = loadAll_sanpham($kyw,$iddm);
                           include "sanpham/list.php";
                           break;
                  case 'tk':
                     $listtk = loadall_tk();
                        include "taikhoan/list.php";
                           break;
                  case 'addtk':
                     if(isset($_POST['them'])&&($_POST['them'])){
                        $user=$_POST['name'];
                        $pass=$_POST['password'];
                        $email=$_POST['email'];
                        $status=$_POST['status'];
                        // $tel=$_POST['tel'];
                        $role=$_POST['role'];
                        insert_tk($user,$pass,$email,$status,$role);
                        add_thanhcong();
                     }
                     include 'taikhoan/add.php';
                     break;
                  case 'xoatk':
                     if(isset($_GET['id'])&&($_GET['id'])){
                        $id = $_GET['id'];
                        delete_tk($id);
                     }
                     $listtk = loadall_tk();
                     include "taikhoan/list.php";
                     break;
                  case 'suatk':
                     if(isset($_GET['id'])&&($_GET['id']>0)){
                        $id=$_GET['id'];
                        $tk= loadone_tk($id);
                     }
                     include 'taikhoan/update.php';
                     break;
                  case 'updatetk':
                     if(isset($_POST['update'])&&($_POST['update'])){
                        $id = $_POST['id'];
                        $user=$_POST['name'];
                        $pass=$_POST['password'];
                        $email=$_POST['email'];
                        $status=$_POST['status'];
                        // $tel=$_POST['tel'];
                        $role=$_POST['role'];
                        update_tk($id,$user,$pass,$email,$status,$role);
                     }
                     $listtk = loadall_tk();
                     include "taikhoan/list.php";
                     break;
                  // case 'bl';
                  //       $listsp = loadall_sp();
                  //       $listdm = loadall_dm();
                  //       include "binhluan/listsp.php";
                  //       break;
                  case 'bl':
                        $listbl = loadall_bl();
                        include "binhluan/listbl.php";
                           break;
                  case 'xoabl':
                        if(isset($_GET['id'])&&($_GET['id'])){
                           $id = $_GET['id'];
                           delete_bl($id);
                        }
                        $listbl = loadall_bl();
                        include "binhluan/listbl.php";
                        break;
                  case 'logout':
                     session_unset();
                     include '../view/main.php';  

                     break;
                        
            default:
                     ?><script>
                        var mau = document.getElementById("mau")
                        mau.style.transform="translateY(0px)"
                        mau.style.transition="0.2s"
                     </script>
                     <?php
                        include "home.php";
                           break;
         }
   }


   include "footer.php";

?>