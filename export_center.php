<!DOCTYPE html>
<html lang="en">
<head>
  <?php require('metalink.php'); ?>
  <!-- เพิ่มเติม stylesheet ได้ตรงนี้เน้อ ต้องเพิ่มด้านล่าง require เท่านั้น!! ไม่ต้องเพิ่ม query boostrap ซ้ำนะ ดูใน metalink.php เลยว่าเราใส่อะไรไว้แล้วบ้าง  -->
  <script>
        $(document).ready(function(){
            $("#btn1").click(function(){
                $("#green-tea").fadeIn(1000);
                $("#black-tea").fadeOut(0);
                $("#chakulza").fadeOut(0);
                $("#jubjai").fadeOut(0);
                $("#gold").fadeOut(0);
                $( ".nav-btn" ).css( "border-bottom", "2px solid black");
                $( ".nav-btn" ).css( "color", "black");
                $("#btn1").css("border-bottom", "2px solid rgb(179, 0, 0)");
                $("#btn1").css("color", "red")
                

            });
            $("#btn2").click(function(){
                $("#green-tea").fadeOut(0);
                $("#black-tea").fadeIn(1000);
                $("#chakulza").fadeOut(0);
                $("#jubjai").fadeOut(0);
                $("#gold").fadeOut(0);
                $( ".nav-btn" ).css( "border-bottom", "2px solid black");
                $( ".nav-btn" ).css( "color", "black");
                $("#btn2").css("border-bottom", "2px solid rgb(179, 0, 0)");
                $("#btn2").css("color", "red")
                   
            });
            $("#btn3").click(function(){
                $("#green-tea").fadeOut(0);
                $("#black-tea").fadeOut(0);
                $("#chakulza").fadeIn(1000);
                $("#jubjai").fadeOut(0);
                $("#gold").fadeOut(0);
                $( ".nav-btn" ).css( "border-bottom", "2px solid black");
                $( ".nav-btn" ).css( "color", "black");
                $("#btn3").css("border-bottom", "2px solid rgb(179, 0, 0)");
                $("#btn3").css("color", "red")
        
            });
            $("#btn4").click(function(){
                $("#green-tea").fadeOut(0);
                $("#black-tea").fadeOut(0);
                $("#chakulza").fadeOut(0);
                $("#jubjai").fadeIn(1000);
                $("#gold").fadeOut(0);
                $( ".nav-btn" ).css( "border-bottom", "2px solid black");
                $( ".nav-btn" ).css( "color", "black");
                $("#btn4").css("border-bottom", "2px solid rgb(179, 0, 0)");
                $("#btn4").css("color", "red")
                
            });
            $("#btn5").click(function(){
                $("#green-tea").fadeOut(0);
                $("#black-tea").fadeOut(0);
                $("#chakulza").fadeOut(0);
                $("#jubjai").fadeOut(0);
                $("#gold").fadeIn(1000);
                $( ".nav-btn" ).css( "border-bottom", "2px solid black");
                $( ".nav-btn" ).css( "color", "black");
                $("#btn5").css("border-bottom", "2px solid rgb(179, 0, 0)");
                $("#btn5").css("color", "red")
                
            });
        });
    </script>
  <style>
    span{
        color:red;
    }
    .header{
        padding-top:50px;
        padding-bottom:30px;
        text-align:center
    }
    .li-size{
        width:20%;
    }
    .nav-btn{
        width:100%;
        background-color:#ffffff00;
        border:none;
        border-bottom:solid 2px lightgray;
        color:black;
        height: 70px;
    }
    .nav-img{
        width:25%;
        float:left;
        vertical-align: middle;
    }
    .nav-name{
        font-size: 16px;
        text-align:left;
        font-weight: normal;
    }
    .col-md-3{
        padding-left:15px;
        padding-right:15px;
        float:left;
    }
    .product-block{
        padding-bottom:50px;
        border-bottom:2px solid #F5F5F5;
        margin-bottom:50px;
    }
    .product-img-block{
        width:100%;
        height:auto;
        margin-bottom:30px;
    }
    .product-img{
        width:100%
    }
    .inline-popups{
        float: left !important;
    }
  </style>
  
