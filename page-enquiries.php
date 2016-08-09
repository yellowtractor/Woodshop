<?php
/**
 * Template Name: enquiries
 *
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package garyt
 */
get_header(enquiries); ?>


	<div id="primary" class="content-area">
			<div class="wrap-l">
  <div class="wrap-r"></div>
    <section class="split container">
      <div class="row">
          <div class="col col--6-of-12">
             <div class="designs">


               <img src="http://www.garythomson.co.uk/wp-content/themes/garyt/assets/img/designs.png" alt="Alcove designs">
             </div>
        </div>




          <div class="enquiries col col--6-of-12">

            <div class="card">

            <?php
      while ( have_posts() ) : the_post();
        get_template_part( 'template-parts/content', 'page' );
      endwhile; // End of the loop.
      ?>


              
            </div>
           </div>


        </div>
  </section><!--container-->

</div><!--wrap enquiries-->


	</div><!-- #primary -->

<?php
get_footer();
