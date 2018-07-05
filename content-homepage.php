<?php
/**
 * The template used for displaying page content in template-homepage.php
 *
 * @package storefront
 */

?>


<?php
$featured_image = get_the_post_thumbnail_url( get_the_ID(), 'thumbnail' );
?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="<?php storefront_homepage_content_styles(); ?>" data-featured-image="<?php echo $featured_image; ?>">
	<div class="col-full">
		<script type="text/javascript">
			$(".dropdown-menu ").css("display","block");

		</script> 
		<div class="top-home"> 
			<div class="col-md-10 col-md-offset-2 col-xs-12">
				<div class="col-md-8 col-xs-12"> 
					<div id="slider">
						<?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow(); } ?>
					</div>
				</div>
				<div class="col-md-4 col-xs-12">
					<?php dynamic_sidebar( 'homebanner-1' ); ?>
				</div>

			</div>
		</div>
		<?php
		/**
		 * Functions hooked in to storefront_page add_action
		 *
		 * @hooked storefront_homepage_header      - 10
		 * @hooked storefront_page_content         - 20
		 */
		do_action( 'storefront_homepage' );
				?>
	</div>
</div><!-- #post-## -->

