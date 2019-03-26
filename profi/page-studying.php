<?php get_header(); ?>
<section class="study-intro">
	<h2 class="study-title">
		Начните обучение подологии
		или оттачивайте своё мастерство
		в нашей школе авторских методик<br>
		Profi club
	</h2>
	<div class="social-icons social-icons-study">
		<a class="social-btn social-btn-vk" rel="noopener" target="_blank" href="https://vk.com/club146177199">
			<svg class="icon-vk">
					<use xlink:href="#icon-vk"></use>
			</svg>
		</a>
		<a class="social-btn social-btn-fb" rel="noopener" target="_blank" href="https://www.facebook.com/tsentrpodologiiPlanta/">
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
<section class="study-qna">
	<div class="wrapper-study">
		<div class="qna">
			<p class="question">Что такое Подология?</p>
			<p class="answer">Раздел медицины, направленный на лечение кожи стоп, заболеваний ногтей и гиперфункции потовых желез</p>
		</div>
		<div class="qna">
			<p class="question">А можно ли начать учиться с нуля?</p>
			<p class="answer"><?php echo get_theme_mod('question1'); ?></p>
		</div>
		<div class="qna">
			<p class="question">Могу ли я повысить квалификацию у вас?</p>
			<p class="answer"><?php echo get_theme_mod('question2'); ?></p>
		</div>
		<div class="qna">
			<p class="question">Как на счёт занятия один на один?</p>
			<p class="answer">На базе нашего медицинского центра мы проводим 
												индивидуальные мастер-классы по проблемам стопы</p>
		</div>
		<div class="qna">
			<p class="question">Хочу начать учиться. Что мне делать?</p>
			<p class="answer"><?php echo get_theme_mod('question3'); ?></p>
		</div>
	</div>
</section>
<section class="diploma">
	<p class="diploma-title">После прохождения наших курсов вы получите сертификат или диплом</p>
	<img src="<?php echo get_template_directory_uri(); ?>/assets/img/sertificat.jpg" alt="Пример сертификата">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/img/diplom.jpg" alt="Пример диплома">
</section>
<section class="contact-study sign">
	<p class="study-phone sign-text">Свяжитесь с нами, чтобы узнать больше об обучении в нашей школе</p>
	<a href="tel.:+38<?php echo get_theme_mod('telephone3'); ?>" class="sign-text contact-study-link"><?php echo get_theme_mod('telephone3'); ?></a>
	<a href="https://vk.com/kursypedicuremanikurekosmet" rel="noopener" target="_blank" class="sign-text contact-study-link">Группа в ВК</a>
</section>

<?php get_footer(); ?>