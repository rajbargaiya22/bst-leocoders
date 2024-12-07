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
					
				<h5 class="__subtitle"><?php echo esc_html(get_theme_mod('rj_leo_bst_testimonial_title', 'Testimonials')); ?></h5>
				<h2 class="__title"><?php echo get_theme_mod('rj_leo_bst_testimonial_content', 'People Say About <span> Blue Sky Tree</span>'); ?></h2>
				</div>
			</div>

			<div class="col-12 col-lg-auto">
				<div id="slick-dots--container-0" class="mt-10 text-right"></div>
			</div>

			<div class="col-12 col-lg-8">
				<div class="spacer py-3 py-lg-4"></div>

				<!-- start review -->
				<div class="review review--slider1 slick1">
						<!-- start item -->
						<div class="review__item">
							<div class="review__item">
								<p>
									<?php echo esc_html(get_theme_mod('rj_leo_bst_testimonial_1_text', '	Sturgeon medusafish tompot blenny burma danio loach catfish lanternfish wrasse goldeye whiptail gulper coffinfish Black pickerel hardhead catfish. Stoneroller minnow skipjack tuna. Black pickerel shrimpfish marine hatchetfish sillago dottyback spiny basslet.')); ?>
								</p>
								
								<div class="review__item__author-name">
									<?php echo esc_html(get_theme_mod('rj_leo_bst_testimonial_1_author', 'Sam Peters, Vending Corp LLC')); ?>
								</div>
                        	</div>
						</div>
						<!-- end item -->

						<!-- start item -->
						<div class="review__item">
						<div class="review__item">
                            <p><?php echo esc_html(get_theme_mod('rj_leo_bst_testimonial_1_text', '	2 Sturgeon medusafish tompot blenny burma danio loach catfish lanternfish wrasse goldeye whiptail gulper coffinfish Black pickerel hardhead catfish. Stoneroller minnow skipjack tuna. Black pickerel shrimpfish marine hatchetfish sillago dottyback spiny basslet.
')); ?></p>
                            <div class="review__item__author-name"><?php echo esc_html(get_theme_mod('rj_leo_bst_testimonial_1_author', 'Lauren Golf, Programmer')); ?>
                        	</div>
						</div>
						<!-- end item -->

						<!-- start item -->
						<div class="review__item">
							<p>
								<?php echo esc_html(get_theme_mod('rj_leo_bst_testimonial_1_text', '3 Sturgeon medusafish tompot blenny burma danio loach catfish lanternfish wrasse goldeye whiptail gulper coffinfish Black pickerel hardhead catfish. Stoneroller minnow skipjack tuna. Black pickerel shrimpfish marine hatchetfish sillago dottyback spiny basslet.')); ?>
							</p>
                            <div class="review__item__author-name">
								<?php echo esc_html(get_theme_mod('rj_leo_bst_testimonial_1_author', 'Lauren Golf, Programmer')); ?></div>
                        	</div>
							
						</div>
						<!-- end item -->
				</div>
				<!-- end review -->
			</div>
		</div>
	</div>
</section>