<!DOCTYPE html>
<html lang="en">
<head>
  <?php require('metalink.php'); ?>
  <!-- เพิ่มเติม stylesheet ได้ตรงนี้เน้อ ต้องเพิ่มด้านล่าง require เท่านั้น!! ไม่ต้องเพิ่ม query boostrap ซ้ำนะ ดูใน metalink.php เลยว่าเราใส่อะไรไว้แล้วบ้าง  -->
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
    button{
        width:100%;
        background-color:#ffffff00;
        border:none;
        border-bottom:solid 2px gray;
    }
    .nav-img{
        width:25%;
        float:left
    }
    .nav-name{
        font-size: 12px;
        text-align:left;
        color:gray
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
  <script>
    let requestURL = ''; 
        let request = new XMLHttpRequest(); 
        request.onreadystatechange = function () { 
            if (request.readyState == 4 && request.status == 200) {             
                dataReportStatus(JSON.parse(request.responseText));            
            } }; 
        request.open("GET", requestURL, true); 
        request.send(); 
        
        function dataReportStatus(data) {

        }
  </script>
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
                    <li><button><img class="nav-img" src="\img\icon-export-1.png"><div><p class="nav-name">โออิชิกรีนที<br>OISHI GREEN TEA</p></div></button></li>
                    <li><button><img class="nav-img" src="\img\icon-export-2.png"><div><p class="nav-name">โออิชิ แบล็คที<br>OISHI BLACK TEA</p></div></button></li>
                    <li><button><img class="nav-img" src="\img\icon-export-3.png"><div><p class="nav-name">โออิชิ ชาคูลล์ซ่า<br>OISHI CHAKULZA</p></div></button></li>
                    <li><button><img class="nav-img" src="\img\icon-export-4.png"><div><p class="nav-name">จับใจ<br>JUBJAI</p></div></button></li>
                    <li><button><img class="nav-img" src="\img\icon-export-5.png"><div><p class="nav-name">โออิชิ โกลด์<br>OISHI GOLD</p></div></button></li>
                </ul>
                <div class="tabs-content" stlye="padding-top:20px">
                    <div id="green-tea">
                        <div class="col-md-3">
                            <div class="product-block">
                                <a href="">
                                    <div class="product-img-block">
                                        <img src="\img\export-product\greentea1.png" class="product-img">
                                    </div>
                                    <div class="product-title">
                                        <h2 style="font-size:14px;text-align:center">
                                            OISHI GREEN TEA HONEY LEMON
                                            <br>
                                            (180 ML)
                                        </h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product-block">
                                <a href="">
                                    <div class="product-img-block">
                                        <img src="\img\export-product\greentea2.png" class="product-img">
                                    </div>
                                    <div class="product-title">
                                        <h2 style="font-size:14px;text-align:center">
                                            OISHI GREEN TEA ORIGINAL
                                            <br>
                                            (180 ML)
                                        </h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product-block">
                                <a href="">
                                    <div class="product-img-block">
                                        <img src="\img\export-product\greentea3.png" class="product-img">
                                    </div>
                                    <div class="product-title">
                                        <h2 style="font-size:14px;text-align:center">
                                            OISHI GREEN TEA GENMAI
                                            <br>
                                            (180 ML)
                                        </h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product-block">
                                <a href="">
                                    <div class="product-img-block">
                                        <img src="\img\export-product\greentea4.png" class="product-img">
                                    </div>
                                    <div class="product-title">
                                        <h2 style="font-size:14px;text-align:center">
                                            OISHI GREEN TEA KYOHO GRAPE
                                            <br>
                                            (180 ML)
                                        </h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product-block">
                                <a href="">
                                    <div class="product-img-block">
                                        <img src="\img\export-product\greentea5.png" class="product-img">
                                    </div>
                                    <div class="product-title">
                                        <h2 style="font-size:14px;text-align:center">
                                            OISHI GREEN TEA 
                                            <br>
                                            (350 ML)
                                        </h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product-block">
                                <a href="">
                                    <div class="product-img-block">
                                        <img src="\img\export-product\greentea6.png" class="product-img">
                                    </div>
                                    <div class="product-title">
                                        <h2 style="font-size:14px;text-align:center">
                                            OISHI GREEN TEA ORIGINAL
                                            <br>
                                            (350 ML)
                                        </h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product-block">
                                <a href="">
                                    <div class="product-img-block">
                                        <img src="\img\export-product\greentea7.png" class="product-img">
                                    </div>
                                    <div class="product-title">
                                        <h2 style="font-size:14px;text-align:center">
                                            OISHI GREEN TEA GENMAI
                                            <br>
                                            (350 ML)
                                        </h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product-block">
                                <a href="">
                                    <div class="product-img-block">
                                        <img src="\img\export-product\greentea8.png" class="product-img">
                                    </div>
                                    <div class="product-title">
                                        <h2 style="font-size:14px;text-align:center">
                                            OISHI GREEN TEA WATERMELON
                                            <br>
                                            (380 ML)
                                        </h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product-block">
                                <a href="">
                                    <div class="product-img-block">
                                        <img src="\img\export-product\greentea9.png" class="product-img">
                                    </div>
                                    <div class="product-title">
                                        <h2 style="font-size:14px;text-align:center">
                                            OISHI GREEN TEA DOUBLE LEMON
                                            <br>
                                            (380 ML)
                                        </h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product-block">
                                <a href="">
                                    <div class="product-img-block">
                                        <img src="\img\export-product\greentea10.png" class="product-img">
                                    </div>
                                    <div class="product-title">
                                        <h2 style="font-size:14px;text-align:center">
                                            OISHI GREEN TEA HONEY LEMON
                                            <br>
                                            (380 ML)
                                        </h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product-block">
                                <a href="">
                                    <div class="product-img-block">
                                        <img src="\img\export-product\greentea11.png" class="product-img">
                                    </div>
                                    <div class="product-title">
                                        <h2 style="font-size:14px;text-align:center">
                                            OISHI GREEN TEA ORIGINAL
                                            <br>
                                            (380 ML)
                                        </h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product-block">
                                <a href="">
                                    <div class="product-img-block">
                                        <img src="\img\export-product\greentea12.png" class="product-img">
                                    </div>
                                    <div class="product-title">
                                        <h2 style="font-size:14px;text-align:center">
                                            OISHI GREEN TEA GENMAI
                                            <br>
                                            (380 ML)
                                        </h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product-block">
                                <a href="">
                                    <div class="product-img-block">
                                        <img src="\img\export-product\greentea13.png" class="product-img">
                                    </div>
                                    <div class="product-title">
                                        <h2 style="font-size:14px;text-align:center">
                                            OISHI GREEN TEA KYOHO GRAPE
                                            <br>
                                            (380 ML)
                                        </h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product-block">
                                <a href="">
                                    <div class="product-img-block">
                                        <img src="\img\export-product\greentea14.png" class="product-img">
                                    </div>
                                    <div class="product-title">
                                        <h2 style="font-size:14px;text-align:center">
                                            OISHI GREEN TEA HONEY LEMON
                                            <br>
                                            (500 ML)
                                        </h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product-block">
                                <a href="">
                                    <div class="product-img-block">
                                        <img src="\img\export-product\greentea15.png" class="product-img">
                                    </div>
                                    <div class="product-title">
                                        <h2 style="font-size:14px;text-align:center">
                                            OISHI GREEN TEA GENMAI
                                            <br>
                                            (500 ML)
                                        </h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product-block">
                                <a href="">
                                    <div class="product-img-block">
                                        <img src="\img\export-product\greentea16.png" class="product-img">
                                    </div>
                                    <div class="product-title">
                                        <h2 style="font-size:14px;text-align:center">
                                            OISHI GREEN TEA ORIGINAL
                                            <br>
                                            (500 ML)
                                        </h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product-block">
                                <a href="">
                                    <div class="product-img-block">
                                        <img src="\img\export-product\greentea17.png" class="product-img">
                                    </div>
                                    <div class="product-title">
                                        <h2 style="font-size:14px;text-align:center">
                                            OISHI GREEN TEA HONEY LEMON
                                            <br>
                                            (800 ML)
                                        </h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product-block">
                                <a href="">
                                    <div class="product-img-block">
                                        <img src="\img\export-product\greentea18.png" class="product-img">
                                    </div>
                                    <div class="product-title">
                                        <h2 style="font-size:14px;text-align:center">
                                            OISHI GREEN TEA GENMAI
                                            <br>
                                            (800 ML)
                                        </h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php
                    $jsonobj = '.\json\export.json';

                    $data = json_decode($jsonobj, true);

                    echo '<div class="col-md-3"><div class="product-block"><a href=""><div class="product-img-block"><img src='
                    
                    ?>
                    <div id="black-tea"></div>
                    <div id="chakulza"></div>
                    <div id="jubjai"></div>
                    <div id="gold"></div>
                </div>
            </div>
        </div>
    </div>
  </section>

<!-- ไม่ต้องมี tag ปิด body กับ html นะเออ -->
<?php require('footer.php'); ?>