<!DOCTYPE html>
<html lang="en">
<head>
  <?php require('metalink.php'); ?>
  <!-- เพิ่มเติม stylesheet ได้ตรงนี้เน้อ ต้องเพิ่มด้านล่าง require เท่านั้น!! ไม่ต้องเพิ่ม query boostrap ซ้ำนะ ดูใน metalink.php เลยว่าเราใส่อะไรไว้แล้วบ้าง  -->
<style>
    .pro-image{
        margin-bottom:30px;
    }
    .pro-title{
        color:#555;
        font-size:14px
    }
    .pro-date{
        margin-top: 30px !important;
        color:#f01c24;
        font-size:14px;
    }
    .pro-img{
        width:100%;
    }
    .white-popup{
      max-width:500px
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
              <img src="https://www.oishigroup.com/upload_file/banner/200102103106_AW_OISHIGRAND_Banner_CrispyPork_Sushi_w1750xh648px.jpg" alt="" style="width: 100%">
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
    <div class="container clearfix" style="padding-top:50px;padding-bottom:30px">
      <h1 class="text-center" style="font-size:36px; color:red; font-weight: normal">OISHI <span style="color:#333">PROMOTION</span></h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="pro-image">
                    <img class="pro-img" src="https://oishifood.com/upload_file/promotion/201102044217_HamTofu-800px.jpg" alt="">
                </div>
                <div class="pro-title">
                    <h2 style="font-size:18px; margin-bottom:10px;letter-spacing: 1px;">คาคาชิ ข้าวหน้าล้นสไตล์ญี่ปุ่น ขอเสนอ 2 เมนูใหม่</h2>
                </div>
                <div class="pro-date">
                    <p>1 พฤศจิกายน - 31 ธันวาคม 2563</p>
                </div>
                <div class="oishi-button">
                    <a id="pop-btn1" class="inline-popups card-button float-left" href="#popups">รายละเอียด<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="pro-image">
                    <img class="pro-img" src="https://oishifood.com/upload_file/promotion/201026074957_02-800x800px-Duoset.jpg" alt="">
                </div>
                <div class="pro-title">
                    <h2 style="font-size:18px; margin-bottom:10px;letter-spacing: 1px;">คาคาชิ เซทโตะ</h2>
                </div>
                <div class="pro-date">
                    <p>12 ตุลาคม - 30 พฤศจิกายน 2563</p>
                </div>
                <div class="oishi-button">
                    <a id="pop-btn2" class="inline-popups card-button float-left" href="#popups">รายละเอียด<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="pro-image">
                    <img class="pro-img" src="https://oishifood.com/upload_file/promotion/200930111728_Rm_NPD%20800x800px.jpg" alt="">
                </div>
                <div class="pro-title">
                    <h2 style="font-size:18px; margin-bottom:10px;letter-spacing: 1px;">ใหม่ ! การ์ลิค บูตะ ทงคตสึ ราเมน</h2>
                </div>
                <div class="pro-date">
                    <p>1 ตุลาคม - 30 พฤศจิกายน 2563</p>
                </div>
                <div class="oishi-button">
                    <a id="pop-btn3" class="inline-popups card-button float-left" href="#popups">รายละเอียด<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <div id="popup-point1" data-effect="mfp-zoom-in" class="white-popup mfp-with-anim mfp-hide clearfix">
            <div class="popup-text-pic">
                <img class="img-fluid" src="https://oishifood.com/upload_file/promotion/201102044217_HamTofu-800px.jpg">
                <div class="mt-4" style="font-size:15px;margin-top:50px">
                    <p style="font-family: 'Kanit-Light', sans-serif;color:#555">คาคาชิ ข้าวหน้าล้นสไตล์ญี่ปุ่น ขอเสนอ 2 เมนูใหม่ “ข้าวหน้าฮัมบากุ” สเต็กหมูชิ้นโต ราดด้วยซอสสไตล์ญี่ปุ่นฉ่ำๆ พร้อมไข่ดาวบนข้าวสวยญี่ปุ่นร้อน ๆ<br><br>
                    เสิร์ฟคู่กับ โออิชิ ชาเขียว และ ซุปมิโซะ เพียง 169 บาท สำหรับเมนูทานเล่น ขอเสนอ “เต้าหู้ทอดซอสเรดมิโซะ” เต้าหู้คุนิชุบแป้งทอดสูตร<br><br>
                    พิเศษจากทางร้าน ทานคู่กับซอสเรดมิโซะ ที่ให้รสชาติ หวานเค็ม กำลังดี 6 ชิ้น เพียง 79 บาท เท่านั้น ให้คุณได้อิ่มอร่อยคุ้ม ๆ กันได้แล้ววันนี้ที่<br><br>
                    คาคาชิ ทุกสาขา (ยกเว้น สาขา รพ. จุฬา และ สาขา ตึก TBQ)</p>
                    <p style="margin-top:30px; color:#f01c24">1 พฤศจิกายน - 31 ธันวาคม 2563</p>
                </div>
            </div>
        </div>
        <div id="popup-point2" data-effect="mfp-zoom-in" class="white-popup mfp-with-anim mfp-hide clearfix">
            <div class="popup-text-pic">
                <img class="img-fluid" src="https://oishifood.com/upload_file/promotion/201026074957_02-800x800px-Duoset.jpg">
                <div class="mt-4" style="font-size:15px;margin-top:50px">
                    <p style="font-family: 'Kanit-Light', sans-serif;color:#555">อร่อยสุดคุ้ม ! กับชุดอิ่มเล็ก ประกอบด้วย ข้าวหน้าหมูเกาลี เสิร์ฟคู่พร้อม ชาเขียวแก้วใหญ่ และ เกี๊ยวซ่า 3 ชิ้น (ภายในเซทสามารถเปลี่ยนเป็นกุ้งเทมปุระ 2 ชิ้นได้ <br><br>
                    และ ชุดอิ่มล้น ประกอบด้วย ข้าวหน้าล้นสไปซี่ไข่ออนเซน เสิร์ฟคู่พร้อม ชาเขียวแก้วใหญ่ และ กุ้งเทมปุระ 2 ชิ้น (ภายในเซทสามารถเปลี่ยนเป็น เกี๊ยวซ่า 3 ชิ้นได้) ให้คุณได้อิ่มอร่อยคุ้ม ๆ กันได้แล้ววันนี้ที่ คาคาชิ ทุกสาขา (ยกเว้น สาขารพ. จุฬา และ สาขา ตึก TBQ)</p>
                    <p style="margin-top:30px; color:#f01c24">12 ตุลาคม - 30 พฤศจิกายน 2563</p>
                </div>
            </div>
        </div>
        <div id="popup-point3" data-effect="mfp-zoom-in" class="white-popup mfp-with-anim mfp-hide clearfix">
            <div class="popup-text-pic">
                <img class="img-fluid" src="https://oishifood.com/upload_file/promotion/200930111728_Rm_NPD%20800x800px.jpg">
                <div class="mt-4" style="font-size:15px;margin-top:50px ">
                    <p style="font-family: 'Kanit-Light', sans-serif;color:#555">ซุปทงคตสึเข้มข้น ที่มีส่วนผสมของกระเทียมสดในน้ำซุป จึงทำให้ รสชาติของซุปมีความกลมกล่อมและเข้มข้นมากยิ่งขึ้น เสิร์ฟพร้อมหมูย่าง 4 ชิ้นโต ๆ ปิดท้ายด้วยโรยกระเทียมทอด เพื่อเพิ่มกลิ่นที่หอมจนคุณอดใจไม่ไหว จะอิ่มแบบเดี่ยว หรือ อิ่มแบบเซตคู่กับ โออิชิ กรีนทีชาเขียวรีฟิลก็คุ้มสุด ๆ เพียง 189 บาท <br><br>
                    ท้าให้คุณได้อิ่มอร่อยได้แล้ว วันนี้ – 30 พฤศจิกายน 2563 ที่ โออิชิ ราเมน ทุกสาขา และ ช่องทาง Food Aggregator ทุกแบรนด์ที่ร่วมรายการ</p>
                    <p style="margin-top:30px; color:#f01c24">1 ตุลาคม - 30 พฤศจิกายน 2563</p>
                </div>
            </div>
        </div>

    </div>
    <script>
        for (let i = 1; i < 4; i++) {
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
  </section>

<!-- ไม่ต้องมี tag ปิด body กับ html นะเออ -->
<?php require('footer.php'); ?>