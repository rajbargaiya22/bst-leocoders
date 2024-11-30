<?php
/**
 * The template part for first section
 *
 * @package nsc-blog
 */
?>
<section id="latest-post">
  <div class="container latest-post">
    <?php $args = array(
      'post_type' => 'post',
      'post_status' => 'publish',
      'posts_per_page' => 4,
    );
     $query = new WP_Query($args);

     // echo "<pre class='text-white'>";
     // print_r($query);
     // echo "</pre>";

     if ( $query->have_posts() ) {
     while ($query->have_posts()) : $query->the_post();?>

     <div class="nsc-post-cotainer">
       <?php
       $image_id = get_post_thumbnail_id();
       $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
       $image_title = get_the_title($image_id); ?>

       <a href="<?php echo esc_url(get_the_permalink()); ?>" title="<?php echo esc_attr(($image_title) ? $image_title : get_the_title() ); ?>">
         <img class="nsc-latest-post-image" src="<?php echo esc_url(get_the_post_thumbnail_url( get_the_ID(), 'full' )); ?>"  alt="<?php echo esc_attr(($image_alt) ? $image_alt : get_the_title() ); ?>" title="<?php echo esc_attr(($image_title) ? $image_title : get_the_title() ); ?>">
       </a>
       <div class="nsc-action-button">
         <?php
         $post_id = get_the_ID();
         $cookie_name = 'liked_posts';
         $liked_posts = isset($_COOKIE[$cookie_name]) ? json_decode(stripslashes($_COOKIE[$cookie_name]), true) : array();


         if(get_theme_mod('nsc_blog_latest_posts_like_button', true) != '0'){
            if (in_array($post_id, $liked_posts, true)) {
                // User has already liked this post
                echo '<span class="already-liked">You liked this post!</span>';
            } else {
                echo '<button class="like-button" type="button" name="button" data-post-id="' . esc_attr($post_id) . '" aria-label="like '.esc_attr($post_id).'">
                            <i class="far fa-heart"></i>
                            <span class="like-count"> ' . get_post_meta($post_id, '_like_count', true) . '</span>
                        </button>';
            }
         }
         ?>

         <?php if(get_theme_mod('nsc_blog_latest_posts_comments_count', true) != '0'){ ?>
            <button type="button" name="button">
              <i class="fa-regular fa-comment-dots"></i>
              <?php $comments_count = wp_count_comments( $post->ID );
              echo esc_html($comments_count->approved, 'nsc-blog');
              ?>
            </button>
          <?php } ?>
       </div>

       <div class="nsc-post-content">
         <?php if(get_theme_mod('nsc_blog_latest_posts_cats', true) != '0'){
            $categories = get_the_category();
              if ( ! empty( $categories ) ) { ?>
                <a href="<?php echo esc_attr( esc_url( get_category_link( $categories[0]->term_id ) ) ); ?>" class="nsc-post-cat" title="<?php echo esc_attr( $categories[0]->name );  ?>">
                  <?php echo esc_html( $categories[0]->name );  ?>
                </a>
              <?php }
            } ?>

        <?php if(get_theme_mod('nsc_blog_latest_posts_title', true) != '0'){
          $headh1 = get_theme_mod('nsc_blog_site_title', true);
          $query->current_post;
          echo ($headh1 == 0 && $query->current_post == 0 ) ? '<h1 class="nsc-post-title mt-3">' : '<h3 class="nsc-post-title mt-3">' ?>
         <!-- <h3 class="nsc-post-title mt-3"> -->
            <a href="<?php echo get_the_permalink(); ?>" title="<?php echo esc_attr(get_the_title()); ?>">
              <?php echo esc_html(get_the_title()); ?>
            </a>
         <?php echo ($headh1 == 0 && $query->current_post == 0) ? '</h1>' : '</h3>' ?>
        <?php } ?>
       </div>
       <div class="nsc-post-overlay">
       </div>
     </div>

   <?php endwhile;
  }else { ?>
    <h4> <?php echo esc_html_e('Please add the post to see this section', 'nsc-blog'); ?> </h4>
  <?php }
   wp_reset_query(); ?>
 </div>
</section>
