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
        <style>
            .loi {
                color: red;
            }
        </style>
    </head>

    <body>
        <!-- Thêm Tài Khoản -->
        <h3 style="margin-top: 10px;">Tạo Tài Khoản</h3>
        <form method="POST" class="formadd" action="index.php?act=addtk" onsubmit="return validate();">
            <table class="add">
                <tr>
                    <td>UserName</td>
                    <td>
                        <input type="text" name="name" id="name"/>
                        <span class="loi" id="name_error"></span>
                    </td>
                </tr>
                <tr>
                    <td>Passwrord</td>
                    <td>
                        <input type="pass" name="password" id="password" />
                        <span class="loi" id="password_error"></span>
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>
                        <input type="email" name="email" id="email"/>
                        <span class="loi" id="email_error"></span>
                    </td>
                </tr>
                <tr>
                    <td>Địa Chỉ</td>
                    <td>
                        <input type="text" name="status" id="address">
                        <span class="loi" id="address_error"></span>
                    </td>
                </tr>
                <tr>
                    <td>Vai Trò</td>
                    <td>
                        <input type="number" min="0" max="1" name="role" id="role">
                        <span class="loi" id="role_error"></span>
                    </td>
                </tr>

            </table>
            <div class="table-btn">
                <a href="index.php?act=tk"><input type="button" value="Danh Sách Tài Khoản"></a>
                <input type="reset" value="Nhập Lại">
                <input type="submit" name="them" value="Thêm Mới">
            </div>
        </form>
        </div>
    </body>

    </html>
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

            var password = getvalue('password');
            if (password == "") {
                showError ('password' , 'Bạn cần nhập pass');
                return false;
            }else {
                showError ('password' ,'');
            }

            var email = getvalue('email');
            if (email == "") {
                showError ('email' , 'Bạn cần nhập email của bạn');
                return false;
            }else {
                showError ('email' ,'');
            }

            var address = getvalue('address');
            if (address == "") {
                showError ('address' , 'Bạn cần nhập địa chỉ');
                return false;
            }else {
                showError ('address' ,'');
            }

            
        }
    </script>
</body>

</html> 