<?php
  require('header.php');
?>
  <!-- รูปด้านบน -->
  <section id="slider" class="swiper_wrapper clearfix" data-loop="true" data-autoplay="5000">
    <!-- Slider main container -->
    <div class="swiper-container w-100">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <img src="/img/big-banner-01.jpg" alt="" style="width: 100%">
            </div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
  </section>

  <!-- เนื้อหา -->
  <div class="container">
    <h2 class="text-center">WTF Hello World</h2>
  </div>

<?php
  require('footer.php');
?>
