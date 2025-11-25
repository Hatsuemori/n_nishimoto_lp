<?php
/* ==========================================================================
   デフォルト全ページ対応
========================================================================== */

//アイキャッチ画像表示
add_theme_support('post-thumbnails');
function custom_theme_thumbnails()
{
    set_post_thumbnail_size(); // 通常の投稿サムネイル
}
add_action('after_setup_theme', 'custom_theme_thumbnails');

//グローバルメニュー
register_nav_menu('mainmenu', 'メインメニュー');




    //mw wp formの引数の日付カスタマイズ
    function my_mwform_value($value, $name)
    {
    if ($name === 'date' && !empty($_GET['post_id']) && !is_array($_GET['post_id'])) {
    return get_the_date('Y年m月d日', $_GET['post_id']);
    }
    return $value;
    }
    add_filter('mwform_value_mw-wp-form-60', 'my_mwform_value', 10, 2);


//Pagenation
function pagination($pages = '', $range = 2)
{
    $showitems = ($range * 2) + 1; //表示するページ数（５ページを表示）

    global $paged; //現在のページ値
    if (empty($paged)) $paged = 1; //デフォルトのページ

    if ($pages == '') {
        global $wp_query;
        $pages = $wp_query->max_num_pages; //全ページ数を取得
        if (!$pages) //全ページ数が空の場合は、１とする
        {
            $pages = 1;
        }
    }

    if (1 != $pages) //全ページが１でない場合はページネーションを表示する
    {
        echo "<div class=\"pagenation\">\n";
        echo "<ul>\n";
        //Prev：現在のページ値が１より大きい場合は表示
        if ($paged > 1) echo "<li class=\"prev\"><a href='" . get_pagenum_link($paged - 1) . "'>Prev</a></li>\n";

        for ($i = 1; $i <= $pages; $i++) {
            if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
                //三項演算子での条件分岐
                echo ($paged == $i) ? "<li class=\"active\"><span>". $i ."</span></li>\n" : "<li class=\"activeno\"><a href='" . get_pagenum_link($i) . "'><span>" . $i . "</span></a></li>\n";
            }
        }
        //Next：総ページ数より現在のページ値が小さい場合は表示
        if ($paged < $pages) echo "<li class=\"next\"><a href=\"" . get_pagenum_link($paged + 1) . "\">Next</a></li>\n";
        echo "</ul>\n";
        echo "</div>\n";
    }
}

    /* the_archive_title 余計な文字を削除 */
    add_filter('get_the_archive_title', function ($title) {
    if (is_category()) {
    $title = single_cat_title('', false);
    } elseif (is_tag()) {
    $title = single_tag_title('', false);
    } elseif (is_tax()) {
    $title = single_term_title('', false);
    } elseif (is_post_type_archive()) {
    $title = post_type_archive_title('', false);
    } elseif (is_date()) {
    $title = get_the_time('Y年n月');
    } elseif (is_search()) {
    $title = '検索結果：' . esc_html(get_search_query(false));
    } elseif (is_404()) {
    $title = '「404」ページが見つかりません';
    } else {
    }
    return $title;
    });

    //予約投稿機能を無効化
    // add_action('save_post', 'futuretopublish', 99);
    // add_action('edit_post', 'futuretopublish', 99);
    // function futuretopublish()
    // {
    // global $wpdb;
    // $sql = 'UPDATE `' . $wpdb->prefix . 'posts` ';
    // $sql .= 'SET post_status = "publish" ';
    // $sql .= 'WHERE post_status = "future"';
    // $wpdb->get_results($sql);
    // }

    //子ページの場合はテンプレートをファイルをpage-service_child.phpと記載できるようにする
    add_filter('page_template_hierarchy', 'my_page_templates');
    function my_page_templates($templates)
    {
    global $wp_query;

    $template = get_page_template_slug();
    $pagename = $wp_query->query['pagename'];

    if ($pagename && !$template) {
    $pagename = str_replace('/', '_', $pagename);
    $decoded = urldecode($pagename);

    if ($decoded == $pagename) {
    array_unshift($templates, "page-{$pagename}.php");
    }
    }

    return $templates;
    }

    //連絡先情報追加
    function add_user_contact_form($contacts)
    {
    return array(
    'twitter' => 'Twitter',
    'facebook' => 'Facebook',
    'instagram' => 'Instagram',
    'line' => 'Line'
    );
    }
    add_filter('user_contactmethods', 'add_user_contact_form');


    // プロフィール項目を追加する
    function my_user_meta($wb)
    {
    //項目の追加
    $wb['position'] = '役職';

    return $wb;
    }
    add_filter('user_contactmethods', 'my_user_meta', 10, 1);

    //高さが2560pxを超えてもリサイズしないように
    add_filter('big_image_size_threshold', '__return_false');


    //mw wp formに迷惑メールバリデーション
    if (class_exists('MW_WP_Form_Abstract_Validation_Rule')) {
    class MW_WP_Form_Validation_Rule_Japanese extends MW_WP_Form_Abstract_Validation_Rule
    {
    protected $name = 'japanese';

    public function rule($key, array $options = array())
    {
    $value = $this->Data->get($key);
    if (is_null($value)) {
    return;
    }
    if (preg_match('/[一-龠]+|[ぁ-ん]+|[ァ-ヴー]/u', $value)) {
    return;
    }
    $defaults = array(
    'message' => '日本語で入力してください。'
    );
    $options = array_merge($defaults, $options);
    return $options['message'];
    }

    public function admin($key, $value)
    {
    ?>
<label><input type="checkbox" <?php checked($value[$this->getName()], 1); ?>
          name="<?php echo MWF_Config::NAME; ?>[validation][<?php echo $key; ?>][<?php echo esc_attr($this->getName()); ?>]"
          value="1" />日本語を含む</label>
<?php
        }
    }

    function mwform_validation_rule_japanese($validation_rules)
    {
        $instance = new MW_WP_Form_Validation_Rule_Japanese();
        $validation_rules[$instance->getName()] = $instance;
        return $validation_rules;
    }

    add_filter('mwform_validation_rules', 'mwform_validation_rule_japanese');
}


