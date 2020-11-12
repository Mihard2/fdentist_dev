<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;
//define('INFO_EMAIL','fdentist@fdentist.com');
define('INFO_EMAIL',get_bloginfo('admin_email'));

add_action( 'after_setup_theme', 'vidnova_setup' );

function vidnova_setup()
{
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

    register_nav_menus(
        [
            'header_menu'=>'Меню в шапке сайта',
            'footer_menu'=>'Меню в подвале сайта'
        ]
    );

    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'caption',
        )
    );

    add_image_size('before-after', 140, 93, false);
    add_image_size('feedback-avatar', 60, 60, false);
    add_image_size('sertificat-img', 99999, 163, false);
    add_image_size('gallery-img', 99999, 167, false);
}

add_action('wp_enqueue_scripts', 'fdentist_scripts_style');

function fdentist_scripts_style()
{
    wp_enqueue_style( 'bootstrap-grid', get_template_directory_uri().'/assets/css/bootstrap-grid.min.css', array(),
        wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri().'/assets/css/magnific-popup.css', array(),
        wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'owl.carousel', get_template_directory_uri().'/assets/css/owl.carousel.min.css', array(),
        wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'owl.theme.default', get_template_directory_uri().'/assets/css/owl.theme.default.css', array(),
        wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'lightbox', get_template_directory_uri().'/assets/css/lightbox.css', array(),
        wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'fdentist-style', get_template_directory_uri().'/assets/css/style.css', array(),
        wp_get_theme()->get( 'Version' ) );


    wp_enqueue_script( 'slick', get_template_directory_uri().'/assets/js/slick.min.js',
        array('jquery'), '1.0', true );

    wp_enqueue_script( 'lightbox', get_template_directory_uri(). '/assets/js/lightbox.min.js' ,
        array('jquery'), '1.0', true );

    wp_enqueue_script( 'magnific-popup', get_template_directory_uri().'/assets/js/jquery.magnific-popup.min.js',
        array('jquery'), '1.0', true );

    wp_enqueue_script( 'project', get_template_directory_uri().'/assets/js/project.js',
        array('jquery','slick','lightbox','magnific-popup'), '1.0', true );


    wp_localize_script('project','fdentist_setup',
        array(
            'ajaxurl'=>admin_url('admin-ajax.php'),
            'succesurl'=>getPageLinkByTemplate('thank.php')
        ));
}

add_action( 'wp_print_styles', 'fd_deregister_styles', 100 );
function fd_deregister_styles() {
    wp_dequeue_style( 'wp-block-library' );
}

add_action( 'carbon_fields_register_fields', 'crb_theme_options' );

function crb_theme_options()
{
    Container::make('theme_options', __( 'Опции темы' ))
        ->set_page_file( 'theme-options' )
        ->set_icon('dashicons-admin-generic')
        ->add_tab( __('Настройки почты'), array(
            Field::make('complex', 'crb_emails', 'Почтовые ящики для отправки сообщений с форм')->add_fields(array(
                Field::make('text', 'email', 'Почтовый ящик'),
            ))
        ))

        ->add_tab( __('Услуги'), array(
            Field::make('complex', 'crb_services', 'Услуги и цены')->add_fields(array(
                Field::make('text', 'name', 'Название'),
                Field::make('text', 'price', 'Цена'),
            ))
        ))
        ->add_tab( __('О стоматологии'), array(
            Field::make( 'Rich_text', 'crb_about', 'Что такое стоматология FDENTIST?' )
        ))
        ->add_tab( __('Примеры работы'), array(
            Field::make('complex', 'crb_examples', 'Примеры работ')->add_fields(array(
                Field::make('text', 'name', 'Название услуги'),
                Field::make( 'image','before_photo', 'Фото до (размер картинки должен быть кратные 140х93 пкс)' ),
                Field::make( 'image','after_photo', 'Фото после (размер картинки должен быть кратные 140х93 пкс)')
            ))
        ))
        ->add_tab( __('Специалисты'), array(
            Field::make('complex', 'crb_specialists', 'Наши специалисты')->add_fields(array(
                Field::make('image','photo', 'Фото' )->set_value_type( 'url' ),
                Field::make('text', 'name', 'ФИО'),
                Field::make('text', 'position', 'Проф направление'),
                Field::make('text', 'education', 'Образование'),
                Field::make('text', 'specialization', 'Специализация'),
                Field::make('text', 'expirience', 'Опыт работы')
            ))

        ))
        ->add_tab( __('Отзывы'), array(
            Field::make('complex', 'crb_feedbacks', 'Отзывы клиентов')->add_fields(array(
                Field::make('image','photo', 'Фото профиля' ),
                Field::make('text', 'name', 'ФИО'),
                Field::make('Rich_text', 'text', 'Отзыв')
            ))
        ))
        ->add_tab( __('Сертификаты'), array(
            Field::make('complex', 'crb_sertific', 'Сертификаты')->add_fields(array(
                Field::make('image','photo', 'Фото документа' ),
            ))
        ))
        ->add_tab( __('Скачать файл'), array(
                Field::make('file','download_file', 'Загрузить файл (PDF)' )->set_value_type( 'url' ),
        ))
        ->add_tab( __('Фото галерея'), array(
            Field::make('complex', 'crb_gallery', 'Фото галерея')->add_fields(array(
                Field::make( 'image','photo', 'Фото' )
            ))
        ));
}

