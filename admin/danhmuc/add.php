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
        <h3 style="margin-top: 10px;">Thêm Danh Mục</h3>
    <form method="POST" class="formadd" action="index.php?act=adddm" onsubmit="return validate();">
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
                    <input type="text" value="" name="name_cate" id="namedm">
                    <span class="loi" id="namedm_error"></span>
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
    <script>
        function getvalue(id) {
            return document.getElementById(id).value.trim();
        }

        //Hiển thị lỗi
        function showError (key ,mess) {
            document.getElementById(key + '_error').innerHTML = mess;
        }

        function validate() {
            var namedm = getvalue('namedm');
            if (namedm == "") {
                showError ('namedm' , 'Bạn cần nhập tên danh mục');
                return false;
            }else {
                showError ('namedm' ,'');
            }
        }
    </script>
</body>
</html>