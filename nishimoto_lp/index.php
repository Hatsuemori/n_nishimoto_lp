<?php get_header(); ?>
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
                    <ul class="cmNewsListUl" data-aos="fade-up">
                         <?php
                    while (have_posts()) : the_post();
                        get_template_part('parts/post/blog-post-list');
                    endwhile;
                    ?>
                    </ul>
                    <?php get_template_part('parts/pagenation'); ?>
               </div>
               <div class="col col3 colSp1" data-aos="fade-up">
                    <?php get_template_part('parts/sidebar'); ?>
               </div>
          </div>
     </div>
</section>





<?php get_footer(); ?>