		<footer id="footer">

			<div class="container">

				<?php wp_nav_menu(array('theme_location' => 'footer', 'container' => 'ul', 'menu_class' => 'footer-menu', 'fallback_cb' => false)); ?>

				<?php
				$copyright = get_theme_mod('copyright', '&copy; 2016 Basic WordPress Theme');

				if($copyright): ?>
				<p class="copyright"><?php echo esc_html($copyright); ?></p>
				<?php endif; ?>

			</div>

		</footer>

	</div>

<?php wp_footer(); ?>

</body>
</html>