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
        <h3 style="margin-top: 10px;">Thêm Danh Mục</h3>
    <form method="POST" class="formadd" action="index.php?act=adddm">
        <table class="add">
            <tr>
                <td>Mã Danh Mục</td>
                <td>
                    <input type="text" value="" disabled />
                </td>
            </tr>
            <tr>
                <td>Tên Danh Mục</td>
                <td>
                    <input type="text" value="" name="name_cate">
                </td>
            </tr>

        </table>
        <div class="table-btn">
            <a href="index.php?act=dm"><input type="button" value="Danh Mục"></a>
            <input type="reset" value="Nhập Lại">
            <input type="submit" name="them" value="Thêm Mới">
        </div>
    </form>
    </div>
</body>
</html>