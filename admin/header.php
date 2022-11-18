<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- link font -->
    <!-- link icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../public/css/style.css">
</head>

<body>
    <div class="container">
        <div class="box-left">
            <div class="box-left-img">
                <img src="../Images/logo/logo2.jpg" alt="">
            </div>
            <p style="margin-bottom: 4px;">Admin tools</p>
            <a href="#">
                <div class="box-left-content" style="background-color: #339900; color: #fff;">
                    <i class="fa-solid fa-chart-simple fa-bounce"
                        style=" --fa-bounce-start-scale-x: 1; --fa-bounce-start-scale-y: 1; --fa-bounce-jump-scale-x: 1; --fa-bounce-jump-scale-y: 1; --fa-bounce-land-scale-x: 1; --fa-bounce-land-scale-y: 1; --fa-bounce-rebound: 0;"></i>
                    <p>Thống Kê</p>
                </div>
            </a>
            <a href="index.php?act=dm">
                <div class="box-left-content">
                    <i class="fa-solid fa-list"></i>
                    <p>Danh Mục</p>
                </div>
            </a>
            <a href="index.php?act=sp">
                <div class="box-left-content">
                    <i class="fa-solid fa-clipboard-list"></i>
                    <p>Sản Phẩm</p>
                </div>
            </a>
            <a href="index.php?act=tk">
                <div class="box-left-content">
                    <i class="fa-solid fa-users"></i>
                    <p>Người Dùng</p>
                </div>
            </a>
            <a href="index.php?act=bl">
                <div class="box-left-content">
                    <i class="fa-solid fa-comments"></i>
                    <p>Bình Luận</p>
                </div>
            </a>
            <a href="index.html">
                <div class="box-left-content">
                    <i class="fa-solid fa-dolly"></i>
                    <p>Đơn Hàng</p>
                </div>
            </a>

            <!-- user -->
            <p style="margin-bottom: 4px;">ADMIN</p>
            <a href="">
                <div class="box-left-content" style="background-color: #339900; color: #fff;">
                    <i class="fa-solid fa-gear fa-spin" style="--fa-animation-duration: 15s;"></i>
                    <p>Thông Tin</p>
                </div>
            </a>
            <a href="index.php?act=logout" class="logout">
                <div class="box-left-content">
                    <i class="fa-solid fa-right-to-bracket"></i>
                    <p>Đăng Xuất</p>
                </div>
            </a>
        </div>
        <div class="box-right">
            <div class="info">
                <h3>Hello Admin <i class="fa-solid fa-hand"></i></h3>
            </div>

            <div class="content">