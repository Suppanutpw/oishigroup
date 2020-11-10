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
      <button id="popup-button1" class="btn btn-danger">กดฉันสิ1!!</button>
      <button id="popup-button2" class="btn btn-danger">กดฉันสิ2!!</button>
    </div>
  </section>

  <!-- Magnific Popup โค้ด popups ตัวแรก -->
  <!-- อาจจะ jen code ขึ้นมาก่อน -->
  <div id="popup-point1" data-effect="mfp-zoom-in" class="white-popup mfp-with-anim mfp-hide clearfix">
    <div class="popup-text-pic">
      <img class="img-fluid" src="https://www.thairath.co.th/media/dFQROr7oWzulq5FZWt5uOWxNqVgnUIRnnhFngXa2ttHqDnSclT4eKMvFn6UPjnX1dZU.jpg">
      <div class="mt-4">
        <h1>สวัสดีจ้า มาปรับทัศนคติกันเถอะ1!!</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus laboriosam odio voluptates qui nemo animi, officiis, maxime quisquam veritatis sint necessitatibus illo velit. Consectetur recusandae tempore consequatur sed nostrum mollitia nesciunt voluptatum eius accusantium magnam, a, similique voluptas dignissimos esse pariatur asperiores rem. Iste inventore voluptas est, repellendus similique provident?</p>
      </div>
    </div>
  </div>

  <!-- Magnific Popup โค้ด popups ตัวที่สอง -->
  <div id="popup-point2" data-effect="mfp-zoom-in" class="white-popup mfp-with-anim mfp-hide clearfix">
    <div class="popup-text-pic">
      <img class="img-fluid" src="https://www.thairath.co.th/media/dFQROr7oWzulq5FZWt5uOWxNqVgnUIRnnhFngXa2ttHqDnSclT4eKMvFn6UPjnX1dZU.jpg">
      <div class="mt-4">
        <h1>สวัสดีจ้า มาปรับทัศนคติกันเถอะ2!!</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus laboriosam odio voluptates qui nemo animi, officiis, maxime quisquam veritatis sint necessitatibus illo velit. Consectetur recusandae tempore consequatur sed nostrum mollitia nesciunt voluptatum eius accusantium magnam, a, similique voluptas dignissimos esse pariatur asperiores rem. Iste inventore voluptas est, repellendus similique provident?</p>
      </div>
    </div>
  </div>
  <!-- END Magnific Popup โค้ด popups -->

  <script>
    // Magnific Popup script for muti content
    // คำสั่งให้ เกิด popup เปลี่ยน จำนวนได้ตามสบาย
    for (let i = 1; i <= 2; i++) {
      $(document).on('click', `#popup-button${i}`, function(){ // .popup-button คือ class ที่
        $.magnificPopup.open({
            items: {
                src: $(`#popup-point${i}`), // #popup-point id เป้าหมายของ popup ที่จะแสดง
            },
            type: 'inline',
            mainClass: 'mfp-fade'
        });
      });
    }

    function showSildeJsonBig(jsonURL, putID, owlClass) {
      var request = new XMLHttpRequest();
      request.onreadystatechange = function () {
        if (request.readyState == 4 && request.status == 200) {

          var data = JSON.parse(request.responseText), op = "";

          for (var i = 0; i < data.length; i++) {
            // trim String and generate html content
            var content = data[i].content.substr(0, 165);
            content = content.substr(0, Math.min(content.length, content.lastIndexOf(" ")))

            op += `<div class="card item"><img class="card-img-top" src="${data[i].img}">`;
            op += `<div class="card-body"><h4 class="card-title">${data[i].title}</h4>`;
            op += `<p class="card-text">${content}</p><a class="inline-popups card-button float-right" href="#popups"><none>${JSON.stringify(data[i])}</none>รายละเอียด<i class="fa fa-angle-right" aria-hidden="true"></i></a></div></div>`;
          }
          $("#popup-point").html(op);
        }
      };
      request.open("GET", jsonURL, true);
      request.send();
    }

    // END Magnific Popup script
  </script>

<?php
  require('footer.php');
?>
