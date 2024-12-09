<?php
/**
 * The template part for BST timeline
 *
 * @package rj-bst
 */
?>
<section class="section section--no-pb">
    <div class="container">
        <div class="section-heading section-heading--center">
            <h5 class="__subtitle"><?php echo esc_html(get_theme_mod('rj_leo_bst_timeline_subtitle', 'Timeline')); ?></h5>
            <h2 class="__title"><?php echo wp_kses_post(get_theme_mod('rj_leo_bst_timeline_title', 'Milestones Worth Celebrating')); ?></h2>
        </div>

        <div class="spacer py-5"></div>

        <div class="leo-timeline">
            <?php $timeline_number = get_theme_mod('rj_leo_bst_timeline_number', 18 ); 
                for ($i=0; $i < $timeline_number ; $i++) {  ?>
                    <div>
                        <h3>
                            <?php echo esc_html(get_theme_mod('rj_leo_bst_timeline_year'.$i)); ?>
                        </h3>
                        <p> 
                            <?php echo esc_html(get_theme_mod('rj_leo_bst_timeline_desc'.$i)); ?>
                        </p>
                    </div>
                <?php } ?>

                <span class="before"></span>
                <span class="after"></span>
        </div>

        
    </div>
</section>
