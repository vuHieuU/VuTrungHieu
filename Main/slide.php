<div class="container">
<!-- Header -->
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
      <img class="mySlides" src="./Images/img/img_raucuqua/slideshow/slideshow.jpg" style="width:100%">
      <img class="mySlides" src="./Images/img/img_raucuqua/slideshow/slideshow2.jpg" style="width:100%">
      <img class="mySlides" src="./Images/img/img_raucuqua/slideshow/slideshow3.jpg" style="width:100%">
    </div>