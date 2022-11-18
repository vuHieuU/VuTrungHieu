<?php
if (is_array($sp)) {
    extract($sp);
}
$hinhpath = "../public/img" . $image;
if (is_file($hinhpath)) {
    $img = "<img src='" . $hinhpath . "' height='80'>";
} else {
    $img = "No photo";
}

?>
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
    <?php
    foreach ($listdm as $danhmuc) {
        extract($danhmuc);
        '<option value="' . $id_cate . '">' . $name_cate . '</option>';
    }
    ?>
    <h3 style="margin-top: 10px;">Sửa Sản Phẩm</h3>
    <form action="index.php?act=updatesp" method="POST" class="formadd" enctype="multipart/form-data">
        <table class="add">
            <tr>
                <td>Mã Sản Phẩm</td>
                <td>
                    <input type="text" disabled value="<?php echo $id_cate ?>" />
                </td>
            </tr>
            <tr>
                <td>Tên Sản Phẩm</td>
                <td>
                    <input type="text" value="<?php echo $name ?>" name="name" />
                </td>
            </tr>
            <tr>
                <td>Hình</td>
                <td>
                    <input type="file" name="image"><?= $img ?>
                </td>
            </tr>
            <tr>
                <td>Giá Sản Phẩm</td>
                <td>
                    <input type="text" value="<?php echo $price ?>" name="price" />
                </td>
            </tr>
            <tr>
                <td>Giá Cũ</td>
                <td>
                    <input type="text" value="<?php echo $amount ?>" name="soluong" />
                </td>
            </tr>
            <tr>
                <td>Mô Tả</td>
                <td>
                    <textarea cols="30" rows="10" name="mota"><?php echo $content ?></textarea>
                </td>
            </tr>
            <tr>
                <td>Danh Mục</td>
                <td>
                    <!-- <input list="browsers" name="browser"> -->
                    <!-- <datalist id="browsers">
                        <?php
                        // foreach($listdm as $danhmuc){
                        //     extract($danhmuc);
                        //     echo '<option value="'.$id_cate.'">'.$name_cate.'</option>';

                        // }
                        ?>
                    </datalist> -->
                    <select name="id_dm" id="">
                        <?php
                        foreach ($listdm as $danhmuc) {
                            extract($danhmuc);
                            echo '<option value="' . $id_cate . '">' . $name_cate . '</option>';
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
            </tr>
        </table>
        <div class="table-btn">
            <input type="hidden" name="id" value="<?php extract($sp); echo $id ?>">
            <a href="index.php?act=sp"><input type="button" value="Danh Mục"></a>
            <input type="reset" value="Nhập Lại">
            <input type="submit" name="update" value="Cập Nhật">
        </div>
    </form>
    </div>
</body>

</html>