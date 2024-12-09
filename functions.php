<?php
/**
 * NSC Blog functions and definitions.
 *
 *
 * @package rj-bst
 */

function nsc_blog_enqueue_scripts() {
	wp_enqueue_style( 'nsc-style', get_stylesheet_uri());
	wp_enqueue_style( 'nsc-fontawesome', get_template_directory_uri() . '/assets/css/fontawesome.min.css');
	wp_enqueue_style( 'bootstrap', get_template_directory_uri(). '/assets/css/bootstrap.css' );
	wp_enqueue_style( 'nsc-slick-slider', get_template_directory_uri(). '/assets/css/slick-theme.css' );
	wp_enqueue_style( 'nsc-owl-carousel', get_template_directory_uri(). '/assets/css/owl.carousel.css' );
	wp_enqueue_style( 'header-footer', get_template_directory_uri(). '/assets/css/header-footer.css' );

	wp_enqueue_script('leo-device-js', get_template_directory_uri() . '/assets/js/device.min.js', array('jquery'), null, false);
	wp_enqueue_script('nsc-custom-js', get_template_directory_uri() . '/assets/js/nsc-custom.js', array('jquery'), null, true);


    wp_localize_script('nsc-custom-js', 'load_more_params', array(
        'ajax_url' => admin_url('admin-ajax.php'),
    ));
	
	 if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	 	wp_enqueue_script( 'comment-reply' );
 	}

}
add_action( 'wp_enqueue_scripts', 'nsc_blog_enqueue_scripts' );

if ( !function_exists( 'nsc_blog_theme_setup' )) {
  function nsc_blog_theme_setup(){

		load_theme_textdomain('rj-bst', get_template_directory() . "/languages" );

    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support('html5', array( 'navigation-widgets', 'search-form', 'gallery', 'caption', 'style', 'script', 'comment-list', 'search-form', 'comment-form', ) );
    // add_theme_support( 'post-formats', array( 'gallery', 'image', 'link', 'quote', 'video', 'audio', 'status', 'aside', ) );

    add_theme_support(
  				'custom-logo',
  				array(
  					'width'       => 180,
  					'height'      => 60,
  					'flex-width'  => true,
  					'flex-height' => true,
  				)
  			);

    add_theme_support( 'customize-selective-refresh-widgets' );
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'custom-header' );
		add_theme_support( 'custom-background', array(
		'default-color' => '#111827'
		) );
		add_theme_support( 'align-wide' );

		add_editor_style( array( 'css/nsc-editor-style.css' ) );

		register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'rj-bst' ),
		'topbar' => __( "Topbar Menu", 'rj-bst' ),
		'help-menu' => __( "Topbar Menu", 'rj-bst' ),
		) );

	}
}
add_action( 'after_setup_theme', 'nsc_blog_theme_setup' );

require get_template_directory() . '/inc/widgets/widgets-area.php';
require get_template_directory() . '/inc/widgets/posts-tags.php';
require get_template_directory() . '/inc/widgets/social-icons.php';
require get_template_directory() . '/inc/widgets/posts-categories.php';
require get_template_directory() . '/inc/widgets/popular-posts.php';
require get_template_directory() . '/inc/widgets/tab.php';
require get_template_directory() . '/inc/widgets/latest-posts.php';
// require get_template_directory() . '/inc/posts-category-image.php';
// require get_template_directory() . '/inc/nsc-block-patterns/nsc-block-pattern-register.php';

