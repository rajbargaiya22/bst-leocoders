<?php
/*
* Template Name: NSC About Us
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
				<link rel="stylesheet" href="css/style.min.css" type="text/css">

				<!-- start section -->
				<section class="section">
					<div class="container">
						<div class="row">
							<div class="col-12 col-sm-8 col-md-7 col-lg-6">
								<div class="section-heading">
									<h5 class="__subtitle">
										<?php echo get_theme_mod('rj_leo_bst_about_us_page_sec1_subhead', 'About BST'); ?>
									</h5>

									<h2 class="__title">
										<?php echo get_theme_mod('rj_leo_bst_about_us_page_sec1_title', 'Where Innovation Meets Convenience'); ?>
									</h2>
								</div>

								<div class="spacer py-4"></div>
							</div>

							<div class="col-12 col-lg-6">

								<div class="spacer py-4 d-lg-none"></div>

								<div class="content-container">
									<p>
										<?php echo get_theme_mod('rj_leo_bst_about_us_page_sec1_desc', 'At Blue Sky Tree, we believe in reimagining the way people experience convenience. From our humble beginnings in 2010 with 30 vending machines, we’ve grown into a trusted leader in Singapore’s vending and robotics industry. Today, we manage hundreds of state-of-the-art vending solutions and collaborate with businesses to deliver smarter, more efficient experiences.'); ?>
									</p>
								</div>

							</div>
						</div>

						<div class="row">
							<div class="col-12">
								<div class="spacer py-4 py-md-6 py-lg-8"></div>

								<!-- start about stats -->
								<div class="about-stats">
									<div class="row align-items-end">
										<div class="col-12 col-md">
											<div class="__img-place">
												<img class="lazy" src="img/blank.gif" data-src="img/about_num.png" alt="demo" />
											</div>
										</div>

										<div class="col-12 col-md-auto">
											<div class="spacer py-2 d-md-none"></div>

											<div class="__txt-place">
												<?php echo get_theme_mod('rj_leo_bst_about_us_page_sec2_title', 'Our Promises'); ?>
											</div>
										</div>
									</div>
								</div>
								<!-- end about stats -->

								<div class="spacer py-4 py-md-6 py-lg-8"></div>
							</div>
						</div>

						<div class="row">
							<div class="col-12 col-lg-6">

								<div class="content-container">
										
									<?php
									$sec2_left_para = get_theme_mod('rj_leo_bst_about_us_page_sec2_leftpara_num', '5');
									for ($i=1; $i <= $sec2_left_para ; $i++) { ?>
										<p>
											<?php 
											if($i == 1){ echo "<strong>"; } ?>
												<?php echo get_theme_mod('rj_leo_bst_about_us_page_sec2_leftpara'.$i, "Para_$i"); ?>
											<?php  if($i == 1){  echo "</strong>"; } ?>
										</p>
								 	<?php	} ?>

								</div>
							</div>
							<div class="col-12 col-lg-6">

								<div class="content-container">
								<?php
									$sec2_right_para = get_theme_mod('rj_leo_bst_about_us_page_sec2_rightpara_num', '4');
									for ($i=1; $i <= $sec2_right_para ; $i++) { ?>
										<p>
											<?php 
											if($i == 1){ echo "<strong>"; } ?>
												<?php echo get_theme_mod('rj_leo_bst_about_us_page_sec2_rightpara'.$i, "Para_$i"); ?>
											<?php  if($i == 1){  echo "</strong>"; } ?>
										</p>
								 	<?php	} ?>
								</div>
							</div>
						</div>

					</div>
				</section>
				<!-- end section -->


				<?php get_template_part('template-parts/our-team'); ?>

				<?php get_template_part('template-parts/leo-timeline'); ?>

				<?php get_template_part('template-parts/home/section-testimonial'); ?>

			</main>
			<!-- end main -->




<?php get_footer();
