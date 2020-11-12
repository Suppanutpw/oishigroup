<!-- back to top button -->
<a id="back-top" href="#top-red-bar" class="float">
  <i class="fa fa-chevron-up my-float"></i>
</a>

<div id="top-red-bar">
  <div class="container clearfix">
    <ul>
      <li>
        <a href="#">
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
            <a class="nav-item nav-link" href="business-overview.php" style="border: none !important;" target="_blank">About Oishi</a>
            <a class="nav-item nav-link" href="oishi_brand.php">Oishi Brand</a>
            <a class="nav-item nav-link" href="news_activity.php">Oishi News &amp; Activity</a>
            <a class="nav-item nav-link" href="promotion.php">Oishi Promotion</a>
            <a class="nav-item nav-link" href="export_center.php">Export Center</a>
            <a class="nav-item nav-link" href="#">Contact Us</a>
            <a class="nav-item nav-link" href="#">Investor Relations</a>
            <a class="nav-item nav-link" href="#">Career</a>
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
