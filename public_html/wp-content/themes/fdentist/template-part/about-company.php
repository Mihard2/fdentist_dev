<div class="about-company">
    <div class="about-company-bg">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/about-company-bg.png" alt="">
    </div>
    <div class="container">
        <div class="row about-company">
            <div class="about-company-highlight"><h4>Что такое стоматология FDENTIST?</h4></div>
            <div class="about-company-img col-xl-7 col-xs-12"><img src="<?php echo get_template_directory_uri() ?>/assets/img/about-company-img.png" alt=""></div>
            <div class="about-company-text col-xl-5">
                <div class="about-company-highlight_decs"><h4>Что такое стоматология FDENTIST?</h4>
                </div>
                <?php
                $about=carbon_get_theme_option('crb_about');
                //$about='';
                ?>
                <div class="about-company-description">
                    <?php if (empty($about)){ ?>
                    <p>
                        Стоматологическая клиника FDENTIST - это команда опытных врачей-стоматологов, которая гарантирует высокий уровень услгуг и комфортные условия лечения.
                    </p>
                    <p>
                        Если у вас редкая и сложная проблема, то наши специалисты смогут её решить. Ведь они постоянно проходят курсы повышения квалификации.
                    </p>
                    <p>
                        С момента открытия клиники более 3000 человек стали не просто нашими постоянными пациентами но и хорошими друзьями.
                    </p>
                    <?php
                    }else{
                        echo apply_filters('the_content',$about);
                    }
                    ?>
                </div>
                <div class="common-btn-border">
                    <div class="common-btn">
                        <a class="form-popup" href="#form">
                            <div class="btn-text">Записаться на приём</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row pusher-block">
                <div class="pusher col-xl-3 col-md-6 col-xs-12">
                    <div class="pusher-highlight"><img src="<?php echo get_template_directory_uri() ?>/assets/img/spec.png" alt=""> СПЕЦИАЛИСТЫ СО СТАЖЕМ</div>
                    <div class="pusher-text">Средний стаж специалистов клиники - 15 лет. Наши врачи постоянно проходят курсы повышения квалификации</div>
                </div>
                <div class="pusher col-xl-3 col-md-6 col-xs-12">
                    <div class="pusher-highlight"><img src="<?php echo get_template_directory_uri() ?>/assets/img/feedback.png" alt="">БЕЗУПРЕЧНЫЕ ОТЗЫВЫ
                    </div>
                    <div class="pusher-text">98% клиентов остаются довольными. Вы можете прочитать отзывы на нашем сайте</div>
                </div>
                <div class="pusher col-xl-3 col-md-6 col-xs-12">
                    <div class="pusher-highlight"><img src="<?php echo get_template_directory_uri() ?>/assets/img/mashines.png" alt="">ПЕРЕДОВОЕ ОБОРУДОВАНИЕ</div>
                    <div class="pusher-text">Вам будет комфортно. В нашей клинике стоит передовое европейское оборудование
                    </div>
                </div>
                <div class="pusher col-xl-3 col-md-6 col-xs-12">
                    <div class="pusher-highlight"><img src="<?php echo get_template_directory_uri() ?>/assets/img/quality.png" alt="">КАЧЕСТВЕННО И ДОСТУПНО</div>
                    <div class="pusher-text">Мы не экономим на качестве услуг. Доступность достигается благодаря прямым поставкам материала от производителя</div>
                </div>
            </div>
        </div>
    </div>
</div>