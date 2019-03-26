<?php 
/*
Template Name: Страница с товаром
Template Post Type: products
*/
?>
<?php get_header(); ?>
<section>
	<div class="bread-crumbs"><a href="<?php bloginfo('url'); ?>">Главная</a> <span class="slash"> / </span> <a href="<?php bloginfo('url'); ?>/products/"> Товары</a> <span class="slash"> / </span> <?php the_title(); ?></div>
	<div class="product-single">
		<h3 class="product-single-title"><?php the_title(); ?></h3>
		<div class="product-single-img"><?php the_post_thumbnail('product_thumb'); ?></div>
		<div class="prod-wrap">
			<div class="product-single-price"><?php the_field('product-price'); ?> &#8381;</div>
			<div class="product-single-content"><?php the_field('product-description'); ?></div>
		</div>
	</div>
</section>
<?php get_footer(); ?>