add_action('wp_ajax_form_handler', 'fdentist_form_handle');
add_action('wp_ajax_nopriv_form_handler', 'fdentist_form_handle');

function fdentist_form_handle()
{
    if (!(isset($_POST['popup_check']))) {
        wp_send_json(array(
            'success' => 0,
            'message' => 'Некоректные данные'
        ));
    }
    if (!wp_verify_nonce($_POST['popup_check'], 'popup-form')) {
        wp_send_json(array(
            'success' => 0,
            'message' => 'Некоректные данные'
        ));
    }

    if (!isset($_POST['name']) || !isset($_POST['phone']) || empty($_POST['name']) || empty($_POST['phone'])) {
        wp_send_json(array(
            'success' => 0,
            'message' => 'Не заполнены все поля'
        ));
    }

    $res=true;
    /*$captcha = reCaptha::getInstance();
    $res = $captcha->recaptcha_respons();*/

    if (is_wp_error($res)){
        wp_send_json(array(
            'success' => 0,
            'message' => 'reCaptcha error'
        ));
    }

    $headers = array();
    $headers[] = 'Content-type: text/html; charset=utf-8';
    $headers[]='From: fdentist <wordpress@fdentist.com>';

    $message = "<!DOCTYPE html>
    <head></head>
    <body>
    Новая заявка с сайта ".home_url()." на приём/консультацию:<br>
    Имя: {$_POST['name']}<br>
    Телефон: {$_POST['phone']}<br>
    </body>
    </html>";

    $emails=carbon_get_theme_option('crb_emails');
    if (empty($emails)){
        wp_mail(INFO_EMAIL, "Новая заявка — с сайта fdentist.com",
            $message, $headers);
    }else{
        foreach ($emails as $email){
            @wp_mail(trim($email['email']), "Новая заявка — с сайта fdentist.com",
                $message, $headers);
        }
    }


    wp_send_json(array(
        'success' => 'true',
        'message' => 'Ваша заявка принята'
    ));
}

function getPageLinkByTemplate($TEMPLATE_NAME)
{
    $pages = get_pages(array(
        'meta_key'  =>'_wp_page_template',
        'meta_value'=> $TEMPLATE_NAME
    ));

    $url = null;
    if(isset($pages[0])) {
        $url = get_page_link($pages[0]->ID);
    }
    return $url;
}

add_action('wp_ajax_form_price_handler', 'fdentist_form_handle');
add_action('wp_ajax_nopriv_form_price_handler', 'fdentist_form_handle');

add_action('after_switch_theme', 'custom_switch_theme');

