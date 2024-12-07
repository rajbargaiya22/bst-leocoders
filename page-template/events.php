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
						<div class="row">
							<div class="col-12">

								<!-- start gallery filter -->
								<ul class="gallery-filter js-isotope-sort" data-target="gallery-grid-1">
									<li><a class="selected" data-cat="*" href="#">All</a></li>
									<li><a data-cat="category-1" href="#">Snack</a></li>
									<li><a data-cat="category-2" href="#">Coffee</a></li>
									<li><a data-cat="category-3" href="#">Combo</a></li>
								</ul>
								<!-- end gallery filter -->

							</div>
						</div>
					</div>

					<!-- start gallery -->
					<div id="gallery-grid-1" class="gallery gallery--grid">
						<div class="row no-gutters js-isotope"
							data-isotope-options='{
								"itemSelector": ".js-isotope__item",
								"transitionDuration": "0.8s",
								"percentPosition": true,
								"masonry": { "columnWidth": ".js-isotope__sizer" }
							}'>

							<div class="col-12 col-sm-1  js-isotope__sizer"></div>

							<!-- start item -->
							<div class="col-12 col-sm-6 col-lg-4 col-xl-3  js-isotope__item  category-2">
								<div class="__item" data-x="1" data-y="1">
									<figure class="__image">
										<img class="lazy" src="img/blank.gif" data-src="img/gallery_img/1.jpg" alt="demo" />
									</figure>

									<div class="__content">
										<div class="row">
											<div class="col">
												<div class="h4 __title">Combo in Bars</div>
											</div>

											<div class="col-auto">
												<a class="__link" href="img/gallery_img/1.jpg" data-fancybox="gallery-masonry">
													<i class="fontello-resize"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- end item -->

							<!-- start item -->
							<div class="col-12 col-sm-6 col-lg-4 col-xl-3  js-isotope__item  category-1">
								<div class="__item" data-x="1" data-y="1">
									<figure class="__image">
										<img class="lazy" src="img/blank.gif" data-src="img/gallery_img/2.jpg" alt="demo" />
									</figure>

									<div class="__content">
										<div class="row">
											<div class="col">
												<div class="h4 __title">Snack Markets</div>
											</div>

											<div class="col-auto">
												<a class="__link" href="img/gallery_img/2.jpg" data-fancybox="gallery-masonry">
													<i class="fontello-resize"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- end item -->

							<!-- start item -->
							<div class="col-12 col-sm-6 col-lg-4 col-xl-6  js-isotope__item  category-3">
								<div class="__item" data-x="1" data-y="1">
									<figure class="__image">
										<img class="lazy" src="img/blank.gif" data-src="img/gallery_img/3.jpg" alt="demo" />
									</figure>

									<div class="__content">
										<div class="row">
											<div class="col">
												<div class="h4 __title">Beverage Machine</div>
											</div>

											<div class="col-auto">
												<a class="__link" href="img/gallery_img/3.jpg" data-fancybox="gallery-masonry">
													<i class="fontello-resize"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- end item -->

							<!-- start item -->
							<div class="col-12 col-sm-6 col-lg-4 col-xl-3  js-isotope__item  category-1">
								<div class="__item" data-x="1" data-y="1">
									<figure class="__image">
										<img class="lazy" src="img/blank.gif" data-src="img/gallery_img/4.jpg" alt="demo" />
									</figure>

									<div class="__content">
										<div class="row">
											<div class="col">
												<div class="h4 __title">Shop and Markets</div>
											</div>

											<div class="col-auto">
												<a class="__link" href="img/gallery_img/4.jpg" data-fancybox="gallery-masonry">
													<i class="fontello-resize"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- end item -->

							<!-- start item -->
							<div class="col-12 col-md-4 col-xl-3  js-isotope__item  category-2">
								<div class="__item" data-x="1" data-y="1">
									<figure class="__image">
										<img class="lazy" src="img/blank.gif" data-src="img/gallery_img/5.jpg" alt="demo" />
									</figure>

									<div class="__content">
										<div class="row">
											<div class="col">
												<div class="h4 __title">Toys</div>
											</div>

											<div class="col-auto">
												<a class="__link" href="img/gallery_img/5.jpg" data-fancybox="gallery-masonry">
													<i class="fontello-resize"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- end item -->

							<!-- start item -->
							<div class="col-12 col-md-8 col-xl-6  js-isotope__item  category-3">
								<div class="__item" data-x="2" data-y="1">
									<figure class="__image">
										<img class="lazy" src="img/blank.gif" data-src="img/gallery_img/6.jpg" alt="demo" />
									</figure>

									<div class="__content">
										<div class="row">
											<div class="col">
												<div class="h4 __title">Water Machine</div>
											</div>

											<div class="col-auto">
												<a class="__link" href="img/gallery_img/6.jpg" data-fancybox="gallery-masonry">
													<i class="fontello-resize"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- end item -->

							<!-- start item -->
							<div class="col-12 col-sm-6 col-lg-4 col-xl-3  js-isotope__item  category-1">
								<div class="__item" data-x="1" data-y="1">
									<figure class="__image">
										<img class="lazy" src="img/blank.gif" data-src="img/gallery_img/7.jpg" alt="demo" />
									</figure>

									<div class="__content">
										<div class="row">
											<div class="col">
												<div class="h4 __title">Supermarkets</div>
											</div>

											<div class="col-auto">
												<a class="__link" href="img/gallery_img/7.jpg" data-fancybox="gallery-masonry">
													<i class="fontello-resize"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- end item -->

							<!-- start item -->
							<div class="col-12 col-sm-6 col-lg-4 col-xl-3  js-isotope__item  category-2">
								<div class="__item" data-x="1" data-y="1">
									<figure class="__image">
										<img class="lazy" src="img/blank.gif" data-src="img/gallery_img/8.jpg" alt="demo" />
									</figure>

									<div class="__content">
										<div class="row">
											<div class="col">
												<div class="h4 __title">Vending Business</div>
											</div>

											<div class="col-auto">
												<a class="__link" href="img/gallery_img/8.jpg" data-fancybox="gallery-masonry">
													<i class="fontello-resize"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- end item -->
						</div>
					</div>
					<!-- end gallery -->

					<div class="container">
						<div class="row">
							<div class="col-12 text-center">

								<a class="custom-btn custom-btn--big custom-btn--s1" href="#">More Images</a>

							</div>
						</div>
					</div>
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
