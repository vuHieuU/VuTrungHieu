<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/css/style.css">
    <style>
        .loi {
            color: red;
        }
    </style>
</head>

<body>
    <h3 style="margin-top: 10px;">Thêm Sản Phẩm</h3>
    <form action="index.php?act=addsp" method="POST" class="formadd" enctype="multipart/form-data" onsubmit="return validate();">
        <table class="add">
            <tr>
                <td>Tên Sản Phẩm</td>
                <td>
                    <input type="text" value="" name="name" id="name" />
                    <span class="loi" id="name_error"></span><br>
                </td>
            </tr>
            <tr>
                <td>Hình</td>
                <td>
                    <input type="file" name="image"  id="avatar" />
                    <span class="loi" id="avatar_error"></span><br>
                </td>
            </tr>
            <tr>
                <td>Giá Sản Phẩm</td>
                <td>
                    <input type="text" value="" name="price" id="price" />
                    <span class="loi" id="price_error"></span><br>
                </td>
            </tr>
            <tr>
                <td>Giá Cũ</td>
                <td>
                    <input type="text" value="" name="soluong" id="price_old" />
                    <span class="loi" id="price_old_error"></span><br>
                </td>
            </tr>
            <tr>
                <td>Mô Tả</td>
                <td>
                    <textarea cols="30" rows="10" name="content" id="content"></textarea>
                    <span class="loi" id="content_error"></span><br>
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
    <script>
        function getvalue(id) {
            return document.getElementById(id).value.trim();
        }

        //Hiển thị lỗi
        function showError (key ,mess) {
            document.getElementById(key + '_error').innerHTML = mess;
        }

        function validate() {
            var name = getvalue('name');
            if (name == "") {
                showError ('name' , 'Bạn cần nhập tên');
                return false;
            }else {
                showError ('name' ,'');
            }

            var avatar = getvalue('avatar');
            if (avatar == "") {
                showError ('avatar' , 'Bạn cần phải có ảnh');
                return false;
            }else {
                showError ('avatar' ,'');
            }

            var price = getvalue('price');
            if (price == "") {
                showError ('price' , 'Bạn cần nhập giá ');
                return false;
            }else {
                showError ('price' ,'');
            }

            var price_old = getvalue('price_old');
            if (price_old == "") {
                showError ('price_old' , 'Bạn cần nhập địa chỉ');
                return false;
            }else {
                showError ('price_old' ,'');
            }

            var content = getvalue('content');
            if (content == "") {
                showError ('content' , 'Bạn cần nhập địa chỉ');
                return false;
            }else {
                showError ('content' ,'');
            }

            
        }
    </script>
</body>

</html>