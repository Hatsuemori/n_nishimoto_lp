<?php get_header(); ?>

<section class="commonFvCard">
     <div class="relative">
          <div class="bgImg commonFvImg"
               style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/commonFv.jpg'">
               <div class="commonFvWrap">
                    <div class="cnt cntS">
                         <div class="white" data-aos="fade-right">
                              <h1 class="commonFvTitleJp mbS3 mbSpS2">送信完了</h1>
                              <p class="commonFvTitleEn">THANKS</p>
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
          <div class="mb50">
               <div class="contactTitle mbS text-center">お問い合わせありがとうございます。</div>
               <p class="contactText text-center text-left-sp">
                    お問い合わせありがとうございます。<br>近日中に弊社の担当者よりご連絡させていただきます。
               </p>
          </div>
          <a class="commonBtn" href="<?php echo home_url(); ?>">TOPへ戻る</a>
     </div>
</section>



<?php get_footer(); ?>