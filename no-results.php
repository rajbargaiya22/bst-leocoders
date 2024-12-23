<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * @package rj-bst
 */
?>

<section class=" py-3 py-lg-5">
  <h2 class="entry-title"><?php echo esc_html(get_theme_mod('nsc_blog_no_results_page_title',__('Nothing Found','rj-bst')));?></h2>

<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
	<p><?php printf( esc_html__( 'Ready to publish your first post? Get started here.', 'rj-bst' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
	<?php elseif ( is_search() ) : ?>
	<p><?php echo esc_html(get_theme_mod('nsc_blog_no_results_page_content',__('Sorry, but nothing matched your search terms. Please try again with some different keywords.','rj-bst')));?></p>
  <button type="button" class="header-search" data-bs-toggle="modal" data-bs-target="#nsc-header-search-popup">
  	<?php esc_html_e( 'Click here for search', 'rj-bst' ); ?>
    <span class="screen-reader-text">
      <?php esc_html_e( 'Click here for search', 'rj-bst' ); ?>
    </span>
	</button>

	<?php // get_search_form(); ?>
	<?php else : ?>
	<p><?php esc_html_e( 'Dont worry&hellip it happens to the best of us.', 'rj-bst' ); ?></p><br />
	<div class="more-btn">
		<a href="<?php echo esc_url(home_url() ); ?>" title="<?php esc_attr_e( 'Back to Home Page','rj-bst' );?>">
      <?php esc_html_e( 'Back to Home Page', 'rj-bst' ); ?>
      <span class="screen-reader-text">
        <?php esc_html_e( 'Back to Home Page','rj-bst' );?>
      </span>
    </a>
	</div>
</section>
<?php endif; ?>
