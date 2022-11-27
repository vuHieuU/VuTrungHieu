<?php
    function add_thanhcong(){
        ?><script>
            alert("Thêm thành công!!")
        </script>
        <?php
    }
    function saimk(){
        ?><script>
            alert("Mật khẩu không chính xác!!")
        </script>
        <?php
    }
    function login_false(){
        ?><script>
            alert('Tài khoản hoặc mật khẩu không chính xác!!')
        </script>
        <?php
    }
    function khongtontai(){
        ?><script>
            alert("Tài khoản hoặc mật khẩu không tồn tại!!")
        </script>
        <?php
    }
    function tbpass($password){

            echo"<script>alert('Mật khẩu của bạn là: $password')</script>";

    }
?>