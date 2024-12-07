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
				<h2 class="__title"><?php echo wp_kses_post(get_theme_mod('rj_leo_bst_about_title')); ?></h2>
				</div>

				<div class="spacer py-3"></div>

				<div class="content-container">
				<p><strong><?php echo wp_kses_post(get_theme_mod('rj_leo_bst_about_content1', 'At Blue Sky Tree, we are redefining the vending industry with cutting-edge robotics and AI-powered solutions tailored to meet the evolving needs of businesses in Singapore. From our humble beginnings in 2010 with 30 M&M vending machines, we’ve expanded our reach, now managing over 350 advanced vending units and operating three cafes nationwide. Our commitment to innovation has made us a trusted partner for leading brands, delivering convenience, efficiency, and seamless experiences.')); ?></strong></p>

				<p><strong style="display:block"><?php echo wp_kses_post(get_theme_mod('rj_leo_bst_about_content2', 'Our Expertise:')); ?></strong>
				<?php echo wp_kses_post(get_theme_mod('rj_leo_bst_about_content3', 'For over a decade, Blue Sky Tree has been at the forefront of the F&B and vending industry. We are an authorized distributor for Bicom Asia’s top-tier hot food vending machines and have successfully partnered with brands like Haagen-Dazs, Chef-In-Box, and BreadTalk. Our projects span from setting up vending cafés in corporate offices to deploying smart lockers and AI robots in public spaces. With a global network of partners and stakeholders across Asia, China, Europe, and the United States, we bring a world of expertise to your doorstep.')); ?>
				</p>
				<p><strong><?php echo wp_kses_post(get_theme_mod('rj_leo_bst_about_content4', 'Our dedicated team boasts extensive experience in vending machine technology and Food and Beverage (F&B) automation. We pride ourselves on delivering exceptional, round-the-clock service, ensuring that you provide a premier experience for your clients, no matter the time of day.')); ?></strong></p>
				<p><?php echo wp_kses_post(get_theme_mod('rj_leo_bst_about_content5', 'Why Choose Blue Sky Tree?')); ?></p>
					<div class="spacer"></div>

					<p>
					<a class="custom-btn custom-btn--big custom-btn--s1" href="<?php echo esc_url(get_theme_mod('rj_leo_bst_about_button_url', '#')); ?>">
                            <?php echo esc_html(get_theme_mod('rj_leo_bst_about_button_text', 'More About')); ?>
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
						src="<?php echo esc_url(get_theme_mod('rj_leo_bst_about_us_image', get_template_directory_uri() . '/assets/images/about_us_img.png')); ?>" 
						data-src="<?php echo esc_url(get_theme_mod('rj_leo_bst_about_us_image', get_template_directory_uri() . '/assets/images/about_us_img.png')); ?>" 
						alt="About Us">
				</div>

			</div>
		</div>
	</div>
</section>