<?php
$crb_feedbacks=carbon_get_theme_option('crb_feedbacks');
?>
<div class="feedback" id="feedback">
    <div class="container-fluid">
        <div class="feedback-bg">
            <div class="feedback-bg_border feedback-bg_borderTop"></div>
            <div class="feedback-bg_border feedback-bg_borderBot"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="feedback-highlight col-xl-12"><h4>Подарили более 3000 красивых улыбок</h4></div>
                <div class="feedback-description col-xl-12">Посмотрите отзывы наших клиентов с Google</div>
                <div class="feedback-slider col-12">
                    <?php
                    $i=0;
                    foreach ($crb_feedbacks as $feedback){
                    ?>
                        <div>
                            <!--<a class="popup-slider" href="#feedback-block_<?php /*echo $i */?>">-->
                                <div class="feedback-block" id="feedback-block_<?php echo $i ?>">
                                    <div class="feedback-block-head">
                                        <?php
                                        $img_id=$feedback['photo'];
                                        $img=getImageForId($img_id,'feedback-avatar');
                                        ?>
                                        <img class="feedback-portrait" src="<?php echo $img?>" alt="">
                                        <div class="feedback-block-highlight"><?php echo $feedback['name'] ?></div>
                                        <a href="https://www.google.com/search?q=fdentist&oq=fdent&aqs=chrome.0.69i59j69i60l2j69i61j69i57j0.2440j0j7&sourceid=chrome&ie=UTF-8#lrd=0x40d4cf8bcb6d80cf:0x1192d04f52bf548a,1,,,"
                                           class="google-feedback">Больше отзывов в Google</a>
                                    </div>
                                    <div class="feedback-text">
                                        <?php echo apply_filters('the_content',$feedback['text']) ?>
                                    </div>

                                </div>
                            <!--</a>-->
                        </div>
                    <?php
                        $i++;
                    }
                    ?>
                </div>
                <div class="feedback-btn common-btn-border">
                    <div class="common-btn">
                        <a class="form-popup" href="#form">
                            <span class="btn-text">Записаться на приём</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
