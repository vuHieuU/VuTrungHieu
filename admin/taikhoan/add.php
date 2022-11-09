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
        <div class="borderlist">
            

                    <form action="index.php?act=addtk" method="POST" class="formadd"  enctype="multipart/form-data">
                        <div class="textadd">
                            <h1>Thêm Mới SẢN PHẨM</h1>
                        </div>
                        <div class="iteminputadd">
                            <label for="">User:</label> <br>
                            <input type="text" name="name">
                        </div>
                        <div class="iteminputadd">
                            <label for="">Password:</label> <br>
                            <input type="text" name="password">
                        </div>
                        <div class="iteminputadd">
                            <label for="">Email:</label> <br>
                            <input type="email" name="email">
                        </div>
                        <div class="iteminputadd">
                            <label for="">status</label> <br>
                            <input type="text" name="status">
                        </div>
                        <!-- <div class="iteminputadd">
                            <label for="">Tel</label> <br>
                            <input type="text" name="tel">
                        </div> -->
                        <div class="iteminputadd">
                            <label for="">ROLE</label> <br>
                            <input type="number" min="0" max="1" name="role">
                        </div>
                        <div class="tbn">
                                <input class="click" type="submit" name="them" value="Thêm Tài Khoản Mới">
                        </div>
                </form>
        </div>
    </div>
</body>
</html>