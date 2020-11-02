<!DOCTYPE html>
<html lang="en">
<head>
  <?php require('metalink.php'); ?>
  <!-- เพิ่มเติม stylesheet ได้ตรงนี้เน้อ ต้องเพิ่มด้านล่าง require เท่านั้น!! ไม่ต้องเพิ่ม query boostrap ซ้ำนะ ดูใน metalink.php เลยว่าเราใส่อะไรไว้แล้วบ้าง  -->
  <script>
        $(document).ready(function(){
            $("#btn1").click(function(){
                $("#greem-tea").fadeIn(1000);
                $("#black-tea").fadeOut(0);
                $("#chakulza").fadeOut(0);
                $("#jubjai").fadeOut(0);
                $("#gold").fadeOut(0);

            });
            $("#btn2").click(function(){
                $("#green-tea").fadeOut(0);
                $("#black-tea").fadeIn(1000);
                $("#chakulza").fadeOut(0);
                $("#jubjai").fadeOut(0);
                $("#gold").fadeOut(0);
                   
            });
            $("#btn3").click(function(){
                $("#greem-tea").fadeOut(0);
                $("#black-tea").fadeOut(0);
                $("#chakulza").fadeIn(1000);
                $("#jubjai").fadeOut(0);
                $("#gold").fadeOut(0);
        
            });
            $("#btn4").click(function(){
                $("#greem-tea").fadeOut(0);
                $("#black-tea").fadeOut(0);
                $("#chakulza").fadeIn(1000);
                $("#jubjai").fadeOut(0);
                $("#gold").fadeOut(0);
                
            });
            $("#btn5").click(function(){
                $("#green-tea").fadeOut(0);
                $("#black-tea").fadeOut(0);
                $("#chakulza").fadeIn(1000);
                $("#jubjai").fadeOut(0);
                $("#gold").fadeOut(0);
                
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
    li{
        width:20%;
    }
    .nav-btn{
        width:100%;
        background-color:#ffffff00;
        border:none;
        border-bottom:solid 2px gray;
        color:gray
    }
    .nav-img{
        width:25%;
        float:left
    }
    .nav-name{
        font-size: 12px;
        text-align:left;
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
            <div class="header">
                <h2 class="text-center"><span>EXPORT </span> MARKET</h2>
                <p style="margin-top:30px">
                    At present, our product are exported to international market.
                    <br>
                    <b>Asia :</b>
                    Laos ,Cambodia , Myanmar , Brunei , Australia , New Zealand 
                    <br>
                    <b>EU :</b>
                    Germany , Switzerland , Hungary , St.Martin , Barbados , Czech Republic , Slovakia , Reunion , Russia , Netherlands , Finland
                    <br>
                    However , we are expanding oue presence in overseas market for RTD green tea products and if any interest
                    <br>
                    Please contact at beverageexport@oishigroup.com
                </p>
                <h4>Tel : (+66) 02785 8870</h4>
            </div>
        </div>
        <div class="container clearfix">
            <div class="header">
                <h2><span>PRODUCT  FOR </span> EXPORT</h2>
            </div>
        </div>
        <div class="container clearfix">
            <div class="tabs">
                <ul class="nav nav-bar" style="padding-bottom:50px">
                    <li><button class="nav-btn" id="btn1" style="border-bottom-color:rgb(179, 0, 0);color:red"><img class="nav-img" src="\img\icon-export-1.png"><div><p class="nav-name">โออิชิกรีนที<br>OISHI GREEN TEA</p></div></button></li>
                    <li><button class="nav-btn" id="btn2"><img class="nav-img" src="\img\icon-export-2.png"><div><p class="nav-name">โออิชิ แบล็คที<br>OISHI BLACK TEA</p></div></button></li>
                    <li><button class="nav-btn" id="btn3"><img class="nav-img" src="\img\icon-export-3.png"><div><p class="nav-name">โออิชิ ชาคูลล์ซ่า<br>OISHI CHAKULZA</p></div></button></li>
                    <li><button class="nav-btn" id="btn4"><img class="nav-img" src="\img\icon-export-4.png"><div><p class="nav-name">จับใจ<br>JUBJAI</p></div></button></li>
                    <li><button class="nav-btn" id="btn5"><img class="nav-img" src="\img\icon-export-5.png"><div><p class="nav-name">โออิชิ โกลด์<br>OISHI GOLD</p></div></button></li>
                </ul>
                <div class="tabs-content" stlye="padding-top:20px">
                    <div id="green-tea" style="display:none">
                        <?php
                        $url = file_get_contents('./json/export.json');
                        $data = json_decode($url);
                        for ($i=0 ; $i<18; $i++){
                            echo '<div class="col-md-3"><div class="product-block"><a href="" id="greentea-btn'.$i.'"><div class="product-img-block"><img src="' .$data[$i]->img. '"class="product-img">
                            </div><div class="product-title"><h2 style="font-size:14px;text-align:center">' . $data[$i]->title . '<br>' . $data[$i]->volume . '</h2></div></a></div></div>';
                        };
                    ?>
                    </div>
                    
                    <div id="black-tea" style="display:none"></div>
                    <div id="chakulza" style="display:none"></div>
                    <div id="jubjai" style="display:none"></div>
                    <div id="gold" style="display:none"></div>
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
            let display1 = ""
            let display2 = ""
            let display3 = ""
            let display4 = ""
            for (i=0; i<data.length; i++){
                display1 += `<div class="col-md-3"><div class="product-block"><a href="" id="gold-btn${i}"><div class="product-img-block"><img src="${data[i].img}"class="product-img">
                            </div><div class="product-title"><h2 style="font-size:14px;text-align:center">${data[i].title}<br>${data[i].volume}</h2></div></a></div></div>`
            }
            display2 += `<div class="col-md-3"><div class="product-block"><a href="" id="blacktea-btn0"><div class="product-img-block"><img src="./img/export-product/blacktea1.png" class="product-img">
                            </div><div class="product-title"><h2 style="font-size:14px;text-align:center">OISHI BLACK TEA LEMON<br>(500 ML)</h2></div></a></div></div>`
            display3 += `<div class="col-md-3"><div class="product-block"><a href="" id="blacktea-btn0"><div class="product-img-block"><img src="./img/export-product/chakulza1.png" class="product-img">
                            </div><div class="product-title"><h2 style="font-size:14px;text-align:center">OISHI CHAKULZA HONEY LEMON<br>(440 ML)</h2></div></a></div></div>`
            display4 += `<div class="col-md-3"><div class="product-block"><a href="" id="blacktea-btn0"><div class="product-img-block"><img src="./img/export-product/jubjai1.png" class="product-img">
                            </div><div class="product-title"><h2 style="font-size:14px;text-align:center">JUBJAI<br>(500 ML)</h2></div></a></div></div>`
            document.getElementById('gold').innerHTML += display1
            document.getElementById('black-tea').innerHTML += display2
            document.getElementById('chakulza').innerHTML += display3
            document.getElementById('jubjai').innerHTML += display4
        }
    </script> 
<!-- ไม่ต้องมี tag ปิด body กับ html นะเออ -->
<?php require('footer.php'); ?>