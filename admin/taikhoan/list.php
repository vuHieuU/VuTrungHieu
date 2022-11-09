<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
         <div class="borderlist">
            
        <div class="text1">
           <h1>Danh Sách Danh Mục</h1>
        </div>
              
                    <form action="index.php?act=addtk" method="POST">


                            <table border="1">
                                    
                                    
                                
                                    <tr>
                                        <th></th>
                                        <th>Mã user</th>
                                        <th>Tên Người Dùng</th>
                                        <th>password</th>
                                        <th>Email</th>
                                        <th>status</th>
                                        <th>Role</th>
                                        <th><i class="fa-solid fa-gear"></i></th>
                                    </tr>
                                    <?php
                                        foreach($listtk as $tk){
                                            extract($tk);
                                            $suatk="index.php?act=suatk&id=".$id;
                                            $xoatk="index.php?act=xoatk&id=".$id;
                                            echo '
                                            <tr>
                                            <td><input type="checkbox" name="" id=""></td>
                                            <td>'.$id.'</td>
                                            <td>'.$name.'</td>
                                            <td>'.$password.'</td>
                                            <td>'.$email.'</td>
                                            <td>'.$status.'</td>
                                            <td>'.$role.'</td>
                                            <td class="edit">
                                                <a href="'.$suatk.'"><i class="fa-regular fa-pen-to-square sua"></i></a>
                                                <a href="'.$xoatk.'"><i class="fa-solid fa-trash xoa"></i></a>
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
                        <input class="click" name="addtk" type="submit" value="Thêm người Mới">
                 </div>
                 </form>
         </div>
     </div>
</body>
</html>