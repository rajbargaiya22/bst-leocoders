<?php
/**
 * The template part for testimonial section
 *
 * @package rj-bst
 */
?>
<section class="section section--testimonial">
	<div class="container">
		<div class="row justify-content-lg-center">
			<div class="col-12 col-md-auto col-lg-2">
				<div class="mb-7 mb-md-0">
					<i class="testimonial-ico" data-text="">“</i>
				</div>
			</div>

			<div class="col-12 col-md">
				<div class="section-heading section-heading--left">
					<h5 class="__subtitle">
						<?php echo esc_html(get_theme_mod('rj_leo_bst_testimonial_subtitle', 'Testimonials')); ?>
					</h5>
					<h2 class="__title">
						<?php echo get_theme_mod('rj_leo_bst_testimonial_title', 'People Say About <span> Blue Sky Tree</span>'); ?>
					</h2>
				</div>
			</div>

			<div class="col-12 col-lg-auto">
				<div id="slick-dots--container-0" class="mt-10 text-right"></div>
			</div>

			<div class="col-12 col-lg-8">
				<div class="spacer py-3 py-lg-4"></div>

					<?php $args = array(
						'post_type' => 'testimonial',
						'post_status' => 'publish',
						'posts_per_page' => get_theme_mod('rj_leo_bst_testimonials_number', '3'),
					);
					$query = new WP_Query($args);

					if ( $query->have_posts() ) { ?>
						<div class="review review--slider1 slick1">
							<?php while ($query->have_posts()) : $query->the_post();?>
								<div class="review__item">
									<p>
										<?php echo esc_html(get_theme_mod('rj_leo_bst_testimonial_1_text', 'Sturgeon medusafish tompot blenny burma danio loach catfish lanternfish wrasse goldeye whiptail gulper coffinfish Black pickerel hardhead catfish. Stoneroller minnow skipjack tuna. Black pickerel shrimpfish marine hatchetfish sillago dottyback spiny basslet.')); ?>
									</p>
									
									<div class="review__item__author-name h4">
										<?php echo esc_html(get_theme_mod('rj_leo_bst_testimonial_1_author', 'Sam Peters, Vending Corp LLC')); ?>
									</div>
								</div>
								<?php endwhile; ?>
							</div>
						<?php }else { ?>
						<h4> <?php echo esc_html_e('Please add the post to see this section', 'rj-bst'); ?> </h4>
					<?php }
					wp_reset_query(); ?>

				
			</div>
		</div>
	</div>
</section>