<?php
    include "../model/pdo.php";
    include "../model/binhluan.php";
    session_start();
    $product_id = $_REQUEST['product_id'];
    $dsbl = load_bl($product_id);
    $soluongbl = count($dsbl);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Main/css/details.css">
</head>
<body>
<h2>Đánh giá</h2>
                    <div class="formbold-mb-3">


                        <div class="form-comment">
                            <div class="soluong-comment"><?=$soluongbl?> Comment</div>

                            <?php
                             if(isset($_SESSION['name'])){
                              extract($_SESSION['name']);
                            ?>
                            <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
                            <div class="form-addcmt">
                                <div class="anh"><img src="../Images/avatar/Avatar-Facebook-trắng.jpg" alt=""></div>
                                <div class="chucnang-cmt">
                                    <input type="hidden" name="product_id" value="<?=$product_id?>">
                                    <input style="outline: none;" class="add-comment" type="text" name="content" id="" placeholder="Nhập bình luận...">
                                    <input type="submit" value="Comment" name="gui">
                                </div>
                            </div>
                            </form>
                            <?php
                            }else{
                             ?>
                                   
                            <div class="form-addcmt">
                                <div class="anh"><img src="../Images/avatar/Avatar-Facebook-trắng.jpg" alt=""></div>
                                <div class="chucnang-cmt">
                                    <input type="hidden" name="product_id" value="<?=$product_id?>">
                                    <input style="outline: none;" class="add-comment" type="text" name="content" placeholder="Nhập bình luận...">
                                    <input type="submit" onclick="show()" value="Comment" name="gui">
                                </div>
                            </div>
                        

                             <?php
                            }
                            ?>
                            <?php
                                    if(isset($_POST['gui'])&&($_POST['gui'])){
                                        $content=$_POST['content'];
                                        $product_id=$_POST['product_id'];
                                        $user_id=$_SESSION['name']['id'];
                                        insert_binhluan($content,$product_id,$user_id);
                                        header("location: ".$_SERVER['HTTP_REFERER']);
                                      }   
                            ?>

                         <?php
                         foreach($dsbl as $bl){
                            extract($bl);
                       echo '
                      
                            <div class="ome-comment">
                                <div class="nd-comment">
                                    <div class="anh"><img src="../Images/avatar/Avatar-Facebook-trắng.jpg" alt=""></div>
                                    <div class="name-comment">
                                        <p>'.$name.'</p>
                                    </div>
                                    <p class="nd">'.$content.'</p>
                                </div>

                                <div class="like-comment">
                                    <i class="fa-solid fa-thumbs-up"></i>
                                    <i class="fa-solid fa-thumbs-down mgl"></i>
                                    <p class="traloi">Trả lời</p>
                                </div>
                            </div>';
                         }
                            ?>
                        </div>
</body>
</html>
             