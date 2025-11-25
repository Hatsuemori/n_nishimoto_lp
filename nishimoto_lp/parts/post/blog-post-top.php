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
     <article>
          <div class="topNewsInfoWrap flex flexPc alignCenter ahover">
               <div class="topNewsInfoLeftBlock">
                    <a href="<?php the_permalink(); ?>">
                         <p class="topNewsDay ahover"><?php the_time('Y/m/d'); ?></p>
                    </a>
                    <ul class="topNewsCate">
                         <span>
                              <li><?php the_category(); ?></li>
                         </span>
                    </ul>
               </div>
               <a href="<?php the_permalink(); ?>">
                    <div class="topNewsInfoRightBlock ahover">
                         <h3 class="topNewsTitle"><?php the_title(); ?></h3>
                    </div>
               </a>
          </div>
     </article>
</li>