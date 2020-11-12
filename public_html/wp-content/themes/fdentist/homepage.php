<?php
/*
 * Template name: Главная страница
 */
get_header();

get_template_part('template-part/price');
get_template_part('template-part/about-company');
get_template_part('template-part/before-after');
get_template_part('template-part/specialists');
get_template_part('template-part/feedback');
get_template_part('template-part/sertificats');
$download_file=carbon_get_theme_option('download_file');
if ($download_file) {
    get_template_part('template-part/pdf');
}
get_template_part('template-part/atmosphere');
get_template_part('template-part/free-inspection');
get_template_part('template-part/contacts');

get_footer();
?>