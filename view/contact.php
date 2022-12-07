<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <!-- <link rel="stylesheet" href="../Main/css/contact.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <div class="contacts">

        <div class="contact-detail">

            <div class="contact-ggmap">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d878.7157625705689!2d105.74652633382482!3d21.037981729085836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b991d80fd5%3A0x53cefc99d6b0bf6f!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1svi!2s!4v1667964574364!5m2!1svi!2s" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="contact-ggmap-text">
                    <h1></h1>
                    <p></p>

                </div>
            </div>
            <div class="contact-right">
                <h1>Contact Us</h1>
                <p>Sản phẩm chuẩn VietGap an toàn với người tiêu dùng có thắc mắc ,hay nhu cầu tìm hiểu thêm về sản phẩm xin vui lòng để lại thông tin liên hệ để được hỗ trợ nhanh nhất <br> Xin trân thành cảm ơn</p>
                <form action="index.php?act=sbcontact" method="POST" class="form">
                    <input type="text" name="user" placeholder="Tên Của Bạn" required>
                    <input type="email" name="email" placeholder="Email Của Bạn" required>
                    <input type="text" name="title" placeholder="Tiêu đề" required>
                    <input type="text" name="content" placeholder="Nội dung" required>
                    <input type="submit" value="Submit " name="sbcontact">
                </form>

            </div>

        </div>
        <div class="contact-blog">
            <a href="http://"> <i class="fa-brands fa-facebook"></i></a>
            <a href="http://"> <i class="fa-brands fa-twitter"></i></a>
            <a href="http://"> <i class="fa-brands fa-google"></i></a>
            <a href="http://"> <i class="fa-brands fa-telegram"></i></a>
            <i class="fa-sharp fa-solid fa-phone">+0965545200</i>
        </div>
    </div>
</body>
<style>
    @font-face {
        font-family: oganic;
        src: url(font/organique\ DEMO.otf);
    }

    h1 {
        text-shadow: .1em .1em rgba(0, 0, 0, 0.3);
        font-family: oganic;
        font-size: 40px;
    }

    p {
        padding: 10px;
        font-size: 13px;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .contacts {
        width: 90vw;
        margin: 70px auto;
        display: grid;
        /* margin-top: 100px; */
        /* padding-top: 100px; */
    }

    .contact-detail {
        width: 100%;
        padding: 20px;
        display: flex;
    }

    .contact-ggmap {
        width: 50%;
        padding: 10px;
        border-radius: 8px;
        overflow: hidden;
    }

    .contact-ggmap iframe {
        width: 100%;
        height: 100%;
    }

    .contact-right {
        width: 50%;
    }

    .contact-right input {
        box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;
        outline: none;
        border: none;
        height: 50px;
        border-radius: 5px;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .form button {
        padding: 8px;
        background-color: green;
        color: #fff;
        border: none;
        font-size: 16px;
        cursor: pointer;
        width: 92%;
        margin-left: 6px;
    }


    .form input {
        padding: 10px;
        margin: 6px;
        width: 92%;
    }

    input:hover,
    textarea:hover,
    button:hover {
        opacity: 0.8;
    }

    .contact-blog {
        height: 50px;
        width: 100%;
        /* position: relative; */
        bottom: 50px;
        display: flex;
        background-color: darkgray;
    }

    .contact-blog i {
        margin: 18px;
    }

    /* textarea */

    textarea::placeholder {
        color: black;
    }
</style>

</html>