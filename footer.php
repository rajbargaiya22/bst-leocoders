<?php
/**
 * The template for displaying the footer.
 *
 * @package nsc- blog
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} 
	get_template_part('template-parts/section-common'); 
?>

	

	  <footer class="footer footer--s2">
	<div class="container">
		<div class="footer__line footer__line--first">
			<div class="row">
				<div class="col-12 col-md-4 col-lg-3">
					<div class="footer__item">
						<h4 style="font-weight: bold;">
							<a class="footer__logo site-logo text-white fw-bold" href="<?php echo esc_url(home_url());?>">
								<?php echo get_bloginfo('name'); ?>
							</a>
						</h4>
						<p>
							<?php echo esc_html(get_theme_mod('rj_leo_bst_footer_desc', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies vel nisi ac malesuada.')); ?>
						</p>
					</div>
				</div>

				<div class="col-12 col-md-4 col-lg-4">					
					<div class="row">
						<div class="col-12 col-md-6">
							<div class="footer__item">
								<h4 style="color:#fff">
									<?php echo esc_html(get_theme_mod('rj_leo_bst_footer_head2', 'Quick Links')); ?>
								</h4>
								<nav class="footer__navigation">
								<?php wp_nav_menu(
									array(
										'menu' => 'Primary Menu',
										'items_wrap' => '<ul id="%1$s" class="ps-0">%3$s</ul>',
										'theme_location' => 'primary-menu',
									)
								); ?>
								</nav>
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="footer__item">
								<h4 style="color:#fff"><?php echo esc_html(get_theme_mod('rj_leo_bst_footer_head3', 'Help')); ?></h4>
								<nav class="footer__navigation">
								<?php wp_nav_menu(
									array(
										'menu' => 'Help Menu',
										'items_wrap' => '<ul id="%1$s" class="ps-0">%3$s</ul>',
										'theme_location' => 'help-menu',
									)
								); ?>
								</nav>
							</div>
						</div>
					</div>
				</div>
			

				<div class="col-12 col-md-5 col-lg-3">
					<div class="footer__item">
						<h4 style="color:#fff"><?php echo esc_html(get_theme_mod('rj_leo_bst_footer_head4', 'Get In Touch')); ?></h4>
						<address class="footer__address">
							<p>
								<?php echo esc_html(get_theme_mod('rj_leo_bst_header_address_text', '3 Ang Mo Kio Street 62 #06-06 Singapore 569139'));?>
							</p>
							<p><a href="tel:<?php echo esc_attr(get_theme_mod('rj_leo_bst_header_phone_num', '+65 9171 7296'));?>"><?php echo esc_html(get_theme_mod('rj_leo_bst_header_phone_num', '+65 9171 7296'));?></a></p>
							<p><a href="mailto:<?php echo esc_attr(get_theme_mod('rj_leo_bst_header_email_add', 'blueskytree1@gmail.com'));?>">
								<?php echo esc_html(get_theme_mod('rj_leo_bst_header_email_add', 'blueskytree1@gmail.com'));?>
							</a>
						</p>
						</address>
					</div>
				</div>
				
				<div class="col-12 col-md-5 col-lg-2">
					<div class="footer__item">
					<h4 style="color:#fff"><?php echo esc_html(get_theme_mod('rj_leo_bst_footer_head5', 'Social Network')); ?></h4>
						<div class="s-btns s-btns--white">
						<?php $socail_icon_number = get_theme_mod('rj_leo_bst_header_social_icon_num', 4); ?>
							<ul class="d-flex flex-row flex-wrap align-items-center ps-0">
								<?php 
									$social_icons = array('fontello-facebook', 'fontello-twitter', 'fontello-youtube-play', 'fontello-instagram');
									$social_url = array('www.facebook.com', 'www.twitter.com', 'www.youtube.com', 'www.instagram.com' );
									for ($i=0; $i < $socail_icon_number; $i++) { ?>
									<li>
										<a class="f" href="<?php echo esc_url(get_theme_mod('rj_leo_bst_header_social_icon_url'.$i, $social_icons[$i])) ?>" target="_blank">
											<i class="<?php echo esc_attr(get_theme_mod('rj_leo_bst_header_social_icon'.$i, $social_icons[$i])) ?>"></i>
										</a>
									</li>		
								<?php } ?>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-12 text-center mt-4 border-top pt-2">
					<p class="__copy1 mb-0">
						Copyright © 2024 Blue Sky Tree Pte Ltd Singapore
					</p>
				</div>
			</div>
		</div>
	</div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<!-- <script src="<?php //echo get_template_directory_uri() . '/assets/js/leo-main.min.js' ?>"></script> -->

		<script>
			jQuery(document).ready(function($){

				$('#start-screen__slider').slick({
					autoplay: true,
					fade: true,
					speed: 1200,
					dots: true,
					arrows:false,
					appendDots: '#start-screen__slider-nav',
					customPaging: function (slider, i) {
						// Use custom dots (e.g., numbers or icons)
						return `<span class="slick-dot"></span>`;
					},
					responsive: [
						{
							breakpoint: 767,
							settings: {
								appendDots: '#start-screen__slider-nav'
							}
						}
					]
				});
			
				$('.review--slider1').slick({
					dots: true, 
					arrows: false,
					autoplay: true, 
					autoplaySpeed: 3000,
					infinite: true, 
					speed: 500, 
					slidesToShow: 1,
					slidesToScroll: 1, 
					appendDots: $('#slick-dots--container-0'), 
				});
				
				$('.product-slider').slick({
					dots: true, 
					autoplay: true, 
					speed: 1200,
					slidesToShow: 4,
					slidesToScroll: 2,
					appendDots: $('#slick-dots--container-2'),
					responsive: [
							{
								breakpoint: 575,
								settings:{
									slidesToShow: 2,
									slidesToScroll: 2
								}
							},
							{
								breakpoint: 767,
								settings:{
									slidesToShow: 3,
									slidesToScroll: 3
								}
							},
							{
								breakpoint: 991,
								settings:{
									slidesToShow: 4,
									slidesToScroll: 2
								}
							},
							{
								breakpoint: 1199,
								settings:{
									slidesToShow: 4,
									slidesToScroll: 2
								}
							}]
				});
				
			
				
					$('.brands-list').slick({
						dots: false, 
						arrows: false,
						autoplay: true, 
						autoplaySpeed: 3000,
						infinite: true, 
						speed: 500, 
						slidesToShow: 5,
						slidesToScroll: 1, 
						responsive: [
								{
									breakpoint: 767,
									settings: {
										appendDots: '#start-screen__slider-nav'
									}
								}
							]
					});


					$('.accordion-item').each(function () {
						$(this).click(function () {
							$('.accordion-item').removeClass('active');
							$('.accordion-content').css('display', 'none');

							$(this).addClass('active');
							$(this).find('.accordion-content').css('display', 'block');
						});
					});

				});


			

		</script>

		<?php do_action('nsc_blog_body_bottom');
		wp_footer(); ?>
	</body>
</html>
