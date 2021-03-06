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
hr {
    border-style: dashed;
    color: red;
}
#mark5{
  color:#000000;
  font-weight: 500;
}
#bar{
  color:red;
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
                    <h1>กฎบัตรคณะกรรมการ</h1><br>
                    <div class="row">
                        <div class="col-4 text-center">
                            <img src="./img/download-pic.jpg" class="img-fluid">
                        </div>
                        <div class="col-7">
                            <h4>กฎบัตรของคณะกรรมการตรวจสอบ</h4>
                            <p style="color:gray">บริษัท โออิชิ กรุ๊ป จำกัด (มหาชน)</p>
                            <a class="inline-popups card-button float-left" id="popup-button1" href="#popups">ดาวน์โหลด<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <br><hr><br>
                    <div class="row">
                        <div class="col-4 text-center">
                            <img src="./img/download-pic.jpg" class="img-fluid">
                        </div>
                        <div class="col-7">
                            <h4>กฎบัตรของคณะกรรมการกำกับดูแลกิจการที่ดี</h4>
                            <p style="color:gray">บริษัท โออิชิ กรุ๊ป จำกัด (มหาชน)</p>
                            <a class="inline-popups card-button float-left" id="popup-button1" href="#popups">ดาวน์โหลด<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <br><hr><br>
                    <div class="row">
                        <div class="col-4 text-center">
                            <img src="./img/download-pic.jpg" class="img-fluid">
                        </div>
                        <div class="col-7">
                            <h4>กฎบัตรของคณะกรรมการบริหารความเสี่ยง</h4>
                            <p style="color:gray">บริษัท โออิชิ กรุ๊ป จำกัด (มหาชน)</p>
                            <a class="inline-popups card-button float-left" id="popup-button1" href="#popups">ดาวน์โหลด<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <br><hr>
                </div>
          </div>
      </div>
  </section>

<?php require('footer.php');?>