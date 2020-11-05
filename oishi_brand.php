<!DOCTYPE html>
<html lang="en">
<head>
  <?php require('metalink.php'); ?>
  <!-- เพิ่มเติม stylesheet ได้ตรงนี้เน้อ ต้องเพิ่มด้านล่าง require เท่านั้น!! ไม่ต้องเพิ่ม query boostrap ซ้ำนะ ดูใน metalink.php เลยว่าเราใส่อะไรไว้แล้วบ้าง  -->
  <script>
    $(document).ready(function(){
            $("#btn1").click(function(){
                $("#beverage").fadeIn(1000);
                $("#eato").fadeOut(0);
                $("#restaurant").fadeOut(0);
                $("#delivery").fadeOut(0);
                $( ".nav-btn" ).css( "border-bottom", "2px solid black");
                $( ".nav-btn" ).css( "color", "black");
                $(".span-class").css("color","gray;")
                $("#btn1").css("border-bottom", "2px solid rgb(179, 0, 0)");
                $("#btn1").css("color", "red")

                

            });
            $("#btn2").click(function(){
                $("#beverage").fadeOut(0);
                $("#eato").fadeIn(1000);
                $("#restaurant").fadeOut(0);
                $("#delivery").fadeOut(0);
                $( ".nav-btn" ).css( "border-bottom", "2px solid black");
                $( ".nav-btn" ).css( "color", "black");
                $(".span-class").css("color","gray;")
                $("#btn2").css("border-bottom", "2px solid rgb(179, 0, 0)");
                $("#btn2").css("color", "red")
 
                   
            });
            $("#btn3").click(function(){
                $("#beverage").fadeOut(0);
                $("#eato").fadeOut(0);
                $("#restaurant").fadeIn(1000);
                $("#delivery").fadeOut(0);
                $( ".nav-btn" ).css( "border-bottom", "2px solid black");
                $( ".nav-btn" ).css( "color", "black");
                $(".span-class").css("color","gray;")
                $("#btn3").css("border-bottom", "2px solid rgb(179, 0, 0)");
                $("#btn3").css("color", "red")

        
            });
            $("#btn4").click(function(){
                $("#beverage").fadeOut(0);
                $("#eato").fadeOut(0);
                $("#restaurant").fadeOut(0);
                $("#delivery").fadeIn(1000);
                $( ".nav-btn" ).css( "border-bottom", "2px solid black");
                $( ".nav-btn" ).css( "color", "black");
                $(".span-class").css("color","gray;")
                $("#btn4").css("border-bottom", "2px solid rgb(179, 0, 0)");
                $("#btn4").css("color", "red")

                
            });
        });
  </script>
  <style>
    .li-class{
      width:25%;
      margin-bottom:10px
    }
    .nav-img{
      width:100%;
      text-align:center;
    }
    #btn1, #btn2, #btn3, #btn4{
      width: 100%;
      
    }
    .nav-btn{
        width:100%;
        background-color:#ffffff00;
        border:none;
        border-bottom:solid 2px gray;
        color:gray;
        padding-left:15px;
        padding-right:15px;
        padding-bottom:15px
        
    }
    .icon{
      margin-right:10px;
      float:left
    }
    .name{
      margin-top:10px;
      font-size:16px
    }
    .col-md-3{
      padding-left:15px;
      padding-right:15px;
      float:left;
    }
    .block-img{
      margin-bottom:30px;
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
          <ul style="padding-bottom:50px" class="nav nav-bar">
              <li class="li-class">
                <button class="nav-btn" id="btn1" style="border-bottom-color:rgb(179, 0, 0);color:red;">
                  <div class="tab-menu">
                    <div class="icon"><img class="nav-img" src="/img/icon-beverage.png"></div>
                    <div class="name"><p>OISHI <span id="span1" class="span-class">BEVERAGE</span></p></div>
                  </div>
                </button>
              </li>
              <li class="li-class">
                <button class="nav-btn" id="btn2">
                  <div class="tab-menu">
                    <div class="icon"><img class="nav-img" src="/img/icon-eato.png" alt=""></div>
                    <div class="name"><p>OISHI <span id="span2" class="span-class">EATO</span></p></div>
                  </div>
                </button>
              </li>
              <li class="li-class">
                <button class="nav-btn" id="btn3">
                  <div class="tab-menu">
                    <div class="icon"><img class="nav-img" src="/img/icon-restaurant.png" alt=""></div>
                    <div class="name"><p>OISHI <span id="span3" class="span-class">RESTAURANT</span></p></div>
                  </div>
                </button>
              </li>
              <li class="li-class">
                <button class="nav-btn" id="btn4">
                <div class="tab-menu">
                  <div class="icon"><img class="nav-img" src="/img/icon-delivery.png" alt=""></div>
                  <div class="name"><p>OISHI <span id="span4" class="span-class">DELIVERY</span></p></div>
                </div>
                </button>
              </li>
          </ul>
          <div class="tab-container">
            <div id="beverage" style="display"><div id="beverage-content"></div></div>
            <div id="eato" style="display:none"><div id="eato-content"></div></div>
            <div id="restaurant" style="display:none"><div id="restaurant-content"></div></div>
            <div id="delivery" style="display:none"><div id="delivery-content"></div></div>
          </div>
        </div>
    </div>
  </section>
  <script>
        let requestURL = './json/brand.json'; 
        let request = new XMLHttpRequest(); 
        request.onreadystatechange = function () { 
            if (request.readyState == 4 && request.status == 200) {             
                dataReportStatus(JSON.parse(request.responseText));            
            } }; 
        request.open("GET", requestURL, true); 
        request.send(); 
        
        function dataReportStatus(data) {
          let display1 = ""
          let display2 = ""
          let display3 = ""
          let display4 = ""
          for (i=0; i<data[0].beverage.length; i++){
            display1 += `<div class="col-md-3"><div class="beverage-block"><div class="block-img"><span><img class="img-fluid" src="${data[0].beverage[i].img}" alt=""></span><span><img class="img-fluid" src="${data[0].beverage[i].logo}" alt=""></span></div>
                        <div class="block-title"><h2 style="font-size: 24px;font-weight: 600;letter-spacing: 1px;">${data[0].beverage[i].title}</h2><p style="margin-bottom:30px">${data[0].beverage[i].describe}</p></div>
                        <div class="oishi-button"><a class="inline-popups card-button float-left" href="#popups">ดูเพิ่มเติม<i class="fa fa-angle-right" aria-hidden="true"></i></a></div></div></div>`
          };
          for (i=0; i<data[1].eato.length; i++){
            display2 += `<div class="col-md-3"><div class="eato-block"><div class="block-img"><span><img class="img-fluid" src="${data[1].eato[i].img}" alt=""></span><span><img class="img-fluid" src="${data[1].eato[i].logo}" alt=""></span></div>
                        <div class="block-title"><h2 style="font-size: 24px;font-weight: 600;letter-spacing: 1px;">${data[1].eato[i].title}</h2><p style="margin-bottom:30px">${data[1].eato[i].describe}</p></div>
                        <div class="oishi-button"><a class="inline-popups card-button float-left" href="#popups">ดูเพิ่มเติม<i class="fa fa-angle-right" aria-hidden="true"></i></a></div></div></div>`
          };
          for (i=0; i<data[2].restaurant.length; i++){
            display3 += `<div class="col-md-3"><div class="restaurant-block"><div class="block-img"><span><img class="img-fluid" src="${data[2].restaurant[i].img}" alt=""></span><span><img class="img-fluid" src="${data[2].restaurant[i].logo}" alt=""></span></div>
                        <div class="block-title"><h2 style="font-size: 24px;font-weight: 600;letter-spacing: 1px;">${data[2].restaurant[i].title}</h2><p style="margin-bottom:30px">${data[2].restaurant[i].describe}</p></div>
                        <div class="oishi-button"><a class="inline-popups card-button float-left" href="#popups">ดูเพิ่มเติม<i class="fa fa-angle-right" aria-hidden="true"></i></a></div></div></div>`
          };
          display4 += `<div class="col-md-3"><div class="delivery-block"><div class="block-img"><span><img class="img-fluid" src="https://www.oishigroup.com/upload_file/brand/190621021231_WEB-HOME-F1.jpg" alt="">
                      </span><span><img class="img-fluid" src="https://www.oishigroup.com/upload_file/brand/190621021235_WEB-HOME-19_logo.jpg" alt=""></span></div>
                      <div class="block-title"><h2 style="font-size: 24px;font-weight: 600;letter-spacing: 1px;">OISHI DELIVERY</h2><p style="margin-bottom:30px">บริการจัดส่งความอร่อยสไตล์ญี่ปุ่นถึงบ้าน เพียงคลิกมาที่ <a style="color:red" href="https://oishidelivery.com/th">www.oishidelivery.com</a></p></div>
                      <div class="oishi-button"><a class="inline-popups card-button float-left" href="#popups">ดูเพิ่มเติม<i class="fa fa-angle-right" aria-hidden="true"></i></a></div></div></div>`
          document.getElementById('beverage-content').innerHTML += display1
          document.getElementById('eato-content').innerHTML += display2
          document.getElementById('restaurant-content').innerHTML += display3
          document.getElementById('delivery-content').innerHTML += display4
          
        }
  </script>

<!-- ไม่ต้องมี tag ปิด body กับ html นะเออ -->
<?php require('footer.php'); ?>
