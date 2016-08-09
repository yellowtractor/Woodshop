<?php
/**
 * Template Name: front
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
get_header(hero); ?>


<div id="primary" class="content-area">
    <div class="wrap-promo">
     <h2 class="wrap--title">Hand Crafted. Made to Fit.</h2>
	  <div class="media container">
		<div class="row">
		<div class="col col--12-of-12"><img src="http://www.garythomson.co.uk/wp-content/themes/garyt/assets/img/alcoves.jpg" alt="alcoves" /></div>
		</div>
	 </div>
    </div>
	<div class="wrap-library">
	  <h2 class="wrap--title">Featured Example.</h2>
		<div class=" media container">
		  <div class="row">
			<div class="col col--6-of-12">
			   <h3 class="media--title">Breakfront Library Bookcase.</h3>
			    <p class="media--text">People don't care how much we know, until they know how much we care.</p>


			</div>
			<div class="col col--6-of-12">
			<div class="flex-video"><iframe src="https://player.vimeo.com/video/132042419?title=0&amp;byline=0&amp;portrait=0" width="300" height="150" frameborder="0"></iframe></div>
			</div>
		  </div>

		   <hr />

		    <h3 class="media--title media--title-c">Oak Breakfront Bookcase.</h3>
		   <div class="row">
			<div class="col col--12-of-12"><img src="http://www.garythomson.co.uk/wp-content/themes/garyt/assets/img/bookcase-library.jpg" alt="bookcase library" /></div>
		   </div>
		</div>
	</div>
	<div class="wrap-info">
	  <h2 class="wrap--title">How we work.</h2>
		<div class="media container">
		  <div class="row">
		    <div class="col col--6-of-12"><img src="http://www.garythomson.co.uk/wp-content/themes/garyt/assets/img/plans.jpg" alt="bookcase library" /></div>
		      <div class="col col--6-of-12">
		       <div class="media--text">
		           <ul>
		             <li>All designed bespoke made to fit your space
		              and your needs.</li>
		             <li>Made to measure for less than you think.</li>
		             <li>Made locally, here in the north east by quality trades men.</li>
		           </ul>
		              <a class="media--more" href="how">More on how we work &gt;</a>

		       </div>
		     </div>
		   </div>
		  </div>
	  </div>

   <div class="wrap-latest">
      <h2 class="wrap--title">Latest.</h2>
     <div class="container">



      <?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', 'page' );
			endwhile; // End of the loop.
			?>

  </div>
  </div>


	<div class="callout-2">
	  <div class="container">
	   <div class="row">
	     <div class="col col--12-of-12">
	      <a class="button button-purple" href="enquiries">enquiries<span class="button--arrow"> &gt;</span></a>
	    </div>
	  </div>
      </div>
   </div>

</div>


<?php
get_footer();
