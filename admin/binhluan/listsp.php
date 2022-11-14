<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/css/style.css">
</head>

<body>
    <div class="borderlist">

    <h3 style="margin-top: 10px;">Danh Sách Sản Phẩm</h3>

        <form class="search" action="index.php?act=listbl" method="POST">
            <select name="cate_id" id="">
                <option value="0" selected>Tất cả</option>
                <?php
                foreach ($listdm as $danhmuc) {
                    extract($danhmuc);
                    echo '<option value="' . $id_cate . '">' . $name_cate . '</option>';
                }
                ?>
                <input type="text" name="kyw" id="">
                <button name="listok"><i class="fa-solid fa-magnifying-glass"></i></button>
            </select>

        </form>
        <style>

        </style>
        <form action="" method="POST">
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th>Mã Loại</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Ảnh Sản Phẩm</th>
                        <th>Loại</th>
                        <th></i></th>
                    </tr>
                </thead>
                <?php
                foreach ($listsp as $sp) {
                    extract($sp);
                    $hinhpath = "../public/img" . $image;
                    $link = "index.php?act=listbl&id=" . $id;
                    if (is_file($hinhpath)) {
                        $image = "<img src='" . $hinhpath . "' height='80'>";
                    } else {
                        $image = "No photo";
                    }
                    echo '
                            <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>' . $id . '</td>
                            <td>' . $name . '</td>
                            <td>' . $image . '</td>
                            <td>' . $name_cate . '</td>
                            <td style="text-align: center;">
                            <a style="text-decoration: none;" href="'.$link.'">
                                <input type="button" class="edit" value="Xem Bình Luận">
                            </a>
                           
                        </td>
                    </tr>   
                    ';
                }

                ?>
            </table>
        </form>
    </div>
    </div>
</body>

</html>