<?php
/**
 * The template part for common section
 *
 * @package rj-bst
 */
?>

<section class="section section--about section--no-pt common-section">
	<div class="container">
	
				<div class="section-heading section-heading--left">
                    <?php /*
                    <h5 class="__subtitle"><?php echo esc_html(get_theme_mod('rj_leo_bst_common_subtitle', 'Let’s Create Something Extraordinary')); ?></h5>
                    */ ?>
                    <h2 class="__title text-center text-white"><?php echo wp_kses_post(get_theme_mod('rj_leo_bst_common_title', 'Let’s Create Something Extraordinary')); ?></h2>
				</div>

				<div class="spacer py-3"></div>

                <p class="text-white">
                    <?php echo wp_kses_post(get_theme_mod('rj_leo_bst_common_description', 'Blue Sky Tree is ready to bring your vision to life with intelligent vending and automation solutions. Partner with us today and redefine convenience for your customers.')); ?>
                </p>
                <h3 class="text-white mb-0">
                    <?php echo wp_kses_post(get_theme_mod('rj_leo_bst_common_contact_head', 'Contact Us Now')); ?>
                </h3>
                <a href="tel:<?php echo esc_attr(get_theme_mod('rj_leo_bst_common_contact_no1', '+65 9070 7168')); ?>" class="contact-btn">
                    <?php echo wp_kses_post(get_theme_mod('rj_leo_bst_common_contact_no1', '+65 9070 7168')); ?>
                 |
                </a>
                <a href="tel:<?php echo esc_attr(get_theme_mod('rj_leo_bst_common_contact_no2', '+65 9040 1166')); ?>" class="contact-btn">
                    <?php echo wp_kses_post(get_theme_mod('rj_leo_bst_common_contact_no2', '+65 9040 1166')); ?>
                </a>
                <a href="mailto:<?php echo esc_attr(get_theme_mod('rj_leo_bst_common_contact_email', 'blueskytree1@gmail.com')); ?>" class="d-block contact-btn">
                    <?php echo wp_kses_post(get_theme_mod('rj_leo_bst_common_contact_email', 'blueskytree1@gmail.com')); ?>
                </a>
                
                <a class="custom-btn custom-btn--big custom-btn--s1 mt-3" href="<?php echo esc_url(get_theme_mod('rj_leo_bst_common_button_url', '#')); ?>">
                    <?php echo esc_html(get_theme_mod('rj_leo_bst_common_button_text', 'Get In Touch')); ?>
                </a>

			</div>

		</div>
	</div>
</section>