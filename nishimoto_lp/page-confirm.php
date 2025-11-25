<?php get_header(); ?>

<section class="commonFvCard">
     <div class="commonFvTextWrap text-center">
          <h1 class="commonFvTitle"><?php the_title(); ?></h1>
     </div>
</section>
<div class="breadBrock">
     <div class="cnt cntS">
          <div class="text-left">
               <?php get_template_part('parts/assets/breadcrumb'); ?>
          </div>
     </div>
</div>

<section class="back_white2">
     <div class="cnt cntXS">
          <div class="mb50 text-center">
               <p class="contactText">こちらの内容でお間違いないでしょうか？</p>
               <p class="contactText">問題なければ下記の送信ボタンを押して下さい。</p>
          </div>
          <div class="contactForm">
               <?php the_content(); ?>
          </div>
     </div>
</section>

<?php get_footer(); ?>