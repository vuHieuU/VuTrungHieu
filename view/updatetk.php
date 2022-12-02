<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>
    <?php
        foreach($loadtk as $tk);
        extract($tk);
    ?>
    <form class="update_users" action="index.php?act=update" method="POST" enctype="multipart/form-data">
        <h3><i class="fa-solid fa-fade fa-check-to-slot"></i> Cập Nhật Tài Khoản</h3>
        <div class="update_users_box">
            <div class="update_users_box-left-img">
                <?php
                    if($image == ""){
                        ?><img src="../Images/avatar/Avatar-Facebook-trắng.jpg" width="100%" height="" alt=""><?php
                    }
                    else{
                        ?><img src="../Images/avatar/<?php echo $image ?>" width="100%" height="" alt=""><?php
                    }
                ?>
                
            </div>
            <div class="update_users_box-left">
                <p><i class="fa-solid fa-file-signature"></i> Tên Tài Khoản</p>
                <input type="text" name="name" class="input-user" value="<?=$name?>">
                <p><i class="fa-solid fa-image"></i> Ảnh</p>
                <input type="file" name="image" id="" class="input-user"> <br> 

            </div>
            <div class="update_users_box-left">
                <p><i class="fa-solid fa-lock"></i> Mật Khẩu</p>
                <input type="password" name="password" value="<?=$password?>" class="input-user">
                <p><i class="fa-solid fa-envelope"></i> Email</p>
                <input type="text" name="email" value="<?=$email?>" class="input-user">
                <p><i class="fa-solid fa-phone"></i> Số điện thoại</p>
                <input type="text" name="tel" value="<?=$tel?>" class="input-user">
                <div class="update_users_btn">
                    <input type="hidden" name="id" value="<?=$id?>">
                    <input type="submit" name="update" value="Cập Nhật">
                </div>
            </div>
            
        </div>
    </form>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .update_users {
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            padding: 10px 20px 0px 20px;
            width: 80vw;
            margin: 150px auto;
            display: grid;
            background-image: linear-gradient(to top,#ffffff, #d4ded7);
            opacity: .96;
            border-radius: 8px;
        }

        .update_users h3 {
            box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
            background-color: var(--main-color);
            border-radius: 12px 0px 12px 0px;
            padding: 10px;
            color: #fff;
            font-weight: bold;
        }

        .update_users_box{
            margin: 4px 0px;
            display: flex;
            width: 100%;
            /* background-color: blue; */
        }

        .update_users_box-left i{
            /* color: var(--main-color); */
        }

        .update_users_box-left-img{
            width: 50%;
            max-height: 200px;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            margin: 4px;
        }

        .update_users_box-left .input-user{
            width: 90%;
            border: none;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            outline: none;
            border-radius: 4px;
            border: .1px solid;
            padding: 8px;
            margin: 4px 0px;
            /* text-align: center; */
        }

        .update_users_box-left{
            width: 100%;
            text-align: center;
        }

        .update_users p {
            text-align: left;
            margin-left: 10px;
            padding: 4px;
            font-weight: bold;
        }

        .update_users input[type=submit],
        .update_users input[type=reset] {
            padding: 8px !important;
            width: 100px;
            font-weight: bold;
            background-color: var(--main-color);
            border: none;
            margin: 2px 10px;
            border-radius: 4px;
            color: #fff;
        }

        .update_users .update_users_btn {
            /* background-color: #000; */
            /* height: 30px; */
            padding: 6px;
            text-align: center;
            width: 90%;
            margin: 16px auto;
            border-radius: 8px;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        }
    </style>
</body>

</html>