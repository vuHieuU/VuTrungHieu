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

<h3 style="margin-top: 10px;">Danh Sách Danh Mục</h3>
        <table>
            <thead>
                <tr>
                    <th></th>
                    <th>Mã Loại</th>
                    <th>Tên Danh Mục</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($listdm as $dm) {
                    extract($dm);
                    $suadm = "index.php?act=suadm&id=" . $id_cate;
                    $xoadm = "index.php?act=xoadm&id=" . $id_cate;
                    echo '
                            <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>' . $id_cate .  '</td>
                                    <td>' . $name_cate . '</td>
                                    <td style="text-align: center;">
                                        <a style="text-decoration: none;" href="' . $suadm . '">
                                            <input type="button" class="edit" value="Sửa">
                                        </a>
                                        <a style="text-decoration: none;" href="' . $xoadm . '" >
                                            <input onclick="Delete()" type="button" class="delete" value="Xóa">
                                            
                                        </a>

                                    </td>
                            </tr>   
                        ';
                }
                ?>
            </tbody>
        </table>
        <div class="table-btn">
            <input type="button" value="Chọn Tất Cả">
            <input type="button" value="Bỏ Chọn Tất Cả">
            <input type="button" value="Xóa Các Mục Đã Chọn">
            <a href="index.php?act=adddm"><input type="button" value="Nhập Thêm"></a>
        </div>
        </form>
    </div>
    </div>
    <script>
        function Delete(){
                var remove = confirm("Bạn có muốn xóa không?");
                if(remove){ 
                    return true;
                } else{
                    return false;
                  
                }   
                }
    </script>
</body>

</html>