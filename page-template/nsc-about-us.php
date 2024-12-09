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
						
							
						<div class="section-heading">
							<h5 class="__subtitle">
								<?php echo get_theme_mod('rj_leo_bst_about_us_page_sec1_subhead'); ?>
							</h5>

							<h2 class="__title">
								<?php echo get_theme_mod('rj_leo_bst_about_us_page_sec1_title'); ?>
							</h2>
						</div>

						<div class="spacer py-4"></div>

					

						<div class="spacer py-4 d-lg-none"></div>

						<div class="content-container">
							<p>
								<?php echo get_theme_mod('rj_leo_bst_about_us_page_sec1_desc'); ?>
							</p>
						</div>


						<div class="row">
							<div class="col-12">
								<div class="spacer py-4 py-md-6 py-lg-8"></div>

								<!-- start about stats -->
								<div class="section-heading">
									<div class="spacer py-2 d-md-none"></div>

									<h2 class="__title">
										<?php echo get_theme_mod('rj_leo_bst_about_us_page_sec2_title'); ?>
									</h2>
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
												<?php echo get_theme_mod('rj_leo_bst_about_us_page_sec2_leftpara'.$i); ?>
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
												<?php echo get_theme_mod('rj_leo_bst_about_us_page_sec2_rightpara'.$i); ?>
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
