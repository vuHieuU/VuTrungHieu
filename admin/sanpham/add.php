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
    <!-- <div class="borderlist">


        <form action="index.php?act=addsp" method="POST" class="formadd" enctype="multipart/form-data">
            <div class="textadd">
                <h1>Thêm Mới SẢN PHẨM</h1>
            </div>
            <div class="iteminputadd">
                <label for="">Mã sản phẩm:</label> <br>
                <select name="id_dm" id="">
                    <?php
                    // foreach ($listdm as $danhmuc) {
                    //     extract($danhmuc);
                    //     echo '<option value="' . $id_cate . '">' . $name_cate . '</option>';
                    // }
                    ?>
                </select>
            </div>
            <div class="iteminputadd hidden">
                <label for="">Mã sản phẩm:</label> <br>
                <input type="text" disabled>
            </div>
            <div class="iteminputadd">
                <label for="">Tên sản phẩm:</label> <br>
                <input type="text" name="name">
            </div>
            <div class="iteminputadd">
                <label for="">Ảnh:</label> <br>
                <input type="file" name="image">
            </div>
            <div class="iteminputadd">
                <label for="">Giá:</label> <br>
                <input type="text" name="price">
            </div>
            <div class="iteminputadd">
                <label for="">Giá Cũ</label> <br>
                <input type="text" name="weight">
            </div>
            <div class="iteminputadd">
                <label for="">Mô tả:</label> <br>
                <textarea name="mota" id="" cols="30" rows="10"></textarea>
            </div>

            <div class="tbn">
                <input class="click" type="submit" name="them" value="Thêm Sản Phẩm Mới">
            </div>
        </form>
    </div> -->
    <!--  -->
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
                <td>Mô Tả</td>
                <td>
                    <textarea cols="30" rows="10" name="mota"></textarea>
                </td>
            </tr>
            <tr>
                <td>Danh Mục</td>
                <td>
                    <input list="browsers" name="browser">
                    <datalist id="browsers">
                        <option value="Rau Củ" disabled>
                            <?php
                            foreach ($listdm as $danhmuc) {
                                extract($danhmuc);
                                echo '<option value="' . $id_cate . '">' . $name_cate . '</option>';
                            }
                            ?>
                    </datalist>
                </td>
            </tr>
            <tr>
            </tr>
        </table>
        <div class="table-btn">
            <a href="index.php?act=sp"><input type="button" value="Danh Mục"></a>
            <input type="reset" value="Nhập Lại">
            <input type="button" value="Thêm Mới">
        </div>
    </form>
    </div>
</body>

</html>