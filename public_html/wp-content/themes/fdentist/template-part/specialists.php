<?php
$specialists=carbon_get_theme_option('crb_specialists');
?>
<div class="specialists" id="specialists">
    <div class="container-fluid">
        <div class="background_wrapper">
            <div class="background_wrap"></div>
            <div class="background_wrap-border"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="specialists-highlight col-xl-12"><h4>Квалифицированные врачи-стоматологи</h4></div>
                <div class="specialists-description col-xl-12">Помогут сохранить и вылечить ваши зубы</div>
                <div class="specialists-slider col-md-12 col-xs-12">
                    <?php
                    $i=0;
                    foreach ($specialists as $specialist){
                    ?>
                        <div>
                            <a class="popup-slide" href="#spec-<?php echo $i ?>" data-lightbox="image-6">
                                <div class="slide-wrap" id="spec-<?php echo $i ?>">
                                    <img src="<?php echo $specialist['photo'] ?>" alt="">
                                    <div class="name highlight"><?php echo $specialist['name'] ?></div>
                                    <div class="position text"><?php echo $specialist['position'] ?></div>
                                    <div class="education text"><?php echo $specialist['education'] ?></div>
                                    <div class="specialization text"><?php echo $specialist['specialization'] ?></div>
                                    <div class="expirience highlight"><?php echo $specialist['expirience'] ?></div>
                                </div>
                            </a>
                        </div>
                    <?php
                        $i++;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>