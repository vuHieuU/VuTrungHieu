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
    <h3 style="margin-top: 10px;">Thêm Bài Viết</h3>
    <form action="index.php?act=addblog" method="POST" class="formadd" enctype="multipart/form-data" onsubmit="return validate();">
        <table class="add">
            <tr>
                <td>Mã Sản Phẩm</td>
                <td>
                    <input type="text" disabled />
                </td>
            </tr>
            <tr>
                <td>Tiêu Đề</td>
                <td>
                    <input type="text" value="" name="title" id="name" />
                    <span class="loi" id="name_error"></span><br>
                </td>
            </tr>
            <tr>
                <td>Hình</td>
                <td>
                    <input type="file" name="img"  id="avatar" />
                    <span class="loi" id="avatar_error"></span><br>
                </td>
            </tr>
            <tr>
                <td>Nội Dung</td>
                <td>
                    <input type="text" value="" name="content" id="name" />
                    <span class="loi" id="content"></span><br>
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