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
                    <input type="text" value="<?php echo $id_cate ?>" name="name" disabled />
                </td>
            </tr>
            <tr>
                <td>Tên Danh Mục</td>
                <td>
                    <input type="text" value="<?php echo $name_cate ?>" name="email" />
                </td>
            </tr>

        </table>
        <div class="table-btn">

            <a href="index.php?act=dm"><input type="button" value="Danh Mục"></a>
            <input type="reset" value="Nhập Lại">
            <input type="hidden" name="id" value="<?php if (isset($id_cate) && ($id_cate > 0)) echo $id_cate ?>">
            <a href="index.php?act=updatedm"><input type="button" value="Cập Nhật"></a>
        </div>
    </form>
    <!--  -->
    <!-- <div class="borderlist">


        <form action="index.php?act=updatedm" method="POST" class="formadd">
            <div class="textadd">
                <h1>Thêm Mới Danh Mục</h1>
            </div>
            <div class="iteminputadd hidden">
                <label for="">Mã danh mục:</label> <br>
                <input type="text" disabled>
            </div>
            <div class="iteminputadd">
                <label for="">Danh mục:</label> <br>
                <input type="text" name="name" value="<?php echo $name_cate ?>">
            </div>
            <div class="tbn">
                <input type="hidden" name="id" value="<?php if (isset($id_cate) && ($id_cate > 0)) echo $id_cate ?>">
                <input class="click" type="submit" name="update" value="Update">
            </div>
        </form>
    </div> -->
    </div>
</body>

</html>