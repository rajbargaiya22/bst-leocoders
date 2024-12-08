<?php
/*
* Template Name: Customers
*
*
* @package rj-bst
*/
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header(); 
echo nsc_blog_breadcrumb(); ?>

	<?php get_template_part('template-parts/home/section-partners'); ?>

    <div class="spacer pb-5 mb-5"></div>

<?php get_footer();
