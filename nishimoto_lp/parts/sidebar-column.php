<div id="sidebar">
     <aside>
          <div class="sidebarBox">
               <p class="sidebarTitle">Latest</p>

               <ul class="sidebarNewsUl">
                    <?php
	$popular_post_args = array(
		'post_type'		=> 'column',	// 投稿タイプ
		'post_status'	=> 'publish',					// 公開・非公開
		'posts_per_page' => 5,							// ページ内投稿数
		'ignore_sticky_posts '=> true,					// 先頭固定表示を無視する
		'orderby'		=> 'date',						// 日付順
		'order'		=> 'DESC',						// 降順
	);
	$post_query = new WP_Query( $popular_post_args );
	if( $post_query->have_posts() ):
		while( $post_query->have_posts() ):
			$post_query->the_post();
?>
                    <li class="cat-item">
                         <a href="<?php the_permalink(); ?>">
                              <p class="date"><?php echo get_the_date('Y/m/d'); ?></p>
                              <p class="title"><?php the_title(); ?></p>
                         </a>
                    </li>
                    <?php
		endwhile;
	endif;
	wp_reset_postdata();
?>
               </ul>
          </div>
     </aside>
     <aside>
          <div class="sidebarBox">
               <p class="sidebarTitle">Category</p>
               <div class="sidebarCategoryBlock">
                    <?php
    $taxonomy = 'column_cate'; // ここにあなたのカスタムタクソノミーの名前を入れます
    $terms = get_terms($taxonomy);
    if ($terms) {
        echo '<ul>';
        foreach ($terms as $term) {
            echo '<li><a href="' . get_term_link($term) . '">' . $term->name . '</a> </li>';
        }
        echo '</ul>';
    }
    ?>
               </div>

          </div>
     </aside>
     <aside>
          <div class="sidebarBox">
               <p class="sidebarTitle">Archive</p>

               <select name="archive-dropdown"
                    onChange='document.location.href=this.options[this.selectedIndex].value;'>
                    <option value=""><?php echo esc_attr(__('Select Month')); ?></option>
                    <?php
    $args = array(
        'type' => 'monthly',
        'format' => 'option',
        'show_post_count' => 1,
        'post_type' => 'column' // カスタム投稿タイプを指定
    );
    wp_get_archives($args);
    ?>
               </select>
          </div>
     </aside>
</div>