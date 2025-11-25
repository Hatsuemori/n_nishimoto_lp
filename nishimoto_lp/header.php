<!DOCTYPE html>
<html lang="ja">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="keywords" content="">
     <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/ogp.jpg">
     <title><?php wp_title('', true); ?><?php if (wp_title('', false)) { ?> | <?php } ?><?php bloginfo('name'); ?>
     </title>
     <?php wp_head(); ?>
     <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
     <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png">
     <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
     <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
     <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" />
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
     <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/import.css">
     <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
     <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/scroll-hint.css">
     <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/perfect-scrollbar.css">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/css/lightbox.css" rel="stylesheet">
     <!--==============レイアウトを制御する独自のCSSを読み込み===============-->
     <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fadeAnime.css">
     <!--==============サイトで見た時に文頭がずれ===============-->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/yakuhanjp@3.4.1/dist/css/yakuhanjp-narrow.min.css">
     <script src="<?php echo get_template_directory_uri(); ?>/js/perfect-scrollbar.js"></script>
     <script src="<?php echo get_template_directory_uri(); ?>/js/scroll-hint.min.js"></script>
     <script src="https://code.jquery.com/jquery-3.4.1.min.js"
          integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
     <script src="https://kit.fontawesome.com/c05e859e75.js" crossorigin="anonymous"></script>
     <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.matchHeight-min.js"></script>
     <!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->
     <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
     <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
     <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.2/gsap.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.2/ScrollTrigger.min.js"></script>

     <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui/jquery-ui.min.js"></script>
     <script src="<?php echo get_template_directory_uri(); ?>/js/ripples/dist/jquery.ripples-min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
     <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/js/lightbox.min.js" type="text/javascript">
     </script>
     <script src="<?php echo get_template_directory_uri(); ?>/js/fadeAnime.js"></script>
</head>

<body <?php body_class( isset($post) ? $post->post_name : '' ); ?>>
     <header>
          <div class="headerlogoBlock">
               <div class="headerlogoCard">
                    <?php if ( wp_is_mobile() ) : ?>
                    <div class="topFvlogoImg">
                         <a href="<?php echo home_url(); ?>/">
                              <img class="logoImg" src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg"
                                   alt="<?php wp_title('', true); ?>"
                                   alt="<?php wp_title('', true); ?><?php if (wp_title('', false)) { ?> | <?php } ?><?php bloginfo('name'); ?>">
                         </a>
                    </div>
                    <?php elseif ( is_front_page() || is_home() ) : ?>
                    <h1 class="topFvlogoImg">
                         <a href="<?php echo home_url(); ?>/">
                              <img class="logoImg" src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg"
                                   alt="<?php wp_title('', true); ?>"
                                   alt="<?php wp_title('', true); ?><?php if (wp_title('', false)) { ?> | <?php } ?><?php bloginfo('name'); ?>">
                         </a>
                    </h1>
                    <?php else : ?>
                    <div class="topFvlogoImg">
                         <a href="<?php echo home_url(); ?>/">
                              <img class="logoImg" src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg"
                                   alt="<?php wp_title('', true); ?>"
                                   alt="<?php wp_title('', true); ?><?php if (wp_title('', false)) { ?> | <?php } ?><?php bloginfo('name'); ?>">
                         </a>
                    </div>
                    <?php endif; ?>
               </div>
          </div>
          <div class="headerTopMenuBlock">
               <div class="topContactWrap flex alignCenter justEnd flexWrap mbS3">
                    <a class="topTel">073-455-1311</a>
                    <a href="" class="topBtn">無料見積はこちら</a>
               </div>
               <div class="headerMenuCardBlock">
                    <div class="headerMenuCardWrap flex alignCenter justEnd">
                         <ul class="headerMenuCard Menu_p flex justEnd alignCenter">
                              <?php get_template_part('parts/assets/menu'); ?>
                         </ul>
                    </div>
               </div>
          </div>
     </header>
     <button type="button" class="menu-btn Menu_s" id="js__btn">
          <div class="menu-trigger mbM" href="#">
               <span></span>
               <span></span>
               <span></span>
          </div>
     </button>

     <!-- モーダルメニュー -->
     <nav class="overRayBox menu" id="js__nav">
          <div class="overRayBlock">
               <div class="overRayTextCard white">
                    <ul class="overRayMenuUl">
                         <?php get_template_part('parts/assets/menu_sp'); ?>
                    </ul>
                    <ul class="headerBtnList text-center">
                         <li>
                              <div class="jp_content">
                                   <a class="headerBtn" href="<?php echo home_url(); ?>/contact/">お問い合わせ</a>
                              </div>
                         </li>
                    </ul>
               </div>
          </div>
          <div class="all_fixed_nav_bg"></div>
     </nav>
     <main>