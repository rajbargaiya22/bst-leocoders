<?php
/*
* Template Name: NSC Homepage
*
*
* @package rj-bst
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header(); ?>
	<main id="nsc-primary">
		<div class="custom-container">
			<?php  $home_section = array('section-slider', 'section-about-us', 'section-keyfact', 'section-features', 'section-testimonial', 'section-youtube-video', 'section-partners', 'section-faq');

			for ($i=0; $i < count($home_section) ; $i++) {  
				get_template_part('template-parts/home/'.$home_section[$i]); 
			 } ?>		
		</div>
	</main>
<?php
get_footer();
