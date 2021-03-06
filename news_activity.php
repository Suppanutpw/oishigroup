<!DOCTYPE html>
<html lang="en">
<head>
  <?php require('metalink.php'); ?>
  <!-- เพิ่มเติม stylesheet ได้ตรงนี้เน้อ ต้องเพิ่มด้านล่าง require เท่านั้น!! ไม่ต้องเพิ่ม query boostrap ซ้ำนะ ดูใน metalink.php เลยว่าเราใส่อะไรไว้แล้วบ้าง  -->
  <style>
      p.normal {
  font-weight: normal;
}
      .col-md-4{
        margin-bottom:50px;
        padding-bottom:50px
      }
      .card-title{
        font-size:16px;
        color:#666;
        font-weight:normal;
        line-height: 1.5 !important;
        
      }
      .card{
        border:none;
      }
  </style>
</head>
<body>
  <!-- แถบบาร์ด้านบน -->
  <?php require('header.php'); ?>

  <!-- รูปด้านบน ถัดจาก menubar สีเทาด้านบน -->
  <!-- เริ่ม slide show รูปด้านบน {อย่าลบ section เด็ดขาด!!!} -->
  <section id="slider" class="swiper_wrapper clearfix" data-loop="true" data-autoplay="5000">
    <img src="./img/banner_media_center.jpg" alt="width: 100%">
  </section>

  <!-- slide show ลายพู่กันด้านล่าง -->
  <div class="content-bg">
    <img class="img-fluid" src="./img/content-bg.png">
  </div>
  <!-- สิ้นสุด slide show รูปด้านบน -->

  <!-- เนื้อหา {อย่าลบ section เด็ดขาด!!!} -->
  <section id="content" style="z-index: 20 !important;">
  <div class="content-wrap nobottompadding" style="margin-top: -50px;">
    <div class="container clearfix">
      <div class="oishi-header-section oishi-header-section-align" style="padding-top:50px;padding-bottom:30px">
      <h1 class="text-center" style="font-size:36px; color:red; font-weight:normal">OISHI <span style="color:#333">NEWS & </span><i style="color:#333; font-style: normal;font-family: 'Kanit-ExtraLight', sans-serif;">ACTIVITY</i></h1>
      </div>
      <div class="tab-container" id="popup-content" style="padding-top:20px">
            <div id="news" style="display"><div class="row"id="new-and-activity"></div></div>
      </div>
    </div>
  </section>
  <div id="outer-pop"></div>
  <script>
    $(document).on('click', '.inline-popups', function(){
      $("#outer-pop").html(op=""); // clear lastest content
      try {
        data = JSON.parse(this.getElementsByTagName("none")[0].innerHTML);
        op += `<div id="popups" data-effect="mfp-zoom-in" class="white-popup mfp-with-anim mfp-hide clearfix"><div class="popup-text-pic">`;
        op += `<img class="img-fluid" src="${data.img2}"><div class="mt-4">`;
        if(data.title == "“โออิชิ ทริปสุดโอ โกเจแปน” ตอนฟินหนาวหนึบกับ เป๊ก ผลิตโชค"){
          op += `<h1>${data.title}</h1><p>${data.content}</p><a href="https://www.facebook.com/OishiDrinkStation/" style="color:red">www.oishidrink.com</a></div></div></div>`;
        }
        else{
          op += `<h1>${data.title}</h1><p>${data.content}</p></div></div></div>`;
        }
        $("#outer-pop").html(op);
      } catch (e) {
        console.error(e);
      }

      $.magnificPopup.open({
          items: {
              src: $("#popups"),
          },
          type: 'inline',
          mainClass: 'mfp-fade'
      });
    });
      function showSildeJsonBig(jsonURL, putID, owlClass) {
      var request = new XMLHttpRequest();
      request.onreadystatechange = function () {
        if (request.readyState == 4 && request.status == 200) {

          var data = JSON.parse(request.responseText), op = "";

          for (var i = 0; i < data.length; i++) {
            // trim String and generate html content
            var content = data[i].content.substr(0, 165);
            content = content.substr(0, Math.min(content.length, content.lastIndexOf(" ")))

            op += `<div class="col-md-4"><div class="card item"><img class="card-img-top" src="${data[i].img}">`;
            op += `<div class="card-body"><p class="card-title">${data[i].title}</p>`;
            op += ` <p class="card-text" style="color:red;font-size:14px">${data[i].date}</p><a class="inline-popups card-button float-right" href="#popups"><none>${JSON.stringify(data[i])}</none>รายละเอียด<i class="fa fa-angle-right" aria-hidden="true"></i></a></div></div></div>`;
          }
          $(putID).html(op);
        }
      };
      request.open("GET", jsonURL, true);
      request.send();
    }

        showSildeJsonBig("json/news_activity.json", '#new-and-activity', '.owl-new-activity');
    </script>
<!-- ไม่ต้องมี tag ปิด body กับ html นะเออ -->
<?php require('footer.php'); ?>
