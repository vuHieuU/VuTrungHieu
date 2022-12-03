<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <link rel="stylesheet" href="../Main/css/style.css">
</head>
<body>
  <div class="header">
      <a href="index.php"><div class="logo"><img src="../Images/logo/logo2.jpg"></div></a>
      <div class="menu">
          <ul>
              <li><a href="index.php?act=gioithieu">Vitanic</a></li>
              <li>
                  <div class="dropdown">
                    <style>
                        .dropdown i{
                            transition: .3s;
                        }
                        .dropdown a:hover i{
                            transform: rotate(90deg);
                        }
                    </style>
                      <a href="index.php?act=sanpham" class="dropbtn">Sản Phẩm <i class="fa-solid fa-caret-right"></i></i></a>
                      <div class="dropdown-content">
                        <?php
                            foreach($listdm as $dm){
                                extract($dm);
                                $loadsp = "index.php?act=danhmucsanpham&madanhmuc=".$id_cate;
                                echo'
                                    <a href="'.$loadsp.'">'.$name_cate.'</a>
                                ';
                            }
                        ?>
                      </div>
                    </div>
              </li>
              <li><a href="index.php?act=tintuc">Tin Tức</a></li>
              <li><a href="index.php?act=khuyenmai">Khuyến Mãi</a></li>
              <li><a href="index.php?act=contact">Liên hệ</a></li>
          </ul>
      </div>
      <div class="user">
        <ul>

            <?php
                if(isset($_SESSION['name'])){
                    extract($_SESSION['name']);
                    $linkupdate = "index.php?act=updatetk&id=".$id;
                    $linkmua = "index.php?act=mybill&id=" . $id;
                    ?>
                    <!-- <li>
                        Xin chào, <?=$name?>
                    </li>
                    <?php
                        // if($role == 1){
                        //     echo'
                        // <li>
                        //     <a href="../admin">Đăng nhập trang admin</a>
                        // </li>
                        //     ';
                        // }
                    ?>
                    <li>
                        <a href="">Cập Nhật Tài Khoản</a>
                    </li>
                    <li>
                        <a href="index.php?act=logout">Thoát</a>
                    </li>
                    <li> -->
                    <div class="dropdown">
                      <a href="index.php?act=sanpham" style="text-decoration: none; color: var(--color-main);" class="dropbtn">Xin chào, <b style="color: #0f9d58;"><?=$name?> </b><i style="transform: rotate(90deg); " class="fa-solid fa-angles-right"></i></a>
                      <div class="dropdown-content">
                      <?php
                            if($role == 1){
                                echo'
                                <a href="../admin">Đăng nhập ADMIN</a>
                                ';
                            }
                        ?>
                        <input type="hidden" value="<?=$id?>">
                        <a href="index.php?act=giohang">Giỏ Hàng</a>
                        <a href="<?php echo $linkmua?>">Đơn mua</a>
                        <a href="<?php echo $linkupdate ?>">Cập Nhật Tài Khoản</a>
                        <a href="index.php?act=logout">Thoát</a>
                    </div>
                    </div>
              <!-- </li> -->
                    <?php
                }else{
                    ?>
                        <li><i class="fa-solid fa-user"></i><a onclick="show()" href="#"> Đăng Nhập</a></li>
                        <li><i class="fa-solid fa-cart-shopping"></i><a href="thanhtoan.php"> Giỏ Hàng</a></li>
                    <?php
                    
                }
            ?>
          
        </ul>
      </div>
       <!--  ********** -->
       <div class="nav" id="nav">
            <div class="title" id="title">
                <input type="button" onclick="dangnhap1()" value="Đăng Nhập" id="iplg">|
                <input type="button" value="Đăng Kí" onclick="dangki()" id="iprg">
                <i class="fa-solid fa-x" onclick="out()"></i>
            </div>
            <div class="gach" id="gach"></div> 
            <form action="index.php?act=dangnhap" method="POST" id="dangnhap" class=""> 
                <div class="text">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" placeholder="Tên đăng nhập" name="name" required>
                </div>
                <div class="text">
                    <i class="fa-solid fa-key"></i>
                    <input type="password" placeholder="Mật khẩu" name="password" required>
                </div>
                <div class="checkbox">
                    <input type="checkbox">
                    <label for="">Ghi nhớ tài khoản</label>
                </div>
                <div class="flex">
                    <input type="submit" value="Đăng Nhập" class="login" name="dangnhap">
                </div>
                <div class="forgot">
                    <button onclick="forgot()" class="forgot">Quên mật khẩu</button>
                </div>
                
            </form>
            <form action="index.php?act=dangki" method="POST" id="dangki" class="" >
                <div class="text">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" id="user" required placeholder="Tên đăng nhập" name="user">
                </div>
                <div class="text">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" placeholder="Email" id="email" name="email" required>
                </div>
                <div class="text">
                    <i class="fa-solid fa-phone"></i>
                    <input type="text" id="phone" placeholder="Số điện thoại" required name="tel" >
                </div>
                <div class="text">
                    <i class="fa-solid fa-key"></i>
                    <input type="password" id="password1" required placeholder="Mật khẩu" name="password_check">
                </div>
                <div class="text">
                    <i class="fa-solid fa-unlock-keyhole"></i>
                    <input type="password" id="password2" required placeholder="Nhập lại mật khẩu" name="re_password">
                </div>
                <div class="flex">
                    <input type="submit" id="ipdangki" value="Đăng Kí" class="login " name="dangki">
                </div>
            </form>
            <form action="index.php?act=quenmk" method="POST" id="timkiem" class="">
            <i class="fa-solid fa-x" onclick="out1()"></i>
               <h2 class="searchtk">Tìm tài khoản của bạn ?</h2>
                <p>Vui lòng nhập email hoặc số di động để tìm kiếm tài khoản của bạn.</p>
                <div class="forgot1">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="user" required class="" placeholder="Nhập Tài khoản">
                </div>
                <div class="forgot1">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="text" name="email" required class="" placeholder="Nhập Email">
                </div>
                <div class="nuttk">
                    <input type="submit" class="timtk" name="send" value="Gửi">
                    <input type="button" value="Hủy" onclick="unforgot()">
                </div>
                
            </form>
            
