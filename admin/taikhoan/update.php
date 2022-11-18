<?php
    if(is_array($tk)){
        extract($tk);
        $name_not_fix = $name;
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
        <!-- Sửa Tài khoản -->
        <h3 style="margin-top: 10px;">Sửa Tài Khoản</h3>
    <form method="POST" class="formadd" action="index.php?act=updatetk">
        <table class="add">
            <tr>
                <td>UserName</td>
                <td>
                    <input type="hidden" value="<?=$name?>" name="name">
                    <input type="text" value="<?=$name_not_fix?>" name="namenotfix" disabled />
                </td>
            </tr>
            <tr>
                <td>Passwrord</td>
                <td>
                    <input type="pass" value="<?=$password?>" name="password" />
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="email" name="email" value="<?=$email?>" />
                </td>
            </tr>
            <tr>
                <td>Địa Chỉ</td>
                <td>
                    <input type="text" name="status" value="<?=$status?>">
                </td>
            </tr>
            <tr>
                <td>Vai Trò</td>
                <td>
                <input type="number" min="0" max="1" name="role" value="<?=$role?>">
                </td>
            </tr>

        </table>
        <div class="table-btn">
            <a href="index.php?act=tk"><input type="button" value="Danh Mục"></a>
            <input type="reset" value="Nhập Lại">
            <input type="hidden" name="id" value="<?=$id?>">
            <input type="submit" name="update" value="Cập Nhật"></a>
        </div>
    </form>
    </div>
</body>
</html>