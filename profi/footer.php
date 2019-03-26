	<footer class="page-footer">
		<div class="footer-contacts">
			<b class="contacts-title">Студия красоты "Profi club" | Донецк</b>
			<p class="contacts-text">
	  		<?php echo get_theme_mod('adress1'); ?> |   
				<?php echo get_theme_mod('adress2'); ?> |     
				<?php echo get_theme_mod('adress3'); ?> 
			</p>
			<div class="contacts-phones">
				<a href="tel.:+380713101037" class="contacts_phone"><?php echo get_theme_mod('phone1'); ?></a>
				<a href="tel.:+380506511841" class="contacts_phone"><?php echo get_theme_mod('phone2'); ?></a>
			</div>
			<nav class="footer-menu">
				<?php wp_nav_menu( [
					'theme_location'  => 'footer',
					'container'       => null, 
					'menu_class'      => 'menu-list' 
				]); ?>
			</nav>
			<div class="social_icons-footer">
					<a class="social-btn-vk" target="_blank" href="https://vk.com/club146177199">VK</a>
					<a class="social-btn-fb" target="_blank" href="https://www.facebook.com/studiyaModnyimanikyur">Facebook</a>
					<a class="social-btn-ig" target="_blank" href="https://www.instagram.com/podologi_school_donetsk/">Instagram</a>
	  	</div>
		</div>
		<div class="copyright">
			<p class="copyright-text">Разработано: <a href="https://vk.com/mirhada" rel="noopener" target="_blank">Modjo_dev</a></p>
		</div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>