//  customizer
function nsc_blog_customizer_sanitize_choices( $input, $setting ) {
    global $wp_customize;
    $control = $wp_customize->get_control( $setting->id );
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

if ( ! function_exists( 'nsc_blog_toggle_sanitization' ) ) {
	function nsc_blog_toggle_sanitization( $input ) {
		if ( true === $input ) {
			return 1;
		} else {
			return 0;
		}
	}
}

//  reading time
function nsc_blog_calculate_reading_time($content) {
    $word_count = str_word_count(strip_tags($content));
    $reading_time_minutes = ceil($word_count / 200);
    return $reading_time_minutes;
}
//  post reading count
function nsc_blog_increase_reading_count() {
    if (is_single()) {
      $post_id = get_the_ID();
      $cookie_name = 'nsc_blog_read_' . $post_id;
      $current_time = time();

      // Check if the cookie exists
      if (isset($_COOKIE[$cookie_name])) {
          $last_read_time = intval($_COOKIE[$cookie_name]);
          // Check if the last read time is within the last 60 minutes
          if (($current_time - $last_read_time) < 3600) {
              return; // Do not increase the count
          }
      }
      // Update the reading count
      $current_count = get_post_meta($post_id, 'reading_count', true);
      $new_count = $current_count ? intval($current_count) + 1 : 1;
      update_post_meta($post_id, 'reading_count', $new_count);

      // Set the cookie with the current timestamp, valid for 1 hour
      setcookie($cookie_name, $current_time, $current_time + 3600, '/');
    }
}
add_action('wp', 'nsc_blog_increase_reading_count');

add_action('wp_ajax_nsc_blog_increase_reading_count', 'nsc_blog_increase_reading_count');
add_action('wp_ajax_nopriv_nsc_blog_increase_reading_count', 'nsc_blog_increase_reading_count');

function nsc_blog_get_reading_count($post_id) {
    $reading_count = get_post_meta($post_id, 'reading_count', true);
    return $reading_count ? intval($reading_count) : 0;
}


require get_template_directory() . '/inc/nsc-customizer/nsc-customizer.php';


add_action('wp_ajax_ajax_search', 'ajax_search');
add_action('wp_ajax_nopriv_ajax_search', 'ajax_search');


// Add placeholder to comment textarea
function nsc_blog_comment_form_add_placeholder($comment_field) {
    $comment_field = str_replace(
        '<textarea ',
        '<textarea placeholder="' . __('Add to discussion', 'rj-bst') . '" ',
        $comment_field
    );
    return $comment_field;
}
add_filter('comment_form_field_comment', 'nsc_blog_comment_form_add_placeholder');

// callback function to modify comment list HTML
function nsc_blog_custom_comment_list($comment, $args, $depth) {
    $tag = ($args['style'] === 'div') ? 'div' : 'li';
    ?>
    <<?php echo $tag; ?> id="comment-<?php comment_ID(); ?>" <?php comment_class('comment'); ?>>
        <article id="div-comment-<?php comment_ID(); ?>" class="comment-body">
					<div class="comment-author vcard flex-shrink-0">
						<?php if ($args['avatar_size'] != 0) echo get_avatar($comment, $args['avatar_size']); ?>
					</div>

					<div class="nsc-comment-content">
						<div class="d-flex align-items-center gap-2">
								<?php printf(__('<b class="fn nsc-comment-author">%s</b>', 'rj-bst'), get_comment_author_link()); ?>

								<div class="comment-metadata">
                    <a href="<?php echo esc_url(get_comment_link($comment, $args)); ?>">
                        <time datetime="<?php comment_time('c'); ?>">
                            <?php printf(__('%1$s at %2$s', "rj-bst"), get_comment_date(), get_comment_time()); ?>
                        </time>
                    </a>
                    <?php edit_comment_link(__('(Edit)', "rj-bst"), '<span class="edit-link">', '</span>'); ?>

                </div>
						</div>

						<div class="comment-content">
                <?php comment_text(); ?>
            </div>

						<a href="<?php echo get_permalink() . '?comment_like=' . get_comment_ID(); ?>" class="comment-like">Like
							<?php echo get_comment_meta(get_comment_ID(), 'comment_likes', true); ?>
						</a>

						<?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))); ?>

					</div>

					<?php if ($comment->comment_approved == '0') : ?>
						<div class="comment-awaiting-moderation">
							<?php _e('Your comment is awaiting moderation.', "rj-bst"); ?>
						</div>
					<?php endif; ?>

        </article>
    </<?php echo $tag; ?>>
    <?php
}

