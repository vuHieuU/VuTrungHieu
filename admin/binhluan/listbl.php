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
                    <th>Người Bình Luận</th>
                    <th>Nội Dung</th>
                    <th>Mã Sản Phẩm</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php
                            $product_id=$_REQUEST['id'];
                            $listbl = load_bl($product_id);
                            $listbl_all=loadall_bl();
                          
                    ?>
                <?php
                foreach ($listbl_all as $bl) {
                    extract($bl);
                 
                    $link = "index.php?act=xoabl&id=" .$id;
                }
                foreach( $listbl as $bl1){
                    extract($bl1);
                    ?>
                            <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td><?php echo $name ?></td>
                                    <td><?php echo $content ?></td>
                                    <td><?php echo $product_id ?></td>
                                    <td style="text-align: center;">
                                        <a style="text-decoration: none;" href="<?php echo $link ?>">
                                            <input onclick="return confirm('Bạn có chắc chắn muốn xóa?')" type="button" class="edit" value="Xóa">
                                        </a>
                                    </td>
                            </tr>   
                    <?php
                }
                ?>
            </tbody>
        </table>
        </form>
  
    </div>
    </div>
</body>

</html>