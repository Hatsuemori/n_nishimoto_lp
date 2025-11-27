<?php get_header(''); ?>

<section class="commonFvCard">
     <div class="relative">
          <div class="bgImg commonFvImg"
               style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/commonFv.jpg'">
               <div class="commonFvWrap">
                    <div class="cnt cntS">
                         <div class="white" data-aos="fade-right">
                              <h1 class="commonFvTitleJp mbS3 mbSpS2">404</h1>
                              <p class="commonFvTitleEn">NOT PAGE</p>
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
     <div class="cnt">
          <div class="mbS">
               <div class="mb50">
                    <p class="contactTitle __sh mbS2 text-center">お探しのページが見つかりませんでした。</p>
                    <p class="commonText text-center">
                         URLが正しく入力されていない可能性がありますので、再度ご確認ください。
                    </p>
               </div>
          </div>
          <a class="commonBtn" href="<?php echo home_url(); ?>">TOPへ戻る</a>
     </div>
</section>

<?php get_footer(); ?>