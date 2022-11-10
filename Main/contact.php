<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/contact.css">
</head>

<body>
    <?php
     include "header.php";
     
    ?>
        <div class="contact-container">
            <div class="left-col">
                <img class="logo" src="Images/img/img_raucuqua/logo/logo2.jpg" />
            </div>
            <div class="right-col">
                <div class="theme-switch-wrapper">
                    <label class="theme-switch" for="checkbox">
              <input type="checkbox" id="checkbox" />
              <div class="slider round"></div>
        </label>
                    <div class="description">Dark Mode</div>
                </div>

                <h1>Contact us</h1>
                <p>Bạn đang tìm những sản phẩm đủ tiêu chuẩn 3 không-VietGap hãy liên hệ với chúng thôi để biết thêm nhiều chi tiết liên quan nhé ! </p>

                <form id="contact-form" method="post">
                    <label for="name">Full name</label>
                    <input type="text" id="name" name="name" placeholder="Your Full Name" required>
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="Your Email Address" required>
                    <label for="message">Message</label>
                    <textarea rows="6" placeholder="Your Message" id="message" name="message" required></textarea>
                    <!--<a href="javascript:void(0)">--><button type="submit" id="submit" name="submit">Send</button>
                    <!--</a>-->

                </form>
                <div id="error"></div>
                <div id="success-msg">


                </div>

            </div>
            <div class="map-gg">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d878.7157625705689!2d105.74652633382482!3d21.037981729085836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b991d80fd5%3A0x53cefc99d6b0bf6f!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1svi!2s!4v1667964574364!5m2!1svi!2s"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="text_map">
                    <h2> Địa chỉ liên hệ</h2>
                    <i class="fa-regular fa-location-dot"></i>
                    <p>Tòa nhà FPT Polytechnic, P. Trịnh Văn Bô, Xuân Phương, Nam Từ Liêm, Hà Nội, Việt Nam</p>
                    <i class="fa-light fa-browser"></i>
                    <p>https://caodang.fpt.edu.vn/</p>
                    <i class="fa-regular fa-phone-plus"></i>
                    <p>0981725836</p>

                </div>
            </div>
        </div>
        <script>
            const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');

            function switchTheme(e) {
                if (e.target.checked) {
                    document.documentElement.setAttribute('data-theme', 'dark');
                } else {
                    document.documentElement.setAttribute('data-theme', 'light');
                }
            }

            toggleSwitch.addEventListener('change', switchTheme, false);


            const name = document.getElementById('name');
            const email = document.getElementById('email');
            const message = document.getElementById('message');
            const contactForm = document.getElementById('contact-form');
            const errorElement = document.getElementById('error');
            const successMsg = document.getElementById('success-msg');
            const submitBtn = document.getElementById('submit');

            const validate = (e) => {
                e.preventDefault();

                if (name.value.length < 3) {
                    errorElement.innerHTML = 'Your name should be at least 3 characters long.';
                    return false;
                }

                if (!(email.value.includes('.') && (email.value.includes('@')))) {
                    errorElement.innerHTML = 'Please enter a valid email address.';
                    return false;
                }

                if (!emailIsValid(email.value)) {
                    errorElement.innerHTML = 'Please enter a valid email address.';
                    return false;
                }

                if (message.value.length < 15) {
                    errorElement.innerHTML = 'Please write a longer message.';
                    return false;
                }

                errorElement.innerHTML = '';
                successMsg.innerHTML = 'Thank you! I will get back to you as soon as possible.';

                e.preventDefault();
                setTimeout(function() {
                    successMsg.innerHTML = '';
                    document.getElementById('contact-form').reset();
                }, 7000);

                return true;

            }

            const emailIsValid = email => {
                return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
            }

            submitBtn.addEventListener('click', validate);
        </script>
<div class="ghj" >
    
</div>
        <?php
    include "footer.php";
    ?>
</body>

</html>