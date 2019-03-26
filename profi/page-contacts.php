<?php get_header(); ?>
<main>
	<section class="page-contacts">
		<div class="page-contacts-wrapper">
			<div class="contacts-phone-wrapper">
				<h2>Есть вопросы? Позвоните нам!</h2>
				<div class="page-contacts-phone">
					<a href="tel.:+38<?php echo get_theme_mod('phone1'); ?>" class="contacts_phone"><?php echo get_theme_mod('phone1'); ?></a>
					<a href="tel.:+38<?php echo get_theme_mod('phone2'); ?>" class="contacts_phone"><?php echo get_theme_mod('phone2'); ?></a>
				</div>
			</div>
			<div class="contacts-schedule-wrapper">
				<h2>Мы работаем</h2>
				<div class="page-contacts-schedule"><?php echo get_theme_mod('schedule'); ?></div>
			</div>
		</div>
		<h2>Наши адреса</h2>
		<div class="page-contacts-adress">Донецк:&emsp; <?php echo get_theme_mod('adress1'); ?>; <?php echo get_theme_mod('adress2'); ?>; <?php echo get_theme_mod('adress3'); ?></div>
		<div class="map">
			<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A709be48e26a886efc983450a684270b5c324ec3867b65915c48ae92c7fd54387&amp;source=constructor" width="700" height="400" frameborder="0">Ваш браузер не поддерживает карты</iframe>
		</div>
		<h2>Давайте дружить!</h2>
		<div class="social-icons social-contact-page">
			<a class="social-btn social-btn-vk" rel="noopener" target="_blank" href="https://vk.com/club146177199">
				<svg class="icon-vk">
						<use xlink:href="#icon-vk"></use>
				</svg>
			</a>
			<a class="social-btn social-btn-fb" rel="noopener" target="_blank" href="https://www.facebook.com/studiyaModnyimanikyur">
				<svg class="icon-facebook">
						<use xlink:href="#icon-facebook"></use>
				</svg>
			</a>
			<a class="social-btn social-btn-ig" rel="noopener" target="_blank" href="https://www.instagram.com/podologi_school_donetsk/">
				<svg class="icon-instagram">
						<use xlink:href="#icon-instagram"></use>
				</svg>
			</a>
		</div>
	</section>
</main>

<?php get_footer(); ?>