<?php
$crb_sertific=carbon_get_theme_option('crb_sertific');
?>
<div class="sertificats">
    <div class="container-fluid sertificats-border">
        <div class="container">
            <div class="row">
                <div class="sertificats-highlight col-xl-12"><h4>Сертификаты</h4></div>
                <div class="sertificats-description col-xl-12">У нас работают только квалифицированные специалисты</div>
                <div class="col-md-12 col-lg-12">
                    <div class="sertificats-slider">
                        <?php
                        foreach ($crb_sertific as $certific){
                            $imgId=$certific['photo'];
                            $imgFull=getImageForId($imgId,'full');
                            $imgCertifSize=getImageForId($imgId,'sertificat-img');
                        ?>
                            <div>
                                <div class="img-wrap">
                                    <a href="<?php echo $imgFull ?>" data-lightbox="image-5">
                                        <img src="<?php echo $imgCertifSize ?>" alt="">
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
    </div>
</div>