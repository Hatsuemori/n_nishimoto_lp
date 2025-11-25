

$(function () {
  var webStorage = function () {
    if (sessionStorage.getItem('access')) {
      /*
        2回目以降アクセス時の処理
      */
      $(".loading").addClass('is-active');
    } else {
      /*
        初回アクセス時の処理
      */
      sessionStorage.setItem('access', 'true'); // sessionStorageにデータを保存
      $(".loading-animation").addClass('is-active'); // loadingアニメーションを表示
      setTimeout(function () {
        // ローディングを数秒後に非表示にする
        $(".loading").addClass('is-active');
        $(".loading-animation").removeClass('is-active');
      }, 3000); // ローディングを表示する時間
    }
  }
  webStorage();
});


//スムーズスクロール
$(window).on('load resize', function () {
    var w = $(window).width();
    var x = 768;
    var scroll = new SmoothScroll('a[href*="#"]', {
        offset: 100,
        speed: 100,
        easing: 'swing'

    });

});


//スクロールアニメーション付与
$(window).on('scroll', function () {

    var elem = $('.scrollAnime');
    var isAnimate = 'isAnimated';

    elem.each(function () {

        var elemOffset = $(this).offset().top;
        var scrollPos = $(window).scrollTop();
        var wh = $(window).height();

        if (scrollPos > elemOffset - wh + (wh / 4)) {
            $(this).addClass(isAnimate);
        }
    });

});


//現在開いてるページのurlと一致すればactiveクラスをつける
$(function () {
    $('.js_aboutSubMenu_ul li a').each(function () {
        var $href = $(this).attr('href');
        if (location.href.match($href)) {
            $(this).addClass('active');
        } else {
            $(this).removeClass('active');
        }
    });
});





/*高さ合わせる*/
$(function () {
    $('.matchHeight').matchHeight();
    $('.matchHeight2').matchHeight();
    $('.matchHeight3').matchHeight();
    
});


$(function () {
    var $body = $('html');

    //開閉用ボタンをクリックでクラスの切替え
    $('#js__btn').on('click', function () {
        $body.toggleClass('open');
        $('.menu-trigger').toggleClass('active');

    });

    //メニュー名以外の部分をクリックで閉じる
    /*
    $('#js__nav').on('click', function () {
        $body.removeClass('open');
        $('.menu-trigger').removeClass('active');
    });
    */
});

/*ハンバーガーメニューページ内遷移でも消滅*/
$(function () {
    $('#js__nav a[href*="#"]').click(function () {
        $('html').removeClass("open");
        $('.menu-trigger').removeClass("active");
    });
});

$(function () {
    $('.hasChild').click(function () {
        $(this).next().slideToggle();
        $(this).toggleClass("on");
    });
});



/*バナー追従コンタクト*/
/*
$(function(){
    var fixBar = $('.fixBar');
    $(window).scroll(function(){
        var sc = $(window).scrollTop();
        if( sc > 300 ){
            fixBar.fadeIn();
        }else{
            fixBar.fadeOut();
        }
    });
    var pagetop = $('.fixBarTop');
    pagetop.click(function () {
        $('body, html').animate({ scrollTop: 0 }, 500);
        return false;
    });
});
*/

/*バナー追従コンタクト*/
$(function () {
    var js_headerAlt = $('.js_headerAlt');
    $(window).scroll(function () {
        var sc = $(window).scrollTop();
        if (sc > 300) {
            js_headerAlt.fadeIn();
        } else {
            js_headerAlt.fadeOut();
        }
    });
});



/*Q&Aの開閉*/
$(function () {
    $(".busRoutBtn").on("click", function () {
        $(this).toggleClass("on");
        $(this).next().slideToggle(800);
    });   
    $(".openBtn").on("click", function () {
        $(this).toggleClass("on");
        $(this).next().slideToggle();
    });    
    $(".guiQABtn").on("click", function () {
        $(this).toggleClass("on");
        $(this).next().slideToggle();
    });
});

// $(document).ready(function () {
//     if (isMobile()) {
//         enableClickEventForMobile();
//     } else {
//         // スクロールが100以下の場合もクリックイベントを無効化
//         if ($(window).scrollTop() <= 100) {
//             disableClickEvent();
//         }
//     }

