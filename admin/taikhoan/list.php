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

    <h3 style="margin-top: 10px;">Danh Sách Thành Viên</h3>
    <!-- <form action="index.php?act=listStk" class="searchS" method="POST">
            <select name="cate_id" id="">
                <option value="0" selected>Tất cả</option>
                <?php
                foreach ($listtk as $tk) {
                    extract($tk);
                    echo '<option value="' . $id . '">' . $role . '</option>';
                }
                ?>
            </select>
            <div class="searchS-text">
                <input type="text" name="kyw" id="">
                <input type="submit" name="listok">
            </div>
        </form> -->

        <form action="index.php?act=addtk" method="POST">
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th>Mã user</th>
                        <th>Tên Người Dùng</th>
                        <th>password</th>
                        <th>Email</th>
                        <th>Địa Chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Role</th>
                        <th><i class="fa-solid fa-gear"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($listtk as $tk) {
                        extract($tk);
                        $suatk = "index.php?act=suatk&id=" . $id;
                        $xoatk = "index.php?act=xoatk&id=" . $id;
?>
                                            <tr>
                                            <td><input type="checkbox" name="" id=""></td>
                                            <td><?php echo $id?></td>
                                            <td><?php echo $name?></td>
                                            <td><?php echo $password?></td>
                                            <td><?php echo $email?></td>
                                            <td><?php echo $address?></td>
                                            <td><?php echo $tel?></td>
                                            <td><?php
                                                if($role == 0){
                                                    echo("Người dùng");
                                                }else if($role==1){
                            echo ("Admin");
                                                }
                                            ?></td>
                                            <td style="text-align: center;">
                                                <a style="text-decoration: none;" href="<?php echo $suatk?>">
                                                    <input type="button" class="edit" value="Sửa">
                                                </a>
                                                <a style="text-decoration: none;" href="<?php echo $xoatk?>">
                                                    <input onclick="Delete()" type="button" class="delete" value="Xóa">
                                                </a>
                                            </td>
                                    </tr>  
                                     <?php   ;
                    }
                    ?>
                </tbody>
            </table>
            <div class="table-btn">
                <input type="button" value="Chọn Tất Cả">
                <input type="button" value="Bỏ Chọn Tất Cả">
                <input type="button" value="Xóa Các Mục Đã Chọn">
                <a href="index.php?act=addtk"><input type="button" value="Nhập Thêm"></a>
            </div>
        </form>
    </div>
    </div>
    <script>
        function Delete(){
                var remove = confirm("Bạn có muốn xóa không?");
                if (remove)
                    return true;
                else
                    return false;
                }
    </script>
</body>

</html>