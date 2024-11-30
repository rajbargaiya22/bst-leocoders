<?php
/**
 * The template part for people who trust section
 *
 * @package nsc-blog
 */
?>

<section class="section section--no-pb">
    <div class="container">
        <div class="section-heading section-heading--center">
            <h5 class="__subtitle"><?php echo esc_html(get_theme_mod('rj_bst_leo_brand_logos_text', 'Partners')); ?></h5>
            <h2 class="__title"><?php echo wp_kses_post(get_theme_mod('rj_bst_leo_brand_logos_text1', 'People Who Trust Us')); ?></h2>
        </div>
        <div class="spacer py-5"></div>
        <div class="brands-list brands-list--slider">
            <?php 
            $total_logos = get_theme_mod('rj_bst_leo_brand_logo_count', 5); 
            for ($i = 1; $i <= $total_logos; $i++) {
                $brand_logo = get_theme_mod("rj_bst_leo_brand_logo_$i");
                if ($brand_logo): 
            ?>
                <div class="__item">
                    <figure class="__image">
                        <img src="<?php echo esc_url($brand_logo); ?>" alt="Brand Logo <?php echo $i; ?>" />
                    </figure>
                </div>
            <?php 
                endif; 
            } 
            ?>
        </div>
    </div>
</section>