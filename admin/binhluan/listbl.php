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

<h3 style="margin-top: 10px;">Danh Sách Bình Luận</h3>

        <table>
            <thead>
                <tr>
                    <th></th>
                    <th>Mã Bình Luận</th>
                    <th>Nội Dung</th>
                    <th>Mã Sản Phẩm</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php
                            $product_id=$_REQUEST['id'];
                            $listbl = load_bl($product_id);
                    ?>
                <?php
                foreach ($listbl as $bl) {
                    extract($bl);
                    $link = "index.php?act=xoabl&id=" .$id;
                    echo '
                            <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$user_id.'</td>
                                    <td>' . $content . '</td>
                                    <td>' . $product_id . '</td>
                                    <td style="text-align: center;">
                                        <a style="text-decoration: none;" href="' . $link . '">
                                            <input type="button" class="edit" value="Xóa">
                                        </a>
                                    </td>
                            </tr>   
                        ';
                }
                ?>
            </tbody>
        </table>
        </form>
        <input type="hidden" name="id" value="<?=$id?>">
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