function custom_switch_theme()
{
    $createPage = array(
        array(
            'title' => 'Спасибо',
            'name'=>'thank',
            'content' => '',
            'template' => 'thank.php'
        ),
        array(
            'title' => 'Главная страница',
            'name'=>'home',
            'content' => '',
            'template' => 'homepage.php',
            'page_of_front'=>1
        )
    );

    foreach ($createPage as $page) {
        $page_check = get_page_by_title($page['title']);
        if (isset($page['name']))
            $page_check_url = get_page_by_path($page['name']);
        $new_page = array(
            'post_type' => 'page',
            'post_title' => $page['title'],
            'post_content' => $page['content'],
            'post_status' => 'publish',
            'post_author' => 1,
        );
        $page_url = true;
        if (isset($page['name'])) {
            $new_page['post_name'] = $page['name'];
            $page_url = !isset($page_check_url->ID);
        }

        if (!isset($page_check->ID) && $page_url) {
            $new_page_id = wp_insert_post($new_page);
            if (!empty($page['template'])) {
                update_post_meta($new_page_id, '_wp_page_template', $page['template']);
            }
            if (isset($page['page_of_front']) && $page['page_of_front']) {
                update_option('page_on_front', $new_page_id);
                update_option('show_on_front', 'page');
            }
        }
    }
}

function getImageForId($id, $size_name = 'full', $outerSrc = '')
{
    $img_preview = wp_get_attachment_image_src($id, $size_name);
    if ($img_preview !== false) {
        $img_src = $img_preview[0];
    } else {
        $img_src = $outerSrc;
    }
    return $img_src;
}

function fdentist_download_pdf()
{
    if (!(isset($_POST['popup_check']))) {
        wp_send_json(array(
            'success' => 0,
            'message' => 'Некоректные данные'
        ));
    }
    if (!wp_verify_nonce($_POST['popup_check'], 'popup-form')) {
        wp_send_json(array(
            'success' => 0,
            'message' => 'Некоректные данные'
        ));
    }

    if (!isset($_POST['name']) || !isset($_POST['phone']) || empty($_POST['name']) || empty($_POST['phone'])) {
        wp_send_json(array(
            'success' => 0,
            'message' => 'Не заполнены все поля'
        ));
    }

    $res=true;
    $captcha = reCaptha::getInstance();
    $res = $captcha->recaptcha_respons();

    if (is_wp_error($res)){
        wp_send_json(array(
            'success' => 0,
            'message' => 'reCaptcha error'
        ));
    }

    $headers = array();
    $headers[] = 'Content-type: text/html; charset=utf-8';
    $headers[]='From: fdentist <wordpress@fdentist.com>';

    $message = "<!DOCTYPE html>
    <head></head>
    <body>
    Файл был загружен с сайта :<br>
    Имя: {$_POST['name']}<br>
    Телефон: {$_POST['phone']}<br>
    </body>
    </html>";

    $emails=carbon_get_theme_option('crb_emails');
    if (empty($emails)){
        wp_mail(INFO_EMAIL, "Новая заявка — с сайта fdentist.com",
            $message, $headers);
    }else{
        foreach ($emails as $email){
            @wp_mail(trim($email['email']), "Новая заявка — с сайта fdentist.com",
                $message, $headers);
        }
    }

    $download_file=carbon_get_theme_option('download_file');

    if (!$download_file)
        wp_send_json(array(
            'success' => 0,
            'message' => 'Файл не загружен'
        ));

    wp_send_json(array(
        'success' => 'true',
        'download_url' =>$download_file
    ));
}

add_action('wp_ajax_form_pdf_handler', 'fdentist_download_pdf');
add_action('wp_ajax_nopriv_form_pdf_handler', 'fdentist_download_pdf');

add_action('wp_footer','add_jivosite_code_in_header');

function add_jivosite_code_in_header()
{
    ?>
    <!-- BEGIN JIVOSITE CODE {literal} -->
    <script type='text/javascript'>
        (function(){ var widget_id = 'bRXL5Tg7Vo';var d=document;var w=window;function l(){
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;
            s.src = '//code.jivosite.com/script/widget/'+widget_id
            ; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}
            if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}
            else{w.addEventListener('load',l,false);}}})();
    </script>
    <!-- {/literal} END JIVOSITE CODE -->
<?php
}

add_action('wp_head','add_ga');

function add_ga()
{
    ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141926976-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-141926976-1');
    </script>
<?php
}

//add_action('wp_head','add_yandex_metrix');

function add_yandex_metrix()
{
    ?>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(54086179, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/54086179" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
<?php
}

require_once __DIR__ . '/includes/reCaptcha.php';
$recaptcha=reCaptha::getInstance();
?>
