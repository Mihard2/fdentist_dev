<div class="footer">
    <div class="container">
        <div class="row footer-block">
            <div class="logo col-xl-3 col-xs-12"><img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" alt=""></div>
            <div class="copyright col-xl-8 col-xs-12"><a href="#">2020. Все права защищены</a></div>
        </div>
    </div>
</div>
<?php
wp_footer();
?>
<form class="white-popup mfp-hide" action="" id="form">
    <?php wp_nonce_field('popup-form','popup_check',false)?>
    <div id="form-block" class="form-block">
        <div class="form-highlight">
            <p> Введите свои данные, чтобы записаться на обследование </p>
        </div>
        <div class="form-description">
            <p> Перезвоним в течении 10 минут и запишем на удобное время </p>
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
<form class="white-popup mfp-hide" action="" id="form2">
    <?php wp_nonce_field('popup-form','popup_check',false)?>
    <div id="form-block" class="form-block">
        <div class="form-highlight">
            <p> Введите свои данные, чтобы получить консультацию </p>
        </div>
        <div class="form-description">
            <p> В течение 10 минут с вами свяжется администратор, ответит на все ваши вопросы и при необходимости запишет на прием </p>
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
<form class="white-popup mfp-hide" action="" id="form_price">
    <?php wp_nonce_field('popup-form','popup_check',false)?>
    <div id="form-block" class="form-block">
        <div class="form-highlight">
            <p> Точная стоимость зависит от вашей ситуации </p>
        </div>
        <div class="form-description">
            <p>Запишитесь на осмотр и врач обследует ваши зубы, выявит проблемы
                и назначит лечение. После чего назовет точную стоимость услуг</p>
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

</body>
</html>
