<!DOCTYPE html>
<html lang="en">
<head>
  <?php require('metalink.php'); ?>
</head>
<body>
  <!-- header webpage -->
  <?php require('header.php'); ?>

  <!-- เริ่ม slide show รูปด้านบน -->
  <section id="slider" class="swiper_wrapper clearfix" data-loop="true" data-autoplay="5000">
    <!-- Slider main container -->
    <div class="swiper-container w-100">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <img src="img/big-banner-01.jpg" style="width: 100%">
            </div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev">
          <i class="fa fa-angle-left" aria-hidden="true"></i>
        </div>
        <div class="swiper-button-next">
          <i class="fa fa-angle-right" aria-hidden="true"></i>
        </div>
    </div>
  </section>

  <!-- slide show ลายพู่กันด้านล่าง -->
  <div class="content-bg">
    <img class="img-fluid" src="img/content-bg.png">
  </div>
  <!-- สิ้นสุด slide show รูปด้านบน -->

  <!-- เนื้อหา -->
  <section id="content" style="z-index: 20 !important;">
    <div class="container clearfix">
      <!-- คำนำเนื้อหา 4 ตัว -->
      <div class="row index-content">
        <div class="col-md-4 img-and-link">
          <img class="img-fluid w-100" src="img/home-oishi-beverage.png">
          <a href="#">
            <img src="img/enter-site-icon.png"> เข้าสู่เว็บไซต์
          </a>
        </div>
        <div class="col-md-8">
          <h1>ผลิตภัณฑ์เครื่องดื่ม</h1>
          <h2>OISHI BEVERAGE</h2>
          <img src="img/home-brand-line-left.png">
          <p>โออิชิ เดลิเวอรี่ ถือกำเนิดขึ้นเพื่อเพิ่มความสะดวกสบายในการสั่งอาหารสไตล์ญี่ปุ่นให้ผู้บริโภคได้อร่อยกันถึงบ้าน ผ่าน <a href="#">www.oishidelivery.com</a> และหมายเลขโทรศัพท์ <a href="tel:1773">1773</a> ซึ่งให้บริการครอบคลุมทั้งพื้นที่ในเขตกรุงเทพมหานคร ปริมณฑล และอีก 23 จังหวัด ทั่วประเทศ ตั้งแต่เวลา 10.00 - 22.00 น. พร้อมรับชำระค่าบริการทั้งในรูปแบบเงินสดและบัตรเครดิต</p>
        </div>
      </div>

      <div class="row index-content">
        <div class="col-md-4 order-lg-2 img-and-link">
          <img class="img-fluid w-100" src="img/home-oishi-restaurant.png">
          <a href="#">
            <img src="img/enter-site-icon.png"> เข้าสู่เว็บไซต์
          </a>
        </div>
        <div class="col-md-8 order-lg-1 align-right">
          <h1>ร้านอาหารญี่ปุ่น</h1>
          <h2>OISHI RESTAURANT</h2>
          <img class="line-right" src="img/home-brand-line-right.png">
          <p>โออิชิประกอบและพัฒนาธุรกิจร้านอาหารสไตล์ญี่ปุ่นที่หลากหลาย ทั้งบุฟเฟต์อาหารญี่ปุ่น ชาบู ยากินิกุ รวมไปถึงอาหารประเภทข้าวหน้าต่างๆ ซึ่งให้บริการครอบคลุมกลุ่มผู้บริโภคทุกเพศ ทุกวัย โออิชิจะยังคง มุ่งขยายสาขาร้านอาหารอย่างต่อเนื่อง โดยจะเน้นการเปิดร้านชาบูชิ ซึ่งได้รับความนิยมอย่างสูง เพื่อให้ เข้าถึงและครอบคลุมพื้นที่การให้บริการแก่ผู้บริโภคได้มากที่สุด</p>
        </div>
      </div>

      <div class="row index-content">
        <div class="col-md-4 img-and-link">
          <img class="img-fluid w-100" src="img/PackedFood-Homepage.png">
          <a href="#">
            <img src="img/enter-site-icon.png"> เข้าสู่เว็บไซต์
          </a>
        </div>
        <div class="col-md-8">
          <h1>อาหารสำเร็จรูป</h1>
          <h2>OISHI EATO PACKED FOOD</h2>
          <img src="img/home-brand-line-left.png">
          <p>สินค้าพร้อมปรุงและพร้อมทาน ที่มีหลายหลายเมนูอร่อยสไตล์ญี่ปุ่น ทุกเมนูจากโออิชิ อีทโตะ พัฒนาด้วยความตั้งใจ และการคัดสรรคุณภาพวัตถุดิบที่ดีเลิศ แล้วนำมาปรุงจนได้รสชาติตามแบบฉบับอาหารญี่ปุ่นแท้ๆ ยิ่งไปกว่านั้นด้วยกรรมวิธีการผลิตที่มีคุณภาพจึงทำให้ได้อาหารพร้อมทานที่อร่อยคงคุณประโยชน์ในทุกๆซองของโออิชิ อีทโตะ เหมาะกับไลฟ์สไตล์ของคนยุคใหม่ที่เร่งรีบ เน้นความสะดวกสบาย เพียงแค่อุ่นไมโครเวฟก็พร้อมอร่อยได้เลย และยังหาซื้อได้ง่ายๆใกล้บ้านคุณ</p>
        </div>
      </div>

      <div class="row index-content">
        <div class="col-md-4 order-lg-2 img-and-link">
          <img class="img-fluid w-100" src="img/home-oishi-delivery.png">
          <a href="#">
            <img src="img/enter-site-icon.png"> เข้าสู่เว็บไซต์
          </a>
        </div>
        <div class="col-md-8 order-lg-1 align-right">
          <h1>บริการจัดส่งถึงบ้าน</h1>
          <h2>OISHI DELIVERY</h2>
          <img class="line-right" src="img/home-brand-line-right.png">
          <p>โออิชิ เดลิเวอรี่ ถือกำเนิดขึ้นเพื่อเพิ่มความสะดวกสบายในการสั่งอาหารสไตล์ญี่ปุ่นให้ผู้บริโภคได้อร่อยกันถึงบ้าน ผ่าน <a href="https://www.oishidelivery.com" target="_blank">www.oishidelivery.com</a> และหมายเลขโทรศัพท์ <a href="tel:1773">1773</a> ซึ่งให้บริการครอบคลุมทั้งพื้นที่ในเขตกรุงเทพมหานคร ปริมณฑล และอีก 23 จังหวัด ทั่วประเทศ ตั้งแต่เวลา 10.00 - 22.00 น. พร้อมรับชำระค่าบริการทั้งในรูปแบบเงินสดและบัตรเครดิต</p>
        </div>
      </div>

      <div class="header-part">
        <h1>OISHI <span>NEWS &<span> <i>ACTIVITY</i></h1>
        <a class="round-button" href="news_activity.php">
          <i class="fas fa-plus"></i>
        </a>
      </div>
      <div id="new-and-activity" class="owl-carousel owl-theme owl-new-activity"></div>

      <!-- slide 2 ฝั่ง -->
      <div class="row">
        <div class="col-md-6">
          <div class="header-part">
            <h1>OISHI <span>SOCIAL<span> <i>RESPONSIBILITY</i></h1>
            <button class="round-button">
              <i class="fas fa-plus"></i>
            </button>
          </div>
          <div id="social" class="owl-carousel owl-theme owl-social"></div>
        </div>
        <div class="col-md-6">
          <div class="header-part">
            <h1>OISHI <span>AWARD<span></h1>
            <button class="round-button">
              <i class="fas fa-plus"></i>
            </button>
          </div>
          <div id="award" class="owl-carousel owl-theme owl-award"></div>
        </div>
      </div>

    </div> <!-- container clearfix -->
  </section>

  <!-- Magnific Popup -->
  <div id="outer-pop"></div>

  <script>
    $(document).on('click', '.inline-popups', function(){
      $("#outer-pop").html(op=""); // clear lastest content
      try {
        data = JSON.parse(this.getElementsByTagName("none")[0].innerHTML);
        op += `<div id="popups" data-effect="mfp-zoom-in" class="white-popup mfp-with-anim mfp-hide clearfix"><div class="popup-text-pic">`;
        op += `<img class="img-fluid" src="${data.img}"><div class="mt-4">`;
        op += `<h1>${data.title}</h1><p>${data.content}</p></div></div></div>`;
        $("#outer-pop").html(op);
      } catch (e) {
        console.error(e);
      }

      $.magnificPopup.open({
          items: {
              src: $("#popups"),
          },
          type: 'inline',
          mainClass: 'mfp-fade'
      });
    });

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
          $(putID).html(op);
          // create and setting owl
          $(owlClass).owlCarousel({
              loop:false,
              margin:10,
              nav:true,
              dots:false,
              autoplay:true,
              autoplayTimeout:10000,
              responsive:{
                  0:{
                      items:2
                  },
                  992:{
                      items:3
                  }
              }
          });
          $('.owl-prev').html("");
          $('.owl-next').html("");
        }
      };
      request.open("GET", jsonURL, true);
      request.send();
    }

    function showSildeJsonMiddle(jsonURL, putID, owlClass) {
      var request = new XMLHttpRequest();
      request.onreadystatechange = function () {
        if (request.readyState == 4 && request.status == 200) {

          var data = JSON.parse(request.responseText), op = "";

          for (var i = 0; i < Math.min(10, data.length); i++) {
            // generate html content
            op += `<div class="card silde-middle item"><div class="inline-popups"><none>${JSON.stringify(data[i])}</none><img class="card-img-top" src="${data[i].img}"></div>`;
            op += `<div class="card-body"><h4 class="card-title">${data[i].title}</h4>`;
            op += `<p class="card-text">${data[i].date}</p><div><a class="inline-popups" href="#popups"><none>${JSON.stringify(data[i])}</none><i class="fas fa-plus" aria-hidden="true"></i> รายละเอียด</a></div></div></div>`;
          }
          $(putID).html(op);
          // create and setting owl
          $(owlClass).owlCarousel({
              loop:false,
              margin:10,
              nav:false,
              dots:true,
              autoplay:true,
              autoplayTimeout:10000,
              responsive:{
                  0:{
                      items:1
                  }
              }
          });
          $('.owl-prev').html("");
          $('.owl-next').html("");
        }
      };
      request.open("GET", jsonURL, true);
      request.send();
    }

    $(window).resize(function () {
      if ($(window).width() >= 992) {
        $(".line-right").attr("src", "img/home-brand-line-right.png");
      } else {
        $(".line-right").attr("src", "img/home-brand-line-left.png");
      }
    });

    showSildeJsonBig("json/news_activity.json", '#new-and-activity', '.owl-new-activity');
    showSildeJsonMiddle("json/social_responsibility.json", '#social', '.owl-social');
    showSildeJsonMiddle("json/awards.json", '#award', '.owl-award');
  </script>

<?php require('footer.php'); ?>