</div>

        <script>
            var dangky = document.getElementById("dangki")
            var dangnhap = document.getElementById("dangnhap")
            var gach = document.getElementById("gach")
            var ipdk = document.getElementById("iprg")
            var iplg = document.getElementById("iplg")
            var nav = document.getElementById("nav")
            var tk = document.getElementById("timkiem")
            var title = document.getElementById("title")
            function forgot(){
                tk.style.transform="translateY(0px)"
                tk.style.transition=".5s"
                dangnhap.style.position="relative"
                dangnhap.style.transform="translateY(600px)"
                dangnhap.style.transition=".5s"
                title.style.transform="translateY(500px)"
                title.style.transition=".5s"
                gach.style.transform="translateY(500px)"
                gach.style.transition=".5s"
                nav.style.transition="1s"
                nav.style.height="340px"    
            }
            function out1(){
                tk.style.transform="translateY(-400px)"
                tk.style.transition=".5s"
                title.style.transform="translateY(0px)"
                title.style.transition=".5s"
                gach.style.transform="translateY(0px)"
                gach.style.transition=".5s"
                nav.style.transform="translateY(-700px)"
               ipdk.style.color="black"
                ipdk.style.transition="1s"
                iplg.style.color="#86B70B"
                iplg.style.transition="1s"
                dangnhap.style.position="relative"
                dangky.style.position="absolute"
                dangky.style.left="100%"
                dangky.style.transform="translateY(-275px)"
                dangky.style.transition="1s"
                dangnhap.style.position="relative"
                dangnhap.style.left="-0%"
                dangnhap.style.transform="translateX(0px)"
                dangky.style.transition="1s"
                gach.style.left="195px"
                gach.style.width="115px"
                gach.style.transition="1s"
                nav.style.transition="0.3s"
                nav.style.height="360px"
            }
            function unforgot(){
                tk.style.transform="translateY(-400px)"
                tk.style.transition=".5s"
                dangnhap.style.position="relative"
                dangnhap.style.right="40%"
                dangnhap.style.transform="translateX(210px)"
                dangnhap.style.transform="translateY(-300px)"
                dangnhap.style.left="-0%"
                dangnhap.style.transform="translateX(0px)"
                dangnhap.style.transition=".5s"
                title.style.transform="translateY(0px)"
                title.style.transition=".5s"
                gach.style.transform="translateY(0px)"
                gach.style.transition=".5s"
                nav.style.transition="1s"
                nav.style.height="360px"
            }
            function dangki(){
                // dangky.style.display="block"
                // dangnhap.style.display="none"
                iplg.style.color="black"
                iplg.style.transition=".5s"
                ipdk.style.color="#86B70B"
                ipdk.style.transition=".5s"
                dangky.style.position="relative"
                dangky.style.left="0%"
                dangky.style.transform="translateX(-100px)"
                dangky.style.transform="translateY(-275px)"
                dangky.style.transition="1s"
                dangnhap.style.position="relative"
                dangnhap.style.right="40%"
                dangnhap.style.transform="translateX(-600px)"
                dangnhap.style.transition="1s"
                gach.style.left="325px"
                gach.style.width="95px"
                gach.style.transition=".5s"
                nav.style.transition=".5s"
                nav.style.height="500px"
            }
            function dangnhap1(){
                ipdk.style.color="black"
                ipdk.style.transition="1s"
                iplg.style.color="#86B70B"
                iplg.style.transition="1s"
                dangnhap.style.position="relative"
                dangky.style.position="absolute"
                dangky.style.left="100%"
                dangky.style.transform="translateY(-275px)"
                dangky.style.transition="1s"
                dangnhap.style.position="relative"
                dangnhap.style.left="-0%"
                dangnhap.style.transform="translateX(0px)"
                dangky.style.transition="1s"
                gach.style.left="180px"
                gach.style.width="140px"
                gach.style.transition="1s"
                nav.style.transition="1s"
                nav.style.height="360px"
            }
            function out(){
               nav.style.transform="translateY(-700px)"
               ipdk.style.color="black"
                ipdk.style.transition="1s"
                iplg.style.color="#86B70B"
                iplg.style.transition="1s"
                dangnhap.style.position="relative"
                dangky.style.position="absolute"
                dangky.style.left="100%"
                dangky.style.transform="translateY(-275px)"
                dangky.style.transition="1s"
                dangnhap.style.position="relative"
                dangnhap.style.left="-0%"
                dangnhap.style.transform="translateX(0px)"
                dangky.style.transition="1s"
                gach.style.left="11.25em"
                gach.style.width="140px"
                gach.style.transition="1s"
                nav.style.transition="1s"
                nav.style.height="360px"
            }
            function show(){
                nav.style.top="110%";
                nav.style.transform="translateY(0px)"
                nav.style.transition="1s"
            }
        </script>

        <!-- *********** -->
  </div>