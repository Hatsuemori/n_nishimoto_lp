<?php get_header(); ?>

<section class="commonFvCard">
     <div class="relative">
          <div class="bgImg commonFvImg"
               style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/commonFv.jpg'">
               <div class="commonFvWrap">
                    <div class="cnt cntS">
                         <div class="white" data-aos="fade-right">
                              <h1 class="commonFvTitleJp mbS3 mbSpS2">お問い合わせ</h1>
                              <p class="commonFvTitleEn">CONTACT</p>
                         </div>
                    </div>
               </div>

          </div>
     </div>
</section>
<div class="breadBrock">
     <div class="cnt cntS">
          <div class="text-left">
               <?php get_template_part('parts/assets/breadcrumb'); ?>
          </div>
     </div>
</div>

<section class="margin">
     <div class="cnt cntXS">
          <div class="mb50 text-center">
               <p class="contactTitle mbS">こちらの内容でお間違いないでしょうか？</p>
               <p class="contactText">問題なければ下記の送信ボタンを押して下さい。</p>
          </div>
          <div class="contactForm">
               <?php the_content(); ?>
          </div>
     </div>
</section>


<?php get_footer(); ?>