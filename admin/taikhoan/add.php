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
    // if (is_array($tk)) {
    //     extract($tk);
    // }
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
        <!-- Thêm Tài Khoản -->
        <h3 style="margin-top: 10px;">Tạo Tài Khoản</h3>
        <form method="POST" class="formadd" action="index.php?act=addtk">
            <table class="add">
                <tr>
                    <td>UserName</td>
                    <td>
                        <input type="text" name="name"/>
                    </td>
                </tr>
                <tr>
                    <td>Passwrord</td>
                    <td>
                        <input type="pass" name="password" />
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>
                        <input type="email" name="email" />
                    </td>
                </tr>
                <tr>
                    <td>Địa Chỉ</td>
                    <td>
                        <input type="text" name="status">
                    </td>
                </tr>
                <tr>
                    <td>Vai Trò</td>
                    <td>
                        <input type="number" min="0" max="1" name="role">
                    </td>
                </tr>

            </table>
            <div class="table-btn">
                <a href="index.php?act=tk"><input type="button" value="Danh Mục"></a>
                <input type="reset" value="Nhập Lại">
                <input type="submit" name="them" value="Thêm Mới">
            </div>
        </form>
        </div>
    </body>

    </html>
    </div>
</body>

</html>