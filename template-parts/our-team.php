<?php
/**
 * The template part for our team section
 *
 * @package rj-bst
 */
?>

<section class="section section--no-pb section--bg-img jarallax" data-speed="0.3" data-img-position="50% 60%" style="background-image: url(img/bg_2.jpg);background-color: #f7f7f7;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading section-heading--center">
                    <h5 class="__subtitle">Our family</h5>

                    <h2 class="__title">VendGo <span>Dream Team</span></h2>

                    <p>
                        Flagfin Atlantic saury, stonecat beachsalmon, silver dollar South American Lungfish. Reef triggerfish dogteeth
                    </p>
                </div>

                <div class="spacer py-5"></div>
            </div>

            <div class="col-12">
                <!-- start team -->
                <div class="team">
                    <div class="__inner">
                        <div class="row">

                             <?php $args = array(
                            'post_type' => 'teams',
                            'post_status' => 'publish',
                            'posts_per_page' => 4,
                            );
                            $query = new WP_Query($args);
                            if ( $query->have_posts() ) {
                            while ($query->have_posts()) : $query->the_post();?>

                              <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="__item">
                                    <figure class="__image">
                                        <img class="lazy1" src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" data-src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="demo" />
                                    </figure>

                                    <div class="__content">
                                        <div class="__position"><?php echo get_the_title(); ?></div>

                                        <h4 class="__name"><?php echo get_post_meta($post->ID, 'teams_designation', true); ?></h4>

                                        <?php /*
                                        <p>
                                            <?php echo get_the_content(); ?>
                                        </p>
                                        */ ?>

                                        <!-- start social buttons -->
                                        <div class="s-btns s-btns--gray">
                                            <ul class="d-flex flex-row flex-wrap justify-content-center align-items-center">
                                                <?php if(get_post_meta($post->ID, 'teams_facebook', true) != ''){ ?>
                                                    <li><a class="f" href="<?php echo get_post_meta($post->ID, 'teams_facebook', true); ?>"><i class="fontello-facebook"></i></a></li>
                                                <?php } ?>
                                                <?php if(get_post_meta($post->ID, 'teams_twitter', true) != ''){ ?>
                                                    <li><a class="t" href="<?php echo get_post_meta($post->ID, 'teams_twitter', true); ?>"><i class="fontello-twitter"></i></a></li>
                                                <?php } ?>
                                                <?php if(get_post_meta($post->ID, 'teams_youtube', true) != ''){ ?>
                                                    <li><a class="y" href="<?php echo get_post_meta($post->ID, 'teams_youtube', true); ?>"><i class="fontello-youtube-play"></i></a></li>
                                                <?php } ?>
                                                <?php if(get_post_meta($post->ID, 'teams_instagram', true) != ''){ ?>
                                                    <li><a class="i" href="<?php echo get_post_meta($post->ID, 'teams_instagram', true); ?>"><i class="fontello-instagram"></i></a></li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                        <!-- end social buttons -->
                                    </div>
                                </div>
                            </div>

                            <?php endwhile;
                                }else { ?>
                                    <h4> <?php echo esc_html_e('Please add the post to see this section', 'rj-bst'); ?> </h4>
                                <?php }
                            wp_reset_query(); ?>
                        </div>
                    </div>
                </div>
                <!-- end team -->
            </div>
        </div>
    </div>

    <div class="shape">
        <svg xmlns="http://www.w3.org/2000/svg" width="1920" height="200" viewBox="0 0 1920 400" preserveAspectRatio="none" style="min-height: 180px">
            <path fill="#fff" fill-rule="evenodd" d="M-3-3h1925v403H-3z" style="mix-blend-mode:screen"/>
        </svg>
    </div>
</section>

