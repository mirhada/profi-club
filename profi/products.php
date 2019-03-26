<?php 
/*
Template Name: Товары
*/
?>
<?php get_header(); ?>
<div class="bread-crumbs"><a href="<?php bloginfo('url'); ?>">Главная</a> <span class="slash"> / </span> Товары</div>
		<div class="products-wrapper">
       <?php 
        $args = array(
          'numberposts' => 100,
          'post_type'   => 'products',
          'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
      );

      $posts = get_posts( $args );

      foreach($posts as $post){ setup_postdata($post);
      ?>
          <div class="columns products-item">
            <div class="item-wrap">
            	<div class="products-item-image">
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('product_thumb'); ?>
                <div class="overlay"></div>
              </a>
            </div>
              <div class="products-item-meta">
                <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><p class="product-price"><?php the_field('product-price'); ?> &#8381;</p></h5>
                <?php the_excerpt(); ?>
              </div>
            </div>
           </div>
          <?php
      }

    wp_reset_postdata(); 
      ?>

    

 	</div>

<?php get_footer(); ?>