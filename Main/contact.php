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
    <div class="contacts">
        <div class="contact_details">
            <div class="contact_content">
                <h2>
                    Liên Hệ Với Chúng Tôi
                </h2>
                <input    type="text" value="Họ Tên"> <br>
                <input type="text" value="Địa chỉ"><br>
                <input    type="email" value="Email" required><br>
                <input    type="text" value="SDT" required><br>
                <td>
                    <textarea class=" input " cols="75 " data-val="true " data-val-required="Nhập nội dung " id="Content " name="Content " placeholder="Miêu Tả Nội Dung " rows="10 " required></textarea>
                </td><br>
                <input type="submit" id="submit" value="gửi thông tin ">
            </div>
            <div class="map_contact ">
                <h2>Địa chỉ liên hệ</h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.868050764779!2d105.74473461490489!3d21.03796498599341!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313455863a7b9f93%3A0x882c5dc583cfcee5!2zUGjhu5UgdGjDtG5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1sen!2s!4v1667725084383!5m2!1sen!2s "
                    width="640px " height="450 " style="border:0; " allowfullscreen=" " loading="lazy " referrerpolicy="no-referrer-when-downgrade "></iframe>
            </div>


        </div>
    </div>
<?php

include "footer.php ";
?>
</body>

</html>