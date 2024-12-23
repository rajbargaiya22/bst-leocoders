<?php
/*
* Template parts to display logo
*
* @package rj-bst
*/

$show_aside = get_theme_mod('nsc_blog_site_content_aside', false);
if($show_aside == 1) {
  $flex = 'd-flex align-items-center gap-2';
}else {
  $flex = '';
} ?>

  <div class="nsc-logo-header">

 <div class="custom-container">
     <div class="">
     <?php if (has_custom_logo() && get_theme_mod('nsc_blog_site_logo', true) != 0) { ?>
       <div class="nsc-logo <?php echo esc_attr($flex); ?>">
         <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr(get_bloginfo( 'name' )); ?>">
           <?php
           $image_alt = get_bloginfo( 'name' );
           $custom_logo_id = get_theme_mod( 'custom_logo' );
           $logo_url = wp_get_attachment_image_src( $custom_logo_id , 'full' ); ?>
           <img src="<?php echo esc_url($logo_url[0]); ?>" alt="<?php echo esc_attr(($image_alt) ? $image_alt : get_the_title() ); ?>" title="<?php echo esc_attr(($image_alt) ? $image_alt : get_the_title() ); ?>" >
         </a>

         <div class="">
           <?php if (get_theme_mod('nsc_blog_site_title', false) != 0){ ?>
             <h1 class="mb-0">
               <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr(get_bloginfo( 'name' )); ?>">
                 <?php $site_title = get_bloginfo( 'name' );
                 echo $site_title; ?>
               </a>
             </h1>
           <?php } ?>

           <?php if (get_theme_mod('nsc_blog_site_description', false) != 0){ ?>
             <p class="mb-0">
                 <?php $site_desc = get_bloginfo( 'description' );
                 echo $site_desc;
                 ?>
             </p>
           <?php } ?>
         </div>
       </div>
     <?php }else { ?>
       <?php if (get_theme_mod('nsc_blog_site_title', true) != 0 ){ ?>
         <h1 class="mb-0">
           <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr(get_bloginfo( 'name' )); ?>">
             <?php $site_title = get_bloginfo( 'name' );
             echo $site_title;
             ?>
           </a>
         </h1>
       <?php } ?>

       <?php if (get_theme_mod('nsc_blog_site_description', true) != 0 ){ ?>
         <p class="mb-0">
             <?php $site_desc = get_bloginfo( 'description' );
             echo $site_desc;
             ?>
         </p>
       <?php } } ?>
   </div>


   <label for="nsc-theme-modes" class="d-flex align-items-center gap-2">
     <input type="checkbox" name="nsc-theme-mod" value="" id="nsc-theme-modes">
     <span class="nsc-circle"></span>
     <span class="light">Light Mode</span>
     <span class="dark">Dark Mode</span>
   </label>
 </div>
 </div>
