<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OISHI GROUP</title>
  <!-- outsource style -->
  <link rel="icon" href="./img/favicon.png" type="image/png" sizes="16x16">
  <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/fontawesome.min.css">
  <link rel="stylesheet" href="./css/swiper.min.css">
  <link rel="stylesheet" href="./css/owl.carousel.min.css">
  <link rel="stylesheet" href="./css/owl.theme.default.min.css">
  <link rel="stylesheet" href="./css/magnific-popup.css">
  <!-- outsource script -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="./js/swiper.min.js"></script>
  <script src="./js/owl.carousel.min.js"></script>
  <script src="./js/jquery.magnific-popup.min.js"></script>
  <!-- my style -->
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <!-- back to top button -->
  <a id="back-top" href="#top-red-bar" class="float">
    <i class="fa fa-chevron-up my-float"></i>
  </a>

  <div id="top-red-bar">
    <div class="container clearfix">
      <ul>
        <li>
          <a href="./index.php?lang=en">
            <img src="./img/icon-en.jpg"> ENGLISH
          </a>
        </li>
      </ul>
    </div>
  </div>

  <header id="header" class="bg-dark">
    <div class="container clearfix">
      <div id="logo">
        <a href="./index.php">
          <img src="./img/logo.jpg">
        </a>
      </div>

      <nav id="primary-menu" class="navbar navbar-expand-lg">
        <span class="navbar-brand" href="#"></span>
        <buttons class="navbar-toggler" type="button" data-toggle="collapse" data-target="#topMenu" aria-controls="topMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">
            <i class="fas fa-bars"></i>
          </span>
        </buttons>
        <div class="collapse navbar-collapse" id="topMenu">
          <div class="navbar-nav" style="touch-action: pan-y;">
              <a class="nav-item nav-link" href="/business-overview.php" style="border: none !important;" target="_blank">About Oishi</a>
              <a class="nav-item nav-link" href="/oishi_brand.php">Oishi Brand</a>
              <a class="nav-item nav-link" href="/news_activity.php">Oishi News &amp; Activity</a>
              <a class="nav-item nav-link" href="/promotion.php">Oishi Promotion</a>
              <a class="nav-item nav-link" href="/export_center.php">Export Center</a>
              <a class="nav-item nav-link" href="/contact.php">Contact Us</a>
              <a class="nav-item nav-link" href="/investor.php" target="_blank">Investor Relations</a>
              <a class="nav-item nav-link" href="/contact.php#career">Career</a>
          </div>
        </div>
      </nav>
    </div>

    <script>
      // Button to top
      $('#back-top').click(function(){
        $('html, body').animate({scrollTop : 0}, 800);
        return false;
      });

      // window scroll
      $(window).scroll(function () {
        if ($(window).scrollTop() > 30 && $(window).width() >= 992) {
          $('#header').addClass("sticky");
        } else {
          $('#header').removeClass("sticky");
        }

        if ($(window).scrollTop() > 300) {
          $('#back-top').fadeIn();
        } else {
          $('#back-top').fadeOut();
        }
      });
    </script>
  </header>
