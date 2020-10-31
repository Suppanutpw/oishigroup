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
                            <img class="bust mx-auto d-block" src="./img/prasit.jpg"><hr class="red">
                            <h6>นายประสิทธิ์ โฆวิไลกูล</h6>
                            <p class="title">ประธานกรรมการ<br>กรรมการอิสระ<br>กรรมการสรรหา<br>และกรรมการกำหนดค่าตอบแทน</p>
                            <a class="inline-popups card-button float-left" id="popup-button1" href="#popups">รายละเอียด<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                        <div class="col-md-4">
                            <img class="bust mx-auto d-block" src="./img/ueychai.jpg"><hr class="red">
                            <h6>นายอวยชัย ตันทโอภาส</h6>
                            <p class="title">ประธานกรรมการ<br>กรรมการอิสระ<br>กรรมการสรรหา<br>กรรมการกำหนดค่าตอบแทน<br>และกรรมการกำกับดูแลกิจการที่ดี</p>
							              <a class="inline-popups card-button float-left" id="popup-button2" href="#popups">รายละเอียด<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                        <div class="col-md-4">
                            <img class="bust mx-auto d-block" src="./img/vikrom.jpg"><hr class="red">
                            <h6>นายวิกรม คุ้มไพโรจน์</h6>
                            <p class="title">กรรมการอิสระ<br>ประธานกรรมการตรวจสอบ<br>ประธานกรรมการสรรหา<br>กรรมการกำหนดค่าตอบแทน<br>และกรรมการกำกับดูแลกิจการที่ดี</p>
							              <a class="inline-popups card-button float-left" id="popup-button3" href="#popups">รายละเอียด<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <!--row2-->
                    <div class="row">
                        <div class="col-md-4">
                            <img class="bust mx-auto d-block" src="./img/potjanee.jpg"><hr class="red">
                            <h6>นางสาวพจนีย์ ธนวรานิช</h6>
                            <p class="title">กรรมการอิสระ<br>กรรมการตรวจสอบ<br>ประธานกรรมการกำหนดค่าตอบแทน<br>และประธานกรรมการกำกับดูแลกิจการที่ดี</p>
							              <a class="inline-popups card-button float-left" id="popup-button4" href="#popups">รายละเอียด<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                        <div class="col-md-4">
                            <img class="bust mx-auto d-block" src="./img/chai.jpg"><hr class="red">
                            <h6>นายชัย จรุงธนาภิบาล</h6>
                            <p class="title">กรรมการอิสระ<br>กรรมการตรวจสอบ<br>ประธานกรรมการบริหารความยั่งยืนและความเสี่ยง<br>และกรรมการกำกับดูแลกิจการที่ดี</p>
							              <a class="inline-popups card-button float-left" id="popup-button5" href="#popups">รายละเอียด<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                        <div class="col-md-4">
                            <img class="bust mx-auto d-block" src="./img/sithichai.jpg"><hr class="red">
                            <h6>นายสิทธิชัย ชัยเกรียงไกร</h6>
                            <p class="title">กรรมการ<br>รองประธานกรรมการบริหาร คนที่ 1<br>และกรรมการกำหนดค่าตอบแทน</p>
							              <a class="inline-popups card-button float-left" id="popup-button6" href="#popups">รายละเอียด<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <!--row3-->
                    <div class="row">
                        <div class="col-md-4">
                            <img class="bust mx-auto d-block" src="./img/pisanu.jpg"><hr class="red">
                            <h6>นายพิษณุ วิเชียรสรรค์</h6>
                            <p class="title">กรรมการ<br>กรรมการบริหาร<br>และรองประธานกรรมการบริหารความยั่งยืนและความเสี่ยง</p>
							              <a class="inline-popups card-button float-left" id="popup-button7" href="#popups">รายละเอียด<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                        <div class="col-md-4">
                            <img class="bust mx-auto d-block" src="./img/nongnuch.jpg"><hr class="red">
                            <h6>นางนงนุช บูรณะเศรษฐกุล</h6>
                            <p class="title">กรรมการ<br>กรรมการผู้จัดการ<br>กรรมการบริหาร<br>กรรมการบริหารความยั่งยืนและความเสี่ยง<br>และกรรมการกำกับดูแลกิจการที่ดี</p>
							              <a class="inline-popups card-button float-left" id="popup-button8" href="#popups">รายละเอียด<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
          </div>
      </div>
  </section>
  <!--popups-->
  <div id="popup-point1" data-effect="mfp-zoom-in" class="white-popup mfp-with-anim mfp-hide clearfix">
        <div class="popup-text-pic" >
            <img style="width: 100%; margin-bottom: 5%" src="./img/prasit.jpg">
			<h6>นายประสิทธิ์ โฆวิไลกูล</h6>
			<p class="title">ประธานกรรมการ<br>กรรมการอิสระ<br>กรรมการสรรหา<br>และกรรมการกำหนดค่าตอบแทน</p><br>
			<h6 class="accolade">คุณวุฒิทางการศึกษา</h6>
			<ul>
				<li><p class="title">นิติศาสตร์บัณฑิต (LL.B) (เกียรตินิยมอันดับ 2) จุฬาลงกรณ์มหาวิทยาลัย</p></li>
				<li><p class="title">นิติศาสตร์มหาบัณฑิต (LL.M) มหาวิทยาลัยโคลัมเบีย (นิวยอร์ก) ประเทศสหรัฐอเมริกา</p></li>
				<li><p class="title">นิติศาสตร์ดุษฎีบัณฑิตกิตติมศักดิ์ มหาวิทยาลัยอีสเทิร์นเอเชีย</p></li>
				<li><p class="title">นิติศาสตร์ดุษฎีบัณฑิตกิตติมศักดิ์ จุฬาลงกรณ์มหาวิทยาลัย</p></li>
				<li><p class="title">เนติบัณฑิตไทย สำนักศึกษาอบรมกฎหมายแห่งเนติบัณฑิตยสภา</p></li>
			</ul>
        </div>
  </div>

  <div id="popup-point2" data-effect="mfp-zoom-in" class="white-popup mfp-with-anim mfp-hide clearfix">
        <div class="popup-text-pic" >
            <img style="width: 100%; margin-bottom: 5%" src="./img/ueychai.jpg">
			<h6>นายอวยชัย ตันทโอภาส</h6>
			<p class="title">รองประธานกรรมการ<br>ประธานกรรมการบริหาร<br>กรรมการสรรหา<br>กรรมการกำหนดค่าตอบแทน<br>และกรรมการกำกับดูแลกิจการที่ดี</p><br>
			<h6 class="accolade">คุณวุฒิทางการศึกษา</h6>
			<ul>
				<li><p class="title">ปริญญาตรี B.Sc. Accounting St. Louis University ประเทศสหรัฐอเมริกา</p></li>
				<li><p class="title">ปริญญาโท บริหารธุรกิจ มหาวิทยาลัยธรรมศาสตร์</p></li>
			</ul>
        </div>
  </div>

  <div id="popup-point3" data-effect="mfp-zoom-in" class="white-popup mfp-with-anim mfp-hide clearfix">
        <div class="popup-text-pic" >
            <img style="width: 100%; margin-bottom: 5%" src="./img/vikrom.jpg">
			<h6>นายวิกรม คุ้มไพโรจน์</h6>
			<p class="title">กรรมการอิสระ<br>ประธานกรรมการตรวจสอบ<br>ประธานกรรมการสรรหา<br>กรรมการกำหนดค่าตอบแทน<br>และกรรมการกำกับดูแลกิจการที่ดี</p><br>
			<h6 class="accolade">คุณวุฒิทางการศึกษา</h6>
			<ul>
				<li><p class="title">อักษรศาสตร์บัณฑิต สาขาวิชาประวัติศาสตร์ จุฬาลงกรณ์มหาวิทยาลัย (2509)</p></li>
				<li><p class="title">ปริญญาโท สาขาวิชาประวัติศาสตร์ ความสัมพันธ์ระหว่างประเทศ Michigan State University ประเทศสหรัฐอเมริกา (2511)</p></li>
				<li><p class="title">ปริญญาเอก (Ph.D.) สาขาวิชาประวัติศาสตร์ ความสัมพันธ์ระหว่างประเทศ Michigan State University ประเทศสหรัฐอเมริกา (2515)</p></li>
				<li><p class="title">ปริญญาดุษฎีบัณฑิตกิตติมศักดิ์ สาขามานุษยวิทยา (Humanities) จาก Schiller International University, London (2546)</p></li>
			</ul>
        </div>
  </div>
  
  <div id="popup-point4" data-effect="mfp-zoom-in" class="white-popup mfp-with-anim mfp-hide clearfix">
        <div class="popup-text-pic" >
            <img style="width: 100%; margin-bottom: 5%" src="./img/potjanee.jpg">
			<h6>นางสาวพจนีย์ ธนวรานิช</h6>
			<p class="title">กรรมการอิสระ<br>กรรมการตรวจสอบ<br>กรรมการกำหนดค่าตอบแทน<br>และกรรมการกำกับดูแลกิจการที่ดี</p><br>
			<h6 class="accolade">คุณวุฒิทางการศึกษา</h6>
			<ul>
				<li><p class="title">ปริญญาตรีบัญชีบัณฑิต จุฬาลงกรณ์มหาวิทยาลัย</p></li>
				<li><p class="title">ปริญญาโท Master of Business Administration (M.B.A) Syracuse University ประเทศสหรัฐอเมริกา (ด้วยทุน USAID)</p></li>
			</ul>
        </div>
  </div>

  <div id="popup-point5" data-effect="mfp-zoom-in" class="white-popup mfp-with-anim mfp-hide clearfix">
        <div class="popup-text-pic" >
            <img style="width: 100%; margin-bottom: 5%" src="./img/chai.jpg">
			<h6>นายชัย จรุงธนาภิบาล</h6>
			<p class="title">กรรมการอิสระ<br>กรรมการตรวจสอบ<br>ประธานกรรมการบริหารความยั่งยืนและความเสี่ยง<br>และกรรมการกำกับดูแลกิจการที่ดี</p><br>
			<h6 class="accolade">คุณวุฒิทางการศึกษา</h6>
			<ul>
				<li><p class="title">ปริญญาตรีบัญชี จุฬาลงกรณ์มหาวิทยาลัย</p></li>
				<li><p class="title">ปริญญาโทบัญชี มหาวิทยาลัยธรรมศาสตร์</p></li>
			</ul>
        </div>
  </div>

  <div id="popup-point6" data-effect="mfp-zoom-in" class="white-popup mfp-with-anim mfp-hide clearfix">
        <div class="popup-text-pic" >
            <img style="width: 100%; margin-bottom: 5%" src="./img/sithichai.jpg">
			<h6>นายสิทธิชัย ชัยเกรียงไกร</h6>
			<p class="title">กรรมการ<br>รองประธานกรรมการบริหาร คนที่ 1<br>และกรรมการกำหนดค่าตอบแทน</p><br>
			<h6 class="accolade">คุณวุฒิทางการศึกษา</h6>
			<ul>
				<li><p class="title">ปริญญาตรี บัญชีบัณฑิต (เกียรตินิยมอันดับ 1) มหาวิทยาลัยธรรมศาสตร์</p></li>
				<li><p class="title">วุฒิบัตรคอมพิวเตอร์บริหาร จุฬาลงกรณ์มหาวิทยาลัย</p></li>
				<li><p class="title">วุฒิบัตร Mini MBA สาขา Leadership Management มหาวิทยาลัยเกษตรศาสตร์</p></li>
			</ul>
        </div>
  </div>

  <div id="popup-point7" data-effect="mfp-zoom-in" class="white-popup mfp-with-anim mfp-hide clearfix">
        <div class="popup-text-pic" >
            <img style="width: 100%; margin-bottom: 5%" src="./img/pisanu.jpg">
			<h6>นายพิษณุ วิเชียรสรรค์</h6>
			<p class="title">กรรมการ<br>กรรมการบริหาร<br>และรองประธานกรรมการบริหารความยั่งยืนและความเสี่ยง</p><br>
			<h6 class="accolade">คุณวุฒิทางการศึกษา</h6>
			<ul>
				<li><p class="title">ปริญญาตรี วิทยาศาสตร์ (วิทยาศาสตร์การอาหาร) มหาวิทยาลัยเกษตรศาสตร์</p></li>
				<li><p class="title">ปริญญาโทด้านเทคโนโลยี (เกียรตินิยมอันดับ 2) สาขาเทคโนโลยีชีวภาพ Massey University ประเทศนิวซีแลนด์</p></li>
				<li><p class="title">ปริญญาโทด้านการผลิตเบียร์ The Scandinavian School of Brewing ประเทศเดนมาร์ค</p></li>
        <li><p class="title">ปริญญาเอกวิศวกรรมศาสตร์ Technical University Berlin ประเทศเยอรมนี</p></li>
			</ul>
        </div>
  </div>

  <div id="popup-point8" data-effect="mfp-zoom-in" class="white-popup mfp-with-anim mfp-hide clearfix">
        <div class="popup-text-pic" >
            <img style="width: 100%; margin-bottom: 5%" src="./img/nongnuch.jpg">
			<h6>นางนงนุช บูรณะเศรษฐกุล</h6>
			<p class="title">กรรมการ<br>กรรมการผู้จัดการ<br>กรรมการบริหาร<br>กรรมการบริหารความยั่งยืนและความเสี่ยง<br>และกรรมการกำกับดูแลกิจการที่ดี</p><br>
			<h6 class="accolade">คุณวุฒิทางการศึกษา</h6>
			<ul>
				<li><p class="title">ปริญญาตรี นิเทศศาสตร์ (เกียรตินิยมอันดับ 1 เหรียญทอง) จุฬาลงกรณ์มหาวิทยาลัย</p></li>
				<li><p class="title">ปริญญาโท บริหารธุรกิจ (MBA) (เกียรตินิยม) Cleveland State University ประเทศสหรัฐอเมริกา</p></li>
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

	$(document).on('click', '#popup-button2', function(){ // .popup-button คือ class ที่
      $.magnificPopup.open({
          items: {
              src: $("#popup-point2"), // #popup-point id เป้าหมายของ popup ที่จะแสดง
          },
          type: 'inline',
          mainClass: 'mfp-fade',
      });
    });
  
    $(document).on('click', '#popup-button3', function(){ // .popup-button คือ class ที่
      $.magnificPopup.open({
          items: {
              src: $("#popup-point3"), // #popup-point id เป้าหมายของ popup ที่จะแสดง
          },
          type: 'inline',
          mainClass: 'mfp-fade',
      });
    });

    $(document).on('click', '#popup-button4', function(){ // .popup-button คือ class ที่
      $.magnificPopup.open({
          items: {
              src: $("#popup-point4"), // #popup-point id เป้าหมายของ popup ที่จะแสดง
          },
          type: 'inline',
          mainClass: 'mfp-fade',
      });
    });

    $(document).on('click', '#popup-button5', function(){ // .popup-button คือ class ที่
      $.magnificPopup.open({
          items: {
              src: $("#popup-point5"), // #popup-point id เป้าหมายของ popup ที่จะแสดง
          },
          type: 'inline',
          mainClass: 'mfp-fade',
      });
    });

    $(document).on('click', '#popup-button6', function(){ // .popup-button คือ class ที่
      $.magnificPopup.open({
          items: {
              src: $("#popup-point6"), // #popup-point id เป้าหมายของ popup ที่จะแสดง
          },
          type: 'inline',
          mainClass: 'mfp-fade',
      });
    });

    $(document).on('click', '#popup-button7', function(){ // .popup-button คือ class ที่
      $.magnificPopup.open({
          items: {
              src: $("#popup-point7"), // #popup-point id เป้าหมายของ popup ที่จะแสดง
          },
          type: 'inline',
          mainClass: 'mfp-fade',
      });
    });

    $(document).on('click', '#popup-button8', function(){ // .popup-button คือ class ที่
      $.magnificPopup.open({
          items: {
              src: $("#popup-point8"), // #popup-point id เป้าหมายของ popup ที่จะแสดง
          },
          type: 'inline',
          mainClass: 'mfp-fade',
      });
    });
    // END Magnific Popup script
  </script>

<?php require('footer.php'); ?>