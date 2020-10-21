<?php
  require('header.php');
?>
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
          <a href="https://www.oishidrink.com/" target="_blank">
            <img src="img/enter-site-icon.png"> เข้าสู่เว็บไซต์
          </a>
        </div>
        <div class="col-md-8">
          <h1>ผลิตภัณฑ์เครื่องดื่ม</h1>
          <h2>OISHI BEVERAGE</h2>
          <img src="img/home-brand-line-left.png">
          <p>โออิชิ เดลิเวอรี่ ถือกำเนิดขึ้นเพื่อเพิ่มความสะดวกสบายในการสั่งอาหารสไตล์ญี่ปุ่นให้ผู้บริโภคได้อร่อยกันถึงบ้าน ผ่าน <a href="https://www.oishidelivery.com" target="_blank">www.oishidelivery.com</a> และหมายเลขโทรศัพท์ <a href="tel:1773">1773</a> ซึ่งให้บริการครอบคลุมทั้งพื้นที่ในเขตกรุงเทพมหานคร ปริมณฑล และอีก 23 จังหวัด ทั่วประเทศ ตั้งแต่เวลา 10.00 - 22.00 น. พร้อมรับชำระค่าบริการทั้งในรูปแบบเงินสดและบัตรเครดิต</p>
        </div>
      </div>

      <div class="row index-content">
        <div class="col-md-4 order-lg-2 img-and-link">
          <img class="img-fluid w-100" src="img/home-oishi-restaurant.png">
          <a href="https://www.oishifood.com/restaurant.php" target="_blank">
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
          <a href="https://www.oishidrink.com/" target="_blank">
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
          <a href="https://www.oishifood.com/restaurant.php" target="_blank">
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
      </div>
      <div id="new-and-activity" class="owl-carousel owl-theme">

      </div>

    </div>
  </section>

  <script>
    let request = new XMLHttpRequest();
    var new_and_activity;
    request.onreadystatechange = function () {
      if (request.readyState == 4 && request.status == 200) {
        showNewAndActivity(JSON.parse(request.responseText));
      }
    };
    request.open("GET", "json/news_activity.json", true);
    request.send();

    // generate json
    showNewAndActivity = (data, op="") => {
      for (var i = 0; i < data.length; i++) {
        // trim String
        var content = data[i].content.substr(0, 165);
        content = content.substr(0, Math.min(content.length, content.lastIndexOf(" ")))

        op += `<div class="card item"><img class="card-img-top" src="${data[i].img}">`;
        op += `<div class="card-body"><h4 class="card-title">${data[i].title}</h4>`;
        op += `<p class="card-text">${content}</p><a href="#" class="card-button float-right">รายละเอียด<i class="fa fa-angle-right" aria-hidden="true"></i></a></div></div>`;
      }
      $('#new-and-activity').html(op);
      var new_and_activity = $('.owl-carousel').owlCarousel({
          loop:false,
          margin:10,
          nav:true,
          dots: false,
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

    $(window).resize(function () {
      if ($(window).width() >= 992) {
        $(".line-right").attr("src", "img/home-brand-line-right.png");
       } else {
        $(".line-right").attr("src", "img/home-brand-line-left.png");
      }
    });
  </script>

<?php
  require('footer.php');
?>
