<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package garyt
 */

get_header(3); ?>



			<section class="error-404 not-found container">
				<header class="page-header">
						<div class="media story-container">

				</header><!-- .page-header -->

				<div class="page-content">

	<div class="media story-container">
		<h2><?php esc_html_e( 'Looks like you wandered away from the woodshop. Maybe try one of the links or search?', 'garyt' ); ?></h2>

		<?php get_search_form(); ?>
		    <h2 class="page-title"><?php esc_html_e( '', 'garyt' ); ?></h2>

				</div>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

<?php
get_footer();
