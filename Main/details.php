<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/details.css">
    <link rel="shortcut icon" href="./imgs/logo_admin.jpg">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />

</head>

<body>

    <!--details-->
    <div class="details">
        <div class="container">
            <!--img up-->
            <div class="mySlides">
                <div class="numbertext">1 / 3</div>
                <img src="Images/img/img_raucuqua/sanpham/bapcaitim.jpg">
            </div>

            <div class="mySlides">
                <div class="numbertext">2 / 3</div>
                <img src="Images/img/img_raucuqua/sanpham/bapchuoi.jpg">
            </div>

            <div class="mySlides">
                <div class="numbertext">3 / 3</div>
                <img src="Images/img/img_raucuqua/sanpham/bi-do.jpg">
            </div>
            <!-- onclick-->
            <!-- <div class="onclick">
                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>
            </div> -->
            <!-- img bottom-->
            <div class="row">
                <div class="column">
                    <img class="demo cursor" src="Images/img/img_raucuqua/sanpham/bapcaitim.jpg" onclick="currentSlide(1)" alt="anh1" width="200px">
                </div>
                <div class="column">
                    <img class="demo cursor" src="Images/img/img_raucuqua/sanpham/bapchuoi.jpg" onclick="currentSlide(2)" alt="anh2" width="200px">
                </div>
                <div class="column">
                    <img class="demo cursor" src="Images/img/img_raucuqua/sanpham/bi-do.jpg" onclick="currentSlide(3)" alt="anh3" width="200px">
                </div>
            </div>
        </div>
        <!-- giá sản phẩm -->
        <div class="content_details">
            <h1> Bắp cải tim Organic 500g </h1>
            <!-- price -->
            <p> 30.000₫ </p>
            <div class="number">
                <h3>Số lượng:</h3>
                <!-- nhập số lượng cần mua -->
                <input type="number" name="" id="" min="1" value="1">
                <div class="size_details">
                    <label for="size">Cân nặng:</label>
                    <select name="size" id="size" size="1">
                        <option value="500g">500g</option>
                        <option value="700g">700g</option>
                        <option value="1kg">1kg</option>
                    </select>
                </div>
            </div>
            <button type="button" name="">CHO VÀO GIỎ HÀNG</button>
        </div>
        <!--Nội dung sản phẩm-->
        <div class="content">
            <form class="text_content">
                <h2>Mô tả:</h2>
                <h3> Bắp cải tim Organic </h3>
                <p>
                    <h4>- Chứng nhận/tiêu chuẩn: Canh tác bền vững </h4>
                    <h4>- Xuất xứ : </h4>
                    <h4>- Công dụng:</h4> Kháng viêm, hỗ trợ tiêu hóa. Điều trị loét dạ dày Duy trì sức khỏe xương khớp. Giảm nguy cơ mắc bệnh tim mạch. Hỗ trợ giảm cân. Cải thiện thị lực. Bảo vệ tế bào thần kinh, điều trị bệnh Alzheimer. Làm đẹp da và điều
                    trị các bệnh rối loạn về da. Cách sử dụng Ăn số
                </p>
            </form>
        </div>
    </div>
    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("demo");
            let captionText = document.getElementById("caption");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            captionText.innerHTML = dots[slideIndex - 1].alt;
        }
    </script>
</body>

</html>