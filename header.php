<?php
/**
 * The header for NSC Blog.
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rj-bst
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?><!DOCTYPE html>
<?php do_action('nsc_blog_html'); ?>
<html <?php language_attributes(); ?>>
<head>
<?php do_action('nsc_blog_head_top'); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="description" content="<?php echo esc_attr(get_bloginfo( 'description' )) ?>">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

<!-- <meta http-equiv="refresh" content="2"> -->
<?php wp_head(); ?>
<?php do_action('nsc_blog_head_bottom'); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action('nsc_blog_body_top'); ?>
<?php wp_body_open(); ?>

<header id="top-bar" class="top-bar top-bar--s2" data-nav-fixed="true" data-nav-anchor="false">
	<div class="top-bar__line-menu    compensate-for-scrollbar">
		<div class="top-bar__side-menu-button js-side-menu-toggler">
			<span></span>
		</div>

		<?php $custom_logo_id = get_theme_mod('custom_logo');
			$logo = wp_get_attachment_url($custom_logo_id);

			if (has_custom_logo()) {
				echo '<a href=" ' . esc_url(home_url()) . '" class="top-bar__logo site-logo">
					<img src="' . esc_url($logo) . '" alt="' . get_bloginfo('name') . '" title="'. get_bloginfo('name') . '" width="155" height="40">
					</a>';
			} else { ?>
				<h1>
					<a href="<?php echo esc_url(home_url()); ?>">
						<?php echo get_bloginfo('name'); ?>
					</a>
				</h1>
			<?php } ?>

		<a id="top-bar__navigation-toggler" class="top-bar__navigation-toggler" href="javascript:void(0);">
			<span></span>
		</a>

		<div class="top-bar__collapse">
			<div>

			<?php wp_nav_menu(
				array(
					'menu' => 'Primary Menu',
					'container_id' => 'top-bar__navigation',
					'menu_class' => 'top-bar__navigation',
					'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'theme_location' => 'primary-menu',
				)
			); ?>

			<div class="top-bar__address">
				<ul class="contact-info">
					<li>
						
						<div class="__label">
							<?php echo esc_html(get_theme_mod('rj_leo_bst_header_address_head', 'Address'));?>
						</div>
						<p>
							<?php echo esc_html(get_theme_mod('rj_leo_bst_header_address_text', '3 Ang Mo Kio Street 62 #06-06 Singapore 569139'));?>
						</p>
					</li>

					<li>
						<div class="__label"><?php echo esc_html(get_theme_mod('rj_leo_bst_header_phone_head', 'Phone'));?> </div>
						<p>
							<a href="tel: <?php echo esc_attr(get_theme_mod('rj_leo_bst_header_phone_num', '+65 9171 7296'));?>">
								<?php echo esc_html(get_theme_mod('rj_leo_bst_header_phone_num', '+65 9171 7296'));?>
							</a>
						</p>
					</li>

					<li>
					<div class="__label"><?php echo esc_html(get_theme_mod('rj_leo_bst_header_social_head', 'Social'));?> </div>

					<?php $socail_icon_number = get_theme_mod('rj_leo_bst_header_social_icon_num', 4); 
						$social_icons = array('fontello-facebook', 'fontello-twitter', 'fontello-youtube-play', 'fontello-instagram');
						$social_url = array('www.facebook.com', 'www.twitter.com', 'www.youtube.com', 'www.instagram.com' );
					?>

						<div class="s-btns s-btns--gray">
							<ul class="d-flex flex-row flex-wrap align-items-center">
								<?php
								

								for ($i=0; $i < $socail_icon_number ; $i++) { ?>
									<li>
										<a class="f" href="<?php echo esc_url(get_theme_mod('rj_leo_bst_header_social_icon_url'.$i, $social_icons[$i])) ?>" target="_blank">
											<i class="<?php echo esc_attr(get_theme_mod('rj_leo_bst_header_social_icon'.$i, $social_icons[$i])) ?>"></i>
										</a>
									</li>		
								<?php } ?>
								<!-- <li><a class="f" href="#"><i class="fontello-facebook"></i></a></li>
								<li><a class="t" href="#"><i class="fontello-twitter"></i></a></li>
								<li><a class="y" href="#"><i class="fontello-youtube-play"></i></a></li>
								<li><a class="i" href="#"><i class="fontello-instagram"></i></a></li> -->
							</ul>
						</div>
						<!-- end social buttons -->
					</li>
				</ul>
			</div>

				<div class="top-bar__action">
					<a class="custom-btn" href="<?php echo esc_url(get_theme_mod('rj_leo_bst_header_btn_url', '#')); ?>">
						<?php echo esc_html(get_theme_mod('rj_leo_bst_header_btn_text', 'Get in Touch')); ?>
					</a>

					<a class="custom-btn custom-btn--big custom-btn--s2" href="<?php echo esc_url(get_theme_mod('rj_leo_bst_header_btn_url', '#')); ?>">
						<?php echo esc_html(get_theme_mod('rj_leo_bst_header_btn_text', 'Get in Touch')); ?>
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="top-bar__line-contacts">
		<div class="container-fluid">
			<div class="row align-items-center justify-content-lg-between">
				<div class="col-auto">
					<div class="top-bar__contacts">
						<ul>
							<li>
							<?php echo esc_html(get_theme_mod('rj_leo_bst_header_address_text', '3 Ang Mo Kio Street 62 #06-06 Singapore 569139'));?>
								
							</li>

							<li>
								<a href="tel: <?php echo esc_attr(get_theme_mod('rj_leo_bst_header_phone_num', '+65 9171 7296'));?>">
									<?php echo esc_html(get_theme_mod('rj_leo_bst_header_phone_num', '+65 9171 7296'));?>
								</a>
							</li>

							<li>
								<a href="mailto:<?php echo esc_attr(get_theme_mod('rj_leo_bst_header_email_add', 'blueskytree1@gmail.com'));?>">
									<?php echo esc_html(get_theme_mod('rj_leo_bst_header_email_add', 'blueskytree1@gmail.com'));?>
								</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="col-auto">
					<div class="row">
						<div class="col-auto">
							<div class="top-bar__socials">
								<!-- start social buttons -->
								<div class="s-btns s-btns--gray">
									<ul class="d-flex flex-row flex-wrap justify-content-center align-items-center">
									<?php $socail_icon_number = get_theme_mod('rj_leo_bst_header_social_icon_num', 4);  ?>
										<?php for ($i=0; $i < $socail_icon_number; $i++) { ?>
											<li>
											<a class="f" href="<?php echo esc_url(get_theme_mod('rj_leo_bst_header_social_icon_url'.$i, $social_icons[$i])) ?>" target="_blank">
											<i class="<?php echo esc_attr(get_theme_mod('rj_leo_bst_header_social_icon'.$i, $social_icons[$i])) ?>"></i>
										</a>
											</li>		
										<?php } ?>
										<!-- <li><a class="f" href="https://www.facebook.com/BlueSkyTree1" target=""><i class="fontello-facebook"></i></a></li>
										<li><a class="t" href="#"><i class="fontello-twitter"></i></a></li>
										<li><a class="y" href="#"><i class="fontello-youtube-play"></i></a></li>
										<li><a class="i" href="#"><i class="fontello-instagram"></i></a></li> -->
									</ul>
								</div>
								<!-- end social buttons -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>

<?php
/*
if (get_theme_mod('nsc_blog_header_settings', true) !='0'){
	get_template_part('template-parts/nsc-theme-settings');
} */ ?>
