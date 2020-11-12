<div class="free-inspection">
    <img class="free-inspection-img" src="<?php echo get_template_directory_uri() ?>/assets/img/free-inspection-img.png" alt="">
    <div class="container-fluid lleft">
        <div class="gradient">
        </div>
        <div class="container inspection-bg">
            <div class="row">
                <div class="free-inspection-highlight col-xl-12">Пройдите бесплатное обследование</div>
                <div class="free-inspection-description col-xl-12">полости рта на профессиональном <br> стоматологическом оборудовании</div>
                <div class="free-inspection-grad-highlight col-xl-12">В комплексное обследование входит:</div>
                <div class="free-inspection-grad-description col-xl-12 col-10"><span>Полная диагностика и оценка состояния зубов с использованием стерильного набора инструментов</span></div>
                <div class="free-inspection-grad-description col-xl-12 col-10"><span>Персональные рекомендации опытного врача- стоматолога и при необходимости составление целесообразного плана лечения</span></div>
                <form id="free-diagnostic">
                    <?php wp_nonce_field('popup-form','popup_check',false)?>
                    <div class="form-block">
                        <div class="form-highlight">
                            <p> Введите свои данные, чтобы записаться на обследование</p>
                        </div>
                        <div class="form-description">
                            <p> Перезвоним в течении 10 минут и запишем на удобное время</p>
                        </div>
                        <input class="common-input-border" placeholder="Введите имя" type="text" name="name">
                        <input class="common-input-border" placeholder="Введите номер телефона" type="phone" name="phone">
                        <?php
                        do_action('before_complainform_submit');
                        ?>
                        <div class="submit-border">
                            <input class="submit" type="submit" value="Записаться на осмотр" class="common-btn">
                        </div>
                        <div class="input-footer">Все данные строго конфиденциальны</div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>