
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="borderlist">

    <h3 style="margin-top: 10px;">Danh Sách liên hệ</h3>


        <form action="index.php?act=addtk" method="POST">
            <table>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Title</th>
                        <th>Note</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                        <th><i class="fa-solid fa-gear"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    
                    foreach ($listcontact as $contact) {
                        extract($contact);
                        $suatk = "index.php?act=suatk&id=" . $id;
                        $xoatk = "index.php?act=xoatk&id=" . $id;
                        echo '
                                            <tr>
                                            <td><input type="checkbox" name="" id=""></td>
                                            <td>' . $id . '</td>
                                            <td>' . $name . '</td>
                                            <td>' . $email . '</td>
                                            <td>' . $title . '</td>
                                            <td>' . $note . '</td>
                                            <td style="text-align: center;">
                                                <a style="text-decoration: none;" href="' . $suatk . '">
                                                    <input type="button" class="edit" value="Sửa">
                                                </a>
                                                <a style="text-decoration: none;" href="' . $xoatk . '">
                                                    <input type="button" class="delete" value="Xóa">
                                                </a>
                                            </td>
                                    </tr>  
                                            ';
                    }
                    ?>
                </tbody>
            </table>
            <div class="table-btn">
                <input type="button" value="Chọn Tất Cả">
                <input type="button" value="Bỏ Chọn Tất Cả">
                <input type="button" value="Xóa Các Mục Đã Chọn">
                <a href="index.php?act=addtk"><input type="button" value="Nhập Thêm"></a>
            </div>
        </form>
    </div>
    </div>
</body>

</html>