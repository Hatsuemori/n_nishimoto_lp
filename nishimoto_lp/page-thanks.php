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
               <div class="contactTitle mbS">お問い合わせありがとうございます</div>
               <p class="contactText mbS2">
                    自動返信メールを送信しておりますので、ご確認ください。<br class="pc">メールが届いていない場合、「迷惑メールに分類されてしまっている」<br
                         class="pc">「ご記入いただいたメールアドレスが間違っている」などの原因が考えられます。）<br>数営業日以内に、弊社担当者よりご連絡させていただきます。
               </p>
               <p class="contactText">
                    なお、内容によって、ご返信できない場合もございます。ご了承ください。
               </p>
          </div>
          <div class="contactForm">
               <?php the_content(); ?>
          </div>
          <a class="commonBtn __large box-center arrow_maru" href="<?php echo home_url(); ?>">TOPへ戻る</a>
     </div>
</section>



<?php get_footer(); ?>