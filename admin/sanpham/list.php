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
        <form action="index.php?act=listdm" class="searchS" method="POST">
            <select name="cate_id" id="">
                <option value="0" selected>Tất cả</option>
                <?php
                foreach ($listdm as $danhmuc) {
                    extract($danhmuc);
                    echo '<option value="' . $id_cate . '">' . $name_cate . '</option>';
                }
                ?>
            </select>
            <div class="searchS-text">
                <input type="text" name="kyw" id="" placeholder="Nhập sản phẩm cần tìm..">
                <input type="submit" name="listok" value="🔍">
            </div>
        </form>
        <style>
        </style>
        <form action="index.php?act=addsp" method="POST">
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th>Mã Loại</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Ảnh Sản Phẩm</th>
                        <th>Giá</th>
                        <th>Giá Cũ</th>
                        <!-- <th>Cân nặng</th> -->
                        <th>Mô Tả</th>
                        <th>Loại</th>
                        <th><i class="fa-solid fa-gear"></i></th>
                    </tr>
                </thead>
                <?php
                foreach ($listsp as $sp) {
                    extract($sp);
                    $suasp = "index.php?act=suasp&id=" . $id;
                    $xoasp = "index.php?act=xoasp&id=" . $id;
                    $hinhpath = "../public/img" . $image;
                    if (is_file($hinhpath)) {
                        $image = "<img src='" . $hinhpath . "' height='80'>";
                    } else {
                        $image = "No photo";
                    }
                ?>
                    <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td><?php echo $id ?></td>
                        <td><?php echo $name  ?></td>
                        <td><?php echo $image ?></td>
                        <td><?php echo $price ?></td>
                        <td><?php echo $amount ?></td>
                        <td class="content"><?php echo $content ?></td>
                        <td><?php echo $name_cate ?></td>
                        <td style="text-align: center;">
                            <a style="text-decoration: none;" href="<?php echo $suasp ?>">
                                <input type="button" class="edit" value="Sửa">
                            </a>
                            <a style="text-decoration: none;" href="<?php echo $xoasp ?>">
                                <input onclick="return confirm('Bạn có chắc chắn muốn xóa không')" type="button" class="delete" value="Xóa">
                            </a>

                        </td>
                    </tr>
                <?php
                }

                ?>
            </table>
            <div class="table-btn">
                <input type="button" value="Chọn Tất Cả">
                <input type="button" value="Bỏ Chọn Tất Cả">
                <input type="button" value="Xóa Các Mục Đã Chọn">
                <a href="index.php?act=addsp"><input type="button" value="Nhập Thêm"></a>
            </div>
        </form>
    </div>
    </div>
    <!-- <<<<<<< Updated upstream -->
    <script>
        function Delete() {
            var remove = confirm("Bạn có muốn xóa không?");
            if (remove) {
                return true;
                console.log = "oke"
            } else {
                return false;
                console.log = "khong"
            }
        }
    </script>
    <!-- =======
>>>>>>> Stashed changes -->
</body>

</html>