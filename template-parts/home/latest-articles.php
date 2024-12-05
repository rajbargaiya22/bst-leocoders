<?php
/**
 * The template part for latest article section
 *
 * @package rj-bst
 */

  $sidebar = get_theme_mod('nsc_blog_latest_articles_sidebar', true);

  if ($sidebar == 0){
    $col8 = 'col-md-12';
    $postcol = 'col-md-4';
  }else {
    $col8 = 'col-md-8';
    $postcol = 'col-md-6';
  }
?>
<section id="latest-article" class="latest-article">
  <div class="container">
    <div class="row">
      <div class="<?php echo esc_attr($col8); ?>">
        <?php if(get_theme_mod('nsc_blog_latest_articles_main_heading', true) != false){ ?>
          <h2 class="section-main-head">
              <?php echo esc_html(get_theme_mod('nsc_blog_latest_articles_main_heading')); ?>
          </h2>
        <?php } ?>

        <?php if(get_theme_mod('nsc_blog_latest_articles_description', true) != false){ ?>
          <p class="section-description">
              <?php echo esc_html(get_theme_mod('nsc_blog_latest_articles_description')); ?>
          </p>
        <?php } ?>
        <div class="row">
        <?php

        $count_posts = wp_count_posts();

        if ( $count_posts ) {
          $published_posts = $count_posts->publish;
          switch ($published_posts) {
            case ($published_posts >= 8 ):
              $offet = 4;
              break;
              case ($published_posts == 7 ):
                $offet = 3;
              break;
              case ($published_posts == 6 ):
                $offet = 2;
              break;
              case ($published_posts == 5 ):
                $offet = 1;
              break;
            default:
                $offet = 0;
          }
        }

        $args = array(
          'post_type' => 'post',
          'post_status' => 'publish',
          'offset' => ($offet) ? $offet : 0,
        );

         $query = new WP_Query($args);
         if ( $query->have_posts() ) {
         while ($query->have_posts()) : $query->the_post(); ?>


         <div class="<?php echo esc_attr($postcol); ?> mb-4">
           <div class="nsc-latest-article-container">
             <?php
             $image_id = get_post_thumbnail_id();
             $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
             $image_title = get_the_title($image_id);
              ?>
              <a href="<?php echo get_the_permalink(); ?>" title="<?php echo esc_attr(($image_alt) ? $image_alt : get_the_title() ); ?>" title="<?php echo esc_attr(($image_title) ? $image_title : get_the_title() ); ?>">
                <img src="<?php echo esc_url(get_the_post_thumbnail_url( get_the_ID(), 'medium' )); ?>" alt="<?php echo esc_attr(($image_alt) ? $image_alt : get_the_title() ); ?>" title="<?php echo esc_attr(($image_title) ? $image_title : get_the_title() ); ?>">
              </a>

            <?php if(
                      (get_theme_mod('nsc_blog_latest_articles_category', true) !='0') ||
                      (get_theme_mod('nsc_blog_latest_articles_title', true) !='0') ||
                      (get_theme_mod('nsc_blog_latest_articles_author_image', true) !='0') ||
                      (get_theme_mod('nsc_blog_latest_articles_author_name', true) !='0') ||
                      (get_theme_mod('nsc_blog_latest_articles_post_date', true) !='0')){
                        $padding = "px-2 py-3";
                      }else {
                        $padding = "";
                      } ?>
             <div class="d-flex flex-column align-items-start gap-2 <?php echo esc_attr($padding); ?>">
               <?php if (get_theme_mod('nsc_blog_latest_articles_category', true) !='0') {
                $categories = get_the_category();
               if ( ! empty( $categories ) ) { ?>
                 <a class="nsc-post-cat py-2" href="<?php echo esc_attr( esc_url( get_category_link( $categories[0]->term_id ) ) ); ?>" title="<?php echo esc_attr( $categories[0]->name );  ?>">
                   <?php echo esc_html( $categories[0]->name );  ?>
                 </a>
               <?php } } ?>


               <?php if (get_theme_mod('nsc_blog_latest_articles_title', true) !='0') { ?>
                 <h3 class="nsc-post-title mb-0">
                   <a href="<?php echo get_the_permalink(); ?>" title="<?php echo esc_attr(get_the_title()); ?>">
                     <?php echo esc_html(get_the_title()); ?>
                   </a>
                 </h3>
               <?php } ?>

                 <div class="d-flex align-items-center gap-2 nsc-post-meta ">
                   <?php
                   $avatar_html = get_avatar(get_the_author_meta('ID'));
                   $avatar_url = '';

                   if (!empty($avatar_html)) {
                       $dom = new DOMDocument;
                       $dom->loadHTML($avatar_html);

                       $img_tags = $dom->getElementsByTagName('img');

                       if ($img_tags->length > 0) {
                           $avatar_url = $img_tags->item(0)->getAttribute('src');
                       }
                   }

                  if (get_theme_mod('nsc_blog_latest_articles_author_image', true) !='0') { ?>
                      <?php if (!empty($avatar_url)) : ?>
                        <img src="<?php echo esc_url($avatar_url); ?>" alt="<?php echo esc_attr(get_the_author()); ?>" title="<?php echo esc_attr(get_the_author()); ?>">
                      <?php else : ?>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/default-user.png'); ?>" alt="<?php echo esc_attr(get_the_author()); ?>" title="<?php echo esc_attr(get_the_author()); ?>">
                      <?php endif; ?>
                   <?php } ?>

                   <div class="">
                     <?php if (get_theme_mod('nsc_blog_latest_articles_author_name', true) !='0') { ?>
                       <p class="nsc-author mb-0"><?php echo get_the_author(); ?></p>
                     <?php } ?>
                     <?php if (get_theme_mod('nsc_blog_latest_articles_post_date', true) !='0') { ?>
                       <p class="nsc-post-date mb-0"><?php echo get_the_date(); ?></p>
                     <?php } ?>
                   </div>
               </div>
             </div>
              <?php //  } ?>
           </div>
         </div>
       <?php endwhile;
      }else {
        echo "<h4>No posts found.</h4>";
      }
       wp_reset_query(); ?>
       </div>
      </div>
      <?php if (get_theme_mod('nsc_blog_latest_articles_sidebar', true) !='0') { ?>
        <aside class="col-md-4 home-page-sidebar">
          <?php dynamic_sidebar( 'Home Page' ); ?>
        </aside>
      <?php } ?>
    </div>

 </div>
</section>
