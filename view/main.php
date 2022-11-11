
<div class="container">
<!-- Slide -->

<script>
  var myIndex = 0;
  carousel();
  
  function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 3000); // Change image every 2 seconds
  }
  </script>
    <div class="slide">
      <img class="mySlides" src="../Images/slideshow/slideshow.jpg" style="width:100%">
      <img class="mySlides" src="../Images/slideshow/slideshow2.jpg" style="width:100%">
      <img class="mySlides" src="../Images/slideshow/slideshow3.jpg" style="width:100%">
    </div>
<!-- Product -->
<div class="product">
            <!-- product category -->
            <div class="product-category">
              <h3>Danh Mục Sản Phẩm</h3>
              <ul>
                <?php
                  // foreach($listdm as $dm){
                  //   extract($dm);
                  //   $loadsp = "index.php?act=main&cate_id=".$id_cate;
                  //   echo '
                  //   <li><i class="fa-solid fa-carrot"></i><a href="'.$loadsp.'">'.$name_cate.'</a><i class="fa-solid fa-circle-chevron-right"></i></li>
                   
                  //   ';
                  // }
                  ?>
                  <li><i class="fa-solid fa-carrot"></i><a href="">'.$name_cate.'</a><i class="fa-solid fa-circle-chevron-right"></i></li>
                  <li><i class="fa-solid fa-carrot"></i><a href="">'.$name_cate.'</a><i class="fa-solid fa-circle-chevron-right"></i></li>
                  <li><i class="fa-solid fa-carrot"></i><a href="">'.$name_cate.'</a><i class="fa-solid fa-circle-chevron-right"></i></li>
                  <li><i class="fa-solid fa-carrot"></i><a href="">'.$name_cate.'</a><i class="fa-solid fa-circle-chevron-right"></i></li>
                  <li><i class="fa-solid fa-carrot"></i><a href="">'.$name_cate.'</a><i class="fa-solid fa-circle-chevron-right"></i></li>

                   
                <form action="index.php?act=sanpham">
                <div class="search">
                  <input type="text" name="search">
                  <button name="timkiem"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
                </form>
              </ul>
              <div class="slide-category">
                <img src="../Main/Images/img/img_raucuqua/banner/banner1.jpg" alt="">
              </div>
          </div>
          <!-- product box -->
            <div class="product-main">
                  <?php 
                    // foreach ($spnew as $sp) {
                    //   extract($sp); // để lấy tên cột và tên biến để show ra màn hình
                    //   $hinh = $img_path.$image;
                    //   echo '<div class="product-box">
                     
                    //   <img src="'.$hinh.'" alt="">
                    //   <button>Rau Xanh</button>
                    //   <p class="name">'.$name.'</p>
                    //   <p class="price">'.$price.'<del>45.000đ</del></p>
                    //   <div class="product-box-btn">
                    //     <button class="add"><i class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                    //   </div>';
                    // }
                ?>
                <div class="product-box">
                    <img src="../Images/sanpham/bapcaitim.jpg" alt="">
                    <button>Rau Xanh</button>
                    <p class="name">Bắp cải tim Organic 500g</p>
                    <p class="price">30.000đ <del>45.000đ</del></p>
                    <div class="product-box-btn">
                      <button class="add"><i class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                    </div>
                </div>
                <div class="product-box">
                    <img src="../Images/sanpham/bapcaitim.jpg" alt="">
                    <button>Rau Xanh</button>
                    <p class="name">Bắp cải tim Organic 500g</p>
                    <p class="price">30.000đ <del>45.000đ</del></p>
                    <div class="product-box-btn">
                      <button class="add"><i class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                    </div>
                </div>
                <div class="product-box">
                    <img src="../Images/sanpham/bapcaitim.jpg" alt="">
                    <button>Rau Xanh</button>
                    <p class="name">Bắp cải tim Organic 500g</p>
                    <p class="price">30.000đ <del>45.000đ</del></p>
                    <div class="product-box-btn">
                      <button class="add"><i class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                    </div>
                </div>
                <div class="product-box">
                    <img src="../Images/sanpham/bapcaitim.jpg" alt="">
                    <button>Rau Xanh</button>
                    <p class="name">Bắp cải tim Organic 500g</p>
                    <p class="price">30.000đ <del>45.000đ</del></p>
                    <div class="product-box-btn">
                      <button class="add"><i class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                    </div>
                </div>
                <div class="product-box">
                    <img src="../Images/sanpham/bapcaitim.jpg" alt="">
                    <button>Rau Xanh</button>
                    <p class="name">Bắp cải tim Organic 500g</p>
                    <p class="price">30.000đ <del>45.000đ</del></p>
                    <div class="product-box-btn">
                      <button class="add"><i class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                    </div>
                </div>
                <div class="product-box">
                    <img src="../Images/sanpham/bapcaitim.jpg" alt="">
                    <button>Rau Xanh</button>
                    <p class="name">Bắp cải tim Organic 500g</p>
                    <p class="price">30.000đ <del>45.000đ</del></p>
                    <div class="product-box-btn">
                      <button class="add"><i class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                    </div>
                </div>
                <div class="product-box">
                    <img src="../Images/sanpham/bapcaitim.jpg" alt="">
                    <button>Rau Xanh</button>
                    <p class="name">Bắp cải tim Organic 500g</p>
                    <p class="price">30.000đ <del>45.000đ</del></p>
                    <div class="product-box-btn">
                      <button class="add"><i class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                    </div>
                </div>
                <div class="product-box">
                    <img src="../Images/sanpham/bapcaitim.jpg" alt="">
                    <button>Rau Xanh</button>
                    <p class="name">Bắp cải tim Organic 500g</p>
                    <p class="price">30.000đ <del>45.000đ</del></p>
                    <div class="product-box-btn">
                      <button class="add"><i class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                    </div>
                </div>
                
               <?php
            //    foreach($sphome as $sp){
            //     extract($sp);
            //     $img = $img_path.$image;
            //     echo '
            //     <div class="product-box">
            //     <img src="'.$img.'" alt="">
            //     <button>'.$name_cate.'</button>
            //     <p class="name">'.$name.'</p>
            //     <p class="price">'.$price.'đ <del>'.$del.'đ</del></p>
            //     <div class="product-box-btn">
            //       <button class="add"><i class="fa-solid fa-cart-shopping"></i> Add to cart</button>
            //     </div>
            // </div>
            //     ';
            //    }
               ?>
            </div>
        </div>