/*ユーザー定義関数*/
function info($info)
{
    if ($info == "name") {
        echo "有限会社西庄西本建設";
    }
    if ($info == "nameEng") {
        echo "NISHIMOTO KENSETSU.";
    }
    if ($info == "ceo") {
        echo "";
    } elseif ($info == "postalCode") {
        echo "";
    } elseif ($info == "address_1") {
        echo "和歌山県和歌山市";
            } elseif ($info == "address_2") {
        echo "西庄862-6";
    } elseif ($info == "tel") {
        echo "073-455-1311";
    } elseif ($info == "fax") {
        echo "";
} elseif ($info == "mail") {
echo "";
} elseif ($info == "gmap") {
echo "";
} elseif ($info == "gmapIframe") {
echo
"";
} elseif ($info == "time") {
echo "";
} elseif ($info == "week") {
echo "";
} elseif ($info == "ec") {
echo "";
}
}

/* ==========================================================================
デフォルト全ページ対応ここまで
========================================================================== */

// add_action('init', 'create_post_type');
// function create_post_type()
// {
// //職種
// register_post_type('job', [ // 投稿タイプ名の定義
// 'labels' => [
// 'name' => '職種', // 管理画面上で表示する投稿タイプ名
// 'singular_name' => 'job', // カスタム投稿の識別名
// ],
// 'public' => true, // 投稿タイプをpublicにするか
// 'has_archive' => true, // アーカイブ機能ON/OFF
// 'menu_position' => 5, // 管理画面上での配置場所
// 'show_in_rest' => true, // 5系から出てきた新エディタ「Gutenberg」を有効にする
// 'hierarchical' => true, // ページの階層化を有効にする
// 'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'excerpt', 'page-attributes'), // サポートの指定
// ]);

// //職種
// register_post_type('work', [ // 投稿タイプ名の定義
// 'labels' => [
// 'name' => '採用職種', // 管理画面上で表示する投稿タイプ名
// 'singular_name' => 'work', // カスタム投稿の識別名
// ],
// 'public' => true, // 投稿タイプをpublicにするか
// 'has_archive' => true, // アーカイブ機能ON/OFF
// 'menu_position' => 5, // 管理画面上での配置場所
// 'show_in_rest' => true, // 5系から出てきた新エディタ「Gutenberg」を有効にする
// 'hierarchical' => true, // ページの階層化を有効にする
// 'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'excerpt', 'page-attributes'), // サポートの指定
// ]);
// }
/* ==========================================================================
//WordPressのバージョン非表示
========================================================================== */
remove_action('wp_head','wp_generator');

//CSSやJSのバージョン非表示
function remove_cssjs_ver2( $src ) {
    if ( strpos( $src, 'ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver2', 9999 );
add_filter( 'script_loader_src', 'remove_cssjs_ver2', 9999 );