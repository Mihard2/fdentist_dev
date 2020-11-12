<?php
$crb_gallery=carbon_get_theme_option('crb_gallery');
?>
<div class="atmosphere">
    <div class="atmosphere-border"></div>
    <img class="atmosphere-bg" src="<?php echo get_template_directory_uri() ?>/assets/img/atmosphere-bg.jpg" alt="">
    <div class="container">
        <div class="row">
            <div class="atmosphere-highlight col-xl-12"><h4>Вас ждет комфортная и уютная атмосфера</h4></div>
            <div class="atmosphere-description col-xl-12">Посмотрите фото-галерею нашей клиники</div>
            <div class="atmosphere-slider col-xl-12">
                <?php
                $result_gallery=array_chunk($crb_gallery,8, true);
                foreach ($result_gallery as $sub_gallery){
                    ?>
                <div>
                    <div class="img-wrap">
                <?php
                    foreach ($sub_gallery as $image){
                        $imgId=$image['photo'];
                        $imgFull=getImageForId($imgId,'full');
                        $imgGallery=getImageForId($imgId,'gallery-img')
                        ?>
                        <a href="<?php echo $imgFull ?>" data-lightbox="gallery-1"><img src="<?php echo $imgGallery ?>" alt=""></a>
                        <?php
                    }
                    ?>
                    </div>
                </div>
                    <?php
                }
                ?>
            </div>
            <div class="atmosphere-slider_min col-xl-12">
                <?php
                foreach ($crb_gallery as $image){
                    $imgId=$image['photo'];
                    $imgFull=getImageForId($imgId,'full');
                    $imgGallery=getImageForId($imgId,'gallery-img')
                ?>
                    <div>
                        <div class="img-wrap">
                            <a href="<?php echo $imgFull ?>" data-lightbox="gallery-m">
                                <img src="<?php echo $imgGallery ?>" alt="">
                            </a>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>