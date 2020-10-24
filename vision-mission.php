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

    img{
        max-width: 100%;
        vertical-align: middle;
        box-sizing: inherit;
    }
    span{
        color:red;
    }

    #selected3{
        color:red;
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
                    <h1>วิสัยทัศน์และพันธกิจ</h1><br>
                    <div class="row">
                        <div class="col-12">
                            <img src="./img/about-vision-banner.jpg" alt="">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-12">
                            <h4><span>•</span> วิสัยทัศน์</h4>
                            <p>“เป็นผู้นำและสร้างสรรค์ธุรกิจอาหารและเครื่องดื่มสไตล์ญี่ปุ่นเพื่อมอบคุณภาพชีวิตที่ดีแก่ผู้บริโภคและสร้างการเติบโตแก่ธุรกิจอย่างยั่งยืน”</p>
                            <h4><span>•</span> พันธกิจ</h4>
                            <p>1. รักษาคุณภาพการผลิตและการบริการธุรกิจทางด้านอาหารเบเกอรี่และเครื่องดื่มเพื่อสุขภาพ มุ่งมั่นสร้างและรักษาความนิยมของผู้บริโภคในสินค้าของ “โออิชิ” ให้มีความต่อเนื่อง อีกทั้งให้ความสำคัญกับการผลิตสินค้าให้ได้มาตรฐาน มีการจัดการด้านสุขลักษณะที่ดี</p>
                            <p>2. เลือกใช้วัตถุดิบที่มีคุณภาพปลอดภัยและสร้างความพึงพอใจสูงสุดแก่ลูกค้า เพื่อให้ได้รับการยอมรับจากทั้งตลาดภายในประเทศและต่างประเทศ</p>
                            <p>3. ปรับปรุงกระบวนการผลิตอย่างต่อเนื่อง โดยการนำเทคโนโลยีที่ทันสมัยมาใช้ในกระบวนการผลิต การวิจัย และการพัฒนาผลิตภัณฑ์</p>
                            <p>4. เพิ่มประสิทธิภาพในการผลิต และความสามารถในการแข่งขันด้านราคาและคุณภาพ เมื่อเทียบกับคู่แข่งขันทั้งในและต่างประเทศ ซึ่งเป็นส่วนหนึ่งที่ช่วยผลักดันให้ประเทศไทยมีการเจริญเติบโตทางเศรษฐกิจเพิ่มมากขึ้น</p>
                            <p>5. ดำเนินธุรกิจภายใต้หลักธรรมาภิบาลที่ดี โดยคำนึงถึงประโยชน์ของผู้มีส่วนได้เสียทุกฝ่าย เพื่อสร้างการเติบโตแก่ธุรกิจอย่างมั่นคงและยั่งยืน</p>
                        </div>
                    </div>
                </div><!--End right colum-->
            </div><!--End Row-->
        </div><!--End Container-->
     </section>




<?php require('footer.php'); ?>
