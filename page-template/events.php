<?php
/*
* Template Name: NSC Events1
*
*
* @package rj-bst
*/
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header(); ?>

			<!-- start hero -->
			<div
				id="hero"
				class="hero jarallax"
				data-speed="0.6"
				data-img-position="50% 48%"
				style="background-image: url(img/hero_img/1.jpg);background-position: 15% center;background-color: #2d69b9">

				<div class="hero__inner">
					<div class="container">
						<div class="row">
							<div class="col-11 col-sm-12">
								<h4 class="hero__subtitle">VendGo</h4>
								<h1 class="hero__title">Gallery Masonry</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end hero -->

			<!-- start main -->
			<main role="main">
				<!-- Common styles
				================================================== -->
				<link rel="stylesheet" href="css/style.min.css" type="text/css">

				<!-- start section -->
				 
				<section class="section">
					<div class="container">
						<h2>
							Upcoming Events
						</h2>
					</div>

					<div class="events-grid " id="event-container">
					<?php 
						$args = array(
							'post_type'      => 'event',
							'post_status'    => 'publish',
							'posts_per_page' => 8, // Initial posts per page
							'paged'          => 1,
						);

						$query = new WP_Query($args);

						if ($query->have_posts()) {
							$i = 1; // Initialize outside the loop
							while ($query->have_posts()) {
								$query->the_post();
								
								// Get image information
								$image_id = get_post_thumbnail_id();
								$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
								$image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
								?>

								<div class="js-isotope__item1 category-<?php echo esc_attr($i); ?>">
									<div class="__item" data-x="1" data-y="1">
										<figure class="__image">
											<img 
												class="lazy1" 
												src="<?php echo esc_url($image_url); ?>" 
												data-src="<?php echo esc_url($image_url); ?>" 
												alt="<?php echo esc_attr($image_alt ? $image_alt : get_the_title()); ?>" 
												title="<?php echo esc_attr($image_alt ? $image_alt : get_the_title()); ?>" 
											/>
										</figure>

										<div class="__content">
											<div class="row">
												<div class="col">
													<div class="h4 __title"><?php echo esc_html(get_the_title()); ?></div>
												</div>

												<div class="col-auto">
													<a class="__link" href="<?php echo esc_url($image_url); ?>" data-fancybox="gallery-masonry">
														<i class="fontello-resize"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<?php 
								$i++;
							} ?>

							
						<?php } else { ?>
							<h4><?php esc_html_e('Please add posts to see this section', 'rj-bst'); ?></h4>
						<?php } 

						wp_reset_postdata(); // Correct function to reset query
						?>

					</div>
					<button id="load-more" data-total-posts="8">More image</button>
				</section>

				<!-- end section -->
				<section class="section">
					<div class="container">
						<h2>
							Past Events
						</h2>
					</div>
			</section>
			</main>
			<!-- end main -->
				
<?php get_footer();
