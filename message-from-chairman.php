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

    #message{
        background-color:white;
        padding:50px;
    }

    #CEO{
        text-align: center;
    }

    #selected4{
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
                    <h1>สารจากประธานกรรมการ</h1><br>
                    <div class="row" id="message"><!--Message-->
                        <div class="container"><!--Message Detail-->
                            <p>ในปี 2562 บริษัทยังคงมุ่งมั่นในการดำเนินธุรกิจและสามารถสร้างการเติบโตของผลการดำเนินงานอย่างยั่งยืน และน่าประทับใจ ท่ามกลางสภาวะเศรษฐกิจมหภาคที่ท้าทายและความไม่แน่นอน จากสถานการณ์การค้าโลก อันส่งผลต่อการชะลอตัวของเศรษฐกิจโดยรวม บริษัท ผู้บริหารและพนักงานทุกคนยังคงตั้งใจแน่วแน่ ในการปฏิบัติหน้าที่และบริหารกิจการอย่างเต็มความสามารถ เพื่อดำเนินการตามแผน “วิสัยทัศน์ 2020” ซึ่งเป็นแผนดำเนินธุรกิจ เพื่อสร้างการเติบโตอย่างยั่งยืนและความแข็งแกร่งสู่การเป็นบริษัทอาหารและเครื่องดื่มชั้นนำในภูมิภาคอาเซียน โดยได้ดำเนินการโดยตลอดต่อเนื่องตั้งแต่ปี 2557</p>
                            <p>วิสัยทัศน์ 2020 ประกอบด้วยกลยุทธ์หลัก 5 ประการ ได้แก่</p>
                            <ol>
                                <li>การเติบโต (Growth) คือ การสร้างการเติบโตอย่างยั่งยืน ทั้งในด้านรายได้และกำไรให้แก่ธุรกิจอาหารและธุรกิจเครื่องดื่มของบริษัท</li>
                                <li>ความหลากหลาย (Diversity) คือ การสร้างสรรค์ผลิตภัณฑ์ให้มีความหลากหลายทั้งประเภทผลิตภัณฑ์ และราคาจำหน่าย รวมถึงการผสานกำลังของบุคลากรที่มีความรู้ ความสามารถ และประสบการณ์ที่หลากหลายภายในกลุ่มธุรกิจ</li>
                                <li>ตราสินค้า (Brands) คือ การสร้างตราสินค้าให้เป็นที่นิยม และอยู่ในใจผู้บริโภคอย่างยั่งยืน โดยการรักษาความเป็นผู้นำทั้งในตลาดอาหารญี่ปุ่น ชาเขียวและชาพร้อมดื่มในประเทศไทย ผ่านนวัตกรรมผลิตภัณฑ์และกิจกรรมการตลาดที่สร้างสรรค์รวมถึงการสร้างตราสินค้าให้เป็นที่รู้จักอย่างแพร่หลายในต่างประเทศ</li>
                                <li>การขายและกระจายสินค้า (Reach) คือ การริเริ่มและสรรหาช่องทางการตลาดและการจัดจำหน่ายสินค้าใหม่ๆ เพื่อให้สามารถเข้าถึงกลุ่มผู้บริโภคที่หลากหลายและครอบคลุมทั้งในและต่างประเทศ</li>
                                <li>ความเป็นมืออาชีพ (Professionalism) คือ การส่งเสริม และพัฒนาบุคลากร รวมถึงการสนับสนุนโครงสร้างพื้นฐานในการทำงานเพื่อสร้างเสริมศักยภาพของบุคลากร</li>
                            </ol>
                            <p>การดำเนินการตามกลยุทธ์ดังกล่าว ทำให้บริษัทสามารถปรับตัว และมีความพร้อมที่จะรับมือกับสภาพเศรษฐกิจและเงื่อนไขการดำเนินการทางธุรกิจที่เปลี่ยนไป โดยบริษัทยังมีความสามารถในการดำเนินธุรกิจให้เป็นไปในทิศทางที่วางแผนไว้ สอดคล้องกับ กลยุทธ์ที่ก่อให้เกิดความร่วมมือและเสริมสร้างพลัง (synergy) ภายในกลุ่มบริษัท ซึ่งส่งผลให้การดำเนินงานในปีที่ผ่านมาเติบโตอย่างน่าประทับใจ โดยในปี 2562 บริษัทมีรายได้รวมจำนวน 13,631 ล้านบาท เพิ่มขึ้นจากปีก่อนที่มีรายได้รวมจำนวน 12,596 ล้านบาท ในส่วนของกำไรสุทธินั้นบริษัทมีกำไรสุทธิรวมจำนวน 1,229 ล้านบาท เพิ่มขึ้นจากปีก่อนที่มีกำไรสุทธิรวมจำนวน 1,008 ล้านบาท และมีอัตราส่วนกำไรสุทธิร้อยละ 9.0 ของยอดขายรวม เพิ่มขึ้นเมื่อเทียบกับอัตราส่วนกำไรสุทธิที่ร้อยละ 8.0 ของยอด ขายรวมในปีที่ผ่านมา</p>
                            <p>ด้วยสถานะทางการเงินของบริษัทที่มีความมั่นคงและแข็งแกร่งอย่างต่อเนื่อง รวมทั้งการเป็นผู้ผลิตชาเขียวชั้นนำของประเทศไทย และมีตราสินค้าซึ่งเป็นที่รู้จักและอยู่ในความนิยมของผู้บริโภค ซึ่งแสดงถึงศักยภาพความเป็นผู้นำทางการตลาดและได้เสริมสร้างความมั่นคงแข็งแกร่งทางการเงินของบริษัทที่พร้อมรองรับการขยายตัวของธุรกิจในอนาคตได้เป็นอย่างดี บริษัทจึงสามารถคงอันดับเครดิตขององค์กรที่ระดับ A+ จากการทบทวนของ บริษัท ทริสเรทติ้ง จำกัด เมื่อเดือนตุลาคม 2562</p>
                            <p>บริษัทยังคงมุ่งเน้นกลยุทธ์ในการสร้างตราสินค้าที่บริษัทได้ดำเนินการมาอย่างต่อเนื่องเพื่อคงความเป็นผู้นำทางการตลาด โดยการจัดกิจกรรมส่งเสริมการขายในรูปแบบที่สร้างสรรค์ การสร้างความรับรู้ ในตราสินค้าผ่านช่องทางต่างๆ รวมทั้งผ่านทางสื่อสังคมออนไลน์ ซึ่งเป็นช่องทางที่สามารถเข้าถึงกลุ่มลูกค้าเป้าหมายได้อย่างมีประสิทธิภาพโดยเฉพาะกลุ่มลูกค้าวัยรุ่น ดังจะเห็นได้จากรางวัล “สุดยอดแบรนด์ทรงพลังทางสื่อสังคมออนไลน์” ประจำปี 2562 (Thailand Most Social Power Brand 2019) จากนิตยสารแบรนด์เอจ ในฐานะที่โออิชิเป็นตราสินค้าที่แข็งแกร่งและทรงพลังที่สุดทางสื่อสังคมออนไลน์ สำหรับทั้งในหมวดชาเขียวพร้อมดื่ม และร้านอาหารญี่ปุ่นโดยมีการวัดผลในสี่แพลตฟอร์ม ได้แก่ เฟซบุ๊ก (Facebook) อินสตาแกรม (Instagram) ทวิตเตอร์ (Twitter) และยูทูบ (Youtube) นอกจากนี้ บริษัทยังได้รับรางวัล Thailand’s Most Admired Brand 2019 ซึ่งเป็นรางวัลที่ได้รับเป็นปีที่แปดติดต่อกัน ในฐานะที่โออิชิเป็นตราสินค้าที่ครองความน่าเชื่อถืออันดับ 1 ในหมวดชาพร้อมดื่ม สองรางวัลดังกล่าวนี้ ช่วยตอกย้ำถึงความเป็นตราสินค้าอันดับหนึ่งในใจผู้บริโภคที่มุ่งมั่น พัฒนานวัตกรรมผลิตภัณฑ์เพื่อตอบสนองกับกระแสความต้องการของผู้บริโภคที่มีความหลากหลายเป็นอย่างดี บริษัทยังคงศึกษาพัฒนาและสร้างสรรค์นวัตกรรมผลิตภัณฑ์ใหม่ๆ อย่างต่อเนื่อง อาทิเช่น “โออิชิ น้ำผึ้งผสมมะนาวสูตรดับเบิ้ลเลมอน” ด้วยสูตร น้ำผึ้งเฮียกขะมิทสึเพื่อเจาะตลาดกลุ่มวัยรุ่น “โออิชิ แอปเปิลฮันนี่” ชาเขียวที่ผสานความอร่อยจากแอปเปิลอาโอโมริและน้ำผึ้งเฮียกขะมิทสึแท้จากประเทศญี่ปุ่น รวมถึงผลิตภัณฑ์ชาเขียวพร้อมดื่มระดับพรีเมี่ยม ภายใต้ชื่อผลิตภัณฑ์ “โออิชิ โกลด์” เพื่อเป็นทางเลือกเครื่องดื่มสุขภาพและได้ผลตอบรับที่ดีมากจากผู้บริโภค จากความสำเร็จในการดำเนินกลยุทธ์ทางการตลาดในการ สร้างตราสินค้าและการศึกษาพัฒนาผลิตภัณฑ์ใหม่อย่างต่อเนื่อง ส่งผลให้บริษัทสามารถครองส่วนแบ่งการตลาดสูงสุดเป็นอันดับหนึ่งทั้งในตลาดชาพร้อมดื่ม (RTD tea market) และชาเขียวพร้อมดื่ม (Pure RTD green tea market) ในอัตราร้อยละ 44.6 และร้อยละ 46.4 ตามลำดับ<sup>(1)</sup></p>
                            <p>อาทิเช่น “โออิชิ น้ำผึ้งผสมมะนาวสูตรดับเบิ้ลเลมอน” ด้วยสูตร น้ำผึ้งเฮียกขะมิทสึเพื่อเจาะตลาดกลุ่มวัยรุ่น “โออิชิ แอปเปิลฮันนี่” ชาเขียวที่ผสานความอร่อยจากแอปเปิลอาโอโมริและน้ำผึ้งเฮียกขะมิทสึแท้จากประเทศญี่ปุ่น รวมถึงผลิตภัณฑ์ชาเขียวพร้อมดื่มระดับพรีเมี่ยม ภายใต้ชื่อผลิตภัณฑ์ “โออิชิ โกลด์” เพื่อเป็นทางเลือกเครื่องดื่มสุขภาพและได้ผลตอบรับที่ดีมากจากผู้บริโภค จากความสำเร็จในการดำเนินกลยุทธ์ทางการตลาดในการ สร้างตราสินค้าและการศึกษาพัฒนาผลิตภัณฑ์ใหม่อย่างต่อเนื่องส่งผลให้บริษัทสามารถครองส่วนแบ่งการตลาดสูงสุดเป็นอันดับหนึ่งทั้งในตลาดชาพร้อมดื่ม (RTD tea market) และชาเขียวพร้อมดื่ม (Pure RTD green tea market) ในอัตราร้อยละ 44.6 และร้อยละ 46.4 ตามลำดับ<sup>(1)</sup></p>
                            <p>ในด้านการขยายธุรกิจไปยังต่างประเทศ ซึ่งเป็นกลยุทธ์ที่บริษัทได้มุ่งเน้นดำเนินการมาโดยตลอดนั้น ปัจจุบัน โออิชิ กรีนที เป็น ชาเขียวพร้อมดื่มชั้นนำที่มีการเติบโตของยอดขายอย่างต่อเนื่องในราชอาณาจักรกัมพูชา สาธารณรัฐประชาธิปไตยประชาชนลาว และประเทศมาเลเซีย โดยบริษัทได้ให้ความสำคัญในการทำการตลาด เพื่อขยายโอกาสในประเทศที่มีศักยภาพสูงเสมอมา อีกทั้งยังมีการส่งออกไปในประเทศอื่นอีกกว่า 25 ประเทศ และเชื่อว่าด้วยความแข็งแกร่งของตราสินค้า บริษัทจะยังมีโอกาสในการขยายการเติบโตในตลาดต่างประเทศได้อีกมากต่อไป</p>
                            <p>ด้วย “วิสัยทัศน์ 2020” ภายใต้กลยุทธ์ 5 ประการส่งผลให้บริษัทสามารถสร้างการเติบโตได้อย่างยั่งยืน เพื่อสร้างประโยชน์สูงสุดให้แก่ผู้มีส่วนได้เสีย พนักงาน และชุมชนที่บริษัทดำเนินกิจการอยู่ดังจะเห็นได้จากการดำเนินธุรกิจโดยเน้นนโยบายการเป็นมิตรกับ สิ่งแวดล้อม ซึ่งส่งผลให้บริษัทได้รับประกาศนียบัตรจากสถาบันน้ำ และสิ่งแวดล้อมเพื่อความยั่งยืน สภาอุตสาหกรรมแห่งประเทศไทยในฐานะผู้ผลิตเครื่องดื่มที่มีกระบวนการผลิตตลอดห่วงโซ่อาหารอย่างมีประสิทธิภาพซึ่งจะนำไปสู่การบริหารจัดการทรัพยากรน้ำอย่างยั่งยืน อีกทั้งบริษัทได้ช่วยพัฒนาและสร้างการเติบโตร่วมกันกับสังคมและชุมชนในพื้นที่ที่บริษัทดำเนินกิจการอยู่ โดยการ เข้าไปมีส่วนร่วมในการพัฒนาและให้ความรู้กับชุมชนเพื่อสร้างการเติบโตร่วมกันอย่างยั่งยืน รวมถึงบริษัทยังให้ความสำคัญกับการพัฒนาคุณภาพและบริการเพื่อยกระดับขีดความสามารถในการแข่งขันทางธุรกิจในระยะยาว โดยคำนึงถึงความสำคัญในด้านสุขลักษณะและความปลอดภัยของอาหารสำหรับผู้บริโภค โดยบริษัทได้รับรางวัล อย. ควอลิตี้ อวอร์ด ประจำปี 2562 จากสำนักงานคณะกรรมการอาหารและยาเป็นปีที่ 3 ติดต่อกันจากการเป็นสถานประกอบการผลิตภัณฑ์สุขภาพด้านอาหารที่ได้มาตรฐานระดับสากล มีคุณภาพ คุณธรรมและจริยธรรมในการผลิตอีกด้วย</p>
                            <p>ในส่วนของความรับผิดชอบและการดูแลสังคม บริษัทมีเจตนารมณ์ในการดำเนินธุรกิจบนพื้นฐานของธรรมาภิบาลและมีความรับผิดชอบ ต่อสังคมและสิ่งแวดล้อม โดยได้กำหนดกลยุทธ์ พัฒนากระบวนการ และการทำกิจกรรมด้านความรับผิดชอบต่อสังคมและสิ่งแวดล้อม (CSR) อย่างต่อเนื่องทั้งในกระบวนการดำเนินธุรกิจและกิจกรรม เพื่อสังคมและสิ่งแวดล้อม อาทิเช่น การพัฒนากระบวนการผลิตเพื่อลดผลกระทบต่อสิ่งแวดล้อม โครงการน้ำดื่มสะอาดซึ่งเป็น โครงการที่บริษัทได้เข้าไปปรับปรุงระบบผลิตน้ำดื่มสะอาดให้กับชุมชนโดยรอบโรงงาน โดยได้ดำเนินการต่อเนื่องมาเป็นปีที่ 2 และโครงการมอบอาหาร-เครื่องดื่ม ให้กับเด็กที่ประสบภัยหนาวในพื้นที่ อำเภอลานสัก จังหวัดอุทัยธานี เป็นต้น ทั้งนี้เพื่อส่งมอบ คุณค่าและสร้างผลกระทบในทางบวกเพื่อให้มั่นใจได้ว่าธุรกิจ สังคมและสิ่งแวดล้อมจะสามารถสร้างการเติบโตร่วมกันได้อย่างยั่งยืน โดยรายละเอียดกิจกรรมและการดำเนินการในด้านดังกล่าวได้แสดงไว้ในรายงานการพัฒนาที่ยั่งยืน</p>
                            <p>ในนามของคณะกรรมการบริษัท ขอเรียนว่าผู้บริหารและพนักงานทุกคนมีความมุ่งมั่นในการปฏิบัติหน้าที่และบริหารงานอย่างดีที่สุด เพื่อนำพาบริษัทให้เจริญเติบโตอย่างยั่งยืนทั้งในธุรกิจเครื่องดื่ม และธุรกิจอาหาร และธำรงรักษาความเป็นผู้นำทางการตลาดอาหารญี่ปุ่นและธุรกิจชาเขียว ภายใต้กลุ่มบริษัท ไทยเบฟเวอเรจ จำกัด (มหาชน) จึงขอให้ท่านได้โปรดให้ความไว้วางใจและสนับสนุนการดำเนินกิจการของผู้บริหารของบริษัท เพื่อความเจริญอย่างยั่งยืนของบริษัทอันจะเป็นผลประโยชน์ของผู้ถือหุ้นทุกท่านตลอดไป</p>
                            <br>
                            <div id="CEO">
                                <h5>นายประสิทธิ์ โฆวิไลกูล</h5>
                                <h5>ประธานกรรมการบริษัท</h5>
                            </div>
                        </div><!--End Message Detail-->
                    </div><!--End Message-->
                </div><!--End right colum-->
            </div><!--End Row-->
        </div><!--End Container-->
     </section>




<?php require('footer.php'); ?>
