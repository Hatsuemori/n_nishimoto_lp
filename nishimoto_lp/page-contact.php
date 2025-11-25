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
          <div class="mbM">
               <div class="contactBlock">
                    <div class="openBtn text-center">
                         <h2 class="contactTitle">入力に関してのご注意</h2>
                    </div>
                    <ul class="contactList">
                         <li><span><span class="red2 __nopadding">必須</span>は、必ずご入力ください。</span></li>
                         <li><span>カタカナはすべて全角で入力してください。</span></li>
                         <li><span>電話番号欄には、必ず連絡の取れる電話番号（自宅もしくは携帯電話）をご入力ください。</span></li>
                         <li><span>入力が終わりましたら、フォーム下の「内容確認」をクリックしてください。</span></li>
                         <li><span>内容確認画面が開きますので、入力内容を確認後「送信」をクリックして完了です。</span></li>
                         <li><span>自動返信メールを送信しております。自動返信メールが届いていない場合、「迷惑メールに分類されてしまっている」「記入いただいたメールアドレスが間違っている」などの原因が考えられます。</span>
                         </li>
                         <li><span>内容により返信できない場合や、返答までに日数を要する場合がありますので、あらかじめご了承ください。</span></li>
                    </ul>
               </div>
          </div>
          <div class="contactForm" data-aos="fade-up">
               <?php the_content(); ?>
          </div>
     </div>
</section>

<?php get_footer(); ?>