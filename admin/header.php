<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/bd9a701ba3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
    <header>
        <div class="left">
                <div class="admin">
                    <h1>Admin Tools</h1>
                </div>
                        <nav>
                            <ul>
                                    <div id="mau"></div>
                                    <a href="index.php?act=home" class="nav_click active"  id="sk1" onmouseover="stt1()">
                                        <i class="fa-solid fa-house"></i>
                                        <span>Trang chủ</span>
                                    </a>
                                    <a href="index.php?act=dm" class="nav_click" id="sk2" onmouseover="stt2()" >
                                        <i class="fa-solid fa-bars"></i>
                                        <span>Danh Mục</span>
                                    </a>
                                    <a href="index.php?act=sp" class="nav_click" id="sk3" onmouseover="stt3()">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                        <span>Sản Phẩm</span>
                                    </a>
                                    <a href="index.php?act=tk" class="nav_click" id="sk4" onmouseover="stt4()">
                                        <i class="fa-solid fa-users"></i>
                                        <span>Người Dùng</span>
                                    </a>
                                    <a href="" class="nav_click" id="sk5" onmouseover="stt5()">
                                        <i class="fa-solid fa-comment"></i>
                                        <span>Bình Luận</span>
                                    </a>
                                    <a href="" class="nav_click" id="sk6" onmouseover="stt6()">
                                        <i class="fa-solid fa-scale-unbalanced"></i>
                                        <span>Thống Kê</span>
                                    </a>
                            </ul>
                            <ul>
                                <a href="" class="logout" id="7" onmouseover="stt7()"> 
                                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                <span>Log Out</span>
                            </a>
                            </ul>
                        </nav>
                        <script>
                            var mau = document.getElementById("mau")

                            function stt1(){
                                mau.style.transform="translateY(0px)"
                                mau.style.transition="0.2s"

                            }
                            function stt2(){
                                mau.style.transform="translateY(60px)"
                                mau.style.transition="0.2s"
                                console.log("hello")
                            }
                            function stt3(){
                                mau.style.transform="translateY(125px)"
                                mau.style.transition="0.2s"
                                console.log("hello")
                            }
                            function stt4(){
                                mau.style.transform="translateY(187px)"
                                mau.style.transition="0.2s"
                                console.log("hello")
                            }
                            function stt5(){
                                mau.style.transform="translateY(249px)"
                                mau.style.transition="0.2s"
                                console.log("hello")
                            }
                            function stt6(){
                                mau.style.transform="translateY(313px)"
                                mau.style.transition="0.2s"
                                console.log("hello")
                            }                           
                        </script>
           </div>
                  <div class="right">
                        <div class="welcome">
                                    <h2>hi sueih,</h2>
                                    <h1>Welcome back👋</h1>
                        </div>
                    
