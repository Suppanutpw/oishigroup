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

    .foodtag{
        display: block;
        text-align: center;
        padding: 0 15px;
        background-image: url(./img/about-tab-bg-1.png);
        background-repeat: no-repeat;
        background-size: contain;
        float:left;
        font-size: 20px;
        height:90px;
        line-height: 80px;
        background-position-x: center;
        color:white;
    }

    .bavtag{
        display: block;
        text-align: center;
        padding: 0 15px;
        background-image: url(./img/about-tab-bg-2.png);
        background-repeat: no-repeat;
        background-size: contain;
        float:left;
        font-size: 20px;
        line-height: 80px;
        background-position-x: center;
        color:white;
    }

    #selected1{
        color:red;
    }

    img{
        max-width: 100%;
        vertical-align: middle;
    }

    #bavarage{
        display:none;
    }
    table {
        border-collapse: collapse;
        
    }
    thead{
        background-color: #8eba27;
        color: white;
        text-align: center;
    }
    .sub{
        background-color: #72951f;
    }
    tbody{
        background-color: #e0e9cc;
        color: #464646;
    }
    td{
        padding: 10px 20px;
        border-bottom: 1px solid #d7d7d7;
    }
    .top{
        border-top: 2px solid #72951f;
    }
    .green{
        background-color: #cbdda3;
    }
    .circle{
        display: block;
        height: 15px;
        width: 15px;
        margin-left: auto;
        margin-right: auto;
        line-height: inherit;
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
                    <h1>ภาพรวมธุรกิจของบริษัท</h1><br><br>
                    <h1>ภาพรวมการประกอบธุรกิจของบริษัทและบริษัทย่อย</h1>
                    <h4>บริษัทและบริษัทย่อย ประกอบธุรกิจหลัก 2 ประเภท ได้แก่</h4>
                    <br>
                    <ul class="nav">
                        <li class="foodtag col-md-6" style="b">
                            <a id="first" onclick="showFood()">ธุรกิจอาหาร</a>
                        </li>
                        <li class="bavtag col-md-6">
                            <a  id="second" onclick="showBav()">ธุรกิจเครื่องดื่ม</a>
                        </li>
                    </ul>
                    <br>
                    <div id="food"><!--Brand-->
                    <h4>ธุรกิจร้านอาหารญี่ปุ่น มีทั้งหมด 10 แบรนด์ ดังนี้</h4><br>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="./img/food-business-icon-1.png" alt="">
                        </div>
                        <div class="col-md-9">
                            <h4>โออิชิ แกรนด์ (1 สาขา)</h4>
                            <p>โออิชิ แกรนด์ ณ ศูนย์การค้าสยามพารากอน ชั้น 4 ด้วยบรรยากาศหรูหราและให้บริการด้วยรายการอาหารที่หลากหลายและหารับประทานได้ยาก โดยเปิดให้บริการตลอดทั้งวัน จำกัดเวลาในการรับประทานไว้ที่ 2 ชั่วโมง30 นาที ในราคาปัจจุบันท่านละ 995 บาท</p>
                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="./img/food-business-icon-etherium.png" alt="">
                        </div>
                        <div class="col-md-9">
                            <h4>โออิชิ อีทเทอเรียม (9 สาขา)</h4>
                            <p>ร้านโออิชิ อีทเทอเรียม ให้บริการภายใต้แนวคิดที่ผสมผสาน 3 องค์ประกอบอย่างลงตัว ได้แก่ “EAT - EXPLORE - PREMIUM” โดยนำเสนออาหารญี่ปุ่นรสชาติเยี่ยมจากวัตถุดิบชั้นดีและส่วนผสมของความคิดสร้างสรรค์ใหม่ๆ ผสานวัฒนธรรม การกินของญี่ปุ่นอย่างลงตัว ดื่มด่ำกับมหัศจรรย์ของอาหารญี่ปุ่น ผ่านรูป รส กลิ่น เสียง และสัมผัสอย่างครบครัน กับประสบการณ์ครั้งแรกของการรับประทานอาหารญี่ปุ่น ที่เปิดโอกาสให้ได้ลอง ได้ทำ ได้สัมผัสประสบการณ์ ในบรรยากาศแบบญี่ปุ่นแท้ ๆ จำกัดระยะเวลาการรับประทาน ไว้ที่ 1 ชั่วโมง 45 นาที ในราคาปัจจุบันราคาท่านละ 659 บาท ไม่รวมภาษีมูลค่าเพิ่ม และ 759 บาท ไม่รวมภาษีมูลค่าเพิ่ม สำหรับสาขาต่างจังหวัด</p>
                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="./img/food-business-icon-2.png" alt="">
                        </div>
                        <div class="col-md-9">
                            <h4>โออิชิ บุฟเฟต์ (10 สาขา)</h4>
                            <p>โออิชิ บุฟเฟต์ ให้บริการอาหารญี่ปุ่น เปิดให้บริการตลอดทั้งวัน แบบไม่มีรอบการให้บริการ แต่จำกัดระยะเวลาการรับประทาน ไว้ที่ 1 ชั่วโมง 45 นาที ในราคาปัจจุบันราคาท่านละ 599 บาทสุทธิ</p>
                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="./img/food-business-icon-3.png" alt="">
                        </div>
                        <div class="col-md-9">
                            <h4>ชาบูชิ (142 สาขา)</h4><br>
                            <h6>ในประเทศ 149 สาขา</h6>
                            <p>ชาบูชิ ให้บริการร้านอาหารบุฟเฟต์ที่ลำเลียงมาด้วยระบบ สายพานให้ลูกค้าเลือกบริโภคโดยไม่จำกัดจำนวนในราคา ย่อมเยา ทั้งนี้ ชาบูชิ เน้นการให้บริการอาหารซึ่งเป็นที่นิยม ของชาวเอเชีย 2 ชนิด ได้แก่ สุกี้หม้อไฟญี่ปุ่น (ชาบู-ชาบู) และข้าวปั้นและข้าวห่อสาหร่ายหน้าต่าง ๆ (ซูชิ) โดยเปิดให้ บริการตามเวลาเปิดปิดของสถานที่ประกอบการที่แต่ละสาขา ตั้งอยู่ จำกัดระยะเวลาการรับประทานไว้ที่ 1 ชั่วโมง 15 นาที ในราคาปัจจุบันชุดมาตราฐานท่านละ 399 บาทสุทธิ ในเขต กรุงเทพมหานคร และราคาท่านละ 419 และ 429 บาทสุทธิ ในบางสาขาที่ตั้งอยู่ในเขต Tourist area</p>
                            <br>
                            <h6>ต่างประเทศ 2 สาขา</h6>
                            <p>บริษัทย่อยของบริษัทเปิดดำเนินการร้านอาหารชาบูชิ ในประเทศเมียนมา ณ เมืองย่างกุ้ง จำนวน 2 สาขา</p>
                       </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="./img/food-business-icon-4.png" alt="">
                        </div>
                        <div class="col-md-9">
                            <h4>โออิชิ ราเมน (54 สาขา)</h4>
                            <p>โออิชิ ราเมน (54 สาขา) ธุรกิจร้านบะหมี่ญี่ปุ่นประเภทเส้นราเมนที่มีการพัฒนาสูตร การผลิตเส้นและสูตรปรุงน้ำซุปซึ่งเป็นเอกลักษณ์ มีรสชาติ เข้มข้นสไตล์ญี่ปุ่นแต่ถูกปากคนไทย ที่มีให้เลือกหลายรายการ</p>
                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="./img/food-business-icon-5-2.png" alt="">
                        </div>
                        <div class="col-md-9">
                            <h4>โออิชิ เดลิเวอรี่</h4>
                            <p>บริการจัดส่งอาหารญี่ปุ่นถึงบ้านที่หมายเลขโทรศัพท์ 1773 หรือสั่งอาหารออนไลน์ผ่านเว็บไซต์ www.oishidelivery.com และบริการรูปใหม่ Click & Collect เพิ่มความสะดวกสบาย รวดเร็ว สั่งอาหารล่วงหน้า เมื่อไปถึงที่ร้านก็รับอาหารได้ทันที ตามเวลาที่ระบุ ปัจจุบันให้บริการในพื้นที่ครอบคลุมทั้ง กรุงเทพมหานคร ปริมณฑล และ 28 จังหวัดทั่วประเทศ (รวมสาขาที่รองรับการจัดส่ง OISHI Delivery จำนวน 68 สาขา) บริการตั้งแต่เวลา 10.00 - 22.00 น. โดยคิดค่าจัดส่งครั้งละ 40 บาท และเพื่อเพิ่มความสะดวกสบายแก่ลูกค้าสามารถ ชำระด้วยบัตรเครดิตได้เมื่อสั่งอาหารขั้นต่ำมูลค่า 500 บาท นอกจากช่องทางของโออิชิ เดลิเวอรี่ แล้ว ทางบริษัทยังขยาย การขายผ่านช่องทาง Food Aggregator เพื่อสร้างการรับรู้ ร้านอาหารแบบจานด่วน และเมนูอาหาร ผ่านช่องทางใหม่ ๆ ให้กับกลุ่มผู้บริโภคที่เป็นคนรุ่นใหม่ที่สั่งสินค้าผ่าน Food Online เพิ่มมากขึ้น ซึ่งจากการขยายการขายผ่านช่องทางใหม่ ๆ นี้ ครอบคลุมทั้งกรุงเทพมหานครและต่างจังหวัด ส่งผลให้ ร้านอาหารในกลุ่มโออิชิ คือ โออิชิ ราเมน และ คาคาชิ มียอดขายเพิ่มขึ้นจากเดิมด้วยเช่นกัน</p>
                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="./img/food-business-icon-6.png" alt="">
                        </div>
                        <div class="col-md-9">
                            <h4>Nikuya (15 สาขา)</h4>
                            <p>ร้านอาหารบุฟเฟ่ต์ยากินิกุ ภายใต้แนวคิด “นิกุยะ ยากินิกุ ตำรับโอซากาแท้” ให้บริการด้วยวัตถุดิบคุณภาพดี แบ่งออก ได้เป็น 2 ระดับคือ พรีเมียมบุฟเฟต์ ราคา 399 บาท (ไม่รวมเครื่องดื่ม) มีเมนูให้เลือก 40 รายการ และซูเปอร์ พรีเมียม บุฟเฟต์ (Super Premium Buffet) ราคา 539 บาท (ไม่รวมเครื่องดื่ม) และแบบสั่งตามรายการอาหาร แบบอาหารชุด หรือ จานเดี่ยวแบบ a la carte</p>
                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="./img/food-business-icon-7.png" alt="">
                        </div>
                        <div class="col-md-9">
                            <h4>Kakashi (25 สาขา)</h4>
                            <p>ร้านข้าวหน้าสไตล์ญี่ปุ่น ภายใต้คอนเซป ข้าวหน้าล้น เพิ่มปริมาณเนื้อสองเท่า (x2) ด้วยเมนูมากมายที่คัดสรรมา จากทั่วเกาะญี่ปุ่น ให้คุณได้อร่อยกับข้าวหน้าต่าง ๆ ร้อน ๆ พร้อมให้บริการทันใจในเวลาอันรวดเร็วและราคาประหยัด</p>
                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="./img/food-business-icon-9-2.png" alt="">
                        </div>
                        <div class="col-md-9">
                            <h4>Hou Yuu (1 สาขา)</h4>
                            <p>ร้านอาหารญี่ปุ่นระดับพรีเมียม ซึ่งให้บริการแบบสั่งตาม รายการอาหาร หรือ a la carte โดยมุ่งเน้นการคัดสรร วัตถุดิบชั้นดีและหาทานยากตามฤดูกาลนำเข้าจากประเทศญี่ปุ่น ที่ลูกค้าสามารถสัมผัสรสชาติอาหารญี่ปุ่นระดับพรีเมียม โดยมีเชฟผู้เชี่ยวชาญชาวญี่ปุ่นคอยให้บริการ</p>
                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="./img/food-business-icon-8.png" alt="">
                        </div>
                        <div class="col-md-9">
                            <h4>Snack Shop <sup>(1)</sup></h4>
                            <p>คีออส (Kiosk) จำหน่ายผลิตภัณฑ์ในเครือโออิชิ ทั้งแซนวิช เครื่องดื่ม และอาหาร แช่แข็งที่เพิ่มความสะดวกสบายให้แก่ ลูกค้าในทุกโอกาส</p>
                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-md-12">
                            <p>ณ วันที่ 30 กันยายน 2562 บริษัทและบริษัทย่อยมีสาขา ร้านอาหารรวมทั้งสิ้น 266 สาขา โดยเป็นสาขาที่เปิดดำเนินการ ในประเทศไทยซึ่งครอบคลุมการให้บริการทั้งในกรุงเทพมหานคร และต่างจังหวัด จำนวน 264 สาขา และสาขาที่เปิดดำเนินการ ในประเทศเมียนมา จำนวน 2 สาขา นอกจากนี้ ร้านอาหาร จำนวน 2 สาขา เป็นสาขาที่ให้บริการในรูปแบบของแฟรนไชส์ ได้แก่ ร้านชาบูชิ สาขาเอ็มเอ็ม เมก้ามาร์เก็ต อรัญประเทศ จังหวัดสระแก้ว และร้านนิกุยะ สาขาบุรีรัมย์ คาสเซิล จังหวัดบุรีรัมย์</p>
                            <p>(1) ปิดดำเนินการ เมื่อวันที่ 9 มกราคม 2562</p>
                        </div>
                    </div>
                    <br>
                    <h4>ธุรกิจอาหารพร้อมรับประทาน</h4><br>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="./img/food-business-icon-eato.png" alt="">
                        </div>
                        <div class="col-md-9">
                            <p>ธุรกิจอาหารพร้อมปรุงและพร้อมทานภายใต้ตรา “Oishi Eato” “โออิชิ อีทโตะ” เป็นธุรกิจการจัดจำหน่ายผลิตภัณฑ์อาหาร แช่เย็นและแช่แข็งสไตล์ญี่ปุ่นที่มีคุณภาพในรูปแบบ ที่หลากหลาย ได้แก่</p>
                            <h5>แซนวิช</h5>
                            <p>ขนมปังนุ่มอบหอมกรุ่นตามสูตรเฉพาะของโออิชิ อีทโตะ พร้อมกับไส้ที่หลากหลายรสชาติอร่อย ได้แก่ ปูอัดอลาสก้า ยำสาหร่าย แฮมชีส ทูน่าสลัด เป็นต้น</p>
                            <h5>แซนวิชผสมธัญพืช</h5>
                            <p>ขนมปังผสมคุณประโยชน์จากธัญพืช 5 ชนิด พร้อมไส้ที่อร่อย และยังดีต่อสุขภาพอีกด้วย ได้แก่ สลัดแซลมอนเทอริยากิ และ แคลิฟอร์เนียปูอัดไข่กุ้งสเปรดอะโวคาโด้</p>
                            <h5>เกี๊ยวซ่า</h5>
                            <p>แป้งบางนุ่ม ไส้แน่น อร่อยเต็มคำ เสริฟพร้อมซอสรสชาติ อร่อยกลมกล่อม มีหลากหลายรสชาติ ได้แก่ เกี๊ยวซ่าไส้หมู ไส้ไก่เทอริยากิ ไส้กุ้ง ไส้หมูทาโกะยากิ เกี๊ยวซ่าโออิชิ อีทโตะ ยังสามารถนำไปปรุงได้หลากหลายวิธี ทั้งไมโครเวฟ ทอด นึ่ง หรือ เทปันกระทะร้อน</p>
                            <h5>ทาโกะยากิ</h5>
                            <p>ปลาหมึกเต็มคำ แป้งสูตรญี่ปุ่นแท้ ๆ เสริฟพร้อมซอสทาโกะ ยากิมาโยสูตรเข้มข้น</p>
                            <h5>ปูอัดคามาโบโกะ และ ปูอัดอลาสก้า</h5>
                            <p>เนื้อปลาบดคุณภาพดีนำมาเป็นวัตถุดิบในการทำปูอัด พร้อมปรุงรสชาติให้อร่อยเหมาะทั้งการนำมาทานเล่นหรือ เป็นส่วนประกอบของเมนูอาหารได้หลากหลาย</p>
                            <h5>ราเมนผัดแห้ง</h5>
                            <p>เส้นราเมนเหนียวนุ่ม ไม่ผสมวัตถุกันเสียและผงชูรส นำมา ผัดซอสสไตล์ญี่ปุ่น มีหลากหลายรสชาติ ได้แก่ หอยลายผัด น้ำพริกเผา ไก่เทอริยากิผัดซอสนาเบะ และ ยากิโซบะ เป็นต้นโดยในปีที่ผ่านมา บริษัทยังคงมุ่งเน้นการพัฒนานวัตกรรม ผลิตภัณฑ์ให้มีความหลากหลายทั้งในด้านรูปแบบ รสชาติ และบรรจุภัณฑ์ เพื่อตอบสนองความต้องการของผู้บริโภค กลุ่มเป้าหมายมากยิ่งขึ้น ได้แก่ เฟรนช์โทสต์แซนวิช ที่นำ ความนุ่มของขนมปังสูตรเฉพาะจากโออิชิ อีทโตะ มาชุบไข่ เนยและนม ก่อนนำไปอบจนหอม อีกทั้งยังมีความอร่อยจาก เบคอน เชดด้าชีส และมอสซาเรลลาชีส สำหรับปี 2563 บริษัทยังคงมุ่งเน้นการสร้างตราสินค้า โออิชิ อีทโตะ ให้เป็น ที่จดจำ และ ยังคงพัฒนานวัตกรรมสินค้าใหม่ในสไตล์ญี่ปุ่น ที่อร่อย แปลกใหม่ และยังดีต่อสุขภาพต่อไป</p>
                        </div>
                    </div>
                    </div><!--End Brand-->
                    <div id="bavarage">
                    <div class="row">
                        <div class="col-md-12">
                            <h4>ธุรกิจเครื่องดื่ม</h4>
                            <p>บริษัทและบริษัทย่อยเป็นผู้ผลิตและจำหน่ายเครื่องดื่มรสชาติต่าง ๆ และมีบรรจุภัณฑ์ที่หลากหลายดังต่อไปนี้</p>
                            <table>
                                <thead>
                                    <tr>
                                        <td width="13%" rowspan="2">เครื่องดื่ม</td>
                                        <td rowspan="2">รสชาติ</td>
                                        <td colspan="5" class="">ขวดพลาสติก</td>
                                        <td class="">ขวดแก้ว</td>
                                        <td class="">กล่อง</td>
                                        <td class="">กระ<br>ป๋อง</td>
                                    </tr>
                                    <tr class="sub">
                                        <td width="8%">800<br>มล.</td>
                                        <td width="8%">500<br>มล.</td>
                                        <td width="8%">380<br>มล.</td>
                                        <td width="8%">350<br>มล.</td>
                                        <td width="8%">400<br>มล.</td>
                                        <td width="8%">400<br>มล.</td>
                                        <td width="8%">180<br>มล.</td>
                                        <td width="8%">320<br>มล.</td>
                                    </tr>
                                </thead>
                                    <tbody>
                                        <tr>
                                            <td rowspan="8" class="product">โออิชิ<br>กรีนที</td>
                                            <td>น้ำผึ้งผสมมะนาว</td>
                                            <td class="green"><img src="./img/circle.png" alt="" class="circle"></i></td>
                                            <td class=""><img src="./img/circle.png" alt="" class="circle"></td>
                                            <td class="green"><img src="./img/circle.png" alt="" class="circle"></td>
                                            <td class=""><img src="./img/circle.png" alt="" class="circle"></td>
                                            <td class="green">&nbsp;</td>
                                            <td class=""><img src="./img/circle.png" alt="" class="circle"></td>
                                            <td class="green"><img src="./img/circle.png" alt="" class="circle"></td>
                                            <td class="">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>น้ำผึ้งผสมมะนาว<br>สูตรดับเบิ้ลเลมอน</td>
                                            <td class="green">&nbsp;</td>
                                            <td class="">&nbsp;</td>
                                            <td class="green"><img src="./img/circle.png" alt="" class="circle"></td>
                                            <td class=""><img src="./img/circle.png" alt="" class="circle"></td>
                                            <td class="green">&nbsp;</td>
                                            <td class=""><img src="./img/circle.png" alt="" class="circle"></td>
                                            <td class="green">&nbsp;</td>
                                            <td class="">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>ข้าวญี่ปุ่น</td>
                                            <td class="green"><img src="./img/circle.png" alt="" class="circle"></td>
                                            <td class=""><img src="./img/circle.png" alt="" class="circle"></td>
                                            <td class="green"><img src="./img/circle.png" alt="" class="circle"></td>
                                            <td class=""><img src="./img/circle.png" alt="" class="circle"></td>
                                            <td class="green">&nbsp;</td>
                                            <td class="">&nbsp;</td>
                                            <td class="green"><img src="./img/circle.png" alt="" class="circle"></td>
                                            <td class="">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>รสดั้งเดิม</td>
                                            <td class="green">&nbsp;</td>
                                            <td class=""><img src="./img/circle.png" alt="" class="circle"></td>
                                            <td class="green"><img src="./img/circle.png" alt="" class="circle"></td>
                                            <td class=""><img src="./img/circle.png" alt="" class="circle"></td>
                                            <td class="green">&nbsp;</td>
                                            <td class="">&nbsp;</td>
                                            <td class="green"><img src="./img/circle.png" alt="" class="circle"></td>
                                            <td class="">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>สตรอร์เบอร์รี่</td>
                                            <td class="green">&nbsp;</td>
                                            <td class="">&nbsp;</td>
                                            <td class="green">&nbsp;</td>
                                            <td class="">&nbsp;</td>
                                            <td class="green">&nbsp;</td>
                                            <td class="">&nbsp;</td>
                                            <td class="green">&nbsp;</td>
                                            <td class="">&nbsp;</td>
                                        </tr>

                                        <tr>
                                            <td>องุ่นเคียวโฮ</td>
                                            <td class="green">&nbsp;</td>
                                            <td class="">&nbsp;</td>
                                            <td class="green"><img src="./img/circle.png" alt="" class="circle"></td>
                                            <td class=""><img src="./img/circle.png" alt="" class="circle"></td>
                                            <td class="green">&nbsp;</td>
                                            <td class="">&nbsp;</td>
                                            <td class="green"><img src="./img/circle.png" alt="" class="circle"></td>
                                            <td class="">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>ส้มยูซุ</td>
                                            <td class="green">&nbsp;</td>
                                            <td class="">&nbsp;</td>
                                            <td class="green"><img src="./img/circle.png" alt="" class="circle"></td>
                                            <td class="">&nbsp;</td>
                                            <td class="green">&nbsp;</td>
                                            <td class="">&nbsp;</td>
                                            <td class="green">&nbsp;</td>
                                            <td class="">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>แตงโม</td>
                                            <td class="green">&nbsp;</td>
                                            <td class="">&nbsp;</td>
                                            <td class="green"><img src="./img/circle.png" alt="" class="circle"></td>
                                            <td class=""><img src="./img/circle.png" alt="" class="circle"></td>
                                            <td class="green">&nbsp;</td>
                                            <td class="">&nbsp;</td>
                                            <td class="green">&nbsp;</td>
                                            <td class="">&nbsp;</td>
                                        </tr>
                                        <tr class="top">
                                            <td rowspan="4" class="product">โออิชิ<br>คาบูเซฉะ</td>
                                            <td>เก็นไมฉะ<br>สูตรไม่มีน้ำตาล</td>
                                            <td class="green">&nbsp;</td>
                                            <td class="">&nbsp;</td>
                                            <td class="green">&nbsp;</td>
                                            <td class="">&nbsp;</td>
                                            <td class="green"><img src="./img/circle.png" alt="" class="circle"></td>
                                            <td class="">&nbsp;</td>
                                            <td class="green">&nbsp;</td>
                                            <td class="">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>เกนไมฉะ<br>สูตรน้ำตาลน้อย</td>
                                            <td class="green">&nbsp;</td>
                                            <td class="">&nbsp;</td>
                                            <td class="green">&nbsp;</td>
                                            <td class="">&nbsp;</td>
                                            <td class="green"><img src="./img/circle.png" alt="" class="circle"></td>
                                            <td class="">&nbsp;</td>
                                            <td class="green">&nbsp;</td>
                                            <td class="">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>คาบูเซฉะ<br>สูตรไม่มีน้ำตาล</td>
                                            <td class="green">&nbsp;</td>
                                            <td class="">&nbsp;</td>
                                            <td class="green">&nbsp;</td>
                                            <td class="">&nbsp;</td>
                                            <td class="green"><img src="./img/circle.png" alt="" class="circle"></td>
                                            <td class="">&nbsp;</td>
                                            <td class="green">&nbsp;</td>
                                            <td class="">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>คาบูเซฉะ<br>สูตรน้ำตาลน้อย</td>
                                            <td class="green">&nbsp;</td>
                                            <td class="">&nbsp;</td>
                                            <td class="green">&nbsp;</td>
                                            <td class="">&nbsp;</td>
                                            <td class="green"><img src="./img/circle.png" alt="" class="circle"></td>
                                            <td class="">&nbsp;</td>
                                            <td class="green">&nbsp;</td>
                                            <td class="">&nbsp;</td>
                                        </tr>
                                        <tr class="top">
                                            <td class="product">โออิชิ<br>แบล็คที</td>
                                            <td>ชาดำผสมมะนาว</td>
                                            <td class="green">&nbsp;</td>
                                            <td class=""><img src="./img/circle.png" alt="" class="circle"></td>
                                            <td class="green">&nbsp;</td>
                                            <td class="">&nbsp;</td>
                                            <td class="green">&nbsp;</td>
                                            <td class="">&nbsp;</td>
                                            <td class="green">&nbsp;</td>
                                            <td class="">&nbsp;</td>
                                        </tr>
                                        <tr class="top">
                                            <td class="product">โออิชิ<br>ชาคูลล์ซ่า</td>
                                            <td>น้ำผึ้งผสมมะนาว</td>
                                            <td class="green">&nbsp;</td>
                                            <td class="">&nbsp;</td>
                                            <td class="green">&nbsp;</td>
                                            <td class="">&nbsp;</td>
                                            <td class="green">&nbsp;</td>
                                            <td class="">&nbsp;</td>
                                            <td class="green">&nbsp;</td>
                                            <td class=""><img src="./img/circle.png" alt="" class="circle"></td>
                                        </tr>
                                    </tbody>
                            </table>
                        </div>
                    </div>
                    </div><!--End Bavarage-->
                </div><!--End right colum-->
            </div><!--End Row-->
        </div><!--End Container-->
     </section>
    <!--Fading Effect-->
     <script>
        $(document).ready(function(){
            $("#second").click(function(){ 
            $("#food").fadeOut("slow");
            $("#bavarage").fadeIn(2000);
            });
        });

        $(document).ready(function(){
            $("#first").click(function(){ 
            $("#bavarage").fadeOut("slow");
            $("#food").fadeIn(2000);
            });
        });
</script>


<!--Prototype
<script>
        function showBav() {
            var bav = document.getElementById("bavarage");
            var food = document.getElementById("food");

            bav.style.display = "block";
            food.style.display = "none";
            
        }

        function showFood() {
            var bav = document.getElementById("bavarage");
            var food = document.getElementById("food");

            bav.style.display = "none";
            food.style.display = "block";
            
        }
</script>
-->
<?php require('footer.php'); ?>
