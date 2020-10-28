<!DOCTYPE html>
<html lang="en">
<head>
  <?php require('metalink.php'); ?>
  <style>
a {
  color: #333;
  text-decoration: none;
}
a:hover {
  color: red;
  text-decoration: none;
}
center {
    width: 50%;
    margin-left: auto;
    margin-right: auto;
}
.bust{
    border-radius: 100%;
    width: 100%;
}
hr.red{
  background: red;
}
.title{
  color:gray;
}
  </style>
</head>
<body>

  <?php require('header.php'); ?>

  <!-- รูปด้านบน ถัดจาก menubar สีเทาด้านบน -->
  <img class="img-fluid" src="./img/banner.jpg">
  <!-- slide show ลายพู่กันด้านล่าง -->
  <div class="content-bg">
    <img class="img-fluid" src="./img/content-bg.png">
  </div>
  <!-- สิ้นสุด slide show รูปด้านบน -->

  <!-- เนื้อหา -->
  <section id="content" style="z-index: 20 !important;">
      <div class="container">
        <div class="row">
          
          <?php require('sub-bar.php'); ?>
          <div class="col-md-9"><!--Right colum-->
                    <h1>คณะกรรมการบริษัท</h1><br>
                    <!--row1-->
                    <div class="row">
                        <div class="col-4">
                            <img class="bust mx-auto d-block" src="./img/prasit.jpg"><hr class="red">
                            <h6>นายประสิทธิ์ โฆวิไลกูล</h6>
                            <p class="title">ประธานกรรมการ<br>กรรมการอิสระ<br>กรรมการสรรหา<br>และกรรมการกำหนดค่าตอบแทน</p>
                            
                        </div>
                        <div class="col-4">
                            <img class="bust mx-auto d-block" src="./img/ueychai.jpg"><hr class="red">
                            <h6>นายอวยชัย ตันทโอภาส</h6>
                            <p class="title">ประธานกรรมการ<br>กรรมการอิสระ<br>กรรมการสรรหา<br>กรรมการกำหนดค่าตอบแทน<br>และกรรมการกำกับดูแลกิจการที่ดี</p>
                        </div>
                        <div class="col-4">
                            <img class="bust mx-auto d-block" src="./img/vikrom.jpg"><hr class="red">
                            <h6>นายวิกรม คุ้มไพโรจน์</h6>
                            <p class="title">กรรมการอิสระ<br>ประธานกรรมการตรวจสอบ<br>ประธานกรรมการสรรหา<br>กรรมการกำหนดค่าตอบแทน<br>และกรรมการกำกับดูแลกิจการที่ดี</p>
                        </div>
                    </div>
                    <!--row2-->
                    <div class="row">
                        <div class="col-4">
                            <img class="bust mx-auto d-block" src="./img/potjanee.jpg"><hr class="red">
                            <h6>นางสาวพจนีย์ ธนวรานิช</h6>
                            <p class="title">กรรมการอิสระ<br>กรรมการตรวจสอบ<br>ประธานกรรมการกำหนดค่าตอบแทน<br>และประธานกรรมการกำกับดูแลกิจการที่ดี</p>
                        </div>
                        <div class="col-4">
                            <img class="bust mx-auto d-block" src="./img/chai.jpg"><hr class="red">
                            <h6>นายชัย จรุงธนาภิบาล</h6>
                            <p class="title">กรรมการอิสระ<br>กรรมการตรวจสอบ<br>ประธานกรรมการบริหารความยั่งยืนและความเสี่ยง<br>และกรรมการกำกับดูแลกิจการที่ดี</p>
                        </div>
                        <div class="col-4">
                            <img class="bust mx-auto d-block" src="./img/sithichai.jpg"><hr class="red">
                            <h6>นายสิทธิชัย ชัยเกรียงไกร</h6>
                            <p class="title">กรรมการ<br>รองประธานกรรมการบริหาร คนที่ 1<br>และกรรมการกำหนดค่าตอบแทน</p>
                        </div>
                    </div>
                    <!--row3-->
                    <div class="row">
                        <div class="col-4">
                            <img class="bust mx-auto d-block" src="./img/pisanu.jpg"><hr class="red">
                            <h6>นายพิษณุ วิเชียรสรรค์</h6>
                            <p class="title">กรรมการ<br>กรรมการบริหาร<br>และรองประธานกรรมการบริหารความยั่งยืนและความเสี่ยง</p>
                        </div>
                        <div class="col-4">
                            <img class="bust mx-auto d-block" src="./img/nongnuch.jpg"><hr class="red">
                            <h6>นางนงนุช บูรณะเศรษฐกุล</h6>
                            <p class="title">กรรมการ<br>กรรมการผู้จัดการ<br>กรรมการบริหาร<br>กรรมการบริหารความยั่งยืนและความเสี่ยง<br>และกรรมการกำกับดูแลกิจการที่ดี</p>
                        </div>
                    </div>
                </div>
          </div>
      </div>
  </section>

  <div id="popup-point" data-effect="mfp-zoom-in" class="white-popup mfp-with-anim mfp-hide clearfix">
        <div class="popup-text-pic" >
            <img class="img-fluid" src="./img/group-structure-2019-th.jpg">
        </div>
  </div>

  <script>
    // Magnific Popup script
    // คำสั่งให้ เกิด popup
    $(document).on('click', '.popup-button', function(){ // .popup-button คือ class ที่
      $.magnificPopup.open({
          items: {
              src: $("#popup-point"), // #popup-point id เป้าหมายของ popup ที่จะแสดง
          },
          type: 'inline',
          mainClass: 'mfp-fade',
      });
    });
    // END Magnific Popup script
  </script>

<?php require('footer.php'); ?>