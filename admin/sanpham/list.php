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
            
        <div class="text1">
           <h1>Danh Sách Sản Phẩm</h1>
        </div>
              
                    <form action="index.php?act=addsp" method="POST">


                            <table border="1">
                                    
                                    
                                
                                    <tr>
                                        <th></th>
                                        <th>Mã Loại</th>
                                        <th>Tên Sản Phẩm</th>
                                        <th>Ảnh Sản Phẩm</th>
                                        <th>Giá</th>
                                        <th>Cân nặng</th>
                                        <th>Số lượng</th>
                                        <th>Mô Tả</th>
                                        <th>Loại</th>
                                        <th><i class="fa-solid fa-gear"></i></th>
                                    </tr>
                                
                                    <?php 
                                        foreach($listsp as $sp){
                                            extract($sp);
                                            $suasp="index.php?act=suasp&id=".$id;
                                            $xoasp="index.php?act=xoasp&id=".$id;
                                            $hinhpath="../public/img".$image;
                                            if(is_file($hinhpath)){
                                                $image="<img src='".$hinhpath."' height='80'>";
                                            }else{
                                                $image="No photo";
                                            }
                                            echo '
                                            
                                            <tr>
                                            <td><input type="checkbox" name="" id=""></td>
                                            <td>'.$id.'</td>
                                            <td>'.$name.'</td>
                                            <td>'.$image.'</td>
                                            <td>'.$price.'</td>
                                            <td>'.$weight.'</td>
                                            <td>'.$amount.'</td>
                                            <td>'.$content.'</td>
                                            <td>'.$cate_id.'</td>
                                            <td class="edit">
                                                <a href="'.$suasp.'"><i class="fa-regular fa-pen-to-square sua"></i></a>
                                                <a href="'.$xoasp.'"><i class="fa-solid fa-trash xoa"></i></a>
                                            </td>
                                    </tr>   
                                            
                                            ';
                                        }
                                    
                                    ?>
                            </table>
                
                <div class="tbn">
                        <input class="click" type="submit" value="Chọn Tất Cả">
                        <input class="click" type="submit" value="Bỏ Chọn Tất Cả">
                        <input class="click" type="submit" value="Xóa Các Mục Đã Chọn">
                        <input class="click" name="addsp" type="submit" value="Thêm Sản Phẩm Mới">
                </div>
                </form>
        </div>
    </div>
</body>
</html>