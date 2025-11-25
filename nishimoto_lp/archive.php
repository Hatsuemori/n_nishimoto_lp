<?php get_header(); ?>

<?php
  // カテゴリーのデータを取得
  $cat = get_the_category();
  $cat = $cat[0];
?>
<section class="commonFvCard">
     <div class="commonFvTextWrap text-center">
          <h1 class="commonFvTitle">お知らせ</h1>
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
     <div class="cnt">
          <div class="flex flexPc rw">
               <div class="col-3 col colSp1">
                    <ul class="cmNewsListUl">
                         <?php
                    while (have_posts()) : the_post();
                        get_template_part('parts/post/blog-post-list');
                    endwhile;
                    ?>
                    </ul>
                    <?php get_template_part('parts/pagenation'); ?>
               </div>
               <div class="col col3 colSp1">
                    <?php get_template_part('parts/sidebar'); ?>
               </div>
          </div>
     </div>
</section>

<?php get_footer(); ?>