function nsc_blog_breadcrumb() { 
    $bg_image = get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>
        <div
        id="hero"
        class="hero jarallax"
        data-speed="0.6"
        data-img-position="50% 48%"
        style="background-image: url(<?php echo $bg_image; ?>);background-position: 15% center;background-color: #2d69b9">

        <div class="hero__inner">
            <div class="container">
                <div class="row">
                    <div class="col-11 col-sm-12">
                        <h4 class="hero__subtitle"><a href="<?php echo get_home_url() ?>">Home</a></h4>
                        <h1 class="hero__title"><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php 
}


function nsc_blog_breadcrumb1() {
    // $separator = ' » ';
    $separator = ' > ';

    $home_title = 'Home';
    echo '<nav class="nsc-breadcrumb">';
    echo '<a href="' . get_home_url() . '">' . $home_title . '</a>' . $separator;

    if (is_category() || is_single()) {
        // the_category('title_li=');
        if (is_single()) {
            echo $separator;
            the_title();
        }
    } elseif (is_page()) {
        if ($post->post_parent) {
            $parent_id = $post->post_parent;
            $breadcrumbs = array();
            while ($parent_id) {
                $page = get_page($parent_id);
                $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
                $parent_id = $page->post_parent;
            }
            $breadcrumbs = array_reverse($breadcrumbs);
            foreach ($breadcrumbs as $crumb) {
                echo $crumb . $separator;
            }
        }
        echo the_title();
    } elseif (is_home()) {
        // If it's the blog home page
        echo 'Blog';
    } elseif (is_tag()) {
        // If it's a tag archive page
        single_tag_title();
    } elseif (is_day()) {
        // If it's a day archive page
        echo "<a href='" . get_year_link(get_the_time('Y')) . "'>" . get_the_time('Y') . "</a>" . $separator;
        echo "<a href='" . get_month_link(get_the_time('Y'), get_the_time('m')) . "'>" . get_the_time('F') . "</a>" . $separator;
        echo get_the_time('d');
    } elseif (is_month()) {
        // If it's a month archive page
        echo "<a href='" . get_year_link(get_the_time('Y')) . "'>" . get_the_time('Y') . "</a>" . $separator;
        echo get_the_time('F');
    } elseif (is_year()) {
        // If it's a year archive page
        echo get_the_time('Y');
    } elseif (is_author()) {
        // If it's an author archive page
        global $author;
        $userdata = get_userdata($author);
        echo 'Articles posted by ' . $userdata->display_name;
    }
    // elseif (get_query_var('paged')) {
    //     echo 'Page ' . get_query_var('paged');
    // }
     elseif (is_404()) {
        // If it's a 404 page
        echo 'Page not found';
    }
    echo '</nav>';
}


// Add custom fields to user profile
function custom_user_profile_fields($user) { ?>
    <h3><?php _e('Social Media Links', "rj-bst"); ?></h3>

    <table class="form-table">
		<?php
			$social_links = array(
					'Facebook' => 'nsc_blog_user_facebook',
					'Instagram' => 'nsc_blog_user_instagram',
					'Twitter' => 'nsc_blog_user_twitter',
					'Linkedin' => 'nsc_blog_user_linkedin',
			);

			foreach ($social_links as $label => $input) { ?>
				<tr>
					<th><label for="<?php echo esc_attr($input); ?>"><?php _e($label, "rj-bst"); ?></label></th>
					<td>
						<input type="text" name="<?php echo esc_attr($input); ?>" id="<?php echo esc_attr($input); ?>" value="<?php echo esc_attr(get_the_author_meta($input, $user->ID)); ?>" class="regular-text" />
					</td>
				</tr>
			<?php } ?>

			<tr>
				<th><label for="nsc_blog_user_designation"><?php _e("Designaion", "rj-bst"); ?></label></th>
				<td>
					<input type="text" name="nsc_blog_user_designation" id="nsc_blog_user_designation" value="<?php echo esc_attr(get_the_author_meta('nsc_blog_user_designation', $user->ID)); ?>" class="regular-text" />
				</td>
			</tr>

			<tr>
				<th><label for="nsc_blog_user_location"><?php _e("Location", "rj-bst"); ?></label></th>
				<td>
					<input type="text" name="nsc_blog_user_location" id="nsc_blog_user_location" value="<?php echo esc_attr(get_the_author_meta('nsc_blog_user_location', $user->ID)); ?>" class="regular-text" />
				</td>
			</tr>

    </table>
<?php }

