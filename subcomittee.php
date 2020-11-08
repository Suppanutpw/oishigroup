<html lang="en">
<head>
    <title>Document</title>
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
        th{
            color: white;
        }
        .table{
            margin-bottom: 40px;
        }
        #selected9{
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

    <!-- เนื้อหา -->
    <section id="content" style="z-index: 20 !important;">
        <div class="container">
            <div class="row">
                <?php require('sub-bar.php');?>
                <div class="col-9">
                    <h2>คณะกรรมการชุดย่อย</h2><br>
                    <h5>คณะกรรมการบริหาร</h5><br>
                    <table class="table">
                        <thead>
                            <tr class="bg-danger">
                                <th>ลำดับ</th>
                                <th>ชื่อ</th>
                                <th>นามสกุล</th>
                                <th>ตำแหน่ง</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>นายอวยชัย</td>
                                <td>ตันทโอภาส</td>
                                <td>ประธานกรรมการบริหาร</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>นายสิทธิชัย</td>
                                <td>ชัยเกรียงไกร</td>
                                <td>รองประธานกรรมการบริหาร คนที่ 1</td>
                            </tr>
                            <tr>   			
                                <td>3</td>
                                <td>นายลี</td>
                                <td>เม็ง ตัท</td>
                                <td>รองประธานกรรมการบริหาร คนที่ 2</td>
                            </tr>
                            <tr>		
                                <td>4</td>
                                <td>นายพิษณุ</td>
                                <td>วิเชียรสรรค์</td>
                                <td>กรรมการบริหาร</td>
                            </tr>
                            <tr>				
                                <td>5</td>
                                <td>นางนงนุช</td>
                                <td>บูรณะเศรษฐกุล</td>
                                <td>กรรมการบริหาร</td>
                            </tr>
                            <tr> 		
                                <td>6</td>
                                <td>นางสุรีย์พร</td>
                                <td>ประดิษฐ์ทัศนีย์</td>
                                <td>กรรมการบริหาร</td>
                            </tr>
                            <tr> 				
                                <td>7</td>
                                <td>นาย ไพศาล</td>
                                <td>อ่าวสถาพร</td>
                                <td>กรรมการบริหาร</td>
                            </tr>
                        </tbody>
                    </table>
                    <h5>คณะกรรมการตรวจสอบ</h5><br>
                    <table class="table">
                        <thead>
                            <tr class="bg-danger">
                                <th>ลำดับ</th>
                                <th>ชื่อ</th>
                                <th>นามสกุล</th>
                                <th>ตำแหน่ง</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>		
                                <td>1</td>
                                <td>นายวิกรม</td>
                                <td>คุ้มไพโรจน์</td>
                                <td>ประธานกรรมการตรวจสอบ</td>
                            </tr>
                            <tr> 		
                                <td>2</td>
                                <td>นางสาวพจนีย์</td>
                                <td>ธนวรานิช</td>
                                <td>กรรมการตรวจสอบ</td>
                            </tr>
                            <tr>   					
                                <td>3</td>
                                <td>นายชัย</td>
                                <td>จรุงธนาภิบาล</td>
                                <td>กรรมการตรวจสอบ</td>
                            </tr>
                        </tbody>
                    </table>
                    <h5>คณะกรรมการบริหารความยั่งยืนและความเสี่ยง</h5><br>
                    <table class="table">
                        <thead>
                            <tr class="bg-danger">
                                <th>ลำดับ</th>
                                <th>ชื่อ</th>
                                <th>นามสกุล</th>
                                <th>ตำแหน่ง</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>					
                                <td>1</td>
                                <td>นายชัย</td>
                                <td>จรุงธนาภิบาล</td>
                                <td>ประธานกรรมการบริหารความยั่งยืนและความเสี่ยง</td>
                            </tr>
                            <tr> 				
                                <td>2</td>
                                <td>นายพิษณุ</td>
                                <td>วิเชียรสรรค์</td>
                                <td>รองประธานกรรมการบริหารความยั่งยืนและความเสี่ยง</td>
                            </tr>
                            <tr>   							
                                <td>3</td>
                                <td>นางนงนุช</td>
                                <td>บูรณะเศรฐกุล</td>
                                <td>กรรมการบริหารความยั่งยืนและความเสี่ยง</td>
                            </tr>
                            <tr>   									
                                <td>4</td>
                                <td>นางสุรีย์พร</td>
                                <td>ประดิษฐ์ทัศนีย์</td>
                                <td>กรรมการบริหารความยั่งยืนและความเสี่ยง</td>
                            </tr>
                            <tr>   								
                                <td>5</td>
                                <td>นายไพศาล</td>
                                <td>อ่าวสถาพร</td>
                                <td>กรรมการบริหารความยั่งยืนและความเสี่ยง</td>
                            </tr>
                            <tr>   								
                                <td>6</td>
                                <td>นางเจษฎากร</td>
                                <td>โคชส์</td>
                                <td>กรรมการบริหารความยั่งยืนและความเสี่ยง</td>
                            </tr>
                            <tr>   								
                                <td>7</td>
                                <td>นางสาวเมขลา</td>
                                <td>เนติโพธิ์</td>
                                <td>กรรมการบริหารความยั่งยืนและความเสี่ยง</td>
                            </tr>
                            <tr>	
                                <td>8</td>
                                <td>นายกฤษฎา</td>
                                <td>วรรธนะภาคิน</td>
                                <td>กรรมการบริหารความยั่งยืนและความเสี่ยง</td>
                            </tr>
                            <tr>   								
                                <td>9</td>
                                <td>นายธานี</td>
                                <td>พรพิสุทธิ์ศักดิ์</td>
                                <td>กรรมการบริหารความยั่งยืนและความเสี่ยง</td>
                            </tr>
                            <tr>   								
                                <td>10</td>
                                <td>นางมนต์ฤดี</td>
                                <td>อัครราช</td>
                                <td>กรรมการบริหารความยั่งยืนและความเสี่ยง</td>
                            </tr>
                            <tr>   								
                                <td>11</td>
                                <td>นางชลิตา</td>
                                <td>อิศรางกูร ณ อยุธยา</td>
                                <td>กรรมการบริหารความยั่งยืนและความเสี่ยง</td>
                            </tr>
                            <tr>   								
                                <td>12</td>
                                <td>นางสาวชนัทนุช</td>
                                <td>วงศ์วรรณ</td>
                                <td>กรรมการบริหารความยั่งยืนและความเสี่ยง</td>
                            </tr>
                        </tbody>
                    </table>
                    <h5>คณะกรรมการสรรหา</h5><br>
                    <table class="table">
                        <thead>
                            <tr class="bg-danger">
                                <th>ลำดับ</th>
                                <th>ชื่อ</th>
                                <th>นามสกุล</th>
                                <th>ตำแหน่ง</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>	
                                <td>1</td>
                                <td>นายวิกรม</td>
                                <td>คุ้มไพโรจน์</td>
                                <td>ประธานกรรมการสรรหา</td>
                            </tr>
                            <tr> 				
                                <td>2</td>
                                <td>นายประสิทธิ์</td>
                                <td>โฆวิไลกูล</td>
                                <td>กรรมการสรรหา</td>
                            </tr>
                            <tr>   						
                                <td>3</td>
                                <td>นายอวยชัย</td>
                                <td>ตันทโอภาส</td>
                                <td>กรรมการสรรหา</td>
                            </tr>
                        </tbody>
                    </table>
                    <h5>คณะกรรมการกำหนดค่าตอบแทน</h5><br>
                    <table class="table">
                        <thead>
                            <tr class="bg-danger">
                                <th>ลำดับ</th>
                                <th>ชื่อ</th>
                                <th>นามสกุล</th>
                                <th>ตำแหน่ง</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>			
                                <td>1</td>
                                <td>นางสาวพจนีย์</td>
                                <td>ธนวรานิช</td>
                                <td>ประธานกรรมการกำหนดค่าตอบแทน</td>
                            </tr>
                            <tr> 						
                                <td>2</td>
                                <td>นายประสิทธิ์</td>
                                <td>โฆวิไลกูล</td>
                                <td>กรรมการกำหนดค่าตอบแทน</td>
                            </tr>
                            <tr>   								
                                <td>3</td>
                                <td>นายวิกรม</td>
                                <td>คุ้มไพโรจน์</td>
                                <td>กรรมการกำหนดค่าตอบแทน</td>
                            </tr>
                            <tr>   										
                                <td>4</td>
                                <td>นายอวยชัย</td>
                                <td>ตันทโอภาส</td>
                                <td>กรรมการกำหนดค่าตอบแทน</td>
                            </tr>
                            <tr>   									
                                <td>5</td>
                                <td>นายสิทธิชัย</td>
                                <td>ชัยเกรียงไกร</td>
                                <td>กรรมการกำหนดค่าตอบแทน</td>
                            </tr>
                        </tbody>
                    </table>
                    <h5>คณะกรรมการกำกับดูแลกิจการที่ดี</h5><br>
                    <table class="table">
                        <thead>
                            <tr class="bg-danger">
                                <th>ลำดับ</th>
                                <th>ชื่อ</th>
                                <th>นามสกุล</th>
                                <th>ตำแหน่ง</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>		
                                <td>1</td>
                                <td>นางสาวพจนีย์</td>
                                <td>ธนวรานิช</td>
                                <td>ประธานกรรมการกำกับดูแลกิจการที่ดี</td>
                            </tr>
                            <tr> 								
                                <td>2</td>
                                <td>นายวิกรม</td>
                                <td>คุ้มไพโรจน์</td>
                                <td>กรรมการกำกับดูแลกิจการที่ดี</td>
                            </tr>
                            <tr>   											
                                <td>3</td>
                                <td>นายชัย</td>
                                <td>จรุงธนาภิบาล</td>
                                <td>กรรมการกำกับดูแลกิจการที่ดี</td>
                            </tr>
                            <tr>   										
                                <td>4</td>
                                <td>นายอวยชัย</td>
                                <td>ตันทโอภาส</td>
                                <td>กรรมการกำกับดูแลกิจการที่ดี</td>
                            </tr>
                            <tr>   											
                                <td>5</td>
                                <td>นางนงนุช</td>
                                <td>บูรณะเศรษฐกุล</td>
                                <td>กรรมการกำกับดูแลกิจการที่ดี</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </secion>
    <?php require('footer.php'); ?>  
</body>
</html>