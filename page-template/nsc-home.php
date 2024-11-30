<?php
/*
* Template Name: NSC Homepage
*
*
* @package nsc-blog
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header(); ?>
	<main id="nsc-primary">
		<div class="custom-container">
			<?php get_template_part('template-parts/home/leo-sec1'); ?>		
			<?php get_template_part('template-parts/home/leo-sec2'); ?>		
			<?php get_template_part('template-parts/home/leo-keyfact'); ?>		
			<?php get_template_part('template-parts/home/leo-sec3'); ?>		
			<?php get_template_part('template-parts/home/leo-sec4'); ?>		
			<?php get_template_part('template-parts/home/leo-sec5'); ?>		
			<?php get_template_part('template-parts/home/leo-sec6'); ?>	
			<?php get_template_part('template-parts/home/leo-sec7'); ?>	
		</div>
	</main>
<?php
get_footer();
