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
    <h3 style="margin-top: 10px;">Thêm Sản Phẩm</h3>
    <form action="index.php?act=addsp" method="POST" class="formadd" enctype="multipart/form-data">
        <table class="add">
            <tr>
                <td>Mã Sản Phẩm</td>
                <td>
                    <input type="text" disabled />
                </td>
            </tr>
            <tr>
                <td>Tên Sản Phẩm</td>
                <td>
                    <input type="text" value="" name="name" />
                </td>
            </tr>
            <tr>
                <td>Hình</td>
                <td>
                    <input type="file" name="image" id="file-upload" required />
                </td>
            </tr>
            <tr>
                <td>Giá Sản Phẩm</td>
                <td>
                    <input type="text" value="" name="price" />
                </td>
            </tr>
            <tr>
                <td>Giá Cũ</td>
                <td>
                    <input type="text" value="" name="soluong" />
                </td>
            </tr>
            <tr>
                <td>Mô Tả</td>
                <td>
                    <textarea cols="30" rows="10" name="content"></textarea>
                </td>
            </tr>
            <tr>
                <td>Danh Mục</td>
                <td>
                    <input list="browsers" name="browser">
                    <datalist id="browsers" name="">
                    <select name="id_dm" id="">
                        <?php
                            foreach($listdm as $danhmuc){
                                extract($danhmuc);
                                echo '<option value="'.$id_cate.'">'.$name_cate.'</option>';
                            }
                        ?>
                        </select>
                    </datalist>
                </td>
            </tr>
            <tr>
            </tr>
        </table>
        <div class="table-btn">
            <a href="index.php?act=sp"><input type="button" value="Danh Mục"></a>
            <input type="reset" value="Nhập Lại">
            <input type="submit" name="them" value="Thêm Mới">
        </div>
    </form>
    </div>
</body>

</html>