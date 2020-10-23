<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    require('metalink.php');
  ?>
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

  <section id="content" style="z-index: 20 !important;">
    <div class="container clearfix">
        <div class="row">
                <div class="col-md-3">
                <br><br>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">ภาพรวมธุรกิจของบริษัท</a>
                        </li>
                        <img src="./img/line.png" alt="">
                        <li class="nav-item">
                            <a class="nav-link" href="#">ประวัติความเป็นมาของบริษัท</a>
                        </li>
                        <img src="./img/line.png" alt="">
                        <li class="nav-item">
                            <a class="nav-link" href="#">วิสสัยทัศน์และพันธกิจ</a>
                        </li>
                        <img src="./img/line.png" alt="">
                        <li class="nav-item">
                            <a class="nav-link" href="#">สารจากประธานกรรมการ</a>
                        </li>
                        <img src="./img/line.png" alt="">
                    </ul>
                </div>
                <div class="col-md-9">
                    <h1>ภาพรวมธุรกิจของบริษัท</h1><br><br>
                    <h1>ภาพรวมการประกอบธุรกิจของบริษัทและบริษัทย่อย</h1>
                    <h4>บริษัทและบริษัทย่อย ประกอบธุรกิจหลัก 2 ประเภท ได้แก่</h4>
                </div>
        </div>
    </div>
  </section>

<?php
    require('footer.php');
?>
