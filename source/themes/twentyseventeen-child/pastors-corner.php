<?php
/**
 * Template Name: Pastor's Corner
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php if ( have_posts() ) : ?>
				<header class="page-header">
					<h1><?php wp_title(); ?></h1>
				</header><!-- .page-header -->
			<?php endif; ?>

      <?php
      query_posts('cat=3');
			while ( have_posts() ) : the_post();
				
				get_template_part( 'template-parts/post/content', get_post_format() );
				
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			wp_reset_query();
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div><!-- #primary-sidebar -->
	<?php endif; ?>
</div><!-- .wrap -->

<?php get_footer();
