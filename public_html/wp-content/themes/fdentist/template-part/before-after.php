<?php
$examples=carbon_get_theme_option('crb_examples');
?>
<div class="before-after">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="before-after-highlight col-xl-12"><h4>Примеры наших работ</h4></div>
                <div class="before-after-description col-xl-12">Сделаем фото перед лечением и после. Вы сами сможете оценить результат</div>
                <div class="before-after-slider">
                    <?php
                    $i=0;
                    foreach ($examples as $item){
                    ?>
                        <div>
                                <div class="slide-wrap-ba" id="b-a-s<?php echo $i ?>">
                                    <div class="slide-highlight"><?php echo $item['name'] ?></div>
                                    <div class="before-after-wrap">
                                        <?php
                                        $before_img_id=$item['before_photo'];
                                        $after_img_id=$item['after_photo'];
                                        $before_img_small=getImageForId($before_img_id,'before-after');
                                        $before_img_full=getImageForId($before_img_id,'full');
                                        $after_img_small=getImageForId($after_img_id,'before-after');
                                        $after_img_full=getImageForId($after_img_id,'full');
                                        ?>
                                        <div class="before-img">
                                            До
                                            <a href="<?php echo $before_img_full ?>" data-lightbox="image-<?php echo $i ?>">
                                                <img src="<?php echo $before_img_small ?>" alt="">
                                            </a>
                                        </div>
                                        <div class="after-img">
                                            После
                                            <a href="<?php echo $after_img_full ?>" data-lightbox="image-<?php echo $i ?>">
                                                <img src="<?php echo $after_img_small ?>" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
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
