<?php

/* old redaction wp */
add_filter('use_block_editor_for_post_type', '__return_false', 100);

// Disables the block editor from managing widgets in the Gutenberg plugin.
add_filter('gutenberg_use_widgets_block_editor', '__return_false');
// Disables the block editor from managing widgets.
add_filter('use_widgets_block_editor', '__return_false');



add_action('init', 'theme_url');

function theme_url()
{
    return get_template_directory_uri();
}



add_action('wp_enqueue_scripts', 'style_theme');
add_action('wp_footer', 'scripts_theme');

function style_theme()
{

    wp_enqueue_style('style-them', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', theme_url() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('fontawesome-all', theme_url() . '/assets/css/fontawesome-all.css');
    wp_enqueue_style('animate', theme_url() . '/assets/css/animate.css');
    wp_enqueue_style('video', theme_url() . '/assets/css/video.min.css');
    wp_enqueue_style('slick-theme', theme_url() . '/assets/css/slick-theme.css');
    wp_enqueue_style('slick', theme_url() . '/assets/css/slick.css');
    wp_enqueue_style('global', theme_url() . '/assets/css/global.css');
    wp_enqueue_style('style', theme_url() . '/assets/css/style.css');
    wp_enqueue_style('my_style', theme_url() . '/assets/css/my_style.css');
}


function scripts_theme()
{

    wp_enqueue_script('jquery-min', theme_url() . '/assets/js/jquery.min.js');
    wp_enqueue_script('jquery-ui', theme_url() . '/assets/js/jquery-ui.min.js');
    wp_enqueue_script('bootstrap', theme_url() . '/assets/js/bootstrap.min.js');
    wp_enqueue_script('popper', theme_url() . '/assets/js/popper.min.js');
    wp_enqueue_script('appear', theme_url() . '/assets/js/appear.js');
    wp_enqueue_script('slick', theme_url() . '/assets/js/slick.js');
    wp_enqueue_script('twin', theme_url() . '/assets/js/twin.js');
    wp_enqueue_script('wow', theme_url() . '/assets/js/wow.min.js');
    wp_enqueue_script('knob', theme_url() . '/assets/js/knob.js');
    wp_enqueue_script('jquery-filterizr', theme_url() . '/assets/js/jquery.filterizr.js');
    wp_enqueue_script('imagesloaded-pkgd', theme_url() . '/assets/js/imagesloaded.pkgd.min.js');
    wp_enqueue_script('rbtools', theme_url() . '/assets/js/rbtools.min.js');
    wp_enqueue_script('rs6', theme_url() . '/assets/js/rs6.min.js');
    wp_enqueue_script('jarallax', theme_url() . '/assets/js/jarallax.js');
    wp_enqueue_script('jquery-inputarrow', theme_url() . '/assets/js/jquery.inputarrow.js');
    wp_enqueue_script('swiper', theme_url() . '/assets/js/swiper.min.js');
    wp_enqueue_script('jquery-counterup', theme_url() . '/assets/js/jquery.counterup.min.js');
    wp_enqueue_script('waypoints', theme_url() . '/assets/js/waypoints.min.js');
    wp_enqueue_script('jquery-magnific', theme_url() . '/assets/js/jquery.magnific-popup.min.js');
    wp_enqueue_script('jquery-marquee', theme_url() . '/assets/js/jquery.marquee.min.js');
    wp_enqueue_script('script', theme_url() . '/assets/js/script.js');

    wp_enqueue_script('script_weetalert2', '/scripts_r/sweetalert2.all.min.js');

    wp_enqueue_script('script_google_table', '/scripts_r/script.js');
}

/* Register menu */
add_action('after_setup_theme', 'myGoldRf');

function myGoldRf()
{
    register_nav_menus([
        'header_menu' => 'Меню в шапке',

    ]);


    add_theme_support('post-thumbnails', array('post', 'page'));  /* Download image preview  */
    /*  add_image_size('post_thumb', 408, 612, false); */ /* Cut preview image*/
    add_image_size('post_thumb1', 534, 400, false); /* Cut preview image*/
}





/* For added atributs teg li in navigation */
class Custom_Walker_Nav_Menu extends Walker_Nav_Menu
{
    // Переопределяем метод start_el, указывая необходимые параметры
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        // Добавляем атрибут itemprop к элементу LI
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
        $id = $id ? ' id="' . esc_attr($id) . '"' : '';

        // Здесь добавляем itemprop
        $output .= $indent . '<li' . $id . $class_names . ' itemprop="name">';

        $atts = array();
        $atts['title']  = !empty($item->attr_title) ? $item->attr_title : '';
        $atts['target'] = !empty($item->target)     ? $item->target     : '';
        $atts['rel']    = !empty($item->xfn)        ? $item->xfn        : '';
        $atts['href']   = !empty($item->url)        ? $item->url        : '';

        $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args);
        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $value = esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        // Создаем вывод ссылки
        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}

















/* Register widget */
add_action('widgets_init', 'register_my_widgets');

function register_my_widgets()
{

    register_sidebar(array(

        'name' => 'Left Sidbar',
        'id' => 'left-sidbar',
        'description' => 'Поиск',
        'class'         => '',
        'before_widget' => '<div class="ori-blog-widget gold_list">',
        'after_widget'  => "</div>\n",
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => "</h3>\n",
    ));
}








// удаляем "Рубрика: ", "Метка: " и т.д. из заголовка архива
add_filter('get_the_archive_title', function ($title) {
    return preg_replace('~^[^:]+: ~', '', $title);
});



function remove_category($string, $type)
{
    if ($type != 'single' && $type == 'category' && (strpos($string, 'category') !== false)) {
        $url_without_category = str_replace("/category/", "/", $string);
        return trailingslashit($url_without_category);
    }
    return $string;
}
add_filter('user_trailingslashit', 'remove_category', 100, 2);



