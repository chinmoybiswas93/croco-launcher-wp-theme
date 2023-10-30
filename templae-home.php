<?php
/*
Template Name: Home Page Template
*/
?>

<?php get_header(); ?>
    <?php get_template_part('resources/templates/page/home', 'slider'); ?>
    <?php get_template_part('resources/templates/page/home', 'content'); ?>
    <?php custom_page_content_hook(); ?>
<?php get_footer(); ?>