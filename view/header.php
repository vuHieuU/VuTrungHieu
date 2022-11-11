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
              <li><a href="gioithieu.php">Vitanic</a></li>
              <li>
                  <div class="dropdown">
                      <a href="sanpham.php" class="dropbtn">Sản Phẩm</a>
                      <div class="dropdown-content">
                      <a href="#">Rau Củ</a>
                      <a href="#">Hoa Quả Tươi</a>
                      <a href="#">Hoa Quả Sấy</a>
                      <a href="#">Ô Mai</a>
                      <a href="#">Hoa Quả Đông Lạnh</a>
                      <a href="#">Thêm..</a>
                      </div>
                    </div>
              </li>
              <li><a href="#">Tin Tức</a></li>
              <li><a href="#">Khuyến Mãi</a></li>
              <li><a href="contact.php">Liên hệ</a></li>
          </ul>
      </div>
      <div class="user">
        <ul>
        <li><i class="fa-solid fa-user"></i><a onclick="show()" href="#"> Đăng Nhập</a></li>
          <li><i class="fa-solid fa-cart-shopping"></i><a href="giohang.php"> Giỏ Hàng</a></li>
        </ul>
      </div>
       <!--  ********** -->
       <div class="nav" id="nav">
            <div class="title">
                <input type="button" onclick="dangnhap1()" value="Đăng Nhập" id="iplg">|
                <input type="button" value="Đăng Kí" onclick="dangki()" id="iprg">
                <i class="fa-solid fa-x" onclick="out()"></i>
            </div>
            <div class="gach" id="gach"></div> 
            <form action="" id="dangnhap" class="">
                <div class="text">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" placeholder="Tên đăng nhập" required>
                </div>
                <div class="text">
                    <i class="fa-solid fa-key"></i>
                    <input type="password" placeholder="Mật khẩu" required>
                </div>
                <div class="checkbox">
                    <input type="checkbox">
                    <label for="">Ghi nhớ tài khoản</label>
                </div>
                <div class="flex">
                    <input type="submit" value="Đăng Nhập" class="login">
                </div>
                <div class="forgot">
                    <a href="" class="forgot">Quên tài khoản ?</a>
                </div>
                
            </form>
            <form action="" id="dangki" class="" >
                <div class="text">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" id="user" required placeholder="Tên đăng nhập">
                </div>
                <div class="text">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" placeholder="Email" id="email" required>
                </div>
                <div class="text">
                    <i class="fa-solid fa-phone"></i>
                    <input type="text" id="phone" placeholder="Số điện thoại" required >
                </div>
                <div class="text">
                    <i class="fa-solid fa-key"></i>
                    <input type="password" id="password1" required placeholder="Mật khẩu">
                </div>
                <div class="text">
                    <i class="fa-solid fa-unlock-keyhole"></i>
                    <input type="password" id="password2" required placeholder="Nhập lại mật khẩu">
                </div>
                <div class="flex">
                    <input type="submit" id="ipdangki" value="Đăng Kí" class="login ">
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
                gach.style.left="315px"
                gach.style.width="90px"
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
                gach.style.left="195px"
                gach.style.width="115px"
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
                gach.style.left="195px"
                gach.style.width="115px"
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