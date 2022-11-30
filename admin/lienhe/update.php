<?php
    if(is_array($contact)){
        extract($contact);
        
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
        <h3 style="margin-top: 10px;">Update lien he</h3>
    <form action="index.php?act=updatect" method="post">
        <table class="add">
            <tr>
                <td>Name</td>
                <td>
                    <input type="text" value="<?=$user?>" name="user">
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="email" value="<?php echo $email ?>" name="email" />
                </td>
            </tr>
            <tr>
                <td>Title</td>
                <td>
                    <input type="text" name="title" value="<?=$title?>" />
                </td>
            </tr>
            <tr>
                <td>Content</td>
                <td>
                    <input type="text" name="content" value="<?=$content?>">
                </td>
            </tr>

        </table>
        <div class="table-btn">
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <a href="index.php?act=listcontact"><input type="button" value="Danh Mục"></a>
            <input type="reset" value="Nhập Lại">
            <input type="submit" name="capnhat" value="Cập Nhật"></a>
        </div>
    </form>
    </div>
</body>
</html>