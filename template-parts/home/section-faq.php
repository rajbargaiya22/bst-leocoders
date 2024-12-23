<?php
/**
 * The template part for people who trust section
 *
 * @package rj-bst
 */
?>

<section class="section">
    <div class="container">
        <div class="section-heading section-heading--center">
            <h5 class="__subtitle"><?php echo esc_html(get_theme_mod('rj_leo_bst_faq_subtitle', 'FAQs')); ?></h5>
            <h2 class="__title"><?php echo wp_kses_post(get_theme_mod('rj_leo_bst_faq_title', 'Frequent Ask Questions')); ?></h2>
        </div>

        <div class="spacer py-5"></div>

        <div class="content-container">
            <div class="accordion-container" data-type="accordion">
                <?php
                $faq_number = get_theme_mod( 'rj_leo_bst_faq_number', 5 );
                for ( $i = 1; $i <= $faq_number; $i++ ) :
                    $question = get_theme_mod( "rj_leo_bst_faq_question_$i" );
                    $answer = get_theme_mod( "rj_leo_bst_faq_answer_$i" );

                    if ( !empty( $question ) && !empty( $answer ) ) : ?>
                        <div class="accordion-item">
                            <div class="accordion-toggler">
                                <h4 class="accordion-title"><?php echo esc_html( $question ); ?></h4>
                                <i></i>
                            </div>

                            <article class="accordion-content">
                                <div class="accordion-content__inner">
                                    <p><?php echo esc_html( $answer ); ?></p>
                                </div>
                            </article>
                        </div>
                    <?php endif;
                endfor; ?>
            </div>
        </div>
    </div>
</section>