add_action('show_user_profile', 'custom_user_profile_fields');
add_action('edit_user_profile', 'custom_user_profile_fields');

// Save custom fields data
function save_custom_user_profile_fields($user_id) {
    if (!current_user_can('edit_user', $user_id)) {
        return false;
    }
	$social_links = array(
		'nsc_blog_user_facebook',
		'nsc_blog_user_instagram',
		'nsc_blog_user_twitter',
		'nsc_blog_user_linkedin',
		'nsc_blog_user_designation',
		'nsc_blog_user_location'
	);

	for ($i=0; $i < count($social_links) ; $i++) {
		update_user_meta($user_id, $social_links[$i], sanitize_text_field($_POST[$social_links[$i]]));
	}
}

add_action('personal_options_update', 'save_custom_user_profile_fields');
add_action('edit_user_profile_update', 'save_custom_user_profile_fields');


function rj_leo_bst_register_post_type() {
    $posts_types = array(
        'Testimonial' => array(),
        'Teams' => array('designation', 'facebook', 'twitter', 'youtube', 'instagram'),
        'Event' => array(),
    );

    foreach ($posts_types as $post_type => $metafields) {
        register_post_type(strtolower($post_type),
            array(
                'labels' => array(
                    'name'          => __($post_type . 's', 'rj-bst'),
                    'singular_name' => __($post_type, 'rj-bst'),
                ),
                'public'      => true,
                'has_archive' => true,
                'supports'    => array('title', 'editor', 'thumbnail'), // Customize as needed
            )
        );
    }
}
add_action('init', 'rj_leo_bst_register_post_type');

function rj_leo_bst_add_custom_metabox() {
    $posts_types = array(
        'Teams' => array('designation', 'facebook', 'twitter', 'youtube', 'instagram'),
    );

    foreach ($posts_types as $post_type => $metafields) {
        add_meta_box(
            strtolower($post_type) . '_metabox',
            __($post_type . ' Metafields', 'rj-bst'),
            'rj_leo_bst_custom_metafield_callback',
            strtolower($post_type),
            'normal',
            'default'
        );
    }
}
add_action('add_meta_boxes', 'rj_leo_bst_add_custom_metabox');

function rj_leo_bst_custom_metafield_callback($post) {
    $posts_types = array(
        'Teams' => array('designation', 'facebook', 'twitter', 'youtube', 'instagram'),
    );

    foreach ($posts_types as $post_type => $fields) {
        foreach ($fields as $field ) {
            $meta_key = strtolower($post_type . '_' . $field);
            $meta_value = get_post_meta($post->ID, $meta_key, true); ?>

            <p>
                <label for="<?php echo esc_attr($meta_key); ?>">
                    <?php echo ucfirst($field); ?>
                </label>
                <input type="text" 
                    id="<?php echo esc_attr($meta_key); ?>" 
                    name="<?php echo esc_attr($meta_key); ?>" 
                    value="<?php echo esc_attr($meta_value); ?>" 
                    >
                </p>
           <?php } } 
}

function rj_leo_bst_save_custom_metafield($post_id) {
    $posts_types = array(
        'Teams' => array('designation', 'facebook', 'twitter', 'youtube', 'instagram'),
    );

    
    foreach ($posts_types as $post_type => $fields) {
        foreach ($fields as $field ) {
            $meta_key = strtolower($post_type . '_' . $field);
            if (isset($_POST[$meta_key])) {
                update_post_meta($post_id, $meta_key, sanitize_text_field($_POST[$meta_key]));
            }
        }
    }
}
add_action('save_post', 'rj_leo_bst_save_custom_metafield');





