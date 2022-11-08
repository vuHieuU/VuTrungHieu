<?php
    if(is_array($sp)){
        extract($sp);
    }
    $hinhpath="../public/img".$image;
    if(is_file($hinhpath)){
        $img="<img src='".$hinhpath."' height='80'>";
    }else{
        $img="No photo";
    }
   
?>
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
            

                    <form action="index.php?act=updatesp" method="POST" class="formadd" enctype="multipart/form-data">
                        <div class="textadd">
                            <h1>Thêm Mới SẢN PHẨM</h1>
                        </div>
                    
                        <div class="iteminputadd hidden">
                            <label for="">Mã sản phẩm:</label> <br>
                            <input type="text" disabled>
                        </div>
                        <div class="iteminputadd">
                            <label for="">Tên sản phẩm:</label> <br>
                            <input type="text" name="name" value="<?php echo $name?>">
                        </div>
                        <div class="iteminputadd">
                            <label for="">Ảnh:</label> <br>
                            <input type="file" name="image"><?=$img?>
                        </div>
                        <div class="iteminputadd">
                            <label for="">Giá:</label> <br>
                            <input type="text" name="price" value="<?php echo $price?>">
                        </div>
                        <div class="iteminputadd">
                            <label for="">Số lượng:</label> <br>
                            <input type="text" name="soluong" value="<?php echo $amount?>">
                        </div>
                        <div class="iteminputadd">
                            <label for="">Cân nặng:</label> <br>
                            <input type="text" name="weight" value="<?php echo $weight?>">
                        </div>
                        <div class="iteminputadd">
                            <label for="">Mô tả:</label> <br>
                            <textarea name="mota" id="" cols="30" rows="10"><?php echo $content?></textarea>
                        </div>
                        <select name="id_dm" id="">
                        <?php
                            foreach($listdanhmuc as $danhmuc){
                                extract($danhmuc);
                                echo '<option value="'.$id.'">'.$name.'</option>';
                                
                            }
                        ?>
                        </select>
                        <div class="tbn">
                            <input type="hidden" name="id" value="<?php extract($sp); echo $id?>">
                                <input class="click" type="submit" name="update" value="Sửa Sản Phẩm">
                        </div>
                </form>
        </div>
    </div>
</body>
</html>