<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Main/css/product.css">
    <title>Document</title>
    <style>
        #banner {
            background: url(../Main/Images/img/img_raucuqua/banner/banner1.jpg);
            width: 80%;
            min-height: 430px;
            background-size: cover;
            margin: 0 auto;
            margin-top: 130px;
        }

        :root {
            --primary-color: #0f9d58;
        }

        .wrapper {
            border-radius: 20px;
            padding: 20px;
            background-color: #fff;
            margin: 100px auto;
            margin-bottom: auto;
            text-align: center;
        }

        .food-menu {
            margin-bottom: 40px;
        }

        .food-menu button {
            color: var(--primary-color);
            border: 1px solid var(--primary-color);
            padding: 10px 40px;
            border-radius: 50px;
            font-weight: 600;
            transition: 0.25s;
            cursor: pointer;
            background-color: #fff;
            margin: 5px;
        }

        .food-menu button:hover,
        .food-menu button.active {
            color: #fff;
            background-color: var(--primary-color);
        }

        .food-list {
            display: flex;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
        }

        .food-item {
            width: 19%;
            height: 450px;
            margin: 10px;
            border-radius: 20px;
            overflow: hidden;
            transition: .2s;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        }

        .food-item img {
            width: 100%;
        }

        .food-item:hover {
            transform: scale(1.05, 1.05);
            cursor: pointer;
        }

        .hide {
            display: none;
        }
    </style>
</head>

<body>
    <?php include "header.php" ?>
    <div>
        <div id="banner">
            <div class="text_banner">
                <h1>Tìm kiếm sản phẩm</h1>
                <form action="" method="POST">
                    <input type="text" name="search" placeholder="Tìm kiếm sản phẩm...">
                    <button type="submit" name="btn_search" style="border: none;"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
        </div>
    </div>
    <!--content-->
    <div class="wrapper">
        <div class="food-menu">
            <button class="active" type-food="all">All food</button>
            <button type-food="salad">Salad</button>
            <button type-food="meat">Meat</button>
            <button type-food="drinks">Vegetable</button>
            <button type-food="dessert">fruit</button>
        </div>
        <div class="food-list">
            <div class=" food-item" type-food="meat">
                <img src="../Main/Images/img/img_raucuqua/sanpham/sanphamok/hoachuoi.png" alt="">
                <p class="name">Bắp cải tim Organic 500g</p>
                <p class="price">30.000đ <del>45.000đ</del></p>
                <div class="product-box-btn">
                    <button class="add"><i class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                </div>
            </div>
            <div class=" food-item" type-food="dessert">
                <img src="../Main/Images/img/img_raucuqua/sanpham/sanphamok/bingoi.png" alt="">
                <p class="name">Bắp cải tim Organic 500g</p>
                <p class="price">30.000đ <del>45.000đ</del></p>
                <div class="product-box-btn">
                    <button class="add"><i class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                </div>
            </div>
            <div class=" food-item" type-food="salad">
                <img src="../Main/Images/img/img_raucuqua/sanpham/sanphamok/catim.png" alt="">
                <p class="name">Bắp cải tim Organic 500g</p>
                <p class="price">30.000đ <del>45.000đ</del></p>
                <div class="product-box-btn">
                    <button class="add"><i class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                </div>
            </div>
            <div class=" food-item" type-food="meat">
                <img src="../Main/Images/img/img_raucuqua/sanpham/sanphamok/daubap.png" alt="">
                <p class="name">Bắp cải tim Organic 500g</p>
                <p class="price">30.000đ <del>45.000đ</del></p>
                <div class="product-box-btn">
                    <button class="add"><i class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                </div>
            </div>
            <div class=" food-item" type-food="salad">
                <img src="../Main/Images/img/img_raucuqua/sanpham/sanphamok/raucantay.png" alt="">
                <p class="name">Bắp cải tim Organic 500g</p>
                <p class="price">30.000đ <del>45.000đ</del></p>
                <div class="product-box-btn">
                    <button class="add"><i class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                </div>
            </div>
            <div class=" food-item" type-food="drinks">
                <img src="../Main/Images/img/img_raucuqua/sanpham/sanphamok/bido.png" alt="">
                <p class="name">Bắp cải tim Organic 500g</p>
                <p class="price">30.000đ <del>45.000đ</del></p>
                <div class="product-box-btn">
                    <button class="add"><i class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                </div>
            </div>
            <div class=" food-item" type-food="dessert">
                <img src="../Main/Images/img/img_raucuqua/sanpham/sanphamok/raumuong.png" alt="">
                <p class="name">Bắp cải tim Organic 500g</p>
                <p class="price">30.000đ <del>45.000đ</del></p>
                <div class="product-box-btn">
                    <button class="add"><i class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                </div>
            </div>
            <div class=" food-item" type-food="drinks">
                <img src="../Main/Images/img/img_raucuqua/sanpham/sanphamok/hoachuoi.png" alt="">
                <p class="name">Bắp cải tim Organic 500g</p>
                <p class="price">30.000đ <del>45.000đ</del></p>
                <div class="product-box-btn">
                    <button class="add"><i class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        const foodBtns = document.querySelectorAll('.food-menu button')
        const foodList = document.querySelectorAll('.food-item')

        foodBtns.forEach((btn) => {
            btn.addEventListener('click', (e) => {
                const type = e.target.getAttribute('type-food')

                // remove and set active fpr button
                document.querySelector('.food-menu button.active')
                    .classList.remove('active')
                e.target.classList.add('active')

                // filter elements
                foodList.forEach((item) => {
                    if (type == 'all' || item.getAttribute('type-food') == type)
                        item.classList.remove('hide')
                    else item.classList.add('hide')
                })
            })
        })
    </script>
    <?php include "footer.php" ?>

</body>

</html>