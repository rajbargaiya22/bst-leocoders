<?php
/**
 * The template part for category section
 *
 * @package rj-bst
 */
?>
<section id="nsc-home-category" class="nsc-home-category">

  <div class="d-flex align-items-center justify-content-between">
    <?php if (get_theme_mod('nsc_blog_category_heading') != ''){ ?>
      <h2 class="section-main-head">
        <?php echo esc_html(get_theme_mod('nsc_blog_category_heading')); ?>
      </h2>
    <?php } ?>

    <?php if (get_theme_mod('nsc_blog_category_see_more') != ''){ ?>
      <a href="javascript:void(0);" onclick="openCategoryPopup()">
        <?php echo esc_html(get_theme_mod('nsc_blog_category_see_more')); ?>
      </a>
    <?php } ?>
  </div>
  <?php
    $cats_args = array(
        'number'     => get_theme_mod('nsc_blog_category_cat_num'), // 10
        'orderby'    => 'name',  //get_theme_mod('nsc_blog_category_order_by'),
        'order'      => 'asc', //get_theme_mod('nsc_blog_category_order'), //
        'hide_empty' => true,
    );

    $categories = get_categories($cats_args); ?>

    <ul class="nav nav-pills" id="nsc-home-tab-container" role="tablist">
      <?php
     foreach ($categories as $key => $category){ ?>
        <li class="nav-item" role="presentation">
        <button
            class="nav-link <?php if($key == 0){ echo "active"; }?>"
            id="<?php echo strtolower(str_replace(" ", "-", $category->name)); ?>-tab"
            data-bs-toggle="tab"
            data-bs-target="#<?php echo strtolower(str_replace(" ", "-", $category->name)); ?>-tab-pane"
            type="button"
            role="tab"
            aria-controls="<?php echo strtolower(str_replace(" ", "-", $category->name)); ?>-tab-pane"
            aria-selected="<?php if($key == 0){ echo "true"; }else { echo "false"; } ?>">
          <?php echo esc_html($category->name); ?>
        </button>
        </li>
      <?php } ?>
  </ul>
