<?php
$category = get_the_category();
$cat_id   = $category[0]->cat_ID;
$cat_name = $category[0]->cat_name;
$cat_slug = $category[0]->category_nicename;
?>

<!-- カテゴリーIDを表示したい所に -->
<?php //echo $cat_id; 
?>

<!-- カテゴリー名を表示したい所に -->
<?php //echo $cat_name; 
?>

<!-- カテゴリースラッグを表示したい所に -->
<?php //echo $cat_slug; 
?>

<li>
     <a href="<?php the_permalink(); ?>">
          <div class="cmNewsListCard">
               <div class="cmNewsListImgWrap">
                    <?php if (has_post_thumbnail()) : ?>
                    <?php
                    // アイキャッチ画像のIDを取得
                    $thumbnail_id = get_post_thumbnail_id();
                    // mediumサイズの画像内容を取得（引数にmediumをセット）
                    $eye_img = wp_get_attachment_image_src($thumbnail_id, 'full');
                    $eye_img_s = wp_get_attachment_image_src($thumbnail_id, 'thumb_size_s_false', false);
                    ?>
                    <div class="cmNewsListImg bgImg" style="background-image:url('<?php echo $eye_img_s[0]; ?>')"></div>
                    <?php else : ?>
                    <div class="cmNewsListImg bgImg"
                         style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/noimage.jpg')">
                    </div>
                    <?php endif; ?>
               </div>
               <p class="topNewsDay mbS3"><?php the_time('Y/m/d'); ?></p>
               <h2 class="cmNewsTitle"><?php the_title(); ?></h2>

               <p class="cmNewsDescri">
                    <?php
if ( mb_strlen( $post->post_content, 'UTF-8' ) > 35 ) {
  $content = mb_substr( strip_tags( $post->post_content ), 0, 35, 'UTF-8' );
  echo $content . '…';
} else {
  echo strip_tags( $post->post_content );
}
?>
               </p>


               <ul class="cmNewsListInfoUl">
                    <li><?php the_category(); ?></li>
               </ul>
          </div>
     </a>
</li>