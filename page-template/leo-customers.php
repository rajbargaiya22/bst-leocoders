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

<section class="section section--about section--no-pb" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/about_image_bg.png' ); ?>'); background-position: 150px 200px; background-repeat: no-repeat;">
	<div class="container">
		<div class="section-heading section-heading--left">
			<h5 class="__subtitle">Our Customers</h5>
			<h2 class="__title">Discover Convenience, Anytime, Anywhere</h2>
		</div>

		<div class="content-container">
			<p>At Blue Sky Tree, we’re proud to bring innovation and convenience to communities across Singapore. From busy office parks to bustling shopping malls, our vending machines are strategically placed to serve you wherever you are</p>

			<p>Explore our interactive map to find a Blue Sky Tree vending machine near you and discover the wide variety of products we offer.</p>

			<h3>Have a Location in Mind?</h3>
			<p>Interested in bringing a Blue Sky Tree vending machine to your property? Let’s collaborate to provide your customers with the ultimate convenience.</p>
		</div> 
	</div> 
</section>


    <div class="spacer pb-5 mb-5"></div>

<?php get_footer();
