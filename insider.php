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
  font-size: 0.8em;
}
.col-md-4{
  margin-top:100px;
}
h6.accolade{
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
                    <h1>หัวหน้าหน่วยงานตรวจสอบภายใน</h1>
                    <!--row1-->
                    <div class="row">
                        <div class="col-md-4"> 
                            <hr class="red">
                            <h6>นางสาวชนัทนุช วงศ์วรรณ</h6>
                            <p class="title">ผู้อำนวยการฝ่ายตรวจสอบภายใน<br>เลขานุการคณะกรรมการตรวจสอบ<br>กรรมการบริหารความยั่งยืนและความเสี่ยง<br>และเลขานุการคณะกรรมการบริหารความยั่งยืน และความเสี่ยง</p>
                        </div>
                    </div>
                </div>
          </div>
      </div>
  </section>

<?php require('footer.php'); ?>