<?php
/*
* Template Name: Contact Us
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


<main role="main">
				<!-- Common styles
				================================================== -->
				<link rel="stylesheet" href="css/style.min.css" type="text/css">

				<!-- start section -->
				<section class="section section--no-pb">
					<div class="container">
						<div class="row">
							<div class="col-12">

								<!-- start company contacts -->
								<div class="company-contacts">
									<div class="__inner">
										<div class="row">
											<!-- start item -->
											<div class="col-12 col-sm-6 col-lg-3">
												<div class="__item">
													<div class="d-table">
														<div class="d-table-cell align-top">
															<i class="__ico fontello-location-outline"></i>
														</div>

														<div class="d-table-cell align-top">
															<h4 class="__title">
                                <?php echo get_theme_mod('rj_leo_bst_contact_us_location_label', 'Location'); ?>
                              </h4>

															<div>
                                <?php echo get_theme_mod('rj_leo_bst_contact_us_location', '5272 Lyngate Ct Burke,<br>VA 2015-1688'); ?>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-12 col-sm-6 col-lg-3">
												<div class="__item">
													<div class="d-table">
														<div class="d-table-cell align-top">
															<i class="__ico fontello-phone"></i>
														</div>

														<div class="d-table-cell align-top">
															<h4 class="__title">
                                <?php echo get_theme_mod('rj_leo_bst_contact_us_phone_label', 'Phone'); ?>  
                                
                              </h4>

															<div>
                                <?php echo get_theme_mod('rj_leo_bst_contact_us_phone', '+31 85 964 47 25'); ?>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-12 col-sm-6 col-lg-3">
												<div class="__item">
													<div class="d-table">
														<div class="d-table-cell align-top">
															<i class="__ico fontello-envelope"></i>
														</div>

														<div class="d-table-cell align-top">
															<h4 class="__title">
                                <?php echo get_theme_mod('rj_leo_bst_contact_us_email_label', 'Email'); ?>  
                              </h4>

															<div>
																<a href="mailto:<?php echo get_theme_mod('rj_leo_bst_contact_us_email', 'info@vendgo.co'); ?>">
                                  <?php echo get_theme_mod('rj_leo_bst_contact_us_email', 'info@vendgo.co'); ?>  
                                </a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- end item -->

											<!-- start item -->
											<div class="col-12 col-sm-6 col-lg-3">
												<div class="__item">
													<div class="d-table">
														<div class="d-table-cell align-top">
															<i class="__ico fontello-share"></i>
														</div>

														<div class="d-table-cell align-top">
															<h4 class="__title">
                              <?php echo get_theme_mod('rj_leo_bst_contact_us_social_label', 'Social'); ?>
                              
                            </h4>

															<!-- start social buttons -->
															<div class="s-btns s-btns--gray">
																<ul class="d-flex flex-row flex-wrap align-items-center">
																	<li><a class="f" href="<?php echo get_theme_mod('rj_leo_bst_contact_us_facebook_url', '#'); ?>" target="_blank"><i class="fontello-facebook"></i></a></li>
																	<li><a class="t" href="<?php echo get_theme_mod('rj_leo_bst_contact_us_twitter_url', '#'); ?>" target="_blank"><i class="fontello-twitter"></i></a></li>
																	<li><a class="y" href="<?php echo get_theme_mod('rj_leo_bst_contact_us_youtube_url', '#'); ?>" target="_blank"><i class="fontello-youtube-play"></i></a></li>
																	<li><a class="i" href="<?php echo get_theme_mod('rj_leo_bst_contact_us_instagram_url', '#'); ?>" target="_blank"><i class="fontello-instagram"></i></a></li>
																</ul>
															</div>
															<!-- end social buttons -->
														</div>
													</div>
												</div>
											</div>
											<!-- end item -->
										</div>
									</div>
								</div>
								<!-- end company contacts -->

							</div>
						</div>
					</div>
				</section>
				<!-- end section -->

				<!-- start section -->
				<!-- <section class="section section--no-pt section--no-pb"> -->
					<!-- this is demo key "AIzaSyBXQROV5YMCERGIIuwxrmaZbBl_Wm4Dy5U" -->
					<!-- <div class="g_map" data-api-key="AIzaSyBXQROV5YMCERGIIuwxrmaZbBl_Wm4Dy5U" data-longitude="44.958309" data-latitude="34.109925" data-marker="img/marker.png" style="min-height: 455px"></div> -->
				<!-- </section> -->
				<!-- end section -->

				<!-- start section -->
				<section class="section">
					<div class="container">
						<div class="row justify-content-lg-center">
							<div class="col-12 col-lg-10 col-xl-8">
								<div class="section-heading section-heading--center">
									<h2 class="__title">
                    <?php echo get_theme_mod('rj_leo_bst_contact_us_form_head', 'Have any Query ?'); ?>  
                  </h2>
								</div>

								<div class="spacer py-6"></div>

                <?php echo do_shortcode(get_theme_mod('rj_leo_bst_contact_us_form_shortcode', '[contact-form-7 id="3607e83" title="Contact Us"]')); ?>

							</div>
						</div>
					</div>
				</section>
				<!-- end section -->
			</main>



<?php
get_footer();
