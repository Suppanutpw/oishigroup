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
                    <h1>คณะกรรมการบริษัท</h1><br>
                    <!--row1-->
                    <div class="row">
                        <div class="col-md-4">
                            <img class="bust mx-auto d-block" src="./img/paisarn.jpg"><hr class="red">
                            <h6>นายไพศาล อ่าวสถาพร</h6>
                            <p class="title">รองกรรมการผู้จัดการ<br>กรรมการบริหาร<br>และกรรมการบริหารความยั่งยืนและความเสี่ยง</p>
                            <a class="inline-popups card-button float-left" id="popup-button1" href="#popups">รายละเอียด<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                        <div class="col-md-4">
                            <img class="bust mx-auto d-block" src="./img/jesdakorn.jpg"><hr class="red">
                            <h6>นางเจษฎากร โคชส์</h6>
                            <p class="title">รองกรรมการผู้จัดการ<br>และกรรมการบริหารความยั่งยืนและความเสี่ยง</p>
							<a class="inline-popups card-button float-left" id="popup-button2" href="#popups">รายละเอียด<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                        <div class="col-md-4">
                            <img class="bust mx-auto d-block" src="./img/mekhala.jpg"><hr class="red">
                            <h6>นางสาวเมขลา เนติโพธิ์</h6>
                            <p class="title">รองกรรมการผู้จัดการ<br>และกรรมการบริหารความยั่งยืนและความเสี่ยง</p>
						    <a class="inline-popups card-button float-left" id="popup-button3" href="#popups">รายละเอียด<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <!--row2-->
                    <div class="row">
                        <div class="col-md-4">
                            <img class="bust mx-auto d-block" src="./img/kritsada.jpg"><hr class="red">
                            <h6>นายกฤษฎา วรรธนะภาคิน</h6>
                            <p class="title">รองกรรมการผู้จัดการ<br>และกรรมการบริหารความยั่งยืนและความเสี่ยง</p>
							<a class="inline-popups card-button float-left" id="popup-button4" href="#popups">รายละเอียด<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                        <div class="col-md-4">
                            <img class="bust mx-auto d-block" src="./img/thanee.jpg"><hr class="red">
                            <h6>นายธานี พรพิสุทธิ์ศักดิ์</h6>
                            <p class="title">รองกรรมการผู้จัดการ<br>และกรรมการบริหารความยั่งยืนและความเสี่ยง</p>
							<a class="inline-popups card-button float-left" id="popup-button5" href="#popups">รายละเอียด<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                        <div class="col-md-4">
                            <img class="bust mx-auto d-block" src="./img/suvit.jpg"><hr class="red">
                            <h6>นายสุวิทย์ ศิริชู</h6>
                            <p class="title">ผู้ช่วยกรรมการผู้จัดการ</p>
							<a class="inline-popups card-button float-left" id="popup-button6" href="#popups">รายละเอียด<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
          </div>
      </div>
  </section>
  <!--popups-->
  <div id="popup-point1" data-effect="mfp-zoom-in" class="white-popup mfp-with-anim mfp-hide clearfix">
        <div class="popup-text-pic" >
            <img style="width: 100%; margin-bottom: 5%" src="./img/paisarn.jpg">
			<h6>นายไพศาล อ่าวสถาพร</h6>
			<p class="title">รองกรรมการผู้จัดการ<br>กรรมการบริหาร<br>และกรรมการบริหารความยั่งยืนและความเสี่ยง</p><br>
			<h6 class="accolade">คุณวุฒิทางการศึกษา</h6>
			<ul>
				<li><p class="title">ปริญญาตรี บริหารธุรกิจ Indiana Institute of Technology, Fort Wayne, Indiana ประเทศสหรัฐอเมริกา</p></li>
				<li><p class="title">ปริญญาโท บริหารธุรกิจ สาขาธุรกิจระหว่างประเทศ Johnson & Wales University, Providence, Rhode Island ประเทศสหรัฐอเมริกา</p></li>
				<li><p class="title">หลักสูตร CEDI - Babson Entrepreneurial Leadership Program Babson College, Massachusetts ประเทศสหรัฐอเมริกา</p></li>
				<li><p class="title">Senior Executive Development Program (SEDP) National University of Singapore</p></li>
			</ul>
        </div>
  </div>

  <div id="popup-point2" data-effect="mfp-zoom-in" class="white-popup mfp-with-anim mfp-hide clearfix">
        <div class="popup-text-pic" >
            <img style="width: 100%; margin-bottom: 5%" src="./img/jesdakorn.jpg">
			<h6>นางเจษฎากร โคชส์</h6>
			<p class="title">รองกรรมการผู้จัดการ<br>และกรรมการบริหารความยั่งยืนและความเสี่ยง</p><br>
			<h6 class="accolade">คุณวุฒิทางการศึกษา</h6>
			<ul>
				<li><p class="title">ปริญญาตรี การโฆษณา มหาวิทยาลัยธรรมศาสตร์</p></li>
				<li><p class="title">ปริญญาโท บริหารธุรกิจ (การตลาด) University of Dallas, Irvin, Texas ประเทศสหรัฐอเมริกา</p></li>
                <li><p class="title">Senior Executive Development Program (SEDP) National University of Singapore</p></li>
			</ul>
        </div>
  </div>

  <div id="popup-point3" data-effect="mfp-zoom-in" class="white-popup mfp-with-anim mfp-hide clearfix">
        <div class="popup-text-pic" >
            <img style="width: 100%; margin-bottom: 5%" src="./img/mekhala.jpg">
			<h6>นางสาวเมขลา เนติโพธิ์</h6>
			<p class="title">รองกรรมการผู้จัดการ<br>และกรรมการบริหารความยั่งยืนและความเสี่ยง</p><br>
			<h6 class="accolade">คุณวุฒิทางการศึกษา</h6>
			<ul>
				<li><p class="title">ปริญญาตรี นิเทศศาสตร์บัณฑิต จุฬาลงกรณ์มหาวิทยาลัย</p></li>
				<li><p class="title">ปริญญาโท บริหารธุรกิจ (MBA) สถาบันบัณฑิตบริหารธุรกิจศศินทร์แห่งจุฬาลงกรณ์มหาวิทยาลัย</p></li>
				<li><p class="title">Global 2030 Executive Leadership Program Tuck School of Business, Dartmouth College, USA</p></li>
			</ul>
        </div>
  </div>
  
  <div id="popup-point4" data-effect="mfp-zoom-in" class="white-popup mfp-with-anim mfp-hide clearfix">
        <div class="popup-text-pic" >
            <img style="width: 100%; margin-bottom: 5%" src="./img/kritsada.jpg">
			<h6>นายกฤษฎา วรรธนะภาคิน</h6>
			<p class="title">รองกรรมการผู้จัดการ<br>และกรรมการบริหารความยั่งยืนและความเสี่ยง</p><br>
			<h6 class="accolade">คุณวุฒิทางการศึกษา</h6>
			<ul>
				<li><p class="title">ปริญญาตรี บัญชีบัณฑิต มหาวิทยาลัยเกษตรศาสตร์</p></li>
				<li><p class="title">ปริญญาโท บริหารธุรกิจ (MBA) มหาวิทยาลัยธรรมศาสตร์</p></li>
			</ul>
        </div>
  </div>

  <div id="popup-point5" data-effect="mfp-zoom-in" class="white-popup mfp-with-anim mfp-hide clearfix">
        <div class="popup-text-pic" >
            <img style="width: 100%; margin-bottom: 5%" src="./img/thanee.jpg">
			<h6>นายธานี พรพิสุทธิ์ศักดิ์</h6>
            <p class="title">รองกรรมการผู้จัดการ<br>และกรรมการบริหารความยั่งยืนและความเสี่ยง</p><br>
			<h6 class="accolade">คุณวุฒิทางการศึกษา</h6>
			<ul>
				<li><p class="title">ปริญญาตรี วิทยาศาสตร์ และเทคโนโลยีการอาหาร มหาวิทยาลัยเกษตรศาสตร์</p></li>
				<li><p class="title">Senior Executive Development Program (SEDP) National University of Singapore</p></li>
			</ul>
        </div>
  </div>

  <div id="popup-point6" data-effect="mfp-zoom-in" class="white-popup mfp-with-anim mfp-hide clearfix">
        <div class="popup-text-pic" >
            <img style="width: 100%; margin-bottom: 5%" src="./img/suvit.jpg">
			<h6>นายสุวิทย์ ศิริชู</h6>
            <p class="title">ผู้ช่วยกรรมการผู้จัดการ</p><br>
			<h6 class="accolade">คุณวุฒิทางการศึกษา</h6>
			<ul>
				<li><p class="title">ปริญญาตรี สาขาเทคโนโลยีก่อสร้าง มหาวิทยาลัยราชภัฏจันทรเกษม</p></li>
			</ul>
        </div>
  </div>

  </div>
  <!--end popups-->
  <script>
    // Magnific Popup script
    // คำสั่งให้ เกิด popup
    $(document).on('click', '#popup-button1', function(){ // .popup-button คือ class ที่
      $.magnificPopup.open({
          items: {
              src: $("#popup-point1"), // #popup-point id เป้าหมายของ popup ที่จะแสดง
          },
          type: 'inline',
          mainClass: 'mfp-fade',
      });
    });

	$(document).on('click', '#popup-button2', function(){ 
      $.magnificPopup.open({
          items: {
              src: $("#popup-point2"), // 
          },
          type: 'inline',
          mainClass: 'mfp-fade',
      });
    });
  
    $(document).on('click', '#popup-button3', function(){ 
      $.magnificPopup.open({
          items: {
              src: $("#popup-point3"), // 
          },
          type: 'inline',
          mainClass: 'mfp-fade',
      });
    });

    $(document).on('click', '#popup-button4', function(){ 
      $.magnificPopup.open({
          items: {
              src: $("#popup-point4"), // 
          },
          type: 'inline',
          mainClass: 'mfp-fade',
      });
    });

    $(document).on('click', '#popup-button5', function(){ 
      $.magnificPopup.open({
          items: {
              src: $("#popup-point5"), // 
          },
          type: 'inline',
          mainClass: 'mfp-fade',
      });
    });

    $(document).on('click', '#popup-button6', function(){ 
      $.magnificPopup.open({
          items: {
              src: $("#popup-point6"), // 
          },
          type: 'inline',
          mainClass: 'mfp-fade',
      });
    });

    // END Magnific Popup script
  </script>

<?php require('footer.php'); ?>