//
function custom_search_form() {
    global $wpdb;

    // Get the current year
    $current_year = date('Y');

    // Get the years with posts, limited to the last 10 years
    $years = $wpdb->get_col($wpdb->prepare(
        "SELECT DISTINCT YEAR(post_date) FROM $wpdb->posts WHERE post_status = 'publish' AND YEAR(post_date) BETWEEN %d AND %d ORDER BY post_date DESC",
        $current_year - 9, // start year
        $current_year // end year
    ));

    // Define the months
    $months = array(
        '01' => 'January',
        '02' => 'February',
        '03' => 'March',
        '04' => 'April',
        '05' => 'May',
        '06' => 'June',
        '07' => 'July',
        '08' => 'August',
        '09' => 'September',
        '10' => 'October',
        '11' => 'November',
        '12' => 'December'
    );

    // Start the form output
    ob_start();
    ?>
    <div class="search-container">
        <form method="get" id="searchForm" action="<?php echo esc_url(home_url('/')); ?>">
            <div class="swrap">
                <input type="text" name="s" id="searchInput" placeholder="Search Your Articles..." value="<?php echo get_search_query(); ?>">
                <div id="search-results"></div>
            </div>
            <select name="year" id="yearSelect">
                <option value="">Select Year</option>
                <?php foreach ($years as $year) : ?>
                    <option value="<?php echo esc_attr($year); ?>" <?php selected($year, get_query_var('year')); ?>><?php echo esc_html($year); ?></option>
                <?php endforeach; ?>
            </select>

            <select name="monthnum" id="monthSelect">
                <option value="">Select Month</option>
                <?php foreach ($months as $num => $name) : ?>
                    <option value="<?php echo esc_attr($num); ?>" <?php selected($num, get_query_var('monthnum')); ?>><?php echo esc_html($name); ?></option>
                <?php endforeach; ?>
            </select>
        </form>
    </div>

    <script>
        var ajaxUrl = "<?php echo esc_url(admin_url('admin-ajax.php')); ?>";
    </script>
    <?php
    return ob_get_clean();
}

// Shortcode to display the custom search form
add_shortcode('custom_search', 'custom_search_form');

// AJAX callback function
function my_custom_search_callback() {
    $search_query = isset($_GET['search']) ? sanitize_text_field($_GET['search']) : '';
    $year = isset($_GET['year']) ? intval($_GET['year']) : '';
    $month = isset($_GET['month']) ? intval($_GET['month']) : '';

    // Query posts based on search parameters
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        's' => $search_query,
        'year' => $year,
        'monthnum' => $month,
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            // Display search results here
            ?>
            <div class="search-result test">
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<p><?php echo get_the_author(); ?></p>
                <p><?php echo get_the_date(); ?></p>
            </div>
            <?php
        }
        wp_reset_postdata();
    } else {
        echo '<p>No results found.</p>';
    }

    exit;
}
add_action('wp_ajax_my_custom_search', 'my_custom_search_callback');
add_action('wp_ajax_nopriv_my_custom_search', 'my_custom_search_callback');


// AJAX handler
function nsc_load_more_posts() {
    $paged = $_POST['page'] + 1;

    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => intval($_POST['posts_per_page']),
        'paged' => $paged,
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            get_template_part('template-parts/content', get_post_format());
        endwhile;
    endif;

    wp_die();
}
add_action('wp_ajax_nsc_load_more', 'nsc_load_more_posts');
add_action('wp_ajax_nopriv_nsc_load_more', 'nsc_load_more_posts');

//  video post type
function nsc_blog_register_post_type_videos_interviews() {
    register_post_type('videos_interviews',
        array(
            'labels'      => array(
                'name'          => __('Videos & Interviews', "rj-bst"),
                'singular_name' => __('Video & Interview', "rj-bst"),
            ),
            'public'      => true,
            'has_archive' => true,
            'rewrite'     => array('slug' => 'videos-interviews'),
            'supports'    => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
            'menu_icon'   => 'dashicons-video-alt3',
        )
    );
}
add_action('init', 'nsc_blog_register_post_type_videos_interviews');

