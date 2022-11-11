<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Main/css/contact.css">
</head>

<body>
    <?php
     include "header.php";
    ?>
        <div class="contact">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d878.7157625705689!2d105.74652633382482!3d21.037981729085836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b991d80fd5%3A0x53cefc99d6b0bf6f!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1svi!2s!4v1667964574364!5m2!1svi!2s"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                    <div class="left-col-content">
                        <h1>Contact us</h1>
                        <p>Bạn đang tìm những sản phẩm đủ tiêu chuẩn 3 không-VietGap hãy liên hệ với chúng thôi để biết thêm nhiều chi tiết liên quan nhé ! </p>
                        <form id="contact-form" method="post">
                            <label for="name">Full name</label><br>
                            <input type="text" id="name" name="name" placeholder="Your Full Name" required>
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" placeholder="Your Email Address" required><br>
                            <label for="message">Message</label>
                            <textarea rows="6" placeholder="Your Message" id="message" name="message" required></textarea><br>
                            <!--<a href="javascript:void(0)">--><button type="submit" id="submit" name="submit">Send</button>
                            <!--</a>-->
                        </form>
                        <div id="error"></div>
                        <div id="success-msg"></div>
                    </div>
                    </div>
    <?php
        // include "footer.php";
    ?>
</body>

</html>