//     $(window).scroll(function () {
//         // スマホの場合は何もしない（既に有効）
//         if (!isMobile()) {
//             // スクロールが100以下の場合もクリックイベントを無効化
//             if ($(this).scrollTop() <= 100) {
//                 disableClickEvent();
//             } else {
//                 enableClickEvent();
//             }
//         }
//     });

//     function enableClickEvent() {
//         $(".utiwakeBtn").off("click"); // 一度クリックイベントを解除
//         $(".utiwakeBtn").on("click", function () {
//             $(this).toggleClass("on");
//             $(this).next().slideToggle();
//             $(this).closest('.innerFooter').toggleClass("back");
//         });
//     }

//     function enableClickEventForMobile() {
//         $(".utiwakeBtn").on("click", function () {
//             $(this).toggleClass("on");
//             $(this).next().slideToggle();
//             $(this).closest('.innerFooter').toggleClass("back");
//         });
//     }

//     function disableClickEvent() {
//         $(".utiwakeBtn").off("click");
//     }

//     function isMobile() {
//         return window.innerWidth < 600; // Adjust the width as needed
//     }
// });



// jQuery(window).on('scroll', function () {
//     if (!isMobile()) {
//         if (100 < jQuery(this).scrollTop()) {
//             jQuery('.utiwakeBlock').addClass('off');
//             jQuery('.utiwakeBlock').removeClass('on');
//             jQuery('.utiwakeWrap').addClass('off');
//             jQuery('.utiwakeBtn').removeClass('on');
//             jQuery('.innerFooter').addClass('on');
//         } else {
//             jQuery('.utiwakeBlock').removeClass('off');
//             jQuery('.utiwakeBlock').addClass('on');
//             jQuery('.utiwakeWrap').removeClass('off');
//             jQuery('.innerFooter').removeClass('on');
//         }
//     }
// });

jQuery(window).on('scroll', function () {
        if (100 < jQuery(this).scrollTop()) {
            jQuery('.utiwakeBlock').addClass('off');
            jQuery('.utiwakeWrap').addClass('off');
            jQuery('.utiwakeBtn').removeClass('on');
            jQuery('.innerFooter').addClass('on');
        } else {
            jQuery('.utiwakeBlock').removeClass('off');
            jQuery('.utiwakeWrap').removeClass('off');
            jQuery('.innerFooter').removeClass('on');
        }
});


function isMobile() {
    return window.innerWidth < 600; // Adjust the width as needed
}


$(function () {
    new ScrollHint('.Table_scroll', {
        suggestiveShadow: true,
        // remainingTime: 5000,
        i18n: {
            scrollable: 'スクロールできます'
        }
    });
});


/*top画面へ*/

jQuery(window).on('scroll', function () {
    if (0 < jQuery(this).scrollTop()) {
        jQuery('body').addClass('change-color');
                jQuery('.all_fixed_nav').addClass('top_scroll');
    } else {
        jQuery('body').removeClass('change-color');  
        jQuery('.all_fixed_nav').removeClass('top_scroll');  
      }
});


$(function () {
    var pagetop = $('#js-pagetop'); // ボタンを取得

    $(window).scroll(function () {
        if ($(this).scrollTop() > 500) {
            // スクロール位置が500pxを超えた場合
            pagetop.addClass('visible'); // 表示クラスを追加
        } else {
            // スクロール位置が500px未満の場合
            pagetop.removeClass('visible'); // 表示クラスを削除
        }
    });

    pagetop.click(function () {
        $('html, body').animate({ scrollTop: 0 }, 500); // ページトップへスクロール
        return false;
    });
});



jQuery(document).ready(function($) {

    const links = $(".header-nav__item > a");

    // 現在のURLと完全一致したリンクに current を付与（既存機能）
    links.each(function() {
        if (this.href === location.href) {
            $(this).closest(".header-nav__item").addClass("current");
        }
    });

    // クリックしたら current を付与（ページ内リンク対応）
    links.on("click", function() {
        // 既存の current を一旦削除
        links.closest(".header-nav__item").removeClass("current");

        // クリックされたリンクに current を付与
        $(this).closest(".header-nav__item").addClass("current");
    });

});


$(document).ready(function() {
    $('.all_fixed_nav_bg').on('click', function() {
        $('html').removeClass('open');
        $('.menu-trigger').removeClass('active');
    });
});
