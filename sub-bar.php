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
                            <a class="nav-link" href="group-structure.php" id="selected6">โครงสร้างกลุ่มบริษัท</a>
                        </li>
                        <img src="./img/line.png" alt="">
                        <li class="nav-item">
                            <a class="nav-link" href="committee.php" id="selected7">คณะกรรมการบริษัท</a>
                        </li>
                        <img src="./img/line.png" alt="">
                        <li class="nav-item">
                            <a class="nav-link" href="Board-of-Director.php" id="selected8">คณะผู้บริหาร</a>
                        </li>
                        <img src="./img/line.png" alt="">
                        <li class="nav-item">
                            <a class="nav-link" href="subcomittee.php" id="selected9">คณะกรรมการชุดย่อย</a>
                        </li>
                        <img src="./img/line.png" alt="">
                        <li class="nav-item">
                            <a class="nav-link" href="insider.php" id="selected10">หัวหน้าหน่วยงานตรวจสอบภายใน</a>
                        </li>
                        <img src="./img/line.png" alt="">
                        <li class="nav-item">
                            <div class="nav-link" onclick="appear()" id="bar">การกำกับดูแลกิจการที่ดี&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+</div>
                            <div id="box" style="display:none; padding: 0 0 0 2rem;">
                                <a href="good-manager.php" id="mark">การกำกับดูแลกิจการที่ดี</a><br>
                                <a href="moral-code.php" id="mark1">จรรยาบรรณธุรกิจ</a><br>
                                <a href="rules.php" id="mark2">ข้อบังคับบริษัท</a><br>
                                <a href="booklet.php" id="mark3">หนังสือบริคณห์สนธิ</a><br>
                                <a href="assurance.php" id="mark4">หนังสือรับรองบริษัท</a><br>
                                <a href="กฏบัตร.php" id="mark5">กฏบัตรคณะกรรมการ</a><br>
                                <a href="stocks.php" id="mark6">รายงานการถือหุ้นของคณะกรรมการและผู้บริหาร</a><br>
                                <a href="legalprotection.php" id="mark7">ระเบียบการรับเรื่องร้องเรียนหรือเบาะแสและการให้ความคุ้มครอง</a><br>
                                <a href="risk.php" id="mark8">ปัจจัยความเสี่ยง</a><br>
                                <a href="anticorruption.php" id="mark9">นโยบายการต่อต้านทุจริตคอร์รัปชั่น</a><br>
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