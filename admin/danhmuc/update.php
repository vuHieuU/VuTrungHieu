<?php
if (is_array($dm)) {
    extract($dm);
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
    <h3 style="margin-top: 10px;">Sửa Danh Mục</h3>
    <form method="POST" class="formadd" action="index.php?act=updatedm">
        <table class="add">
            <tr>
                <td>Mã Danh Mục</td>
                <td>
                    <input type="text" value="<?php echo $id_cate ?>" name="id" disabled />
                </td>
            </tr>
            <tr>
                <td>Tên Danh Mục</td>
                <td>
                    <input type="text" value="<?php echo $name_cate ?>" name="name" />
                </td>
            </tr>

        </table>
        <div class="table-btn">

            <a href="index.php?act=dm"><input type="button" value="Danh Mục"></a>
            <input type="reset" value="Nhập Lại">
            <input type="hidden" name="id" value="<?php if (isset($id_cate) && ($id_cate > 0)) echo $id_cate ?>">
            <input type="submit" name="update" value="Cập Nhật">
        </div>
    </form>
    </div>
</body>

</html>