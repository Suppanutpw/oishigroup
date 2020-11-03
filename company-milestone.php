<!DOCTYPE html>
<html lang="en">
<head>
    <?php require('metalink.php'); ?>
</head>
<style>
    #history{
        width: 800px;
        overflow:hidden;
        position:relative;
    }
    #data{
        height: 60px;
    }
    #dates li{
        display:inline;
        list-style: none;
        float: left;
        width: 100px;
        height: 50px;
        font-size: 24px;
        text-align: center;
        
    }
    .selected{
        color:red;
    }
</style>
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
                    <h1>ประวัติความเป็นมาของบริษัท</h1>

                    <div class="row">
                        <div class="col-md-12" id="history">
                            <ul id="dates" style="width:3000px; margin-left: 350px;">
                                <li>
                                    <a href="#" class="selected" onclick="slide(); return false;">2562</a>
                                </li>
                                <li>
                                    <a href="" onclick="slide1(); return false;">2561</a>
                                </li>
                                <li>
                                    <a href="" onclick="slide2(); return false;">2560</a>
                                </li>
                                <li>
                                    <a href="" onclick="slide3(); return false;">2559</a>
                                </li>
                                <li>
                                    <a href="" onclick="slide4(); return false;">2558</a>
                                </li>
                                <li>
                                    <a href="" onclick="slide5(); return false;">2557</a>
                                </li>
                                <li>
                                    <a href="" onclick="slide6(); return false;">2556</a>
                                </li>
                                <li>
                                    <a href="" onclick="slide7(); return false;">2555</a>
                                </li>
                                <li>
                                    <a href="" onclick="slide8(); return false;">2554</a>
                                </li>
                                <li>
                                    <a href="" onclick="slide9(); return false;">2553</a>
                                </li>
                                <li>
                                    <a href="" onclick="slide10(); return false;">2552</a>
                                </li>
                                <li>
                                    <a href="" onclick="slide11(); return false;">2551</a>
                                </li>
                                <li>
                                    <a href="" onclick="slide12(); return false;">2550</a>
                                </li>
                                <li>
                                    <a href="" onclick="slide13(); return false;">2549</a>
                                </li>
                                <li>
                                    <a href="" onclick="slide14(); return false;">2548</a>
                                </li>
                                <li>
                                    <a href="" onclick="slide15(); return false;">2547</a>
                                </li>
                                <li>
                                    <a href="" onclick="slide16(); return false;">2546</a>
                                </li>
                                <li>
                                    <a href="" onclick="slide17(); return false;">2545</a>
                                </li>
                                <li>
                                    <a href="" onclick="slide18(); return false;">2544</a>
                                </li>
                                <li>
                                    <a href="" onclick="slide19(); return false;">2542</a>
                                </li>
                            </ul>
                        </div>
                        <!-- เนื้อหา-->
                        <div class="col-md-12" id="cont">
                            <div class="row la">
                                <p>Eiei</p>
                            </div>
                            <div class="row la">
                                <p>Eiei2</p>
                            </div>
                        </div>
                        <!-- End เนื้อหา-->
                    </div>
                </div>

            </div>
        </div>
    </section>
<script>
    var x = document.getElementById("dates");
    
    //selected la
    $("a").click(function(){
        $("a").removeClass("selected");
        $(this).addClass("selected");
    });
    // end selected la

    //slide la
    function slide(){;
        x.style.marginLeft = "350px";
        return false;
    }

    function slide1(){
        x.style.marginLeft = "250px";
        return false;
    }

    function slide2(){
        x.style.marginLeft = "150px";
        return false;
    }

    function slide3(){
        x.style.marginLeft = "50px";
        return false;
    }

    function slide4(){
        x.style.marginLeft = "-50px";
        return false;
    }

    function slide5(){
        x.style.marginLeft = "-150px";
        return false;
    }

    function slide6(){
        x.style.marginLeft = "-250px";
        return false;
    }

    function slide7(){
        x.style.marginLeft = "-350px";
        return false;
    }

    function slide8(){
        x.style.marginLeft = "-450px";
        return false;
    }

    function slide9(){
        x.style.marginLeft = "-550px";
        return false;
    }

    function slide10(){
        x.style.marginLeft = "-650px";
        return false;
    }

    function slide11(){
        x.style.marginLeft = "-750px";
        return false;
    }

    function slide12(){
        x.style.marginLeft = "-850px";
        return false;
    }

    function slide13(){
        x.style.marginLeft = "-950px";
        return false;
    }

    function slide14(){
        x.style.marginLeft = "-1050px";
        return false;
    }

    function slide15(){
        x.style.marginLeft = "-1150px";
        return false;
    }

    function slide16(){
        x.style.marginLeft = "-1250px";
        return false;
    }

    function slide17(){
        x.style.marginLeft = "-1350px";
        return false;
    }

    function slide18(){
        x.style.marginLeft = "-1450px";
        return false;
    }

    function slide19(){
        x.style.marginLeft = "-1550px";
        return false;
    }
</script>

<?php require('footer.php'); ?>