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
get_header(); 
echo nsc_blog_breadcrumb();
?>

			<!-- start main -->
			<main role="main">
				<!-- Common styles
				================================================== -->
				<link rel="stylesheet" href="css/style.min.css" type="text/css">

				<!-- start section -->
				 
				<section class="section section--no-pb">
					<div class="container">
						<div class="section-heading section-heading--left mb-4">
							<h2 class="__title">Upcoming Events</h2>
							<p>Stay connected and be part of the excitement at our upcoming events</p>
						</div>
					</div>

					<div class="events-grid " id="event-container">
					<?php 
						$args = array(
							'post_type'      => 'event',
							'post_status'    => 'future',
							'posts_per_page' => 8,
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
					<button id="load-more" data-total-posts="8" class="custom-btn custom-btn--big custom-btn--s1 mt-5 mx-auto d-block">More image</button>
				</section>

				<!-- end section -->
				
							
				<section class="section">
					<div class="container">
						<div class="section-heading section-heading--left mb-4">
							<h2 class="__title">Past Events</h2>
							<p>Take a look at some of the highlights from our journey:</p>
						</div>
					</div>

					<div class="events-grid " id="event-container">
					<?php 
						$args = array(
							'post_type'      => 'event',
							'post_status'    => 'publish',
							'posts_per_page' => 8,
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
					<button id="load-more" data-total-posts="8" class="custom-btn custom-btn--big custom-btn--s1 mt-5 mx-auto d-block">More image</button>
				</section>

			</main>
			<!-- end main -->
				
<?php get_footer();
