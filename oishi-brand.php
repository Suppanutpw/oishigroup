<!DOCTYPE html>
<html lang="en">
<head>
  <?php require('metalink.php'); ?>
  <!-- เพิ่มเติม stylesheet ได้ตรงนี้เน้อ ต้องเพิ่มด้านล่าง require เท่านั้น!! ไม่ต้องเพิ่ม query boostrap ซ้ำนะ ดูใน metalink.php เลยว่าเราใส่อะไรไว้แล้วบ้าง  -->
</head>
<body>
  <!-- แถบบาร์ด้านบน -->
  <?php require('header.php'); ?>

  <!-- รูปด้านบน ถัดจาก menubar สีเทาด้านบน -->
  <!-- เริ่ม slide show รูปด้านบน {อย่าลบ section เด็ดขาด!!!} -->
  <section id="slider" class="swiper_wrapper clearfix" data-loop="true" data-autoplay="5000">
    <!-- Slider main container {{หน้าไหนไม่มีสไลด์ลบโค้ดด้านในนี้ให้หมด}} -->
    <div class="swiper-container w-100">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <img src="/img/Banner-Green-Tea.png" alt="" style="width: 100%">
            </div>
            <div class="swiper-slide">
              <img src="/img/banner_brand_restaurant.jpg" alt="" style="width: 100%">
            </div>
            <div class="swiper-slide">
              <img src="/img/PackedFood-banner.png" alt="" style="width: 100%">
            </div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev">
          <i class="fa fa-angle-left fa-5" aria-hidden="true"></i>
        </div>
        <div class="swiper-button-next">
          <i class="fa fa-angle-right" aria-hidden="true"></i>
        </div>
    </div>
    <!-- {{ลบถึงตรงนี้เลยเน้อ}} -->
  </section>

  <!-- slide show ลายพู่กันด้านล่าง -->
  <div class="content-bg">
    <img class="img-fluid" src="./img/content-bg.png">
  </div>
  <!-- สิ้นสุด slide show รูปด้านบน -->

  <!-- เนื้อหา {อย่าลบ section เด็ดขาด!!!} -->
  <section id="content" style="z-index: 20 !important;">
    <div class="container clearfix">
      <h2 class="text-center" style="color:red">OISHI <span style="color:lightgray;padding-right:5px">BRAND</span></h2>
    </div>
    <div class="container clearfix">
        <div id="nav-bar">
            <ul class="horizontal">
                <li></li>
            </ul>
        </div>
        <div id="content">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"></div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"></div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"></div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"></div>
        </div>
    </div>
  </section>

<!-- ไม่ต้องมี tag ปิด body กับ html นะเออ -->
<?php require('footer.php'); ?>
