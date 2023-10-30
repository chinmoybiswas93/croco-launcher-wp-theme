<?php
/**
 * <footer> content with bottom-nav content.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>

<footer class="footer">
<nav>
	<?php
wp_nav_menu(array(
    'theme_location' => 'bottom',
));
?>
</nav>

	<span>&copy; Croco Launcher 2023</span>
</footer>