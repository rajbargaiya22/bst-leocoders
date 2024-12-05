<?php
/**
 * The template part for the banner section
 *
 * @package rj-bst
 */

?>

<div id="start-screen" class="start-screen start-screen--style-2">
    <div id="start-screen__slider" class="start-screen__slider mb-0">
        <?php

        $headings = array(
                            'Vending Products <span>in all Offices and Hubs</span>',
                            'Vending Technology <span>in new Business Era</span>',
                            'Vending Products in Offices and Hubs',
                        );
        // $subtitle = array(
        //                     'Flagfin Atlantic saury, stonecat beachsalmon...',
        //                     '',
        //                     '',
        //                 );

        for ($i = 1; $i <= 3; $i++) :
            $bg = get_theme_mod('rj_bst_leo_slider_bg'.$i); 
            // $title = get_theme_mod('rj_bst_leo_slider_title'.$i); 
            $desc = get_theme_mod('rj_bst_leo_slider_desc'.$i); 
            ?>
            <div class="start-screen__slide start-screen__slide--<?php echo $i; ?> align-items-center text-center">
                <div class="__bg" style="background-image: url(<?php echo esc_url($bg); ?>);"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-8 col-xl-10">
                            <div class="__title text-white"><?php echo get_theme_mod('rj_bst_leo_slider_title'.$i, $headings[$i]); ?></div>
                            <div class="spacer py-2"></div>
                            <p class="text-white" style="margin: auto;max-width: 670px"><?php echo wp_kses_post($desc); ?></p>
                            <div class="spacer py-3"></div>
                            <p><a class="custom-btn custom-btn--big custom-btn--s2" href="#">Discover</a></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
    </div>

    <div class="start-screen__panel">
        <div class="d-md-table w-100">
            <div class="d-md-table-cell align-middle text-left pl-5">
                <div id="start-screen__slider-nav" class="start-screen__slider-nav start-screen__slider-nav--hor" dir="ltr">
                    <span id="start-screen__slider-count"></span>
                    <b></b>
                </div>
            </div>
            <div class="d-md-table-cell align-middle">
                <div class="video-block">
                    <a href="https://www.youtube.com/embed/1zG1iq9LZ2U" class="btn_play btn_play--dark" data-fancybox="video">
                        <span class="d-table">
                            <span class="d-table-cell align-middle"><i></i></span>
                            <span class="d-table-cell align-middle">Watch video</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great&display=swap" rel="stylesheet">
</div>
