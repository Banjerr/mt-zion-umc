<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->

		<button onclick="openContactLightbox();" class="fab-btn hvr-rectangle-in hvr-float-shadow">
		 I'm New! <i class="fa fa-envelope-o"></i>
	 	</button>

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="wrap">
				<?php
				get_template_part( 'template-parts/footer/footer', 'widgets' );

				if ( has_nav_menu( 'social' ) ) : ?>
					<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'social',
								'menu_class'     => 'social-links-menu',
								'depth'          => 1,
								'link_before'    => '<span class="screen-reader-text">',
								'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
							) );
						?>
					</nav><!-- .social-navigation -->
				<?php endif;

				get_template_part( 'template-parts/footer/site', 'info' );
				?>
			</div><!-- .wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->

<div class="lightboxBG" onclick="closeContactLightbox();"></div>
<div class="lightbox imNew">
  <button class="closeBtn" onclick="closeContactLightbox();"><i class="fa fa-times"></i></button>
  <div class="wrap">
    <h2 style="text-align: center; display: block;" class="">Let Us Meet You!</h2>
    <?php echo do_shortcode('[contact-form-7 id="4" title="I\'m New"]'); ?>
  </div>
</div>
<div class="lightbox prayerRequest">
  <button class="closeBtn" onclick="closeContactLightbox();"><i class="fa fa-times"></i></button>
  <div class="wrap">
    <h2 style="text-align: center; display: block;" class="">Let Us Know How We Can Pray For You</h2>
    <?php echo do_shortcode('[contact-form-7 id="35" title="Prayer Request"]'); ?>
  </div>
</div>

<?php wp_footer(); ?>

</body>
</html>
