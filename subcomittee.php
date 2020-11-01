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
                </div>
            </div>
        </div>
    </secion>
    
</body>
</html>