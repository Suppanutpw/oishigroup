<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    require('metalink.php');
  ?>
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
  </style>
</head>
<body>
  <?php
    require('header.php');
  ?>

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
          <div class="col-md-3">
            <ul class="nav">
              <li class="nav-item"><a href="">ภาพรวมธุรกิจของบริษัท</a></li>
              <img src="./img/line.png">
              <li class="nav-item"><a href="">ประวัติความเป็นมาของบริษัท</a></li>
              <img src="./img/line.png">
              <li class="nav-item"><a href="">วิสัยทัศน์และพันธกิจ</a></li>
              <img src="./img/line.png">
              <li class="nav-item"><a href="">คณะกรรมการบริษัท</a></li>
              <img src="./img/line.png">
              <li class="nav-item"><a href="">คณะผู้บริหาร</a></li>
              <img src="./img/line.png">
              <li class="nav-item"><a href="">คณะกรรมการชุดย่อย</a></li>
              <img src="./img/line.png">
              <li class="nav-item"><a href="">หัวหน้าหน่วยงานตรวจสอบภายใน</a></li>
              <img src="./img/line.png">
              <li class="nav-item"><a href="">การกำกับดูแลกิจการที่ดี</a></li>
              <img src="./img/line.png">
            </ul>
          </div>
          <div class="col-md-9 text-center">
            <h1 style="margin-left: -50%">โครงสร้างกลุ่มบริษัท</h1><br>
            <img class="img-fluid" src="./img/group-structure-2019-th.jpg" style="margin-bottom: 20px">
            <h6 clas>Click on picture to enlarge</h6>
          </div>
        </div>
      </div>
  </section>

<?php
  require('footer.php');
?>
