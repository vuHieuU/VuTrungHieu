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
            

                    <form action="index.php?act=adddm" method="POST" class="formadd">
                        <div class="textadd">
                            <h1>Thêm Mới Danh Mục</h1>
                        </div>
                        <div class="iteminputadd">
                            <label for="">Mã danh mục:</label> <br>
                            <input type="text" disabled>
                        </div>
                        <div class="iteminputadd">
                            <label for="">Danh mục:</label> <br>
                            <input type="text" name="name">
                        </div>
                        <div class="tbn">
                                <input class="click" type="submit" name="them" value="Thêm Danh Mục Mới">
                        </div>
                </form>
        </div>
    </div>
</body>
</html>