<!-- intro -->
<div class="intro">
  <div class="intro-img">
    <img src="../Images/intro/close-up-box-with-vegetables-hands-mature-man.jpg" alt="">
  </div>
  <div class="intro-content">
    <h3>Thực Phẩm Lành, Lối Sống Xanh</h3>
    <ul>
      <li><b>Nông sản hữu cơ</b> được thu hoạch từ các nông trại sạch địa phương & thế giới</li>
      <li><b>Đa dạng lựa chọn</b> các sản phẩm lành mạnh, thuần tự nhiên – luôn có sẵn</li>
      <li><b>Giao hàng tận nhà</b> nhanh chóng & miễn phí trên toàn quốc – điều kiện áp dụng *</li>
    </ul>
    <button>Khám Phá Ngay</button>
  </div>
</div>
<!-- Blog -->
<!-- <h2 class="title">ABC</h2> -->
<div class="blog">
  <div class="blog-box">
    <img src="../Images/blog/blog01.jpg" alt="">
    <div class="blog-box-btn">
      <div class="blog-box-btns">
        <i>by</i>
        <p class="name">Admin</p>
      </div>
      <div class="blog-box-btns">
        <i>on</i>
        <p class="name">03/11/2022</p>
      </div>
    </div>
    <h3>Tiêu Đề</h3>
    <p>Nội dung box</p>
  </div>
  <div class="blog-box">
    <img src="../Images/blog/blog01.jpg" alt="">
    <div class="blog-box-btn">
      <div class="blog-box-btns">
        <i>by</i>
        <p class="name">Admin</p>
      </div>
      <div class="blog-box-btns">
        <i>on</i>
        <p class="name">03/11/2022</p>
      </div>
    </div>
    <h3>Tiêu Đề</h3>
    <p>Nội dung box</p>
  </div>
  <div class="blog-box">
    <img src="../Images/blog/blog01.jpg" alt="">
    <div class="blog-box-btn">
      <div class="blog-box-btns">
        <i>by</i>
        <p class="name">Admin</p>
      </div>
      <div class="blog-box-btns">
        <i>on</i>
        <p class="name">03/11/2022</p>
      </div>
    </div>
    <h3>Tiêu Đề</h3>
    <p>Nội dung box</p>
  </div>
</div>
<!-- Sale -->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop()) {
                $('#backTop').fadeIn();
            } else {
                $('#backTop').fadeOut();

            }
        });
        $("#backTop").click(function() {
            $('html, body').animate({
                scrollTop: 0
            }, 1000);
        })
    });
    </script>
<div class="class-helo">
  <div id="backTop">
      <i class="fas fa-chevron-up animate__animated animate__fadeInUp  animate__infinite"></i>
  </div>
</div>