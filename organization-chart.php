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

    #chart{
        max-width: 100%;
        vertical-align: middle;
        box-sizing: inherit;
    }
    
    h6{
        text-align:center;
    }

    #selected5{
        color:red;
    }

    center {
        height:100%;
        width: 100%;
        margin-left: auto;
        margin-right: auto;
    }
    </style>
</head>
<body>

    <?php require('header.php');?>

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
                    <h1>โครงสร้างองกรณ์</h1><br>
                    <div class="row">
                        <div class="col-12 text-center">
                            <img class="popup-button" src="./img/organization-chart-2019-th.jpg" id="chart" alt="">
                            <h6 clas>Click on picture to enlarge</h6>
                        </div>
                    </div>
                </div><!--End right colum-->
            </div><!--End Row-->
        </div><!--End Container-->
     </section>
    <!--Popup-->
    <div id="popup-point" data-effect="mfp-zoom-in" class="white-popup mfp-with-anim mfp-hide clearfix">
        <div class="popup-text-pic" >
            <img class="img-fluid" src="./img/organization-chart-2019-th.jpg">
        </div>
    </div>
    <!--End Popup-->
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
