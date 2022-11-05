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