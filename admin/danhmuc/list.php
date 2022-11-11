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
           <h1>Danh Sách Danh Mục</h1>
        </div>
              
                    <form action="index.php?act=adddm" method="POST">


                            <table border="1">
                                    
                                    
                                
                                    <tr>
                                        <th></th>
                                        <th>Mã Loại</th>
                                        <th>Tên Danh Mục</th>
                                        <th><i class="fa-solid fa-gear"></i></th>
                                    </tr>

                                    <?php
                                        foreach($listdm as $dm){
                                            extract($dm);
                                            $suadm="index.php?act=suadm&id=".$id;
                                            $xoadm="index.php?act=xoadm&id=".$id;
                                            echo '
                                                <tr>
                                                        <td><input type="checkbox" name="" id=""></td>
                                                        <td>'.$id.'</td>
                                                        <td>'.$name.'</td>
                                                        <td class="edit">
                                                            <a href="'.$suadm.'"><i class="fa-regular fa-pen-to-square sua"></i></a>
                                                            <a href="'.$xoadm.'"><i class="fa-solid fa-trash xoa"></i></a>
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
                        <input class="click" type="submit" name="adddm" value="Thêm Danh Mục Mới">
                 </div>
                 </form>
         </div>
     </div>
</body>
</html>