function nsc_blog_register_custom_taxonomy_videos_interviews() {
    $labels = array(
        'name'                       => _x('Categories', 'Taxonomy General Name', "rj-bst"),
        'singular_name'              => _x('Category', 'Taxonomy Singular Name', "rj-bst"),
        'menu_name'                  => __('Categories', "rj-bst"),
        'all_items'                  => __('All Categories', "rj-bst"),
        'parent_item'                => __('Parent Category', "rj-bst"),
        'parent_item_colon'          => __('Parent Category:', "rj-bst"),
        'new_item_name'              => __('New Category Name', "rj-bst"),
        'add_new_item'               => __('Add New Category', "rj-bst"),
        'edit_item'                  => __('Edit Category', "rj-bst"),
        'update_item'                => __('Update Category', "rj-bst"),
        'view_item'                  => __('View Category', "rj-bst"),
        'separate_items_with_commas' => __('Separate categories with commas', "rj-bst"),
        'add_or_remove_items'        => __('Add or remove categories', "rj-bst"),
        'choose_from_most_used'      => __('Choose from the most used', "rj-bst"),
        'popular_items'              => __('Popular Categories', "rj-bst"),
        'search_items'               => __('Search Categories', "rj-bst"),
        'not_found'                  => __('Not Found', "rj-bst"),
        'no_terms'                   => __('No categories', "rj-bst"),
        'items_list'                 => __('Categories list', "rj-bst"),
        'items_list_navigation'      => __('Categories list navigation', "rj-bst"),
    );
    $args = array(
        'hierarchical'          => true,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'query_var'             => true,
        'rewrite'               => array('slug' => 'videos_interviews_cat'),
    );
    register_taxonomy('videos_interviews_category', array('videos_interviews'), $args);
}
add_action('init', 'nsc_blog_register_custom_taxonomy_videos_interviews', 0);



//  about us video section
function nsc_blog_add_video_url_meta_box() {
    add_meta_box(
        'video_url_meta_box',        // Unique ID
        'Video URL',                 // Box title
        'nsc_blog_video_url_meta_box_html',  // Content callback, must be of type callable
        'videos_interviews'          // Post type
    );
}
add_action('add_meta_boxes', 'nsc_blog_add_video_url_meta_box');

function nsc_blog_video_url_meta_box_html($post) {
    $value = get_post_meta($post->ID, '_video_url', true);
    ?>
    <label for="video_url_field">Enter the video URL:</label>
    <input type="text" id="video_url_field" name="video_url_field" value="<?php echo esc_attr($value); ?>" size="25" />
    <?php
}


function nsc_blog_get_video_thumbnail($video_url) {
    if (strpos($video_url, 'youtube.com') !== false || strpos($video_url, 'youtu.be') !== false) {
        // YouTube URL
        if (preg_match('/youtube\.com.*(\?v=|\/embed\/|\/v\/)(.{11})/', $video_url, $matches) || preg_match('/youtu.be\/(.{11})/', $video_url, $matches)) {
            return 'https://img.youtube.com/vi/' . $matches[1] . '/maxresdefault.jpg';
        }
    } elseif (strpos($video_url, 'vimeo.com') !== false) {
        // Vimeo URL
        if (preg_match('/vimeo\.com\/(\d+)/', $video_url, $matches)) {
            $vimeo_id = $matches[1];
            $vimeo_data = wp_remote_get("https://vimeo.com/api/v2/video/$vimeo_id.php");
            if (!is_wp_error($vimeo_data)) {
                $vimeo_data = unserialize($vimeo_data['body']);
                return $vimeo_data[0]['thumbnail_large'];
            }
        }
    }
    return false;
}

