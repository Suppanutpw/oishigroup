<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OISHI GROUP</title>
  <link rel="icon" href="./img/favicon.png" type="image/png" sizes="16x16">
  <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/fontawesome.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <div id="top-red-bar">
    <div class="container">
      <ul>
        <li>
          <a href="./index.php?lang=en">
            <img src="./img/icon-en.jpg"> English
          </a>
        </li>
      </ul>
    </div>
  </div>

  <header id="header" class="bg-dark">
    <div class="container">
      <div id="logo">
        <a href="./index.php">
          <img src="./img/logo.jpg">
        </a>
      </div>

      <nav id="primary-menu">
        <ul style="touch-action: pan-y;">
            <li><a href="/business-overview.php" target="_blank">About Oishi</a></li>
            <li><a href="/oishi_brand.php">Oishi Brand</a></li>
            <li><a href="/news_activity.php">Oishi News &amp; Activity</a></li>
            <li><a href="/promotion.php">Oishi Promotion</a></li>
            <li><a href="/export_center.php">Export Center</a></li>
            <li><a href="/contact.php">Contact Us</a></li>
            <li><a href="/investor.php" target="_blank">Investor Relations</a></li>
            <li><a href="/contact.php#career">Career</a></li>
          </ul>
      </nav>
    </div>

    <script>
      $(window).scroll(function () {
        if ($(window).scrollTop() > 30) {
          $('#header').addClass("sticky");
        } else {
          $('#header').removeClass("sticky");
        }
      });
    </script>
  </header>
