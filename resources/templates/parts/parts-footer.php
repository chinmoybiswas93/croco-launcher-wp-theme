<?php

/**
 * <footer> content with bottom-nav content.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>

<footer class="footer">
	<!-- First Row: Logo in Center -->
	<div class="footer-row logo-row">
		<div class="container">
			<?php the_custom_logo(); ?>
		</div>
	</div>

	<!-- Second Row: Four Columns -->
	<div class="footer-row columns-row">
		<div class="container">
			<div class="column col-1">
				<div class="content">
					<h3>GROW WITH ANNCAR</h3>
					<p>We are dedicated to the sales of heavy machinery spare parts for KOMASTU ®, JCB ®, and CATERPILLAR</p>
					<div class="social-links">
						<img src="<?php echo esc_url(get_template_directory_uri() . '/resources/icons/footer-social-links.png'); ?>" alt="Phone Icon">
					</div>
				</div>
			</div>

			<div class="column col-2 get-in-touch">
				<div class="content">
					<h3>Get In Touch</h3>
					<ul>
						<li> <img src="<?php echo esc_url(get_template_directory_uri() . '/resources/icons/telephone-call-yellow.png'); ?>" alt="Phone Icon">
							<p>+1 786.842.0320</p>
						</li>
						<li> <img src="<?php echo esc_url(get_template_directory_uri() . '/resources/icons/email-yellow.png'); ?>" alt="Phone Icon">
							<p>sales@anncarequipment.com</p>
						</li>
						<li> <img src="<?php echo esc_url(get_template_directory_uri() . '/resources/icons/location-yellow.png'); ?>" alt="Phone Icon">
							<p>7275 NW 68th Street, Bay #9, Miami FL 33166 </p>
						</li>
					</ul>
				</div>
			</div>

			<div class="column col-3 useful-links">
				<div class="content">
					<h3>Useful Links</h3>
					<ul>
						<li>
							<p>Engine Parts </p>
						</li>
						<li>
							<p>Ground Engaging Tools </p>
						</li>
						<li>
							<p>Undercarriage Parts</p>
						</li>
						<li>
							<p>Miscellaneous Parts</p>
						</li>
					</ul>
				</div>
			</div>

			<div class="column col-4">
				<div class="content">
					<h3>Get Free Estimate</h3>
					<p>Fill out the form below and request a free and secure quote.</p>

					<a href="#" class="btn cta-btn footer-cta-btn">
						Request A Quote
					</a>

				</div>
			</div>
		</div>
	</div>

	<!-- Third Row: Copyright Text in Center -->
	<div class="footer-row copyright-row">
		<div class="container">
			<?php if (is_active_sidebar('footer-copyright')) : ?>
				<div id="footer-copyright-widget" class="widget widget-footer-copyright">
					<?php dynamic_sidebar('footer-copyright'); ?>
				</div>
			<?php else : ?>
				<p class="copyright-text">Fallback Copyright Text</p>
			<?php endif; ?>
		</div>
	</div>

</footer>