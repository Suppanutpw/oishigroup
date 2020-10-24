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


                <div class="col-md-9">
                    <h1>ภาพรวมธุรกิจของบริษัท</h1><br><br>
                    <h1>ภาพรวมการประกอบธุรกิจของบริษัทและบริษัทย่อย</h1>
                    <h4>บริษัทและบริษัทย่อย ประกอบธุรกิจหลัก 2 ประเภท ได้แก่</h4>
                </div>
            </div>
        </div>
     </section>

<?php require('footer.php'); ?>
