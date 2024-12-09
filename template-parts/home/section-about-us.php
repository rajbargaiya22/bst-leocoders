<?php
/**
 * The template part for about us section
 *
 * @package rj-bst
 */
?>

<section class="section section--about section--no-pb" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/about_image_bg.png' ); ?>'); background-position: 150px 200px; background-repeat: no-repeat;">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-7">
				<div class="section-heading section-heading--left">
				<h5 class="__subtitle"><?php echo esc_html(get_theme_mod('rj_leo_bst_about_subtitle')); ?></h5>
				<h2 class="__title"><?php echo get_theme_mod('rj_leo_bst_about_title'); ?></h2>
				</div>

				<div class="spacer py-3"></div>

				<div class="content-container">
				<p><strong><?php echo wp_kses_post(get_theme_mod('rj_leo_bst_about_content1')); ?></strong></p>

				<p><strong style="display:block"><?php echo wp_kses_post(get_theme_mod('rj_leo_bst_about_content2')); ?></strong>
				<?php echo wp_kses_post(get_theme_mod('rj_leo_bst_about_content3')); ?>
				</p>
				<p><strong><?php echo wp_kses_post(get_theme_mod('rj_leo_bst_about_content4')); ?></strong></p>
				<p><?php echo wp_kses_post(get_theme_mod('rj_leo_bst_about_content5')); ?></p>
					<div class="spacer"></div>

					<p>
					<a class="custom-btn custom-btn--big custom-btn--s1" href="<?php echo esc_url(get_theme_mod('rj_leo_bst_about_button_url')); ?>">
                            <?php echo esc_html(get_theme_mod('rj_leo_bst_about_button_text')); ?>
                        </a>
					</p>

					<div class="spacer py-2"></div>

					<!-- start counter -->
					<div class="counter counter--s1">
						<div class="__inner">
							<div class="row">
								<!-- start item -->
								<div class="col-12 col-md-auto col-lg-6">
									<div class="__item">
										<div class="__content">
											<div class="__count js-count" data-from="0" data-to="<?php echo esc_html(get_theme_mod('rj_leo_bst_counter1_value', '2000')); ?>">0</div>

											<h4 class="__title"><?php echo esc_html(get_theme_mod('rj_leo_bst_counter_text1', 'Machines installed')); ?></h4>
										</div>
									</div>
								</div>
								<!-- end item -->

								<!-- start item -->
								<div class="col-12 col-md-auto col-lg-6">
									<div class="__item">
										<div class="__content">
											<div class="__count js-count" data-from="0" data-to="<?php echo esc_html(get_theme_mod('rj_leo_bst_counter2_value', '500')); ?>" data-after-text="+">0</div>

											<h4 class="__title"><?php echo esc_html(get_theme_mod('rj_leo_bst_counter_text2', 'Partners in the World')); ?></h4>
										</div>
									</div>
								</div>
								<!-- end item -->
							</div>
						</div>
					</div>
					<!-- end counter -->
				</div>
			</div>

			<div class="col-12 col-lg-5">
				<div class="spacer py-4 py-md-6 d-lg-none"></div>

				<div class="about-img text-right">
					<img class="lazy" width="719" height="741" 
						src="<?php echo esc_url(get_theme_mod('rj_leo_bst_about_us_image')); ?>" 
						data-src="<?php echo esc_url(get_theme_mod('rj_leo_bst_about_us_image')); ?>" 
						alt="About Us">
				</div>

			</div>
		</div>
	</div>
</section>