<br><br>
            <div class="col-md-3">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="business-overview.php" id="selected1">ภาพรวมธุรกิจของบริษัท</a>
                        </li>
                        <img src="./img/line.png" alt="">
                        <li class="nav-item">
                            <a class="nav-link" href="company-milestone.php" id="selected2">ประวัติความเป็นมาของบริษัท</a>
                        </li>
                        <img src="./img/line.png" alt="">
                        <li class="nav-item">
                            <a class="nav-link" href="vision-mission.php" id="selected3">วิสสัยทัศน์และพันธกิจ</a>
                        </li>
                        <img src="./img/line.png" alt="">
                        <li class="nav-item">
                            <a class="nav-link" href="message-from-chairman.php" id="selected4">สารจากประธานกรรมการ</a>
                        </li>
                        <img src="./img/line.png" alt="">
                        <li class="nav-item">
                            <a class="nav-link" href="organization-chart.php" id="selected5">โครงสร้างองค์กร</a>
                        </li>
                        <img src="./img/line.png" alt="">
                        <li class="nav-item">
                            <a class="nav-link" href="group-structure.php">โครงสร้างกลุ่มบริษัท</a>
                        </li>
                        <img src="./img/line.png" alt="">
                        <li class="nav-item">
                            <a class="nav-link" href="committee.php">คณะกรรมการบริษัท</a>
                        </li>
                        <img src="./img/line.png" alt="">
                        <li class="nav-item">
                            <a class="nav-link" href="Board-of-Director.php">คณะผู้บริหาร</a>
                        </li>
                        <img src="./img/line.png" alt="">
                        <li class="nav-item">
                            <a class="nav-link" href="subcomittee.php">คณะกรรมการชุดย่อย</a>
                        </li>
                        <img src="./img/line.png" alt="">
                        <li class="nav-item">
                            <a class="nav-link" href="insider.php">หัวหน้าหน่วยงานตรวจสอบภายใน</a>
                        </li>
                        <img src="./img/line.png" alt="">
                        <li class="nav-item">
                            <div class="nav-link" onclick="appear()" id="bar">การกำกับดูแลกิจการที่ดี&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+</div>
                            <div id="box" style="display:none; padding: 0 0 0 2rem;">
                                <a href="">การกำกับดูแลกิจการที่ดี</a><br>
                                <a href="">จรรยาบรรณธุรกิจ</a><br>
                                <a href="">ข้อบังคับบริษัท</a><br>
                                <a href="">หนังสือบริคณห์สนธิ</a><br>
                                <a href="">หนังสือรับรองบริษัท</a><br>
                                <a href="">กฏบัตรคณะกรรมการ</a><br>
                                <a href="">รายงานการถือหุ้นของคณะกรรมการและผู้บริหาร</a><br>
                                <a href="">ระเบียบการรับเรื่องร้องเรียนหรือเบาะแสและการให้ความคุ้มครอง</a><br>
                                <a href="">ปัจจัยความเสี่ยง</a><br>
                                <a href="">นโยบายการต่อต้านทุจริตคอร์รัปชั่น</a><br>
                            </div>
                            
                        </li>
                        <img src="./img/line.png" alt="">
                    </ul>
                    
                </div>

<script>
    function appear() {

        var bar = document.getElementById("bar");
        var box = document.getElementById("box")
        
        if (bar.innerHTML === "การกำกับดูแลกิจการที่ดี&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+"){
            box.style.display = "block";
            bar.innerHTML = "การกำกับดูแลกิจการที่ดี&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-";
        }
        else {
            bar.innerHTML = "การกำกับดูแลกิจการที่ดี&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+"
            box.style.display = "none";
        }
        
    }
</script>