<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Main/css/product.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Document</title>
    <style>
        #banner {
            background: url(../Main/Images/img/img_raucuqua/banner/banner1.jpg);
            width: 80%;
            min-height: 520px;
            background-size: cover;
        }
    </style>
</head>

<body>

    <?php include "header.php" ?>

    <div class="wrapper">
        <div id="banner">
            <div class="text_banner">
                <h1>Tìm kiếm sản phẩm</h1>
                <form action="" method="POST">
                    <input type="text" name="search" placeholder="Tìm kiếm sản phẩm...">
                    <button type="submit" name="btn_search" style="border: none;"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
        </div>

        <!---Hiển thị danh mục -->
        <div class="danh_muc">
            <button><a href="index.php?act=sanpham">Tất cả</a></button>
            <?php
            $dsdm = loadall_dm();
            //var_dump($dsdm);
            foreach ($dsdm as $key => $value) {
            ?>
                <button><a href="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></a></button>
            <?php
            }
            ?>
        </div>

        <?php
                if (isset($_POST['btn_search'])) {
                    $keyword = $_POST['search'];
                    $sqlsearch = "SELECT * FROM products WHERE name LIKE '%$keyword%'";
                    $kqsearch = $conn->query($sqlsearch);
                    var_dump($kqsearch)
                ?> 
        <h2>Sản phẩm tìm kiếm được</h2>
        <div>
            <?php
                    foreach ($kqsearch as $key => $value) {

            ?>
                <div>
                    <div>
                        <a href="<?php echo $value['id'] ?>">
                            <img src="<?php echo $value['image'] ?>" alt="">
                        </a>

                        <span><a href="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></a></span><br>
                        <span><a href="<?php echo $value['id'] ?>"><?php echo $value['price'] ?></a></span><br>

                    </div>
                </div>
            <?php
                    }
            }else {
            ?>
            <h2>Sản phẩm nổi bật</h2>
            <div>
                <?php
                    $allsp = loadAll_sanpham_home();
                    foreach ($allsp as $key => $value) {

                ?>
                    <div>
                        <div>
                            <a href="<?php echo $value['id'] ?>">
                                <img src="../Main/Images/<?php echo $value['image'] ?>" alt="">
                            </a>

                        </div>

                        <span><a href="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></a></span><br>
                        <span><a href="<?php echo $value['id'] ?>"><?php echo $value['price'] ?></a></span><br>


                    </div>
            <?php
                    }
                }
            ?>
            </div>

        </div>
    </div>
</body>

</html>