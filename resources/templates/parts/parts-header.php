<?php

/**
 * <header> content with top-nav content.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>

<header class="header">
    <!-- Top Header -->
    <div class="top-header">
        <div class="container">
            <div class="top-header-info">
                <div class="contact-box">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/resources/icons/telephone-call.png'); ?>" alt="Phone Icon">
                    <p>786-842-0320</p>
                </div>
                <div class="contact-box">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/resources/icons/email.png'); ?>" alt="Phone Icon">
                    <p>sales@anncarequipment.com</p>
                </div>
            </div>
        </div>
    </div>


    <!-- Main Header -->
    <div class="main-header">
        <div class="container">
            <div class="logo-area">
                <?php the_custom_logo(); ?>
            </div>

            <div class="navigation-area">
                <nav class="main-navigation">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'top',
                    ));
                    ?>
                </nav>

                <div class="call-to-action">
                    <a class="btn cta-btn" href="#"><img src="<?php echo esc_url(get_template_directory_uri() . '/resources/icons/calculator.png'); ?>" alt="Phone Icon">
                        <p>Need Estimate</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>