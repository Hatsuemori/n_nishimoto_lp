<?php get_template_part('parts/assets/contact'); ?>
</main>


<footer>
     <div class="footerBlock cnt cntS">
          <div id="js-pagetop" class="footerBtn">
          </div>
          <div class="footerWrap flex flexPc justBetween">
               <div class="footerlogoImg">
                    <div class="mbL4">
                         <a href="<?php echo home_url(); ?>/">
                              <img class="logoImg" src="<?php echo get_template_directory_uri(); ?>/img/logo.png"
                                   alt="<?php wp_title('', true); ?>"
                                   alt="<?php wp_title('', true); ?><?php if (wp_title('', false)) { ?> | <?php } ?><?php bloginfo('name'); ?>">
                         </a>
                    </div>
               </div>
               <ul class="footerMenueBlock">
                    <li>
                         <ul class="footerMenueList2">
                              <li>
                                   <a href="<?php echo home_url(); ?>/company/">会社概要</a>
                              </li>
                         </ul>
                    </li>
                    <li>
                         <ul class="footerMenueList2 mbS">
                              <li>
                                   <a class="__no">事業紹介</a>
                              </li>
                         </ul>
                         <ul class="footerMenueList">
                              <li><a href="<?php echo home_url(); ?>/sotetsu/">売買仲介</a></li>
                              <li><a href="<?php echo home_url(); ?>/business/">店舗仲介</a></li>
                         </ul>
                    </li>
                    <li>
                         <ul class="footerMenueList2">
                              <li>
                                   <a href="<?php echo home_url(); ?>/contact/">お問い合わせ</a>
                              </li>
                         </ul>
                    </li>
                    <li>
                         <ul class="footerMenueList2">
                              <li>
                                   <a href="<?php echo home_url(); ?>/privacy/">個人情報保護方針</a>
                              </li>
                         </ul>
                    </li>

               </ul>
          </div>
     </div>
     <div class="footerCopy white">
          <div class="copylight">
               <div class="cnt cntS">
                    <p class="copylight text-center">Copyright ©<?php info('nameEng'); ?> All Rights Reserved.</p>
               </div>
          </div>
     </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>