/* Added code php in widget wp */

function php_in_widgets($widget_content)
{
    if (strpos($widget_content, '<' . '?') !== false) {
        ob_start();
        eval('?' . '>' . $widget_content);
        $widget_content = ob_get_contents();
        ob_end_clean();
    }
    return $widget_content;
}

add_filter('widget_text', 'php_in_widgets', 99);

/** */



function wpcourses_breadcrumb($sep = ' > ')
{
    global $post;
    $out = '';
    $out .= '<ul>';
    $out .= '<li><a href="' . home_url('/') . '">Gold-RF</a></li>';

    if (is_single()) {
        $terms = get_the_terms($post, 'category');

        if (is_array($terms) && $terms !== array()) {
            $out .= '<li>';
            $out .= '<a href="' . get_term_link($terms[0]) . '">' . $terms[0]->name . '</a>';
            $out .= '</li>';
        }
    }

    if (is_category()) {

        $out .= '<li>' . single_cat_title('', 0) . '</li>';
    }


    if (is_singular()) {
        $out .= '<li>' . get_the_title() . '</li>';
    }
    if (is_search()) {
        $out .= get_search_query();
    }
    $out .= '</ul><!--.wpcourses-breadcrumbs-->';
    return $out;
}


/* function wpcourses_breadcrumb($sep = ' > ')
{
    global $post;
    $out = '';
    $out .= '<div class="wpcourses-breadcrumbs">';
    $out .= '<a href="' . home_url('/') . '">Главная</a>';
    $out .= '<span class="wpcourses-breadcrumbs-sep">' . $sep . '</span>';




    if (is_single()) {
        $terms = get_the_terms($post, 'category');
        if (is_array($terms) && $terms !== array()) {
            $out .= '<a href="' . get_term_link($terms[0]) . '">' . $terms[0]->name . '</a>';
            $out .= '<span class="wpcourses-breadcrumbs-sep">' . $sep . '</span>';
        }
    }
    if (is_category()) {

        $out .= '<span class="wpcourses-breadcrumbs-last">' . single_cat_title('', 0) . '</span>';
    }

    if (is_singular()) {
        $out .= '<span class="wpcourses-breadcrumbs-last">' . get_the_title() . '</span>';
    }
    if (is_search()) {
        $out .= get_search_query();
    }
    $out .= '</div><!--.wpcourses-breadcrumbs-->';
    return $out;
} */





/* Текстовый редактор в редакторе категории */
function my_category_description($container = '')
{
    $content = is_object($container) && isset($container->description) ? html_entity_decode($container->description) : '';
    $editor_id = 'tag_description';
    $settings = 'description';
?>
    <tr class="form-field">
        <th scope="row" valign="top"><label for="description">Описание...</label></th>
        <td><?php wp_editor($content, $editor_id, array(
                'textarea_name' => $settings,
                'editor_css' => '<style>.html-active .wp-editor-area{border:0;}</style>',
            )); ?><br />
            <span class="description">Описание по умолчанию обычно не отображается! <br /> Но - некоторые темы могут его показывать</span>
        </td>
    </tr>
    <?php
}


remove_filter('pre_term_description', 'wp_filter_kses');
remove_filter('term_description', 'wp_kses_data');
/* фин: редактор в полях - убираем старое поле редактирования */

function my_remove_category_description()
{
    global $mk_description;
    if (@$mk_description->id == 'edit-category' or 'edit-tag') {
    ?>
        <script type="text/javascript">
            jQuery(function($) {
                $('textarea#description').closest('tr.form-field').remove();
            });
        </script>
<?php
    }
}

add_action('admin_head', 'my_remove_category_description');    // фильтр старого поля - скрываем

/* убираем старое поле редактирования */
add_filter('edit_category_form_fields', 'my_category_description');   // для категорий-рубрик
add_filter('edit_tag_form_fields', 'my_category_description');        // для меток-тегов






/** For pagination */
function codernote_request($query_string)
{
    if (isset($query_string['page'])) {
        if ('' != $query_string['page']) {
            if (isset($query_string['name'])) {
                unset($query_string['name']);
            }
        }
    }
    return $query_string;
}
add_filter('request', 'codernote_request');


add_action('pre_get_posts', 'codernote_pre_get_posts');
function codernote_pre_get_posts($query)
{
    if ($query->is_main_query() && !$query->is_feed() && !is_admin()) {
        $query->set('paged', str_replace('/', '', get_query_var('page')));
    }
}



/* Setting mail SMPT */

use PHPMailer\PHPMailer\PHPMailer;

/**
 * Настройка SMTP
 *
 * @param PHPMailer $phpmailer объект мэилера
 */
function mihdan_send_smtp_email(PHPMailer $phpmailer)
{
    $phpmailer->isSMTP();
    $phpmailer->Host       = SMTP_HOST;
    $phpmailer->SMTPAuth   = SMTP_AUTH;
    $phpmailer->Port       = SMTP_PORT;
    $phpmailer->Username   = SMTP_USER;
    $phpmailer->Password   = SMTP_PASS;
    $phpmailer->SMTPSecure = SMTP_SECURE;
    $phpmailer->Sender     = SMTP_FROM;
    $phpmailer->From       = SMTP_FROM;
    $phpmailer->FromName   = SMTP_NAME;
}
add_action('phpmailer_init', 'mihdan_send_smtp_email');

/** */

/** Чтобы отключить разметку схемы Yoast SEO */
function disable_yoast_schema_data($data)
{
    $data = array();
    return $data;
}
add_filter('wpseo_json_ld_output', 'disable_yoast_schema_data', 10, 1);
