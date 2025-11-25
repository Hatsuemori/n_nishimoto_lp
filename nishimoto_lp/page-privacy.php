<?php get_header(''); ?>

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

<section class="margin_bottom margin">
     <div class="cnt cntS">
          <div class="mbM3 mbSpM">
               <p class="commonText __small mbS mbSpM2">
                    弊社は、以下のようにプライバシーポリシーを定めます。<br>
                    本プライバシーポリシーは、弊社が顧客サービスを行うにあたって、個人情報をどのような方針で利用・管理するかについて定めたものです。
               </p>
          </div>
          <div class="mbM3 mbSpM innerBlock">
               <div class="mbS2 mbSpM3">
                    <h2 class="commonMidashi_5">個人情報の取得</h2>
               </div>
               <p class="commonText __small mbS3">弊社は適法かつ公正な手段によって、お客様の個人情報を取得いたします。</p>
               <ol class="commonList">
                    <li>弊社のホームページ、電話、FAX、電子メールのお問い合わせ</li>
                    <li>お客さまにご記載いただいた申込書、お客さまからの口頭表現</li>
               </ol>
          </div>
          <div class="mbM3 mbSpM innerBlock">
               <div class="mbS2 mbSpM3">
                    <h2 class="commonMidashi_5">個人情報の利用</h2>
               </div>
               <ul class="commonList __lh">
                    <li>
                         <div class="mbS3">弊社は、お客さまからご提供いただいた個人情報を、原則として次の目的の範囲で利用させていただきます。
                         </div>
                         <ul class="commonList2">
                              <li>お電話・電子メールでの注文、予約時のお客さま登録</li>
                              <li>メール配信、イベント、キャンペーンのお知らせといった顧客サービスのため</li>
                              <li>お客さまに対する業務上の御連絡</li>
                         </ul>
                    </li>
                    <li>
                         <div class="mbS3">弊社は、以下の場合には、上記の目的の範囲を超えた場合であっても、ご本人の同意を得ずに、個人情報を使用する場合があります。 </div>
                         <ul class="commonList2">
                              <li>法令に基づく場合</li>
                              <li>人の生命、身体、または財産の保護のために必要がある場合であって、ご本人の同意を得ることが困難な場合</li>
                              <li>公衆衛生の向上または児童の健全な育成の推進のために、特に必要がある場合であって、ご本人の同意を得ることが困難な場合</li>
                              <li>国の機関もしくは地方公共団体またはその委託を受けた者が、法令の定める事務を遂行することに対して協力する必要がある場合であって、ご本人の同意を得ることにより、当該事務の遂行に支障をおよぼすおそれがあるとき
                              </li>
                         </ul>
                    </li>
               </ul>
          </div>
          <div class="mbM3 mbSpM innerBlock">
               <div class="mbS2 mbSpM3">
                    <h2 class="commonMidashi_5">個人情報の管理</h2>
               </div>
               <ol class="commonList mbS2">
                    <li>弊社は、個人情報へのアクセスの管理について、必要かつ適切な措置を講じます。</li>
                    <li>個人情報の社外への持ち出しを制限します。</li>
                    <li>弊社は、お客さまからご提供いただきました個人情報について、以下のいずれかに該当する場合を除き、第三者には開示しません。</li>
               </ol>
               <ul class="commonList2">
                    <li>お客さまの指示・同意のある場合</li>
                    <li>犯罪の疑いのある件について、捜査機関から相当な範囲において開示を求められた場合</li>
                    <li>法令等により正当な権限のある公的機関に開示を求められた場合</li>
               </ul>

          </div>

          <div class="mbM3 mbSpM innerBlock">
               <div class="mbS2 mbSpM3">
                    <h2 class="commonMidashi_5">個人情報の訂正</h2>
               </div>

               <p class="commonText __small">
                    弊社は、ご本人から個人情報が真実ではないという理由によって、内容の訂正・追加または削除を求められた場合には、利用目的の達成に必要な範囲内において、遅滞なく必要な調査を行い、その結果に基づき、個人情報の内容の訂正などを行い、その旨をご本人に通知します。
               </p>
          </div>
          <div class="mbM3 mbSpM innerBlock">
               <div class="mbS2 mbSpM3">
                    <h2 class="commonMidashi_5">プライバシーポリシーの変更</h2>
               </div>

               <p class="commonText __small">
                    弊社のプライバシーポリシーについて、お客さまの個人情報の取得、利用目的、管理、訂正などに変更が発生した場合は、インターネット上で告知いたします。
               </p>
          </div>
          <div class="mbM3 mbSpM innerBlock">
               <div class="mbS2 mbSpM3">
                    <h2 class="commonMidashi_5">お問い合わせ窓口</h2>
               </div>
               <p class="commonText __small mbS3">
                    弊社のプライバシーポリシーに関するお問い合わせは、下記担当または<a class="alink" href="<?php echo home_url(); ?>/contact/
">フォーム</a>でのお問い合わせをお願いいたします。
               </p>
               <p class="commonText __small mbS3">
                    〒<?php info('postalCode'); ?>　<?php info('address'); ?><br><?php info('name'); ?><br>プライバシーポリシー管理担当
               </p>
               <a class="commonBtn __large box-center arrow_maru" href="<?php echo home_url(); ?>">TOPへ戻る</a>
          </div>
     </div>
</section>


<?php
while (have_posts()) : the_post();
?>
<?php the_content(); ?>
<?php //get_template_part('content'); 
    ?>
<?php
endwhile;
?>


<?php get_footer(); ?>