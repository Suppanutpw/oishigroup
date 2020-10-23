<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Document</title>
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
</body>
</html>