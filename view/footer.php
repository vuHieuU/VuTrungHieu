<!-- Footer -->

</div>
  <div class="footer">
    <div class="footer-box contact">
      <img src="../Images/logo/logo2.jpg" alt=""><br>
      <i class="fa-brands fa-facebook"></i>
      <i class="fa-brands fa-instagram"></i>
      <i class="fa-solid fa-envelope"></i>
      <i class="fa-brands fa-google"></i>
    </div>
    <div class="footer-box address">
    <h3 style="color: #fff;">CHÍNH SÁCH</h3>
        <ul>
          <li><a href="#">Hướng dẫn mua hàng</a></li>
          <li><a href="#">Hướng dẫn thanh toán</a></li>
          <li><a href="#">Hướng dẫn giao nhận</a></li>
          <li><a href="#">Điều khoản dịch vụ</a></li>
          <li><a href="#">Chính sách nhận và hoàn trả hàng hóa</a></li>
          <li><a href="#">Giới thiệu về Trang trại G27</a></li>
        </ul>
    </div>
    <div class="footer-box address">
    <h3 style="color: #fff;">HỖ TRỢ KHÁCH</h3> 
      <ul>
        <li><a href="#">Hợp Tác</a></li>
        <li><a href="#">Đăng Kí Thành Viên</a></li>
        <li><a href="#">Menu</a></li>
        <li><a href="#">Thanh Toán</a></li>
      </ul>
    </div>
    <div class="footer-box address">
        <p><i class="fa-solid fa-envelope-circle-check"></i> Đăng kí thành viên để nhận nhiều ưu đãi từ chúng tôi !</p>
      <input type="email" placeholder="Email..">
      <button>SIGN UP</button>
    </div>
  </div>
  
  <script>
    let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
  </script>
  
</body>
</html>