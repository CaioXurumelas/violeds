		<footer id="footer">

			<div class="container">

				<div class="row" style="border-bottom: 1px solid #dadada">
					<div class="col-md-12">
						<img src="https://www.violeds.com.br/2019/wp-content/themes/Basic/images/logo.png" style="display: initial;width: 200px;margin-bottom: 20px;">
						<p><span><a href="https://www.facebook.com/violedsbr" target="_blank">facebook</a></span> <span><a href="https://www.instagram.com/violeds.br/" target="_blank">instagram</a></span> <span><a href="mailto:contato@zyxcorp.com.br" target="_blank">contato@zyxcorp.com.br</a></span></p>
					</div>
				</div>

				<?php wp_nav_menu(array('theme_location' => 'footer', 'container' => 'ul', 'menu_class' => 'footer-menu', 'fallback_cb' => false)); ?>

				<?php
				$copyright = get_theme_mod('copyright', '&copy; 2016 Basic WordPress Theme');

				if($copyright): ?>
				<p style="padding-top: 20px" class="copyright"><?php echo esc_html($copyright); ?></p>
				<?php endif; ?>

			</div>

		</footer>

	</div>

<?php wp_footer(); ?>

</body>
</html>