function nsc_blog_set_featured_image_from_url($post_id, $image_url) {
    $upload_dir = wp_upload_dir();
    $image_data = file_get_contents($image_url);
    $filename = basename($image_url);
    if (wp_mkdir_p($upload_dir['path'])) {
        $file = $upload_dir['path'] . '/' . $filename;
    } else {
        $file = $upload_dir['basedir'] . '/' . $filename;
    }
    file_put_contents($file, $image_data);

    $wp_filetype = wp_check_filetype($filename, null);
    $attachment = array(
        'post_mime_type' => $wp_filetype['type'],
        'post_title'     => sanitize_file_name($filename),
        'post_content'   => '',
        'post_status'    => 'inherit'
    );
    $attach_id = wp_insert_attachment($attachment, $file, $post_id);
    require_once(ABSPATH . 'wp-admin/includes/image.php');
    $attach_data = wp_generate_attachment_metadata($attach_id, $file);
    wp_update_attachment_metadata($attach_id, $attach_data);
    set_post_thumbnail($post_id, $attach_id);
}

function nsc_blog_save_video_url_meta_box($post_id) {
    if (array_key_exists('video_url_field', $_POST)) {
        $video_url = sanitize_text_field($_POST['video_url_field']);
        update_post_meta($post_id, '_video_url', $video_url);

        // Fetch and set the video thumbnail as the featured image
        $thumbnail_url = nsc_blog_get_video_thumbnail($video_url);
        if ($thumbnail_url) {
            nsc_blog_set_featured_image_from_url($post_id, $thumbnail_url);
        }
    }
}
add_action('save_post', 'nsc_blog_save_video_url_meta_box');

function nsc_load_more_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('nsc-load-more', get_template_directory_uri() . '/js/load-more.js', array('jquery'), null, true);
    wp_localize_script('nsc-load-more', 'nsc_loadmore_params', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'posts_per_page' => 3, // Adjust as needed
    ));
}
add_action('wp_enqueue_scripts', 'nsc_load_more_scripts');

function nsc_enqueue_popup_script() {
    ?>
    <script type="text/javascript">
        function openCategoryPopup() {
            document.getElementById("nsc-category-popup").style.display = "block";
        }

        function closeCategoryPopup() {
            document.getElementById("nsc-category-popup").style.display = "none";
        }

        // Close the popup if the user clicks outside of it
        window.onclick = function(event) {
            var popup = document.getElementById("nsc-category-popup");
            if (event.target == popup) {
                popup.style.display = "none";
            }
        }
    </script>
    <?php
}
add_action('wp_footer', 'nsc_enqueue_popup_script');


function load_more_events() {
    $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
    $posts_per_page = isset($_POST['posts_per_page']) ? intval($_POST['posts_per_page']) : 8;

    $args = array(
        'post_type'      => 'event',
        'post_status'    => 'publish',
        'posts_per_page' => $posts_per_page,
        'paged'          => $page,
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        $i = ($page - 1) * $posts_per_page + 1; // Adjust for pagination
        while ($query->have_posts()) {
            $query->the_post();
            
            $image_id = get_post_thumbnail_id();
            $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
            $image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
            ?>

            <div class="js-isotope__item1 category-<?php echo esc_attr($i); ?>">
                <div class="__item" data-x="1" data-y="1">
                    <figure class="__image">
                        <img 
                            class="lazy1" 
                            src="<?php echo esc_url($image_url); ?>" 
                            data-src="<?php echo esc_url($image_url); ?>" 
                            alt="<?php echo esc_attr($image_alt ? $image_alt : get_the_title()); ?>" 
                            title="<?php echo esc_attr($image_alt ? $image_alt : get_the_title()); ?>" 
                        />
                    </figure>

                    <div class="__content">
                        <div class="row">
                            <div class="col">
                                <div class="h4 __title"><?php echo esc_html(get_the_title()); ?></div>
                            </div>

                            <div class="col-auto">
                                <a class="__link" href="<?php echo esc_url($image_url); ?>" data-fancybox="gallery-masonry">
                                    <i class="fontello-resize"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php 
            $i++;
        }
    } else {
        echo 'no_more_posts';
    }

    wp_reset_postdata();
    wp_die();
}
add_action('wp_ajax_load_more_events', 'load_more_events');
add_action('wp_ajax_nopriv_load_more_events', 'load_more_events');



?>
