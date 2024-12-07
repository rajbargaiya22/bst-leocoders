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
								<h1 class="hero__title">About Company</h1>
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
						<div class="row">
							<div class="col-12 col-sm-8 col-md-7 col-lg-4">
								<div class="section-heading">
									<h5 class="__subtitle">About VendGo</h5>

									<h2 class="__title">VendGo Machines <span>in&nbsp;Our Business</span></h2>
								</div>

								<div class="spacer py-4"></div>

								<!-- start video block -->
								<div class="video-block">
									<a href="https://www.youtube.com/embed/1zG1iq9LZ2U" class="btn_play btn_play--dark" data-fancybox="video">
										<span class="d-table">
											<span class="d-table-cell align-middle"><i></i></span>
											<span class="d-table-cell align-middle">Watch video</span>
										</span>
									</a>
								</div>
								<!-- end video block -->
							</div>

							<div class="col-12 col-lg-8">

								<div class="spacer py-4 d-lg-none"></div>

								<div class="content-container">
									<p>
										<strong>Zebra tilapia ocean perch ocean sunfish bichir. Monkfish eel soapfish sabertooth fish whiptail gulper long-finned char hussar.</strong> Pacific hake yellowfin pike mud cat sand goby, mahseer round whitefish. Platyfish eelpout, blue danio Alaska blackfish dhufish sheepshead minnow warty angler ghost fish bamboo shark
									</p>

									<p>
										Flagfin Atlantic saury, stonecat beachsalmon, silver dollar South American Lungfish. Reef triggerfish dogteeth tetra barreleye springfish chubsucker Pacific hake sea devil New Zealand smelt grunt Redfin perch rock beauty snake mudhead: boafish rock bass pompano dolphinfish. Pineconefish ribbonbearer climbing perch tenpounder emperor bream, labyrinth fish half-gill four-eyed fish Atlantic silverside Gianttail mud catfish albacore featherback loach goby leatherjacket shortnose chimaera. 
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

											<div class="__txt-place">Machines<br> installed</div>
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
									<p>
										Flagfin Atlantic saury, stonecat beachsalmon, silver dollar South American Lungfish. Reef triggerfish dogteeth tetra barreleye springfish chubsucker Pacific hake sea devil New Zealand smelt grunt Redfin perch rock beauty snake mudhead: boafish rock bass pompano dolphinfish. Pineconefish ribbonbearer climbing perch tenpounder emperor bream, labyrinth fish half-gill four-eyed fish Atlantic silverside Gianttail mud catfish albacore featherback loach goby leatherjacket shortnose chimaera. 
									</p>

									<p>
										Tarwhine piranha ground shark smoothtongue labyrinth fish smooth dogfish eel snubnose parasitic eel. Tripod fish bala shark, parasitic catfish sleeper, tommy ruff tripletail three-toothed puffer. Queen parrotfish saury wobbegong hoki hagfish hamlet slickhead sandperch topminnow; Bombay duck. Dojo loach trench Indian mul; sábalo goosefish, chubsucker Pacific herring. Worm eel mustard eel grunion herring smelt garpike poolfish, cookie-cutter shark discus, ricefish? Skilfish, "Antarctic cod, Owens pupfish; roosterfish treefish croaker kahawai sweeper!"
									</p>

									<!-- start counter -->
									<div class="counter counter--s1">
										<div class="__inner">
											<div class="row">
												<!-- start item -->
												<div class="col-12 col-md-auto">
													<div class="__item">
														<div class="__content">
															<div class="__count js-count" data-from="0" data-to="10000">0</div>

															<h4 class="__title">Happy Clients</h4>
														</div>
													</div>
												</div>
												<!-- end item -->

												<!-- start item -->
												<div class="col-12 col-md-auto">
													<div class="__item">
														<div class="__content">
															<div class="__count js-count" data-from="0" data-to="500" data-after-text="+">0</div>

															<h4 class="__title">Partners in the World</h4>
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

							<div class="col-12 col-lg-6">
								<div class="spacer py-4 d-lg-none"></div>

								<div class="about-img text-right">
									<img class="lazy" width="719" height="741" src="img/blank.gif" data-src="img/about_img.png" alt="demo">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-12">

								<div class="spacer py-9"></div>

								<!-- start brands list -->
								<?php get_template_part('template-parts/home/section-partners');  ?>
								<!-- end brands list -->

							</div>
						</div>
					</div>
				</section>
				<!-- end section -->

				<!-- start section -->
				<?php get_template_part('template-parts/our-team'); ?>
				<!-- end section -->

				<?php get_template_part('template-parts/home/section-testimonial'); ?>


				<!-- start section -->
				<section class="section section--no-pt section--no-pb">
					<div class="container">
						<div class="row align-items-end no-gutters">
							<div class="col">
								<div class="section-heading section-heading--left">
									<h5 class="__subtitle">Instagramm</h5>

									<h2 class="__title"><span># VendGo</span></h2>
								</div>
							</div>

							<div class="col-auto">
								<div class="h2"><i class="fontello-instagram"></i></div>
							</div>
						</div>

						<div class="spacer py-5"></div>
					</div>

				</section>
				<!-- end section -->
			</main>
			<!-- end main -->




<?php get_footer();
