<?php
/*
Template part for displaying the home page content.
*/
?>

<section class="home-content">
    <div class="container">
        <?php
        // Start the loop
        while (have_posts()) {
            the_post();
        ?>
            <h2>
                <?php
                $title = get_the_title();
                $title_parts = explode(' ', $title, 2); // Split the title into two parts
                $first_word = $title_parts[0]; // Get the first word
                $remaining_text = isset($title_parts[1]) ? $title_parts[1] : ''; // Get the remaining text

                echo '<span class="first-word">' . esc_html($first_word) . ' ' . '</span>'; // Apply custom CSS to the first word
                echo esc_html($remaining_text); // Display the remaining text
                ?>
            </h2>
            <div class="page-content">
                <?php the_content(); ?>
            </div>
        <?php
        }
        ?>
    </div>
</section>