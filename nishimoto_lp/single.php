<?php get_header(); ?>

<?php
while (have_posts()) : the_post();
?>

<?php
    $category = get_the_category();
    $cat_id   = $category[0]->cat_ID;
    $cat_name = $category[0]->cat_name;
        $cat_slug = $category[0]->cat_slug;
    $cat_slug = $category[0]->category_nicename;
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
     <div class="cnt cntXSM">
          <div class="rw flexPc flex" data-aos="fade-up">
               <div class="col col-3 colSp1">
                    <div class="">
                         <article class="singleColumnArticle">
                              <h1 class="singleColumnTitle"><?php the_title(); ?></h1>
                              <ul class="singleColumnInfoUl inlineBlockUl mb20">
                                   <li class="date fontEn ls_s"><?php the_time('Y.m.d'); ?></li>
                                   <li class="cate">
                                        <?php the_category(); ?>
                                   </li>
                              </ul>
                              <div class="singleColumnArticleContent">
                                   <div class="cmNewsListImgWrap">
                                        <?php if (has_post_thumbnail()) : ?>
                                        <?php
                    // アイキャッチ画像のIDを取得
                    $thumbnail_id = get_post_thumbnail_id();
                    // mediumサイズの画像内容を取得（引数にmediumをセット）
                    $eye_img = wp_get_attachment_image_src($thumbnail_id, 'full');
                    $eye_img_s = wp_get_attachment_image_src($thumbnail_id, 'thumb_size_s_false', false);
                    ?>
                                        <div class="cmNewsListImg bgImg"
                                             style="background-image:url('<?php echo $eye_img_s[0]; ?>')"></div>
                                        <?php else : ?>
                                        <div class="cmNewsListImg bgImg"
                                             style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/noimage.jpg')">
                                        </div>
                                        <?php endif; ?>
                                   </div>
                                   <div class="entry"><?php the_content(); ?></div>
                              </div>
                         </article>
                    </div>
                    <div class="mb30">
                         <?php get_template_part('parts/temp-pre-next'); ?>
                    </div>
               </div>
               <div class="col col3 colSp1">
                    <?php get_template_part('parts/sidebar'); ?>
               </div>
          </div>

     </div>
</section>





<?php
endwhile;
?>


<?php get_footer(); ?>