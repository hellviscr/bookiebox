<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage bookiebox
 * @since bookiebox 0.1
 */
?>

	</div><!-- #main -->


</div><!-- #page -->
<footer id="colophon" role="contentinfo">
	<div id="innercolophon">
		<div id="site-generator">
			<?php do_action( 'bookiebox_credits' ); ?>
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'Bookiebox' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'bookiebox' ); ?>" rel="generator"><?php printf( __( 'Powered by %s', 'bookiebox' ), 'WordPress' ); ?></a>
		</div>
	</div>
</footer><!-- #colophon -->
<?php wp_footer(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.carousel.min.js"></script> 
<script type="text/javascript">
	$(function(){
		$("div.carrousel").carousel({ loop: true });
	});
</script>
</body>
</html>