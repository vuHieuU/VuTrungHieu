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
<h2 style="margin: 8px 0px; padding: 20px;">Đánh giá</h2>
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
                       <div class="comment">
                       <div class="comment-main">
                           <div class="comment-img">
                               <img src="https://picsum.photos/50/50" alt="">
                           </div>
                       </div>
                       <div class="comment-content">
                           <p class="comment-name">'.$name.' <i class="time-comment">20/11</i></p>
                           <p class="nd-comment">'.$content.'</p>
                       </div>
                   </div>
                            ';
                         }
                            ?>
                        </div>
                        <style>
                             .comment{
                                width: 100%;
                                min-height: 80px;
                                display: flex;
                                margin: 10px 0px;
                                border-bottom: 1px solid #F0F0F0;
                             }

                             .comment .comment-main{
                                width: 5%;
                                /* overflow: hidden; */
                                /* border-radius: 50%; */
                                /* text-align: center; */
                                /* display: grid; */
                            }
                            .comment-main .comment-img{
                                border-radius: 50%;
                                overflow: hidden;
                                /* width: 100%; */
                                /* margin: 0 auto; */
                                /* height: 80%; */
                            }
                            .comment-main .comment-img img{
                                /* border-radius: 50%; */
                                width: 100%;
                                height: 100%;
                             }

                             .comment .comment-content{
                                width: 90%;
                                margin-left: 20px;
                             }

                             .comment-content h4{
                                padding: 4px 0px;
                             }

                             .comment-content .time-comment{
                                font-size: 12px;
                                /* float: right; */
                                opacity: .9;
                             }

                             .comment-content p.nd-comment{
                                /* background-color: #000; */
                                min-height: 30px;
                                padding: 4px;
                                text-align: justify;
                             }
                             

                        </style>
</body>
</html>
             