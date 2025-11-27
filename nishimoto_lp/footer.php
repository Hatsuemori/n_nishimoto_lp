</main>


<footer>
     <div class="cnt cntS">
          <div id="js-pagetop" class="footerBtn">
          </div>
          <ul class="footerMenueBlock flex justcenter mbS mbSpM">
               <li>
                    <ul class="footerMenue flex flexWrap justCenter">
                         <li>
                              <a href="<?php echo home_url(); ?>/#sec_problem">よくある問題</a>
                         </li>
                         <li>
                              <a href="<?php echo home_url(); ?>/#sec_merit">私たちの強み</a>
                         </li>
                         <li>
                              <a href="<?php echo home_url(); ?>/#sec_solution">解決事例</a>
                         </li>
                    </ul>
               </li>
               <li>
                    <ul class="footerMenue flex flexWrap justCenter">
                         <li>
                              <a href="<?php echo home_url(); ?>/#sec_philo">代表メッセージ</a>
                         </li>
                         <li>
                              <a href="<?php echo home_url(); ?>/#sec_flow">ご契約の流れ</a>
                         </li>
                         <li>
                              <a href="<?php echo home_url(); ?>/#sec_faq">よくある質問</a>
                         </li>
                    </ul>
               </li>
          </ul>
          <div class="footerlogoImg">
               <a href="<?php echo home_url(); ?>/">
                    <img class="logoImg" src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg"
                         alt="<?php wp_title('', true); ?>"
                         alt="<?php wp_title('', true); ?><?php if (wp_title('', false)) { ?> | <?php } ?><?php bloginfo('name'); ?>">
               </a>
          </div>
     </div>
     <div class="footerCopy">
          <div class="copylight">
               <div class="cnt cntS">
                    <p class="copylight text-center">© Copyright<?php info('nameEng'); ?> All rights reserved.</p>
               </div>
          </div>
     </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>