<div class="tab-content" id="nsc-home-tab-containerContent">
  <?php foreach ($categories as $key => $category){
    $args = array(
      'post_type' => 'post',
      'post_status' => 'publish',
      'posts_per_page' => 6,
      'tax_query' => array(
        array(
            'taxonomy' => 'category',
            'field'    => 'slug',
            'terms'    => $category->slug,
        ),
      ),
    );

     $query = new WP_Query($args);
       if ( $query->have_posts() ) { ?>
         <div class="tab-pane fade <?php if($key == 0){ echo "show active"; }?> rj-bst-post-grid"
              id="<?php echo strtolower(str_replace(" ", "-", $category->name)); ?>-tab-pane"
              role="tabpanel"
              aria-labelledby="<?php echo strtolower(str_replace(" ", "-", $category->name)); ?>-tab"
              tabindex="0">
        <?php
        while ($query->have_posts()) : $query->the_post(); ?>
        <div class="post-container">
          <?php
          $image_id = get_post_thumbnail_id();
          $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
          $image_title = get_the_title($image_id); ?>

          <img src="<?php echo esc_url(get_the_post_thumbnail_url( get_the_ID(), 'medium' )); ?>" alt="<?php echo esc_attr(($image_alt) ? $image_alt : get_the_title() ); ?>" title="<?php echo esc_attr(($image_title) ? $image_title : get_the_title() ); ?>">
          <div class="">
              <?php
              $categories = get_the_category();
             if ( ! empty( $categories ) ) { ?>
               <a class="nsc-post-cat" href="<?php echo esc_attr( esc_url( get_category_link( $categories[0]->term_id ) ) ); ?>" title="<?php echo esc_attr( $categories[0]->name );  ?>">
                 <?php echo esc_html( $categories[0]->name );  ?>
               </a>
             <?php } ?>

             <h3 class="nsc-post-title mb-0">
               <a href="<?php echo get_the_permalink(); ?>" title="<?php echo esc_attr(get_the_title()); ?>">
                 <?php echo get_the_title(); ?>
               </a>
             </h3>
             <div class="nsc-post-para">
               <?php echo get_the_content(); ?>
             </div>

             <div class="d-flex align-items-center gap-2">
                 <div class="d-flex align-items-center gap-2">
                 <?php $avatar_html = get_avatar(get_the_author_meta('ID'));
                     $avatar_url = '';
                     if (!empty($avatar_html)) {
                       $dom = new DOMDocument;
                       $dom->loadHTML($avatar_html);

                       $img_tags = $dom->getElementsByTagName('img');

                       if ($img_tags->length > 0) {
                         $avatar_url = $img_tags->item(0)->getAttribute('src');
                       }
                     } ?>

                   <?php
                   if(get_theme_mod('nsc_blog_single_post_author_image', true) != '0'){
                      if (!empty($avatar_url)) : ?>
                       <img src="<?php echo esc_url($avatar_url); ?>" alt="<?php echo get_the_author(); ?>" class="nsc-author-image" title="<?php echo get_the_author(); ?>">
                     <?php else : ?>
                       <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/default-user.png'); ?>" alt="<?php echo get_the_author(); ?>" class="nsc-author-image"  title="<?php echo get_the_author(); ?>">
                     <?php endif;
                   } ?>

                     <?php if(get_theme_mod('nsc_blog_single_post_author_name', true) != '0'){ ?>
                       <p class="nsc-author-name mb-0"><?php echo get_the_author(); ?></p>
                     <?php } ?>

                     <p class="nsc-post-date mb-0"><?php echo get_the_date(); ?></p>
                 </div>
             </div>

             <a href="<?php echo get_the_permalink(); ?>" class="read-more-btn">
               <?php echo esc_html__('Read More', 'rj-bst'); ?>
               <svg width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path fill-rule="evenodd" clip-rule="evenodd" d="M0.5 5.05089C0.5 4.76592 0.731012 4.53491 1.01598 4.53491L13.4 4.53491C13.685 4.53491 13.916 4.76592 13.916 5.05089C13.916 5.33586 13.685 5.56687 13.4 5.56687L1.01598 5.56687C0.731012 5.56687 0.5 5.33586 0.5 5.05089Z" fill="url(#paint0_linear_268_2268)"/>
               <path fill-rule="evenodd" clip-rule="evenodd" d="M10.3175 0.526839C10.5364 0.344403 10.8618 0.373975 11.0442 0.59289L14.3007 4.50052C14.5665 4.81944 14.5665 5.2827 14.3007 5.60162L11.0442 9.50924C10.8618 9.72816 10.5364 9.75773 10.3175 9.5753C10.0986 9.39286 10.069 9.0675 10.2514 8.84858L13.4162 5.05107L10.2514 1.25355C10.069 1.03464 10.0986 0.709276 10.3175 0.526839Z" fill="url(#paint1_linear_268_2268)"/>
               <defs>
               <linearGradient id="paint0_linear_268_2268" x1="0.5" y1="5.05089" x2="13.916" y2="5.05089" gradientUnits="userSpaceOnUse">
               <stop stop-color="#FFD11A"/>
               <stop offset="1" stop-color="#DE772E"/>
               </linearGradient>
               <linearGradient id="paint1_linear_268_2268" x1="10.1318" y1="5.05107" x2="14.5" y2="5.05107" gradientUnits="userSpaceOnUse">
               <stop stop-color="#FFD11A"/>
               <stop offset="1" stop-color="#DE772E"/>
               </linearGradient>
               </defs>
               </svg>
             </a>

            </div>
        </div>
       <?php endwhile; ?>

  </div>


   <?php }else {
     echo "<h4>No posts found.</h4>";
   }
    wp_reset_query(); ?>

  <?php } ?>
</div>
<a href="<?php echo esc_attr( esc_url( get_category_link( $categories[0]->term_id ) ) ); ?>" class="nsc-common-btn mt-4">
  <?php echo esc_html(get_theme_mod('nsc_blog_category_view_more', 'View More')) ?>
</a>

</section>
