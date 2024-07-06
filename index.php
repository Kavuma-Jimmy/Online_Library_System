<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Online Library</title>
  <link rel="stylesheet" href="owlcarousel/css/owl.carousel.min.css">
  <link rel="stylesheet" href="owlcarousel/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <?php include('menu.php'); ?>

    <div class="container-fluid mt-4">
      <h2 class="text-center">Welcome to your Online Library</h2>
      <div class="slideshow-container">
        <img class="mySlides" src="images/online library2.jpg">
        <img class="mySlides" src="images/online library.png">
        <img class="mySlides" src="images/online-library1.jpg">
      </div>
    </div>

    <div class="container">
    <div class="owl-carousel bookslide">
      <div class="box" style="background-image: url('images/book1.png');">
        <a href="registeruser.php" class="btn btn-primary">Science fantasy</a>
      </div>
      <div class="box" style="background-image: url('images/book1.png');">
        <a href="#" class="btn btn-primary">Romance Noval</a>
      </div>
      <div class="box" style="background-image: url('images/book1.png');">
        <a href="#" class="btn btn-primary">Graphics Novel</a>
      </div>
      <div class="box" style="background-image: url('images/book1.png');">
        <a href="#" class="btn btn-primary">Fiction</a>
      </div>
      <div class="box" style="background-image: url('images/book1.png');">
        <a href="#" class="btn btn-primary">Education</a>
      </div>
    </div>

  </div>


<?php include_once 'footer.php'?>


  <script src="jquery-3.3.1.min.js"></script>
  <script src="owlcarousel/js/owl.carousel.min.js"></script>
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

  <script>
    $('.bookslide').owlCarousel({
      loop: true,
      margin: 10,
      dots: false,
      responsiveClass: true,
      autoplay: true,
      autoplayTimeout: 3500,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1,
          nav: true,
          loop: true
        },
        600: {
          items: 2,
          nav: true,
          loop: true,
        },
        1000: {
          items: 3,
          nav: true,
          loop: true
        }
      }
    })



    // JavaScript code for the slideshow
    var myIndex = 0;
    carousel();

    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      myIndex++;
      if (myIndex > x.length) {
        myIndex = 1;
      }
      x[myIndex - 1].style.display = "block";
      setTimeout(carousel, 3000); // Change the time interval (in milliseconds) as per your requirement
    }
  </script>
</body>

</html>