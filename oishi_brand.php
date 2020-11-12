<!DOCTYPE html>
<html lang="en">
<head>
  <?php require('metalink.php'); ?>
  <!-- เพิ่มเติม stylesheet ได้ตรงนี้เน้อ ต้องเพิ่มด้านล่าง require เท่านั้น!! ไม่ต้องเพิ่ม query boostrap ซ้ำนะ ดูใน metalink.php เลยว่าเราใส่อะไรไว้แล้วบ้าง  -->
  <script>
    $(document).ready(function(){
            $("#btn1").click(function(){
                $("#beverage").fadeIn(1000);
                $("#eato").css("display", "none");
                $("#restaurant").css("display", "none");
                $("#delivery").css("display", "none");
                $( ".nav-btn" ).css( "border-bottom", "2px solid #ccc");
                $( ".category" ).css( "color", "#333333");
                $(".span-class").css("color", "#666666")
                $("#btn1").css("border-bottom", "2px solid rgb(179, 0, 0)");
                $("#oishi1").css("color", "red")
                $("#span1").css("color", "red")


            });
            $("#btn2").click(function(){
                $("#beverage").css("display", "none");
                $("#eato").fadeIn(1000);
                $("#restaurant").css("display", "none");
                $("#delivery").css("display", "none");
                $( ".nav-btn" ).css( "border-bottom", "2px solid #ccc");
                $( ".category" ).css( "color", "#333333");
                $(".span-class").css("color", "#666666")
                $("#btn2").css("border-bottom", "2px solid rgb(179, 0, 0)");
                $("#oishi2").css("color", "red")
                $("#span2").css("color", "red")



            });
            $("#btn3").click(function(){
                $("#beverage").css("display", "none");
                $("#eato").css("display", "none");
                $("#restaurant").fadeIn(1000);
                $("#delivery").css("display", "none");
                $( ".nav-btn" ).css( "border-bottom", "2px solid #ccc");
                $( ".category" ).css( "color", "#333333");
                $(".span-class").css("color", "#666666")
                $("#btn3").css("border-bottom", "2px solid rgb(179, 0, 0)");
                $("#oishi3").css("color", "red")
                $("#span3").css("color", "red")



            });
            $("#btn4").click(function(){
                $("#beverage").css("display", "none");
                $("#eato").css("display", "none");
                $("#restaurant").css("display", "none");
                $("#delivery").fadeIn(1000);
                $( ".nav-btn" ).css( "border-bottom", "2px solid #ccc");
                $( ".category" ).css( "color", "#333333");
                $(".span-class").css("color", "#666666")
                $("#btn4").css("border-bottom", "2px solid rgb(179, 0, 0)");
                $("#oishi4").css("color", "red")
                $("#span4").css("color", "red")
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
        border-bottom:solid 2px #ccc;
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
      font-size:16px;
      float:left
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
    .block{
      padding-bottom:50px;
      margin-bottom:100px
    }
    .white-popup{
      max-width:500px
    }
    .category{
      color:#333333;
      font-size: 16px;
      font-family: 'Kanit-Light', sans-serif;
      font-weight: 600;
    }
    .span-class{
      color:#666666;
      font-family: 'Kanit-ExtraLight', sans-serif;
      font-weight: 600;
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
              <img src="img/Banner-Green-Tea.png" alt="" style="width: 100%">
            </div>
            <div class="swiper-slide">
              <img src="img/banner_brand_restaurant.jpg" alt="" style="width: 100%">
            </div>
            <div class="swiper-slide">
              <img src="img/PackedFood-banner.png" alt="" style="width: 100%">
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
    <div class="container clearfix" style="padding-bottom: 30px ">
      <h2 class="text-center" style="color:red; font-size: 36px; font-weight: normal;">OISHI <span style="color:black;padding-right:5px">BRAND</span></h2>
    </div>
    <div class="container clearfix">
        <div id="tabs">
          <ul style="padding-bottom:50px" class="nav nav-bar">
              <li class="li-class">
                <button class="nav-btn" id="btn1" style="border-bottom-color:rgb(179, 0, 0);">
                  <div class="tab-menu">
                    <div class="icon"><img class="nav-img" src="img/icon-beverage.png"></div>
                    <div class="name"><h1 id="oishi1" class="category" style="color:red">OISHI <span id="span1" class="span-class" style="color:red">BEVERAGE</span></h1></div>
                  </div>
                </button>
              </li>
              <li class="li-class">
                <button class="nav-btn" id="btn2">
                  <div class="tab-menu">
                    <div class="icon"><img class="nav-img" src="img/icon-eato.png" alt=""></div>
                    <div class="name"><h1 id="oishi2" class="category">OISHI <span id="span2" class="span-class">EATO</span></h1></div>
                  </div>
                </button>
              </li>
              <li class="li-class">
                <button class="nav-btn" id="btn3">
                  <div class="tab-menu">
                    <div class="icon"><img class="nav-img" src="img/icon-restaurant.png" alt=""></div>
                    <div class="name"><h1 id="oishi3" class="category">OISHI <span id="span3" class="span-class">RESTAURANT</span></h1></div>
                  </div>
                </button>
              </li>
              <li class="li-class">
                <button class="nav-btn" id="btn4">
                <div class="tab-menu">
                  <div class="icon"><img class="nav-img" src="img/icon-delivery.png" alt=""></div>
                  <div class="name"><h1 id="oishi4" class="category">OISHI <span id="span4" class="span-class">DELIVERY</span></h1></div>
                </div>
                </button>
              </li>
          </ul>
          <div class="tab-container" id="popup-content" style="padding-top:20px">
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
          let number = 0
          for (i=0; i<data[0].beverage.length; i++){
            display1 += `<div class="col-md-3"><div class="block"><div class="block-img"><span><img class="img-fluid" src="${data[0].beverage[i].img}" alt=""></span><span><img class="img-fluid" src="${data[0].beverage[i].logo}" alt=""></span></div>
                        <div class="block-title"><h2 style="font-size: 24px;font-weight: 600;letter-spacing: 1px;">${data[0].beverage[i].title}</h2><p style="margin-bottom:30px; font-size:14px">${data[0].beverage[i].describe}</p></div>
                        <div class="oishi-button"><a class="inline-popups card-button float-left" href="${data[0].beverage[i].special}">ดูเพิ่มเติม<i class="fa fa-angle-right" aria-hidden="true"></i></a></div></div></div>`
          };
          for (i=0; i<data[1].eato.length; i++){
            display2 += `<div class="col-md-3"><div class="block"><div class="block-img"><span><img class="img-fluid" src="${data[1].eato[i].img}" alt=""></span><span><img class="img-fluid" src="${data[1].eato[i].logo}" alt=""></span></div>
                        <div class="block-title"><h2 style="font-size: 24px;font-weight: 600;letter-spacing: 1px;">${data[1].eato[i].title}</h2><p style="margin-bottom:30px; font-size:14px">${data[1].eato[i].describe}</p></div>
                        <div class="oishi-button"><a id="pop-btn${number}" class="inline-popups card-button float-left" href="#popups">ดูเพิ่มเติม<i class="fa fa-angle-right" aria-hidden="true"></i></a></div></div></div>`
            number++
          };
          for (i=0; i<data[2].restaurant.length; i++){
            display3 += `<div class="col-md-3"><div class="block"><div class="block-img"><span><img class="img-fluid" src="${data[2].restaurant[i].img}" alt=""></span><span><img class="img-fluid" src="${data[2].restaurant[i].logo}" alt=""></span></div>
                        <div class="block-title"><h2 style="font-size: 24px;font-weight: 600;letter-spacing: 1px;">${data[2].restaurant[i].title}</h2><p style="margin-bottom:30px; font-size:14px">${data[2].restaurant[i].describe}</p></div>
                        <div class="oishi-button"><a id="pop-btn${number}" class="inline-popups card-button float-left" href="#popups">ดูเพิ่มเติม<i class="fa fa-angle-right" aria-hidden="true"></i></a></div></div></div>`
            number++
          };
          display4 += `<div class="col-md-3"><div class="block"><div class="block-img"><span><img class="img-fluid" src="https://www.oishigroup.com/upload_file/brand/190621021231_WEB-HOME-F1.jpg" alt="">
                      </span><span><img class="img-fluid" src="https://www.oishigroup.com/upload_file/brand/190621021235_WEB-HOME-19_logo.jpg" alt=""></span></div>
                      <div class="block-title"><h2 style="font-size: 24px;font-weight: 600;letter-spacing: 1px;">OISHI DELIVERY</h2><p style="margin-bottom:30px; font-size:14px">บริการจัดส่งความอร่อยสไตล์ญี่ปุ่นถึงบ้าน เพียงคลิกมาที่ <a style="color:red" href="https://oishidelivery.com/th">www.oishidelivery.com</a></p></div>
                      <div class="oishi-button"><a id="pop-btn${number}" class="inline-popups card-button float-left" href="#popups">ดูเพิ่มเติม<i class="fa fa-angle-right" aria-hidden="true"></i></a></div></div></div>`
          document.getElementById('beverage-content').innerHTML += display1
          document.getElementById('eato-content').innerHTML += display2
          document.getElementById('restaurant-content').innerHTML += display3
          document.getElementById('delivery-content').innerHTML += display4

        }
  </script>
  <script>
        let requestURL1 = './json/brand-popup.json';
        let request1 = new XMLHttpRequest();
        request1.onreadystatechange = function () {
            if (request1.readyState == 4 && request1.status == 200) {
                dataReportStatus1(JSON.parse(request1.responseText));
            } };
        request1.open("GET", requestURL1, true);
        request1.send();

        function dataReportStatus1(data2) {
            let display5 = ""
            for (i=0; i<7; i++){
                display5 +=   `<div id="popup-point${i}" data-effect="mfp-zoom-in" class="white-popup mfp-with-anim mfp-hide clearfix">
                                <div class="popup-text-pic" style="font-size:14px; text-align:center;">
                                  <img class="img-rounded img-fluid" src="${data2[i].img}">
                                  </div>
                                  <div class="mt-4" style="text-align:left">
                                    <h1 style="font-size:24px">${data2[i].title}</h1>
                                    <p>${data2[i].describe}</p>
                                </div>
                                <div class="home-brand" style="margin-top:20px; font-size:18px; color:red; font-weight:normal">
                                <div class="enter-site"  style="text-align:center">
                                  <a href="" style="color:red"><img src="./img/enter-site-icon.png" style="padding-right:5px">เข้าสู่เว็บไซต์</a>
                                </div>
                              </div>
                             </div>`
            }
            document.getElementById('popup-content').innerHTML += display5
            for(i=7; i<11; i++){
              display5 +=   `<div id="popup-point${i}" data-effect="mfp-zoom-in" class="white-popup mfp-with-anim mfp-hide clearfix">
                                <div class="popup-text-pic" style="font-size:14px; text-align:center">
                                  <img class="img-fluid" src="${data2[i].img}">
                                </div>
                                  <div class="mt-4" style="text-align:left">
                                    <h1 style="font-size:24px">${data2[i].title}</h1>
                                    <p>${data2[i].describe}</p>
                                  </div>
                                  <div class="home-brand" style="margin-top:20px; font-size:18px; color:red; font-weight:normal">
                                <div class="enter-site"  style="text-align:center">
                                  <a href="" style="color:red"><img src="./img/enter-site-icon.png" style="padding-right:5px">เข้าสู่เว็บไซต์</a>
                                </div>
                              </div>
                             </div>`
            }
            document.getElementById('popup-content').innerHTML += display5
            display5 +=   `<div id="popup-point${11}" data-effect="mfp-zoom-in" class="white-popup mfp-with-anim mfp-hide clearfix">
                                <div class="popup-text-pic" style="font-size:14px; text-align:center">
                                  <img class="img-fluid" src="${data2[11].img}">
                                </div>
                                  <div class="mt-4" style="text-align:left">
                                    <h1 style="font-size:24px">${data2[11].title}</h1>
                                    ${data2[11].describe}
                                </div>
                                <div class="home-brand" style="margin-top:20px; font-size:18px; color:red; font-weight:normal">
                                <div class="enter-site"  style="text-align:center">
                                  <a href="" style="color:red"><img src="./img/enter-site-icon.png" style="padding-right:5px">เข้าสู่เว็บไซต์</a>
                                </div>
                              </div>
                             </div>`
            document.getElementById('popup-content').innerHTML += display5
            for(i=12; i<15; i++){
              display5 +=`<div id="popup-point${i}" data-effect="mfp-zoom-in" class="white-popup mfp-with-anim mfp-hide clearfix">
                              <div class="popup-text-pic" style="font-size:14px; text-align:center">
                                <img class="img-fluid" src="${data2[i].img}">
                              </div>
                              <div class="mt-4" style="text-align:left">
                                <h1 style="font-size:24px">${data2[i].title}</h1>
                                <p>${data2[i].describe}</p>
                              </div>
                              <div class="home-brand" style="margin-top:20px; font-size:18px; color:red; font-weight:normal">
                                <div class="enter-site" style="text-align:center">
                                  <a href="" style="color:red"><img src="./img/enter-site-icon.png" style="padding-right:5px">เข้าสู่เว็บไซต์</a>
                                </div>
                              </div>
                            </div>`
            }
            document.getElementById('popup-content').innerHTML += display5
        }
    </script>
    <script>
        for (let i = 0; i < 15; i++) {
      $(document).on('click', `#pop-btn${i}`, function(){ // .popup-button คือ class ที่
        $.magnificPopup.open({
            items: {
                src: $(`#popup-point${i}`), // #popup-point id เป้าหมายของ popup ที่จะแสดง
            },
            type: 'inline',
            mainClass: 'mfp-fade'
        });
      });
    }
    </script>

<!-- ไม่ต้องมี tag ปิด body กับ html นะเออ -->
<?php require('footer.php'); ?>
