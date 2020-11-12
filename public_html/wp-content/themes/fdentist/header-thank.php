<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri()?>/assets/img/f-dent-favicon.ico" type="image/x-icon">
    <?php wp_head(); ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-147990922-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-147990922-1');
</script>

</head>

<body>
<?php wp_body_open(); ?>
<div class="header">
    <div class="background-wrapper">
        <img class="background" src="<?php echo get_template_directory_uri() ?>/assets/img/header-bg.jpg" alt="">
        <div class="background_wrap"></div>
    </div>
    <div class="container">
        <div class="row header-menu">
            <a href="#" class="menu-link">
                <span></span>
            </a>
            <div class="logo col-lg-2 col-md-6"> <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" alt=""></div>
            <div class="wraper-phone col-lg-3 col-md-6">
                <a href="tel:+380443774503" class="phone">+380 (44) 377-45-03</a>
                <a href="tel:+380970226899" class="phone">+380 (97) 022-68-99</a>
            </div>
        </div>
        <div class="row free-diag row">
            <div class="free-diag-text col-lg-7">
                <div class="free-diag-highlight"><h4>Ваша заявка принята <br> Спасибо за доверие!</h4></div>
                <div class="free-diag-description"> <h3>Наш администратор перезвонит<br>Вам в течение 10 минут!</h3></div>
                <div class="common-btn-border">
                    <div class="common-btn">
                        <a class="just-link" href="<?php echo home_url() ?>">
                            <span class="btn-text">Вернуться на сайт</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="free-diag-img col-lg-5">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/free-diag-img.png" alt="">
            </div>
        </div>
    </div>
</div>