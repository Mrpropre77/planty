<?php
/**
 * Template Name: template accueil
 */

get_header();
?>

<main id="site-content">

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content-cover' );
		}
	}

	?>
<img src="http://localhost:8888/planty/wp-content/uploads/2023/10/16_cans-removebg-preview.png" alt="16_cans">
</main><!-- #site-content -->

<?php
get_footer();