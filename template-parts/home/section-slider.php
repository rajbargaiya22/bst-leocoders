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
        $slider_num = get_theme_mod('rj_leo_bst_slider_number', '3');
        
        for ($i = 1; $i <= $slider_num; $i++) :
            $bg = get_theme_mod('rj_leo_bst_slider_bg'.$i); 
            ?>
            <div class="start-screen__slide start-screen__slide--<?php echo $i; ?> align-items-center text-center">
                <div class="__bg" style="background-image: url(<?php echo esc_url($bg); ?>);"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-8 col-xl-10">
                            <?php if(get_theme_mod('rj_leo_bst_slider_title'.$i) != ''){ ?>
                                <div class="__title text-white">
                                    <?php echo get_theme_mod('rj_leo_bst_slider_title'.$i, "Heading".$i); ?>
                                </div>
                            <?php } ?>
                            <div class="spacer py-2"></div>

                            <?php if(get_theme_mod('rj_leo_bst_slider_desc'.$i) != ''){ ?>
                                <p class="text-white" style="margin: auto;max-width: 670px">
                                    <?php echo get_theme_mod('rj_leo_bst_slider_desc'.$i, "Description".$i); ?>
                                </p>
                            <?php } ?>
                            <div class="spacer py-3"></div>

                            <p>
                                <?php if(get_theme_mod('rj_leo_bst_slider_btn_text'.$i) != ''){ ?>
                                    <a class="custom-btn custom-btn--big custom-btn--s2" href="<?php echo get_theme_mod('rj_leo_bst_slider_btn_url'.$i, "Discover".$i); ?>">
                                        <?php echo get_theme_mod('rj_leo_bst_slider_btn_text'.$i, "Discover".$i); ?>
                                    </a>
                                <?php } ?>
                            </p>
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
                    <a href="<?php echo get_theme_mod('rj_leo_bst_slider_video_link', 'https://www.youtube.com/embed/1zG1iq9LZ2U'); ?>" class="btn_play btn_play--dark" data-fancybox="video" target="_blank">
                        <span class="d-table">
                            <span class="d-table-cell align-middle"><i></i></span>
                            <span class="d-table-cell align-middle">
                                <?php echo get_theme_mod('rj_leo_bst_slider_video_text'.$i, "Watch video"); ?>
                            </span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great&display=swap" rel="stylesheet">
</div>
