<?php
$crb_services=carbon_get_theme_option('crb_services');
?>
<div id="price">
    <div class="container">
        <div class="row">
            <div class="price-highlight col-md-12"><h4>Услуги и цены</h4></div>
            <div class="price-description col-md-12"><p>Мы предоставляем полный спектр стоматологических услуг</p></div>
            <div class="pricelist">
                <div class="pseudo-ul">
                    <div class="service-wrap">
                        <div class="service-name">
                            <?php
                            foreach ($crb_services as $item){
                                ?>
                                <span class="name"><?php echo $item['name'] ?></span>
                                <?php
                            }
                            ?>
                        </div>
                        <div class="service-price">
                            <?php
                            foreach ($crb_services as $item){
                                ?>
                                <span class="price"><?php echo $item['price'] ?></span>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="free-diag-btn common-btn-border">
                        <div class="common-btn">
                            <a class="form-popup" href="#form_price">
                                <div class="btn-text">Подробнее</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>