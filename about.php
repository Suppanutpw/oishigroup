<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
    .jumbotron {
        background-image: url("./img/banner.jpg");
        background-size: cover;
        height: 70%;
        width: 100%;
    }
    section{
        background-image: url("./img/content-bg.png");
        height: 100%;
        width: 100%;
    }
    </style>
</head>
<body>
    <?php
        require('header.php');
    ?>

    <div class="jumbotron"></div>
    
    <h1>NOTE : OVERLAP</h1>
    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                <br><br>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">ภาพรวมธุรกิจของบริษัท</a>
                        </li>
                        <img src="./img/line.png" alt="">
                        <li class="nav-item">
                            <a class="nav-link" href="#">ประวัติความเป็นมาของบริษัท</a>
                        </li>
                        <img src="./img/line.png" alt="">
                        <li class="nav-item">
                            <a class="nav-link" href="#">วิสสัยทัศน์และพันธกิจ</a>
                        </li>
                        <img src="./img/line.png" alt="">
                        <li class="nav-item">
                            <a class="nav-link" href="#">สารจากประธานกรรมการ</a>
                        </li>
                        <img src="./img/line.png" alt="">
                    </ul>       
                </div>
                <div class="col-md-9">
                    <h1>ภาพรวมธุรกิจของบริษัท</h1><br><br>
                    <h1>ภาพรวมการประกอบธุรกิจของบริษัทและบริษัทย่อย</h1>
                </div>
            </div>
            
        </div>
    </section>
    

    
    <?php
        require('footer.php');
    ?>
</body>
</html>