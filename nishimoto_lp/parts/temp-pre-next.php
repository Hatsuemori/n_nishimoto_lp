<?php
	$prevpost = get_adjacent_post(true, '', true); //前の記事
	$nextpost = get_adjacent_post(true, '', false); //次の記事
	if( $prevpost or $nextpost ){ //前の記事、次の記事いずれか存在しているとき
?>

<div class="singleColumnPreNext">
     <div class="flex">

          <?php
            if ( $prevpost ) { //前の記事が存在しているとき

                // アイキャッチ画像のIDを取得
                $thumbnail_id = get_post_thumbnail_id($prevpost->ID); 
                // mediumサイズの画像内容を取得（引数にmediumをセット）
                $eye_img = wp_get_attachment_image_src( $thumbnail_id , 'medium' );
                // 取得した画像URLにてイメージタグを出力
                // 更にdata-aliasというHTML5のカスタムデータ属性を追加

                echo '<div class="singleColumnPreNextBox pre col2"><a href="' . get_permalink($prevpost->ID) . '"><div class="singleColumnPrevNextArrow"></div><p class="text-center singleClumnPreNextDescri text_s ls_m">前の記事</p><p class="bold text_m ls_m">'. get_the_title($prevpost->ID) .'</p></a></div>';
                } else { //前の記事が存在しないとき
                echo '<div class="singleColumnPreNextBox pre col2"><a href="' . home_url() .'"><div class="singleColumnPrevNextArrow"></div><p class="text-center singleClumnPreNextDescri text_s ls_m">前の記事</p><p class="bold text_m ls_m">TOPへ戻る</p></a></div>';


                }
                if ( $nextpost ) { //次の記事が存在しているとき

                // アイキャッチ画像のIDを取得
                $thumbnail_id = get_post_thumbnail_id($nextpost->ID); 
                // mediumサイズの画像内容を取得（引数にmediumをセット）
                $eye_img = wp_get_attachment_image_src( $thumbnail_id , 'medium' );
                // 取得した画像URLにてイメージタグを出力
                // 更にdata-aliasというHTML5のカスタムデータ属性を追加

                echo '<div class="singleColumnPreNextBox next col2"><a href="' . get_permalink($nextpost->ID) . '"><div class="singleColumnPrevNextArrow"></div><p class="text-center singleClumnPreNextDescri text_s ls_m">次の記事</p><p class="bold text_m ls_m">'. get_the_title($nextpost->ID) .'</p></a></div>';

                } else { //次の記事が存在しないとき
                echo '<div class="singleColumnPreNextBox next col2"><a href="' . home_url() . '"><div class="singleColumnPrevNextArrow"></div><p class="text-center singleClumnPreNextDescri text_s ls_m">前の記事</p><p class="bold text_m ls_m">TOPへ戻る</p></a></div>';
            }
        ?>

     </div>
</div>



<?php } ?>