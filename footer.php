<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package garyt
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
	
    <div class="container">
     <div class="row footer--body">
        <?php if( dynamic_sidebar('sidebar-2') ) : else : endif; ?>
		
        <div class="logo-2"></div>
     </div>
   </div>
  <hr></hr>
  <h4 class="copyright">© Copyright Gary Thomson 2015</h4>


        <!--
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'garyt' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'garyt' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'garyt' ), 'garyt', '<a href="http://www.yellowtractor.co.uk" rel="designer">Paul Thomson</a>' ); ?>
		</div> -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
