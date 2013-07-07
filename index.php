<?php
/**
 * Index
 *
 * Standard loop for the front-page
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 4.0
 */

get_header();

  ?><div role="main" class="row post-wrap">

      <div class="large-9 columns" role="main">

  		<?php if ( have_posts() ) : ?>

  			<?php while ( have_posts() ) : the_post(); ?>
  				<?php get_template_part( 'content', get_post_format() ); ?>
  			<?php endwhile; ?>

  		<?php else : ?>

  			<h2><?php _e('Yikes, this is embarrassing.', 'foundation' ); ?></h2>
  			<p class="lead"><?php _e('Sorry, we couldn\'t find what you were looking for.', 'foundation' ); ?></p>
  			
  		<?php endif; ?>

  		<?php foundation_pagination(); ?>

      </div> <?php // /.columns ?>

  </div> <?php // /.row.post-wrap ?>

<?php get_footer();