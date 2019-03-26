<?php get_header(); ?>

	<main>
		<h1 class="visually-hidden">Студия красоты "Profi club"</h1>
		<section class="intro">
			<span class="intro-img">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/woman.jpg" alt="Женщина с маникюром">
			</span>
			<div class="intro-content">
				<div class="intro-contacts">
					<div class="intro-contact-place">
						<div class="intro-schedule">
							<svg class="timetable">
  							<use xlink:href="#timetable"></use>
							</svg>
							<p><?php echo get_theme_mod('schedule'); ?></p></div>
						<div class="intro-adress">
						<svg class="placeholder">
  						<use xlink:href="#placeholder"></use>
						</svg>
						<p>Донецк:&emsp; <?php echo get_theme_mod('adress1'); ?>;&emsp; <?php echo get_theme_mod('adress2'); ?>;&emsp; <?php echo get_theme_mod('adress3'); ?></p></div>
					</div>
					<div class="intro-phone">
						<a href="tel.:+380713101037" class="contacts_phone">
							<svg class="telephone">
  							<use xlink:href="#telephone"></use>
							</svg>
							<p><?php echo get_theme_mod('phone1'); ?></p></a>
						<a href="tel.:+380506511841" class="contacts_phone">
							<svg class="telephone">
  							<use xlink:href="#telephone"></use>
							</svg>
							<p><?php echo get_theme_mod('phone2'); ?></p></a>
					</div>
				</div>
				<p class="intro-title">Медицинский и косметологический уход за вашими ногами и руками</p>
				<p class="intro-text">В нашей студии Вас ждет коллектив профессиональных и талантливых мастеров, уютная атмосфера и широкий спектр услуг</p>
				<button class="button btn-contact intro-button">Записаться</button>
				<div class="social-icons">
					<a class="social-btn social-btn-vk" rel="noopener" target="_blank" href="https://vk.com/club117639535">
						<svg class="icon-vk">
  							<use xlink:href="#icon-vk"></use>
						</svg>
					</a>
					<a class="social-btn social-btn-fb" rel="noopener" target="_blank" href="https://www.facebook.com/studiyaModnyimanikyur">
						<svg class="icon-facebook">
  							<use xlink:href="#icon-facebook"></use>
						</svg>
					</a>
					<a class="social-btn social-btn-ig" rel="noopener" target="_blank" href="https://www.instagram.com/podologi_school_donetsk">
						<svg class="icon-instagram">
  							<use xlink:href="#icon-instagram"></use>
						</svg>
					</a>
	  		</div>
			</div>
		</section>

		<section class="about">
			<h2 class="about-title">Для Вас</h2>
          	<div class="about-wrapper">
  			<div class="about-slider">
					<div class="about-slider-item">
						<svg class="serum">
  							<use xlink:href="#serum"></use>
						</svg>
						<p class="about-item-title">Новейшее оборудование и технологии</p>
						<p class="about-item-content">Мы всегда совершенствуемся и желаем стать лучше</p>
					</div>
					<div class="about-slider-item">
						<svg class="professional">
  							<use xlink:href="#professional"></use>
						</svg>
						<p class="about-item-title">Опытные профессиональные мастера</p>
						<p class="about-item-content">В нашем центре работают специалисты с 15 - летним стажем</p>
					</div>
					<div class="about-slider-item">
						<svg class="medical-history">
  							<use xlink:href="#medical-history"></use>
						</svg>
						<p class="about-item-title">Стрерилизация на медицинском уровне</p>
						<p class="about-item-content">У нас ответственный подход к чистоте, чтобы вы чувствовали себя безопасно</p>
					</div>
					<div class="about-slider-item">
						<svg class="parking">
  							<use xlink:href="#parking"></use>
						</svg>
						<p class="about-item-title">Уютный салон в центре города</p>
						<p class="about-item-content">Со стоянкой для машин</p>
					</div>
					<div class="about-slider-item">
						<svg class="conversation">
  							<use xlink:href="#conversation"></use>
						</svg>
						<p class="about-item-title">Приятное общение</p>
						<p class="about-item-content">Мы не против поболтать, если у Вас есть желание</p>
					</div>
					<div class="about-slider-item">
						<svg class="stopwatch">
  							<use xlink:href="#stopwatch"></use>
						</svg>
						<p class="about-item-title">Проведение нескольких процедур одновременно</p>
						<p class="about-item-content">Ускорим процесс по Вашей просьбе</p>
					</div>
				</div>
              </div>
		</section>  

		<section id="works" class="works">
			<h2 class="visually-hidden">Наши Работы</h2>
				<?php
         
           $images = acf_photo_gallery('profi-gallery', $post->ID);

            if( count($images) ):
     
              foreach($images as $image):
            $full_image_url= $image['full_image_url'];
            $full_image_url = acf_photo_gallery_resize_image($full_image_url, 345, 300); 
            $thumbnail_image_url= $image['thumbnail_image_url']; 
            $url= $image['url']; 
            $target= $image['target']; 
            $alt = get_field('photo_gallery_alt', $id); 
            $class = get_field('photo_gallery_class', $id); 
        ?>

    		<div class="works-item">
        	<?php if( !empty($url) ){ ?><a href="<?php echo $url; ?>" <?php echo ($target == 'true' )? 'target="_blank"': ''; ?>><?php } ?>
            <img src="<?php echo $full_image_url; ?>">
       		<?php if( !empty($url) ){ ?></a><?php } ?>
    		</div>
					<?php endforeach; endif; ?> 
				<button class="button see-more">Посмотреть ещё</button>

		</section>

		<section id="prices" class="prices">
			<h2 class="prices-title">Наши Цены</h2>
			
			<div class="tabs">
  
  			<input type="radio" id="tab1" name="tab-control" checked>
  			<input type="radio" id="tab2" name="tab-control">
  			<input type="radio" id="tab3" name="tab-control">  
 				<input type="radio" id="tab4" name="tab-control">
 				<input type="radio" id="tab5" name="tab-control">  
 				<input type="radio" id="tab6" name="tab-control">
  			<ul>
    			<li title="Маникюр"><label for="tab1" role="button"><span>Маникюр</span></label></li>
    			<li title="Покрытие"><label for="tab2" role="button"><span>Покрытие</span></label></li>
    			<li title="Педикюр"><label for="tab3" role="button"><span>Педикюр</span></label></li>    
    			<li title="Подология"><label for="tab4" role="button"><span>Подология (мед. услуги)</span></label></li>
    			<li title="Для мужчин"><label for="tab5" role="button"><span>Для мужчин</span></label></li>    
    			<li title="Брови и Ресницы"><label for="tab6" role="button"><span>Брови и Ресницы</span></label></li>
  			</ul>
  
  			
 				<div class="content">
    			<section>
    				<p class="price-radio-title">Выберите уровень специалиста</p>
    				<input type="radio" id="tab1-radio" name="tab-control-radio">
  					<input type="radio" id="tab2-radio" name="tab-control-radio" checked>
  					<input type="radio" id="tab3-radio" name="tab-control-radio">  
  					<ul>
    					<li><label for="tab1-radio" role="button"><span>Ведущий специалист</span></label></li>
    					<li><label for="tab2-radio" role="button"><span>ТОП специалист</span></label></li>
    					<li><label for="tab3-radio" role="button"><span>Специалист</span></label></li>
  					</ul>
         		<?php
         			global $post;

							$tmp_post = $post;
								$myposts = get_posts( array(
									'numberposts' => -1,
									'category_name' => 'maniqure',
								) );

								foreach( $myposts as $post ){
									setup_postdata($post);
									?>
								<div class="price-list">
         				  <div class="price-list-title"><?php the_title(); ?></div>
         				  <div class="price-list-time"><p><?php the_field('time-profi'); ?> мин</p></div>
         				  <span class="price-lead-profi"><?php the_field('price-lead-profi'); ?></span>
         				  <span class="price-top-profi"><?php the_field('price-top-profi'); ?></span>
         				  <span class="price-profi"><?php the_field('price-profi'); ?></span> 
         				  <span class="rubles">Р</span>
         				  <?php the_content(); ?>
        				</div>
								
								<?php }

								 $post = $tmp_post;
								?>			 

      	  </section>
        	<section>
        		<p class="price-radio-title">Выберите уровень специалиста</p>
    				<input type="radio" id="tab4-radio" name="tab-control-radio">
  					<input type="radio" id="tab5-radio" name="tab-control-radio">
  					<input type="radio" id="tab6-radio" name="tab-control-radio">  
  					<ul>
    					<li><label for="tab4-radio" role="button"><span>Ведущий специалист</span></label></li>
    					<li><label for="tab5-radio" role="button"><span>ТОП специалист</span></label></li>
    					<li><label for="tab6-radio" role="button"><span>Специалист</span></label></li>
  					</ul>
  					<?php
         			global $post;

							$tmp_post = $post;
								$myposts = get_posts( array(
									'numberposts' => -1,
									'category_name' => 'nail_cover',
								) );

								foreach( $myposts as $post ){
									setup_postdata($post);
									?>
								<div class="price-list">
         				  <div class="price-list-title"><?php the_title(); ?></div>
         				  <div class="price-list-time"><p><?php the_field('time-profi'); ?> мин</p></div>
         				  <span class="price-lead-profi"><?php the_field('price-lead-profi'); ?></span>
         				  <span class="price-top-profi"><?php the_field('price-top-profi'); ?></span>
         				  <span class="price-profi"><?php the_field('price-profi'); ?></span> 
         				  <span class="rubles">P</span>
         				  <?php the_content(); ?>
        				</div>
								
								<?php }

								 $post = $tmp_post;
								?>
      
        	</section>
        	<section>
          	<p class="price-radio-title">Выбирете уровень специалиста</p>
    				<input type="radio" id="tab7-radio" name="tab-control-radio">
  					<input type="radio" id="tab8-radio" name="tab-control-radio">
  					<input type="radio" id="tab9-radio" name="tab-control-radio">  
  					<ul>
    					<li><label for="tab7-radio" role="button"><span>Ведущий специалист</span></label></li>
    					<li><label for="tab8-radio" role="button"><span>ТОП специалист</span></label></li>
    					<li><label for="tab9-radio" role="button"><span>Специалист</span></label></li>
  					</ul>
         		  <?php
         			global $post;

							$tmp_post = $post;
								$myposts = get_posts( array(
									'numberposts' => -1,
									'category_name' => 'pediqure',
								) );

								foreach( $myposts as $post ){
									setup_postdata($post);
									?>
								<div class="price-list">
         				  <div class="price-list-title"><?php the_title(); ?></div>
         				  <div class="price-list-time"><p><?php the_field('time-profi'); ?> мин</p></div>
         				  <span class="price-lead-profi"><?php the_field('price-lead-profi'); ?></span>
         				  <span class="price-top-profi"><?php the_field('price-top-profi'); ?></span>
         				  <span class="price-profi"><?php the_field('price-profi'); ?></span> 
         				  <span class="rubles">P</span>
         				  <?php the_content(); ?>
        				</div>
								
								<?php }

								 $post = $tmp_post;
								?>
        	</section>
    			<section>
          	<p class="price-radio-title">Выбирете уровень специалиста</p>
    				<input type="radio" id="tab10-radio" name="tab-control-radio">
  					<input type="radio" id="tab11-radio" name="tab-control-radio">
  					<input type="radio" id="tab12-radio" name="tab-control-radio">  
  					<ul>
    					<li><label for="tab10-radio" role="button"><span>Ведущий специалист</span></label></li>
    					<li><label for="tab11-radio" role="button"><span>ТОП специалист</span></label></li>
    					<li><label for="tab12-radio" role="button"><span>Специалист</span></label></li>
  					</ul>
         		<?php
         			global $post;

							$tmp_post = $post;
								$myposts = get_posts( array(
									'numberposts' => -1,
									'category_name' => 'podology',
								) );

								foreach( $myposts as $post ){
									setup_postdata($post);
									?>
								<div class="price-list">
         				  <div class="price-list-title"><?php the_title(); ?></div>
         				  <div class="price-list-time"><p><?php the_field('time-profi'); ?> мин</p></div>
         				  <span class="price-lead-profi"><?php the_field('price-lead-profi'); ?></span>
         				  <span class="price-top-profi"><?php the_field('price-top-profi'); ?></span>
         				  <span class="price-profi"><?php the_field('price-profi'); ?></span> 
         				  <span class="rubles">P</span>
         				  <?php the_content(); ?>
        				</div>
								
								<?php }

								 $post = $tmp_post;
								?>
        	</section>
        	<section>
          	<p class="price-radio-title">Выбирете уровень специалиста</p>
    				<input type="radio" id="tab13-radio" name="tab-control-radio">
  					<input type="radio" id="tab14-radio" name="tab-control-radio">
  					<input type="radio" id="tab15-radio" name="tab-control-radio">  
  					<ul>
    					<li><label for="tab13-radio" role="button"><span>Ведущий специалист</span></label></li>
    					<li><label for="tab14-radio" role="button"><span>ТОП специалист</span></label></li>
    					<li><label for="tab15-radio" role="button"><span>Специалист</span></label></li>
  					</ul>
         		<?php
         			global $post;

							$tmp_post = $post;
								$myposts = get_posts( array(
									'numberposts' => -1,
									'category_name' => 'for_man',
								) );

								foreach( $myposts as $post ){
									setup_postdata($post);
									?>
								<div class="price-list">
         				  <div class="price-list-title"><?php the_title(); ?></div>
         				  <div class="price-list-time"><p><?php the_field('time-profi'); ?> мин</p></div>
         				  <span class="price-lead-profi"><?php the_field('price-lead-profi'); ?></span>
         				  <span class="price-top-profi"><?php the_field('price-top-profi'); ?></span>
         				  <span class="price-profi"><?php the_field('price-profi'); ?></span> 
         				  <span class="rubles">P</span>
         				  <?php the_content(); ?>
        				</div>
								
								<?php }

								 $post = $tmp_post;
								?>
        	</section>
    			<section>
          	<p class="price-radio-title">Выбирете уровень специалиста</p>
    				<input type="radio" id="tab16-radio" name="tab-control-radio">
  					<input type="radio" id="tab17-radio" name="tab-control-radio">
  					<input type="radio" id="tab18-radio" name="tab-control-radio">  
  					<ul>
    					<li><label for="tab16-radio" role="button"><span>Ведущий специалист</span></label></li>
    					<li><label for="tab17-radio" role="button"><span>ТОП специалист</span></label></li>
    					<li><label for="tab18-radio" role="button"><span>Специалист</span></label></li>
  					</ul>
         		<?php
         			global $post;

							$tmp_post = $post;
								$myposts = get_posts( array(
									'numberposts' => -1,
									'category_name' => 'eye_brows',
								) );

								foreach( $myposts as $post ){
									setup_postdata($post);
									?>
								<div class="price-list">
         				  <div class="price-list-title"><?php the_title(); ?></div>
         				  <div class="price-list-time"><p><?php the_field('time-profi'); ?> мин</p></div>
         				  <span class="price-lead-profi"><?php the_field('price-lead-profi'); ?></span>
         				  <span class="price-top-profi"><?php the_field('price-top-profi'); ?></span>
         				  <span class="price-profi"><?php the_field('price-profi'); ?></span> 
         				  <span class="rubles">P</span>
         				  <?php the_content(); ?>
        				</div>
								
								<?php }

								 $post = $tmp_post;
								?>
        	</section>
 					</div>
			</div>

			 
		</section>

		<section class="team">
			<h2 class="team-title">Наши Специалисты</h2>
          	<div class="team-wrapper">
			<div class="team-slider">
				<?php 
        $args = array(
          'numberposts' => 10,
          'post_type'   => 'team',
          'suppress_filters' => true, 
      );

      $posts = get_posts( $args );

      foreach($posts as $post){ setup_postdata($post);
      ?>
				<div class="team-slider-item">

					<div class="team-photo">
						<?php the_post_thumbnail('team_thumb'); ?>
					</div>
					<p class="team-name"><?php the_title(); ?></p>
					<?php the_excerpt(); ?>
				</div>
				<?php
      }

    wp_reset_postdata(); 
      ?>
			</div>
            </div>
		</section>

		<section class="sign">
			<h2 class="visually-hidden">Запись на приём</h2>
			<p class="sign-text">Наши специалисты проведут диагностику проблемных зон, а также дадут рекомендации по лечению и домашнему уходу</p>
			<button class="button btn-contact sign-btn">Записаться</button>
		</section>
	</main>

	<div class="modal-overlay">
  	<div class="modal">
	    <a class="close-modal">
	      <svg viewBox="0 0 20 20">
	        <path fill="#000000" d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z"></path>
	      </svg>
	    </a>

    	<div class="modal-content">
      	<h3>Some content here</h3>
   	  </div>
    
  </div>
</div>
<?php get_footer();?>