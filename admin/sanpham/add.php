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
            

                    <form action="index.php?act=addsp" method="POST" class="formadd"  enctype="multipart/form-data">
                        <div class="textadd">
                            <h1>Thêm Mới SẢN PHẨM</h1>
                        </div>
                      <div class="iteminputadd">
                      <label for="">Mã sản phẩm:</label> <br>
                        <select name="id_dm" id="">
                        <?php
                            foreach($listdanhmuc as $danhmuc){
                                extract($danhmuc);
                                echo '<option value="'.$id.'">'.$name.'</option>';
                            }
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
                            <label for="">Số lượng:</label> <br>
                            <input type="text" name="soluong">
                        </div>
                        <div class="iteminputadd">
                            <label for="">Cân nặng:</label> <br>
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
        </div>
    </div>
</body>
</html>