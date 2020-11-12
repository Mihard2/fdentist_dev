<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri()?>/assets/img/f-dent-favicon.ico" type="image/x-icon">
    <?php wp_head(); ?>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KB4BPP4');</script>
<!-- End Google Tag Manager -->
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-147990922-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-147990922-1');
</script>


	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-167544943-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-167544943-1');
</script>
	
	<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '264309627870147');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=264309627870147&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
	
</head>

<body>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KB4BPP4"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php wp_body_open(); ?>
<div class="header">
    <div class="background-wrapper">
        <img class="background" src="<?php echo get_template_directory_uri() ?>/assets/img/header-bg.jpg" alt="">
        <div class="background_wrap"></div>
    </div>
    <div class="container">
        <div class="row header-menu">
            <a href="#" class="menu-link smooth_scroll">
                <span></span>
            </a>
            <div class="hamburger-menu smooth_scroll">
                <ul>
                    <li><a href="#price">Услуги и цены</a></li>
                    <li><a href="#specialists">Специалисты</a></li>
                    <li><a href="#feedback">Отзывы</a></li>
                    <li><a href="#contacts">Контакты</a></li>
                </ul>
            </div>
            <div class="logo col-lg-2 col-md-6"> <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" alt=""></div>
            <div class="adress wraper menu-text col-lg-3 col-md-6">
                Адрес клиники: <a href="#map" class="menu-text">г, Киев, бульвар Игоря Шамо, 12</a>
            </div>
            <div class="nav col-lg-3 col-md-6">
                <a href="#price" class="nav-btn">Услуги и цены</a>
                <a href="#feedback" class="nav-btn">Отзывы</a>
                <a href="#specialists" class="nav-btn">Специалисты</a>
                <a href="#contacts" class="nav-btn">Контакты</a>
            </div>
            <div class="wraper-phone col-lg-3 col-md-6">
                <a href="tel:+380443774503" class="phone">+380 (44) 337-45-03</a>
                <a href="tel:+380970226899" class="phone">+380 (97) 022-68-99</a>
                <div class="callback">
                    <a class="form-popup" href="#form" class="order-callback">Заказать обратный звонок <img src="<?php echo get_template_directory_uri() ?>/assets/img/viber.svg" alt=""> </a>
                </div>
            </div>
        </div>
        <div class="row free-diag row">
            <div class="free-diag-text col-lg-7">
                <div class="free-diag-highlight"><h4>Получите полную диагностику <br> состояния зубов и письменный <br> план лечения записавшись <br> на бесплатный осмотр</h4></div>
                <div class="free-diag-description"> <p>Все виды стоматологических услуг от чистки до имплантации</p></div>
                <div class="common-btn-border">
                    <div class="common-btn">
                        <a class="form-popup" href="#form">
                            <span class="btn-text">Записаться на осмотр</span>
                        </a>
                    </div>
                </div>
                <div class="average-exp"><span class="average-number">15</span> <span class="free-diag-description">лет средний стаж <br> врачей клиники</span> </div>
            </div>
            <div class="free-diag-img col-lg-5">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/free-diag-img.png" alt="">
            </div>
        </div>
    </div>
</div>
