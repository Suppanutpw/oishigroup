<!DOCTYPE html>
<html lang="en">
<head>
  <?php require('metalink.php'); ?>
  <!-- เพิ่มเติม stylesheet ได้ตรงนี้เน้อ ต้องเพิ่มด้านล่าง require เท่านั้น!! ไม่ต้องเพิ่ม query boostrap ซ้ำนะ ดูใน metalink.php เลยว่าเราใส่อะไรไว้แล้วบ้าง  -->
  <script>
    $(document).ready(function(){
      $("#btn1").click(function(){
        $("#beverage").fadeIn(1000);
        $("#div2").fadeOut(0);
        $("#div3").fadeOut(0);
        let select = document.getElementById("btn1");
        let unselect1 = document.getElementById("btn2");
        let unselect2 = document.getElementById("btn3");
        let unselect3 = document.getElementById("btn4");
        select.style.color = "red";
        unselect1.style.color = "black";
        unselect2.style.color = "black";
        unselect3.style.color = "black";
        select.style.border.bottom = "blue 1px solid"
      });
      $("#btn2").click(function(){
        $("#div1").fadeOut(0);
        $("#div2").fadeIn(1000);
        $("#div3").fadeOut(0);
      });
      $("#btn3").click(function(){
        $("#div1").fadeOut(0);
        $("#div2").fadeOut(0);
        $("#div3").fadeIn(1000);
      });
    });
  </script>
  <style>
    li{
      width:25%;
    }
    .nav-img{
      width:25%;
      text-align:center;
    }
    #btn1, #btn2, #btn3, #btn4{
      width: 100%;
      
    }
  </style>
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
    <div class="container clearfix" style="padding-bottom: 30px">
      <h2 class="text-center" style="color:red;">OISHI <span style="color:lightgray;padding-right:5px">BRAND</span></h2>
    </div>
    <div class="container clearfix">
        <div id="tabs">
          <ul class="nav nav-bar">
              <li style="border-bottom:solid 1px; margin-bottom:10px"><button id="btn1" style="background-color:#ffffff00; border:none"><img class="nav-img" src="/img/icon-beverage.png">OISHI BEVERAGE</button></li>
              <li><img class="nav-img" src="/img/icon-eato.png" alt=""><a id="btn2">OISHI EATO</a></li>
              <li><img class="nav-img" src="/img/icon-restaurant.png" alt=""><a id="btn3">OISHI RESTAURANT</a></li>
              <li><img class="nav-img" src="/img/icon-delivery.png" alt=""><a id="btn4">OISHI DELIVERY</a></li>
          </ul>
          <div class="tab-container">
            <div id="beverage" style="display">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"></div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"></div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"></div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"></div>
            </div>
            <div id="eato" style="display:none">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"></div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"></div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"></div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"></div>
            </div>
            <div id="restaurant" style="display:none">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"></div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"></div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"></div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"></div>
            </div>
            <div id="delivery" style="display:none">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"></div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"></div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"></div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"></div>
            </div>
          </div>
        </div>
    </div>
  </section>

<!-- ไม่ต้องมี tag ปิด body กับ html นะเออ -->
<?php require('footer.php'); ?>
