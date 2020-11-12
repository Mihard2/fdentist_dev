<div class="pdf">
    <img class="bg" src="<?php echo get_template_directory_uri() ?>/assets/img/about-company-bg.png" alt="">
    <div class="container-fluid">
        <div class="gradient"></div>
        <div class="container pdf-bg">
            <div class="row">
                <div class="pdf-highlight col-xl-7 col-md-7 col-lg-7">Скачайте PDF-файл"11 запретных продуктов, которые разрушают ваши зубы"</div>
                <form method="POST" id="form-pdf">
                    <?php wp_nonce_field('popup-form','popup_check',false)?>
                    <div class="form-block">
                        <div class="form-highlight">
                            <p>Введите свои данные, чтобы скачать PDF-файл</p>
                        </div>
                        <div class="form-description">
                            <p>Который поможет сохранить ваши зубы здоровыми</p>
                        </div>
                        <input class="common-input-border" placeholder="Введите имя" type="text" name="name">
                        <input class="common-input-border" placeholder="Введите номер телефона" type="phone" name="phone">
                        <?php
                        do_action('before_complainform_submit');
                        ?>
                        <div class="submit-border">
                            <input type="submit" value="Скачать PDF-файл" class="common-btn submit">
                        </div>
                        <div class="input-footer">Все данные строго конфиденциальны</div>
                    </div>
                </form>
                <img class="book" src="<?php echo get_template_directory_uri() ?>/assets/img/book.png" alt="">
            </div>
        </div>
    </div>
</div>