</head>
<body>
  <!-- แถบบาร์ด้านบน -->
  <?php require('header.php'); ?>

  <!-- รูปด้านบน ถัดจาก menubar สีเทาด้านบน -->
  <!-- เริ่ม slide show รูปด้านบน {อย่าลบ section เด็ดขาด!!!} -->
  <section id="slider" class="swiper_wrapper clearfix" data-loop="true" data-autoplay="5000">
    <img src="\img\export_banner.jpg" style="width:100%">
  </section>

  <!-- slide show ลายพู่กันด้านล่าง -->
  <div class="content-bg">
    <img class="img-fluid" src="./img/content-bg.png">
  </div>
  <!-- สิ้นสุด slide show รูปด้านบน -->

  <!-- เนื้อหา {อย่าลบ section เด็ดขาด!!!} -->
  <section id="content" style="z-index: 20 !important;">
    <div class="content" style="">
        <div class="container clearfix">
            <div class="header" style="color:lightgray">
                <h1 style="font-size: 36px;color: red;font-weight: normal;" class="text-center">EXPORT<span style="font-size: 36px;color: #333;font-weight: normal;"> MARKET</span></h1>
                <p style="margin-top:30px;color: #666;font-weight: normal;font-size: 16px;line-height: 1.5 !important;margin-bottom:0px">
                    At present, our product are exported to international market.
                    <br>
                    <b style="color: #000;font-weight: 600;">Asia :</b>
                    Laos ,Cambodia , Myanmar , Brunei , Australia , New Zealand 
                    <br>
                    <b style="color: #000;font-weight: 600;">EU :</b>
                    Germany , Switzerland , Hungary , St.Martin , Barbados , Czech Republic , Slovakia , Reunion , Russia , Netherlands , Finland
                    <br>
                    However , we are expanding oue presence in overseas market for RTD green tea products and if any interest
                    <br>
                    Please contact at beverageexport@oishigroup.com
                </p>
                <h2 style="font-size: 20px;color: #666666;font-weight: normal;">Tel : (+66) 02785 8870</h2>
            </div>
        </div>
        <div class="container clearfix">
            <div class="header">
                <h1 style="font-size: 36px;color: red;font-weight: normal;">PRODUCT  FOR <span style="font-size: 36px;color: #333;font-weight: normal;">EXPORT</span></h1>
            </div>
        </div>
        <div class="container clearfix">
            <div class="tabs">
                <ul class="nav nav-bar" style="padding-bottom:50px">
                    <li class="li-size"><button class="nav-btn" id="btn1" style="border-bottom-color:rgb(179, 0, 0);color:red"><img class="nav-img" src="\img\icon-export-1.png"><div><h1 class="nav-name">โออิชิกรีนที</h1><h2 style="font-size:12px; float:left">OISHI GREEN TEA</h2></div></button></li>
                    <li class="li-size"><button class="nav-btn" id="btn2"><img class="nav-img" src="\img\icon-export-2.png"><div><h1 class="nav-name">โออิชิ แบล็คที</h1><h2 style="font-size:12px; float:left">OISHI BLACK TEA</h2></div></button></li>
                    <li class="li-size"><button class="nav-btn" id="btn3"><img class="nav-img" src="\img\icon-export-3.png"><div><h1 class="nav-name">โออิชิ ชาคูลล์ซ่า</h1><h2 style="font-size:12px; float:left">OISHI CHAKULZA</h2></div></button></li>
                    <li class="li-size"><button class="nav-btn" id="btn4"><img class="nav-img" src="\img\icon-export-4.png"><div><h1 class="nav-name">จับใจ</h1><h2 style="font-size:12px; float:left">JUBJAI</h2></div></button></li>
                    <li class="li-size"><button class="nav-btn" id="btn5"><img class="nav-img" src="\img\icon-export-5.png"><div><h1 class="nav-name">โออิชิ โกลด์</h1><h2 style="font-size:12px; float:left">OISHI GOLD</h2></div></button></li>
                </ul>
                <div class="tabs-content" stlye="padding-top:20px">
                    <div id="green-tea" style="display:"></div>
                    <div id="black-tea" style="display:none"></div>
                    <div id="chakulza" style="display:none"></div>
                    <div id="jubjai" style="display:none"></div>
                    <div id="gold" style="display:none">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
  <script>
        let requestURL = './json/oishigold.json'; 
        let request = new XMLHttpRequest(); 
        request.onreadystatechange = function () { 
            if (request.readyState == 4 && request.status == 200) {             
                dataReportStatus(JSON.parse(request.responseText));            
            } }; 
        request.open("GET", requestURL, true); 
        request.send(); 
        
        function dataReportStatus(data) { 
            let display = ""
            let display1 = ""
            let display2 = ""
            let display3 = ""
            let display4 = ""
            for (i=0; i<5; i++){
                display1 += `<div class="col-md-3"><div class="product-block"><a href="" id="popup-point${i}"><div class="product-img-block"><img src="${data[i].img}"class="product-img">
                            </div><div class="product-title"><h2 style="font-size:14px;text-align:center">${data[i].title}<br>${data[i].volume}</h2></div></a></div></div>`
            }
            for (i=5; i<23; i++){
                display += `<div class="col-md-3"><div class="product-block"><a href="" id="popup-point${i}"><div class="product-img-block"><img src="${data[i].img}"class="product-img">
                            </div><div class="product-title"><h2 style="font-size:14px;text-align:center">${data[i].title}<br>${data[i].volume}</h2></div></a></div></div>`
            }
            display2 += `<div class="col-md-3"><div class="product-block"><a href="" id="popup-point23"><div class="product-img-block"><img src="./img/export-product/blacktea1.png" class="product-img">
                            </div><div class="product-title"><h2 style="font-size:14px;text-align:center">OISHI BLACK TEA LEMON<br>(500 ML)</h2></div></a></div></div>`
            display3 += `<div class="col-md-3"><div class="product-block"><a href="" id="popup-point24"><div class="product-img-block"><img src="./img/export-product/chakulza1.jpg" class="product-img">
                            </div><div class="product-title"><h2 style="font-size:14px;text-align:center">OISHI CHAKULZA HONEY LEMON<br>(440 ML)</h2></div></a></div></div>`
            display4 += `<div class="col-md-3"><div class="product-block"><a href="" id="popup-point25"><div class="product-img-block"><img src="./img/export-product/jubjai1.jpg" class="product-img">
                            </div><div class="product-title"><h2 style="font-size:14px;text-align:center">JUBJAI<br>(500 ML)</h2></div></a></div></div>`
            document.getElementById('gold').innerHTML += display1
            document.getElementById('black-tea').innerHTML += display2
            document.getElementById('chakulza').innerHTML += display3
            document.getElementById('jubjai').innerHTML += display4
            document.getElementById('green-tea').innerHTML += display
        }
    </script>
    <script>
        let requestURL = './json/export-popup.json'; 
        let request = new XMLHttpRequest(); 
        request.onreadystatechange = function () { 
            if (request.readyState == 4 && request.status == 200) {             
                dataReportStatus(JSON.parse(request.responseText));            
            } }; 
        request.open("GET", requestURL, true); 
        request.send(); 
        
        function dataReportStatus(data2) {
            let display = ""
            for (i=0; i<25; i++){
                display += `<div id="popup-point${i}" data-effect="mfp-zoom-in" class="white-popup mfp-with-anim mfp-hide clearfix"><div class="popup-text-pic">`
                display += `<img class="img-fluid" src="${data2[i].img}"></div></div>`
            }
            body.innerHTML += display
        }
    </script>
    <script>
        for (let i = 0; i < 26; i++) {
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
    </script>
    
<!-- ไม่ต้องมี tag ปิด body กับ html นะเออ -->
<?php require('footer.php'); ?>