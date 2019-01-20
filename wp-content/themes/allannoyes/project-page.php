<?php

/* Template Name: ProjectPage */

	get_header();

	get_sidebar();

?>


<main>
	<?php
	    if ( have_posts() ) :
	        while ( have_posts() ) :
	            the_post();

				the_content();
	            //
	            // Post Content here
	            //
	        endwhile; // end while
	    endif; // end if
	?>
</main>

<?php get_footer(); ?>
