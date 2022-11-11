<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/thongbao.php";
include "../global.php";
include "header.php";
     if(isset($_GET['act'])){
      $act = $_GET['act'];
      ?>
      <input type="hidden" value="<?=$act?>" id="note">
      <!-- <script>
         var mau = document.getElementById("mau")
         var note = document.getElementById("note")
         if(note.value=="dm"||note.value="adddm"||note.value="suadm"||note.value="updatedm"){
               mau.style.transform="translateY(60px)"
               mau.style.transition="0.2s"
         }

      </script> -->
      <?php
         switch ($act) {
                  case 'dm':

                     $listdm = loadall_dm();
                        include "danhmuc/list.php";
                           break;
                  case 'adddm':
                     ?><script>
                     var mau = document.getElementById("mau")
                     mau.style.transform="translateY(60px)"
                     mau.style.transition="0.2s"
                  </script>
                  <?php
                     if(isset($_POST['them'])&&($_POST['them'])){
                        $tenloai = $_POST['name'];
                        insert_danhmuc($tenloai);
                     }
                        include "danhmuc/add.php";
                           break;
                  case 'suadm':
                     ?><script>
                     var mau = document.getElementById("mau")
                     mau.style.transform="translateY(60px)"
                     mau.style.transition="0.2s"
                  </script>
                  <?php
                     if(isset($_GET['id'])&&($_GET['id']>0)){
                        $id = $_GET['id'];
                        $dm = loadone_dm($id);
                        }
                        include "danhmuc/update.php";
                        break;
                  case 'updatedm':
                     ?><script>
                     var mau = document.getElementById("mau")
                     mau.style.transform="translateY(60px)"
                     mau.style.transition="0.2s"
                  </script>
                  <?php
                     if(isset($_POST['update'])&&($_POST['update'])){
                        $id = $_POST['id'];
                        $name = $_POST['name'];
                        update_danhmuc($id,$name);
                     }
                     break;
                  case "xoadm":
                     ?><script>
                     var mau = document.getElementById("mau")
                     mau.style.transform="translateY(60px)"
                     mau.style.transition="0.2s"
                  </script>
                  <?php 
                     if(isset($_GET['id'])&&($_GET['id']>0)){
                        $id = $_GET['id'];
                        delete_danhmuc($id);
                        }
                        $listdm = loadall_dm();
                        include 'danhmuc/list.php';
                        break;
                  case 'sp':
                        $listsp = loadall_sp();
                        include "sanpham/list.php";
                        break;

                  case 'addsp':
                     if(isset($_POST['them'])&&($_POST['them'])){
                        $name = $_POST['name'];
                        $weight = $_POST['weight'];
                        $soluong = $_POST['soluong'];
                        $price = $_POST['price'];
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
                  insert_sanpham($name,$price,$hinh,$weight,$mota,$soluong,$id_dm);
               }
               $listdanhmuc=loadall_dm();
                        include "sanpham/add.php";
                           break;
                  case 'suasp':
                     if(isset($_GET['id'])&&($_GET['id']>0)){
                        $id = $_GET['id'];
                        $sp = loadone_sp($id);
                        $listdanhmuc=loadall_dm();
                        }
                     include 'sanpham/update.php';
                     break;
                  case 'updatesp':
                     if(isset($_POST['update'])&&($_POST['update'])){
                        $id = $_POST['id'];
                        $name = $_POST['name'];
                        $weight = $_POST['weight'];
                        $soluong = $_POST['soluong'];
                        $price = $_POST['price'];
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
                        update_sp($id,$name,$price,$hinh,$weight,$mota,$soluong,$id_dm);
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