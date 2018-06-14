<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * home page template
 *
 * @package      responsive-child
 * @author       Alexandra Faller
 * @link         http://www.alexfaller.uk/
 * @copyright    Copyright (c) Alexandra Faller
 * @license      GPL-2.0+
 */


get_header(); ?>

<div id="content">

	<?php get_template_part( 'loop-header' ); ?>

	<?php if( have_posts() ) : ?>

		<?php while( have_posts() ) : the_post(); ?>

			<?php responsive_entry_before(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php responsive_entry_top(); ?>

				<div class="post-entry">
					<?php the_content( __( 'Read more &#8250;', 'responsive' ) ); ?>
					<?php wp_link_pages( array( 'before' => '<div class="pagination">' . __( 'Pages:', 'responsive' ), 'after' => '</div>' ) ); ?>
				</div>
				<!-- end of .post-entry -->

				<?php get_template_part( 'post-data' ); ?>

				<?php responsive_entry_bottom(); ?>
			</div><!-- end of #post-<?php the_ID(); ?> -->
			

		<?php
		endwhile;

		get_template_part( 'loop-nav' );

	else :

		get_template_part( 'loop-no-posts' );

	endif;
	?>
	
	<div id="colLeft">
		<?php /* Widgetized sidebar */
    if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('column-widget-left') ) : ?><?php endif; ?>

	</div>
	<div id="colCenter">
		<?php /* Widgetized sidebar */
    if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('column-widget-center') ) : ?><?php endif; ?>

	</div>
	<div id="colRight">
	<?php /* Widgetized sidebar */
    if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('column-widget-right') ) : ?><?php endif; ?>

		
	</div>
	<div class="clear">&nbsp;</div>

</div><!-- end of #content -->


<?php get_footer(); ?>
