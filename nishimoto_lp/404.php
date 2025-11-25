<?php get_header(''); ?>

<section class="commonFvCard">
     <div class="commonFvTextWrap text-center">
          <h1 class="commonFvTitle">Not Found</h1>
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
          <div class="mbS">
               <div class="text-center mb50">
                    <h3 class="commonMidashi_4 mb30">ご指定のページが見つかりません。</h3>
                    <p>
                         申し訳ございません。<br>
                         お客様がお探しのページが見つかりませんでした。<br>
                         削除されたか、入力したURLが間違っている可能性があります。<br>
                         お手数ですが、以下のリンクから目的のページをお探しください。
                    </p>
               </div>
          </div>
          <a class="commonBtn __large box-center arrow_maru" href="<?php echo home_url(); ?>">TOPへ戻る</a>
     </div>
</section>

<?php get_footer(); ?>