<!DOCTYPE html>
<html lang="en">
<head>
    <?php require('metalink.php'); ?>
</head>
<body>

<?php require('header.php'); ?>

  <section id="slider" class="swiper_wrapper clearfix" data-loop="true" data-autoplay="5000">
    <div class="swiper-container w-100">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="/img/big-banner-01.jpg" alt="" style="width: 100%">
            </div>
        </div>
        <div class="swiper-pagination"></div>

        <div class="swiper-button-prev">
          <i class="fa fa-angle-left fa-5" aria-hidden="true"></i>
        </div>
        <div class="swiper-button-next">
          <i class="fa fa-angle-right" aria-hidden="true"></i>
        </div>
    </div>
  </section>

  <div class="content-bg">
    <img class="img-fluid" src="./img/content-bg.png">
  </div>

  <section id="content" style="z-index: 20 !important;">
    <div class="container clearfix">
      <!-- Magnific Popup ปุ่มใน content เรียก เป็น tag a หรืออะไรก็ได้ -->
      <button class="btn btn-danger popup-button">กดฉันสิ!!</button>
    </div>
  </section>

  <!-- Magnific Popup โค้ด popups -->
  <!-- ฟังก์ชั่นจะเรียกตรงนี้ออกมา ถ้าอยากให้แสดงตัวอื่นๆ ให้ js เปลี่ยน innerHTML ข้างในได้เลย -->
  <div id="popup-point" data-effect="mfp-zoom-in" class="white-popup mfp-with-anim mfp-hide clearfix">
    <div class="popup-text-pic">
      <img class="img-fluid" src="https://www.thairath.co.th/media/dFQROr7oWzulq5FZWt5uOWxNqVgnUIRnnhFngXa2ttHqDnSclT4eKMvFn6UPjnX1dZU.jpg">
      <div class="mt-4">
        <h1>สวัสดีจ้า มาปรับทัศนคติกันเถอะ!!</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus laboriosam odio voluptates qui nemo animi, officiis, maxime quisquam veritatis sint necessitatibus illo velit. Consectetur recusandae tempore consequatur sed nostrum mollitia nesciunt voluptatum eius accusantium magnam, a, similique voluptas dignissimos esse pariatur asperiores rem. Iste inventore voluptas est, repellendus similique provident?</p>
      </div>
    </div>
  </div>
  <!-- END Magnific Popup โค้ด popups -->

  <script>
    // Magnific Popup script
    // คำสั่งให้ เกิด popup
    $(document).on('click', '.popup-button', function(){ // .popup-button คือ class ที่
      $.magnificPopup.open({
          items: {
              src: $("#popup-point"), // #popup-point id เป้าหมายของ popup ที่จะแสดง
          },
          type: 'inline',
          mainClass: 'mfp-fade'
      });
    });
    // END Magnific Popup script
  </script>

<?php
  require('footer.php');
?>
