<?php
function nsc_blog_add_custom_controls() {
	load_template( trailingslashit( get_template_directory() ) . '/inc/nsc-customizer/nsc-toggle-controls.php' );
}
add_action( 'customize_register', 'nsc_blog_add_custom_controls' );

function nsc_blog_customizer_register( $wp_customize ){
	//  site title and tagline
	$wp_customize->add_setting( 'nsc_blog_site_title',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'nsc_blog_toggle_sanitization'
	));
	$wp_customize->add_control( new NSC_BLOG_TOGGLE_SWITCH_CUSTOM_CONTROL( $wp_customize, 'nsc_blog_site_title',array(
		'label' => esc_html__( 'Show / Hide Title','nsc-blog' ),
		'section' => 'title_tagline'
	)));

	$wp_customize->add_setting( 'nsc_blog_site_description',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'nsc_blog_toggle_sanitization'
	));
	$wp_customize->add_control( new NSC_BLOG_TOGGLE_SWITCH_CUSTOM_CONTROL( $wp_customize, 'nsc_blog_site_description',array(
		'label' => esc_html__( 'Show / Hide Description','nsc-blog' ),
		'section' => 'title_tagline'
	)));

	$wp_customize->add_setting( 'nsc_blog_site_content_aside',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'nsc_blog_toggle_sanitization'
	));
	$wp_customize->add_control( new NSC_BLOG_TOGGLE_SWITCH_CUSTOM_CONTROL( $wp_customize, 'nsc_blog_site_content_aside',array(
		'label' => esc_html__( 'Show Title Beside the Logo ','nsc-blog' ),
		'section' => 'title_tagline'
	)));


  //  menu list
  $menus = wp_get_nav_menus();
  $menu_list = array();

  if ($menus) {
      foreach ($menus as $menu) {
          $menu_list[$menu->name] = esc_html($menu->name);
      }
  } else {
      echo 'No menus found.';
  }

$wp_customize->add_panel( 'rj_bst_leo_homepage_panel', array(
	'capability' => 'edit_theme_options',
	'theme_supports' => '',
	'title' => esc_html__( 'Homepage Setting', 'nsc-blog' ),
	'priority' => 10,
));

// slider setting
 $wp_customize->add_section('rj_bst_leo_slider_section' , array(
	'title' => __( 'Slider Section', 'nsc-blog' ),
	'panel' => 'rj_bst_leo_homepage_panel'
) );

// Settings for Slide 1 Background Image
$wp_customize->add_setting('rj_bst_leo_slider_bg1', array(
	'default'   => '',
	'transport' => 'refresh',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'rj_bst_leo_slider_bg1', array(
	'label'    => __('Slide 1 Background Image', 'nsc-blog'),
	'section'  => 'rj_bst_leo_slider_section',
	'settings' => 'rj_bst_leo_slider_bg1',
)));

// Setting for Slide 1 Title
$wp_customize->add_setting('rj_bst_leo_slider_title1', array(
	'default'   => 'Vending Products <span>in all Offices and Hubs</span>',
	'transport' => 'refresh',
));
$wp_customize->add_control('rj_bst_leo_slider_title1', array(
	'label'    => __('Slide 1 Title', 'nsc-blog'),
	'section'  => 'rj_bst_leo_slider_section',
	'type'     => 'text',
));

// Setting for Slide 1 Description
$wp_customize->add_setting('rj_bst_leo_slider_desc1', array(
	'default'   => 'Flagfin Atlantic saury, stonecat beachsalmon...',
	'transport' => 'refresh',
));
$wp_customize->add_control('rj_bst_leo_slider_desc1', array(
	'label'    => __('Slide 1 Description', 'nsc-blog'),
	'section'  => 'rj_bst_leo_slider_section',
	'type'     => 'textarea',
));

// Settings for Slide 2 Background Image
$wp_customize->add_setting('rj_bst_leo_slider_bg2', array(
	'default'   => '',
	'transport' => 'refresh',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'rj_bst_leo_slider_bg2', array(
	'label'    => __('Slide 2 Background Image', 'nsc-blog'),
	'section'  => 'rj_bst_leo_slider_section',
	'settings' => 'rj_bst_leo_slider_bg2',
)));

// Setting for Slide 2 Title
$wp_customize->add_setting('rj_bst_leo_slider_title2', array(
	'default'   => 'Vending Technology <span>in new Business Era</span>',
	'transport' => 'refresh',
));
$wp_customize->add_control('rj_bst_leo_slider_title2', array(
	'label'    => __('Slide 2 Title', 'nsc-blog'),
	'section'  => 'rj_bst_leo_slider_section',
	'type'     => 'text',
));

// Setting for Slide 2 Description
$wp_customize->add_setting('rj_bst_leo_slider_desc2', array(
	'default'   => '',
	'transport' => 'refresh',
));
$wp_customize->add_control('rj_bst_leo_slider_desc2', array(
	'label'    => __('Slide 2 Description', 'nsc-blog'),
	'section'  => 'rj_bst_leo_slider_section',
	'type'     => 'textarea',
));

// Settings for Slide 3 Background Image
$wp_customize->add_setting('rj_bst_leo_slider_bg3', array(
	'default'   => '',
	'transport' => 'refresh',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'rj_bst_leo_slider_bg3', array(
	'label'    => __('Slide 3 Background Image', 'nsc-blog'),
	'section'  => 'rj_bst_leo_slider_section',
	'settings' => 'rj_bst_leo_slider_bg3',
)));

// Setting for Slide 3 Title
$wp_customize->add_setting('rj_bst_leo_slider_title3', array(
	'default'   => 'Vending Products in Offices and Hubs',
	'transport' => 'refresh',
));
$wp_customize->add_control('rj_bst_leo_slider_title3', array(
	'label'    => __('Slide 3 Title', 'nsc-blog'),
	'section'  => 'rj_bst_leo_slider_section',
	'type'     => 'text',
));

// Setting for Slide 3 Description
$wp_customize->add_setting('rj_bst_leo_slider_desc3', array(
	'default'   => '',
	'transport' => 'refresh',
));
$wp_customize->add_control('rj_bst_leo_slider_desc3', array(
	'label'    => __('Slide 3 Description', 'nsc-blog'),
	'section'  => 'rj_bst_leo_slider_section',
	'type'     => 'textarea',
));

 // Section: About Us Section
$wp_customize->add_section('rj_bst_leo_about_section' , array(
'title' => __( 'About Us Section', 'nsc-blog' ),
'panel' => 'rj_bst_leo_homepage_panel'
) );

// Subtitle Setting
$wp_customize->add_setting('rj_bst_leo_about_subtitle', array(
	'default'           => 'About',
	'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('rj_bst_leo_about_subtitle', array(
	'label'    => __('Subtitle', 'nsc-blog'),
	'section'  => 'rj_bst_leo_about_section',
	'type'     => 'text',
));

// Title Setting
$wp_customize->add_setting('rj_bst_leo_about_title', array(
	'default'           => 'About Blue<br> <span>Sky Tree</span>',
	'sanitize_callback' => 'wp_kses_post',
));
$wp_customize->add_control('rj_bst_leo_about_title', array(
	'label'    => __('Title', 'nsc-blog'),
	'section'  => 'rj_bst_leo_about_section',
	'type'     => 'textarea',
));

// Content Setting1
$wp_customize->add_setting('rj_bst_leo_about_content1', array(
	'default'           => 'At Blue Sky Tree, we are redefining the vending industry with cutting-edge robotics and AI-powered solutions tailored to meet the evolving needs of businesses in Singapore. From our humble beginnings in 2010 with 30 M&M vending machines, we’ve expanded our reach, now managing over 350 advanced vending units and operating three cafes nationwide. Our commitment to innovation has made us a trusted partner for leading brands, delivering convenience, efficiency, and seamless experiences.',
	'sanitize_callback' => 'wp_kses_post',
));
$wp_customize->add_control('rj_bst_leo_about_content1', array(
	'label'    => __('Content', 'nsc-blog'),
	'section'  => 'rj_bst_leo_about_section',
	'type'     => 'textarea',
));

// Content Setting2
$wp_customize->add_setting('rj_bst_leo_about_content2', array(
	'default'           => 'Our Expertise:',
	'sanitize_callback' => 'wp_kses_post',
));
$wp_customize->add_control('rj_bst_leo_about_content2', array(
	'label'    => __('Content', 'nsc-blog'),
	'section'  => 'rj_bst_leo_about_section',
	'type'     => 'textarea',
));

// Content Setting3
$wp_customize->add_setting('rj_bst_leo_about_content3', array(
	'default'           => 'For over a decade, Blue Sky Tree has been at the forefront of the F&B and vending industry. We are an authorized distributor for Bicom Asia’s top-tier hot food vending machines and have successfully partnered with brands like Haagen-Dazs, Chef-In-Box, and BreadTalk. Our projects span from setting up vending cafés in corporate offices to deploying smart lockers and AI robots in public spaces. With a global network of partners and stakeholders across Asia, China, Europe, and the United States, we bring a world of expertise to your doorstep.',
	'sanitize_callback' => 'wp_kses_post',
));
$wp_customize->add_control('rj_bst_leo_about_content3', array(
	'label'    => __('Content', 'nsc-blog'),
	'section'  => 'rj_bst_leo_about_section',
	'type'     => 'textarea',
));

// Content Setting4
$wp_customize->add_setting('rj_bst_leo_about_content4', array(
	'default'           => 'Our dedicated team boasts extensive experience in vending machine technology and Food and Beverage (F&B) automation. We pride ourselves on delivering exceptional, round-the-clock service, ensuring that you provide a premier experience for your clients, no matter the time of day.',
	'sanitize_callback' => 'wp_kses_post',
));
$wp_customize->add_control('rj_bst_leo_about_content4', array(
	'label'    => __('Content', 'nsc-blog'),
	'section'  => 'rj_bst_leo_about_section',
	'type'     => 'textarea',
));

// Content Setting5
$wp_customize->add_setting('rj_bst_leo_about_content5', array(
	'default'           => 'Why Choose Blue Sky Tree?',
	'sanitize_callback' => 'wp_kses_post',
));
$wp_customize->add_control('rj_bst_leo_about_content5', array(
	'label'    => __('Content', 'nsc-blog'),
	'section'  => 'rj_bst_leo_about_section',
	'type'     => 'textarea',
));

// Button Text Setting
$wp_customize->add_setting('rj_bst_leo_about_button_text', array(
	'default'           => 'More About',
	'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('rj_bst_leo_about_button_text', array(
	'label'    => __('Button Text', 'nsc-blog'),
	'section'  => 'rj_bst_leo_about_section',
	'type'     => 'text',
));

// Button URL Setting
$wp_customize->add_setting('rj_bst_leo_about_button_url', array(
	'default'           => '#',
	'sanitize_callback' => 'esc_url_raw',
));
$wp_customize->add_control('rj_bst_leo_about_button_url', array(
	'label'    => __('Button URL', 'nsc-blog'),
	'section'  => 'rj_bst_leo_about_section',
	'type'     => 'url',
));

// Background Image Setting
$wp_customize->add_setting('rj_bst_leo_about_bg_image', array(
	'default'           => get_template_directory_uri() . '/assets/images/about_image_bg.png',
	'sanitize_callback' => 'esc_url_raw',
));
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'rj_bst_leo_about_bg_image',
		array(
			'label'    => __('Background Image', 'nsc-blog'),
			'section'  => 'rj_bst_leo_about_section',
			'settings' => 'rj_bst_leo_about_bg_image',
		)
	)
);

// Add a setting for the image
$wp_customize->add_setting('rj_bst_leo_about_us_image', array(
	'default'   => get_template_directory_uri() . '/assets/images/about_us_img.png',
	'sanitize_callback' => 'esc_url',
));

// Add the image upload control
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'rj_bst_leo_about_us_image', array(
	'label'    => __('About Us Image', 'nsc-blog'),
	'section'  => 'rj_bst_leo_about_section',
	'settings' => 'rj_bst_leo_about_us_image',
)));

// counter text

$wp_customize->add_setting('rj_bst_leo_counter_text1', array(
	'default'           => 'Machines installed',
	'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('rj_bst_leo_counter_text1', array(
	'label'    => __('Counter Text', 'nsc-blog'),
	'section'  => 'rj_bst_leo_about_section',
	'type'     => 'text',
));

$wp_customize->add_setting('rj_bst_leo_counter_text2', array(
	'default'           => 'Partners in the World',
	'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('rj_bst_leo_counter_text2', array(
	'label'    => __('Counter Text', 'nsc-blog'),
	'section'  => 'rj_bst_leo_about_section',
	'type'     => 'text',
));

// key facts

$wp_customize->add_section('rj_bst_leo_facts_section', array(
	'title' => __( 'Facts Section', 'nsc-blog' ),
	'panel' => 'rj_bst_leo_homepage_panel'
) );

$wp_customize->add_setting('rj_bst_leo_facts_subtitle', array('default' => 'Facts'));
$wp_customize->add_setting('rj_bst_leo_facts_title', array('default' => 'Key'));
$wp_customize->add_setting('rj_bst_leo_facts_highlighted_text', array('default' => 'Fact'));
$wp_customize->add_setting('rj_bst_leo_facts_content', array('default' => 'Coming Soon.....'));

$wp_customize->add_control('rj_bst_leo_facts_subtitle', array(
	'label' => __('Subtitle', 'nsc-blog'),
	'section' => 'rj_bst_leo_facts_section',
	'type' => 'text',
));
$wp_customize->add_control('rj_bst_leo_facts_title', array(
	'label' => __('Title', 'nsc-blog'),
	'section' => 'rj_bst_leo_facts_section',
	'type' => 'text',
));
$wp_customize->add_control('rj_bst_leo_facts_highlighted_text', array(
	'label' => __('Highlighted Text', 'nsc-blog'),
	'section' => 'rj_bst_leo_facts_section',
	'type' => 'text',
));
$wp_customize->add_control('rj_bst_leo_facts_content', array(
	'label' => __('Content', 'nsc-blog'),
	'section' => 'rj_bst_leo_facts_section',
	'type' => 'textarea',
));

// testimonial

$wp_customize->add_section('rj_bst_leo_testimonial_section', array(
	'title' => __( 'Testimonial Section', 'nsc-blog' ),
	'panel' => 'rj_bst_leo_homepage_panel'
) );

$wp_customize->add_setting('rj_bst_leo_testimonial_title', array(
	'default'           => __('Testimonial', 'nsc-blog'),
	'sanitize_callback' => 'sanitize_textarea_field',
));
$wp_customize->add_control('rj_bst_leo_testimonial_title', array(
	'label'    => __('Title', 'nsc-blog'),
	'section'  => 'rj_bst_leo_testimonial_section',
	'type'     => 'textarea',
));

$wp_customize->add_setting('rj_bst_leo_testimonial_content', array(
	'default'           => __('People Say About Vend', 'nsc-blog'),
	'sanitize_callback' => 'sanitize_textarea_field',
));
$wp_customize->add_control('rj_bst_leo_testimonial_content', array(
	'label'    => __('Text', 'nsc-blog'),
	'section'  => 'rj_bst_leo_testimonial_section',
	'type'     => 'textarea',
));


// Testimonial 1: Text
$wp_customize->add_setting('rj_bst_leo_testimonial_1_text', array(
	'default'           => __('Testimonial 1 content goes here.Sturgeon medusafish tompot blenny burma danio loach catfish lanternfish wrasse goldeye whiptail gulper coffinfish Black pickerel hardhead catfish. Stoneroller minnow skipjack tuna. Black pickerel shrimpfish marine hatchetfish sillago dottyback spiny basslet.', 'nsc-blog'),
	'sanitize_callback' => 'sanitize_textarea_field',
));
$wp_customize->add_control('rj_bst_leo_testimonial_1_text', array(
	'label'    => __('Testimonial 1 Text', 'nsc-blog'),
	'section'  => 'rj_bst_leo_testimonial_section',
	'type'     => 'textarea',
));

// Testimonial 1: Author
$wp_customize->add_setting('rj_bst_leo_testimonial_1_author', array(
	'default'           => __('Sam Peters, Vending Corp LLC', 'nsc-blog'),
	'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('rj_bst_leo_testimonial_1_author', array(
	'label'    => __('Testimonial 1 Author', 'nsc-blog'),
	'section'  => 'rj_bst_leo_testimonial_section',
	'type'     => 'text',
));

// Testimonial 2: Text
$wp_customize->add_setting('rj_bst_leo_testimonial_2_text', array(
	'default'           => __('	2 Sturgeon medusafish tompot blenny burma danio loach catfish lanternfish wrasse goldeye whiptail gulper coffinfish Black pickerel hardhead catfish. Stoneroller minnow skipjack tuna. Black pickerel shrimpfish marine hatchetfish sillago dottyback spiny basslet.', 'nsc-blog'),
	'sanitize_callback' => 'sanitize_textarea_field',
));
$wp_customize->add_control('rj_bst_leo_testimonial_2_text', array(
	'label'    => __('Testimonial 2 Text', 'nsc-blog'),
	'section'  => 'rj_bst_leo_testimonial_section',
	'type'     => 'textarea',
));

// Testimonial 2: Author
$wp_customize->add_setting('rj_bst_leo_testimonial_2_author', array(
	'default'           => __('Lauren Golf, Programmer', 'nsc-blog'),
	'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('rj_bst_leo_testimonial_2_author', array(
	'label'    => __('Testimonial 2 Author', 'nsc-blog'),
	'section'  => 'rj_bst_leo_testimonial_section',
	'type'     => 'text',
));

// Testimonial 3: Text
$wp_customize->add_setting('rj_bst_leo_testimonial_3_text', array(
	'default'           => __('3 Sturgeon medusafish tompot blenny burma danio loach catfish lanternfish wrasse goldeye whiptail gulper coffinfish Black pickerel hardhead catfish. Stoneroller minnow skipjack tuna. Black pickerel shrimpfish marine hatchetfish sillago dottyback spiny basslet.', 'nsc-blog'),
	'sanitize_callback' => 'sanitize_textarea_field',
));
$wp_customize->add_control('rj_bst_leo_testimonial_3_text', array(
	'label'    => __('Testimonial 3 Text', 'nsc-blog'),
	'section'  => 'rj_bst_leo_testimonial_section',
	'type'     => 'textarea',
));

// Testimonial 3: Author
$wp_customize->add_setting('rj_bst_leo_testimonial_3_author', array(
	'default'           => __('Lauren Golf, Programmer', 'nsc-blog'),
	'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('rj_bst_leo_testimonial_3_author', array(
	'label'    => __('Testimonial 3 Author', 'nsc-blog'),
	'section'  => 'rj_bst_leo_testimonial_section',
	'type'     => 'text',
));



// Section for Brand Logos
$wp_customize->add_section('rj_bst_leo_brand_logos_section', array(
	'title' => __( 'Brand Logos', 'nsc-blog' ),
	'panel' => 'rj_bst_leo_homepage_panel'
) );

$wp_customize->add_setting('rj_bst_leo_brand_logos_text', array(
	'default'           => __('Partners', 'nsc-blog'),
	'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('rj_bst_leo_brand_logos_text', array(
	'label'    => __('Brand Logo Text', 'nsc-blog'),
	'section'  => 'rj_bst_leo_brand_logos_section',
	'type'     => 'text',
));


$wp_customize->add_setting('rj_bst_leo_brand_logos_text1', array(
	'default'           => __('People Who Trust Us', 'nsc-blog'),
	'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('rj_bst_leo_brand_logos_text1', array(
	'label'    => __('Brand Logos', 'nsc-blog'),
	'section'  => 'rj_bst_leo_brand_logos_section',
	'type'     => 'text',
));


$wp_customize->add_setting('rj_bst_leo_brand_logo_count', array(
	'default'           => 5,
	'sanitize_callback' => 'absint',
));

$wp_customize->add_control('rj_bst_leo_brand_logo_count', array(
	'label'    => __('Number of Brand Logos', 'nsc-blog'),
	'section'  => 'rj_bst_leo_brand_logos_section',
	'settings' => 'rj_bst_leo_brand_logo_count',
	'type'     => 'select',
	'choices'  => array_combine(range(1, 10), range(1, 10)), 
));

for ($i = 1; $i <= 10; $i++) {
	$wp_customize->add_setting("rj_bst_leo_brand_logo_$i", array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "rj_bst_leo_brand_logo_$i", array(
		'label'    => __("Brand Logo $i", 'nsc-blog'),
		'section'  => 'rj_bst_leo_brand_logos_section',
		'settings' => "rj_bst_leo_brand_logo_$i",
		'active_callback'   => function () use ($i) {
			$selected_count = get_theme_mod('rj_bst_leo_brand_logo_count', 5);
			return $i <= $selected_count;
		},
	)));
}

// Add FAQ section
$wp_customize->add_section('rj_bst_leo_faq_section', array(
	'title' => __( 'FAQ Section', 'nsc-blog' ),
	'panel' => 'rj_bst_leo_homepage_panel'
) );

$wp_customize->add_setting('rj_bst_leo_brand_faq_text', array(
	'default'           => __('Partners', 'nsc-blog'),
	'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('rj_bst_leo_brand_faq_text', array(
	'label'    => __('Brand Logo Text', 'nsc-blog'),
	'section'  => 'rj_bst_leo_faq_section',
	'type'     => 'text',
));


$wp_customize->add_setting('rj_bst_leo_brand_faq_text1', array(
	'default'           => __('People Who Trust Us', 'nsc-blog'),
	'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('rj_bst_leo_brand_faq_text1', array(
	'label'    => __('Brand Logos', 'nsc-blog'),
	'section'  => 'rj_bst_leo_faq_section',
	'type'     => 'text',
));


$wp_customize->add_setting( 'rj_bst_leo_faq_number', array(
	'default' => 5, 
	'sanitize_callback' => 'absint', 
) );

$wp_customize->add_control( 'rj_bst_leo_faq_number', array(
	'label'   => __( 'Number of FAQ Items', 'nsc-blog' ),
	'section' => 'rj_bst_leo_faq_section',
	'type'    => 'number',
	'input_attrs' => array(
		'min' => 1,  
		'max' => 5,  
		'step' => 1, 
	),
) );

for ( $i = 1; $i <= 5; $i++ ) {
	$wp_customize->add_setting( "rj_bst_leo_faq_question_$i", array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_setting( "rj_bst_leo_faq_answer_$i", array(
		'default' => '',
		'sanitize_callback' => 'sanitize_textarea_field',
	) );

	$wp_customize->add_control( "rj_bst_leo_faq_question_$i", array(
		'label'   => __( "FAQ Question $i", 'nsc-blog' ),
		'section' => 'rj_bst_leo_faq_section',
		'type'    => 'text',
	) );
	$wp_customize->add_control( "rj_bst_leo_faq_answer_$i", array(
		'label'   => __( "FAQ Answer $i", 'nsc-blog' ),
		'section' => 'rj_bst_leo_faq_section',
		'type'    => 'textarea',
	) );
}






























































































































  // Topbar START
  $wp_customize->add_section('nsc_blog_topabr' , array(
    'title' => __( 'Topbar', 'nsc-blog' ),
    'panel' => 'nsc_blog_add_panel'
  ) );

	$wp_customize->add_setting('nsc_blog_topbar_menu',array(
		'default' => 'topbar',
		'transport' => 'refresh',
		'sanitize_callback' => 'nsc_blog_customizer_sanitize_choices'
	));
	$wp_customize->add_control('nsc_blog_topbar_menu',array(
		'type' => 'select',
		'label' => __('Select the Menu','nsc-blog'),
		'section' => 'nsc_blog_topabr',
		'choices' 	=> $menu_list,
	));

	$wp_customize->add_setting('nsc_blog_topbar_icon_number',array(
		'default'=> '4',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('nsc_blog_topbar_icon_number',array(
		'label'	=> esc_html__('Number of icons to show','nsc-blog'),
		'section'=> 'nsc_blog_topabr',
		'type'=> 'number'
	));

	$topbar_icons = get_theme_mod('nsc_blog_topbar_icon_number');
	for ($i=0; $i < $topbar_icons ; $i++) {
		$wp_customize->add_setting( 'nsc_blog_topbar_icon_separator'.$i,array(
			'default' => '',
			'transport' => 'refresh',
			'sanitize_callback' => 'nsc_blog_toggle_sanitization'
	  ));

	// 	$wp_customize->add_setting( sprintf( 'nsc_blog_topbar_icon_separator%s', $i ), array(
	//     'default' => '',
	//     'transport' => 'refresh',
	//     'sanitize_callback' => 'nsc_blog_toggle_sanitization',
	// ));

	  $wp_customize->add_control( new NSC_BLOG_SEPARATOR( $wp_customize, 'nsc_blog_topbar_icon_separator'.$i,array(
			'label' => esc_html__( 'Icon '.($i + 1),'nsc-blog' ),
			'section' => 'nsc_blog_topabr'
	  )));

		$wp_customize->add_setting('nsc_blog_topbar_icon'.$i,array(
			'default'=> '',
			// 'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('nsc_blog_topbar_icon'.$i,array(
			'label'	=> esc_html__('Icon Svg Code','nsc-blog'),
			'description' => __( 'Add the svg code', 'nsc-blog' ),
			'section'=> 'nsc_blog_topabr',
			'type'=> 'textarea'
		));

		$wp_customize->add_setting('nsc_blog_topbar_icon_url'.$i,array(
			'default'=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('nsc_blog_topbar_icon_url'.$i,array(
			'label'	=> esc_html__('Url','nsc-blog'),
			'section'=> 'nsc_blog_topabr',
			'type'=> 'text'
		));

		$wp_customize->add_setting('nsc_blog_topbar_icon_title'.$i,array(
			'default'=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('nsc_blog_topbar_icon_title'.$i,array(
			'label'	=> esc_html__('Title','nsc-blog'),
			'description' => __( 'Add the title for the SEO purpose', 'nsc-blog' ),
			'section'=> 'nsc_blog_topabr',
			'type'=> 'text'
		));

	}
  // Topbar END

	//  news scroller
	$wp_customize->add_section('nsc_blog_news_scroller' , array(
    'title' => __( 'News Scroll Bar', 'nsc-blog' ),
    'panel' => 'nsc_blog_add_panel'
  ) );

	$wp_customize->add_setting('nsc_blog_news_ribbon_heading',array(
		'default'=> 'News Tickers',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('nsc_blog_news_ribbon_heading',array(
		'label'	=> esc_html__('Text','nsc-blog'),
		'section'=> 'nsc_blog_news_scroller',
		'type'=> 'text'
	));

	$wp_customize->add_setting('nsc_blog_news_ribbon_post_num',array(
		'default'=> '5',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('nsc_blog_news_ribbon_post_num',array(
		'label'	=> esc_html__('Number of post','nsc-blog'),
		'section'=> 'nsc_blog_news_scroller',
		'type'=> 'number'
	));

	//  slider
	$wp_customize->add_section('nsc_blog_news_slider' , array(
    'title' => __( 'Slider', 'nsc-blog' ),
    'panel' => 'nsc_blog_add_panel'
  ) );

	$wp_customize->add_setting('nsc_blog_slider_post_num',array(
		'default'=> '4',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('nsc_blog_slider_post_num',array(
		'label'	=> esc_html__('Number Of Slider To Show','nsc-blog'),
		'section'=> 'nsc_blog_news_slider',
		'type'=> 'number'
	));

	// Categories section
	$wp_customize->add_section('nsc_blog_post_categories' , array(
		'title' => __( 'Category', 'nsc-blog' ),
		'panel' => 'nsc_blog_add_panel'
	) );

	$wp_customize->add_setting('nsc_blog_category_heading',array(
		'default'=> 'CATEGORIES',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('nsc_blog_category_heading',array(
		'label'	=> esc_html__('Category Heading','nsc-blog'),
		'section'=> 'nsc_blog_post_categories',
		'type'=> 'text'
	));

	$wp_customize->add_setting('nsc_blog_category_see_more',array(
		'default'=> 'See More',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('nsc_blog_category_see_more',array(
		'label'	=> esc_html__('See More','nsc-blog'),
		'section'=> 'nsc_blog_post_categories',
		'type'=> 'text'
	));

	// $wp_customize->add_setting('nsc_blog_category_see_more_url',array(
	// 	'default'=> '#',
	// 	'sanitize_callback'	=> 'sanitize_text_field'
	// ));
	// $wp_customize->add_control('nsc_blog_category_see_more_url',array(
	// 	'label'	=> esc_html__('See More Url','nsc-blog'),
	// 	'section'=> 'nsc_blog_post_categories',
	// 	'type'=> 'text'
	// ));

	$wp_customize->add_setting('nsc_blog_category_cat_num',array(
		'default'=> '10',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('nsc_blog_category_cat_num',array(
		'label'	=> esc_html__('Number of tabs to show','nsc-blog'),
		'section'=> 'nsc_blog_post_categories',
		'type'=> 'number'
	));

	$wp_customize->add_setting('nsc_blog_category_view_more',array(
		'default'=> 'View More',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('nsc_blog_category_view_more',array(
		'label'	=> esc_html__('Number of tabs to show','nsc-blog'),
		'section'=> 'nsc_blog_post_categories',
		'type'=> 'text'
	));

	// other artilces
	$wp_customize->add_section('nsc_blog_other_articles' , array(
		'title' => __( 'Other Articles', 'nsc-blog' ),
		'panel' => 'nsc_blog_add_panel'
	) );

	$wp_customize->add_setting('nsc_blog_other_articles_heading',array(
		'default'=> 'OTHER ARTICLES',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('nsc_blog_other_articles_heading',array(
		'label'	=> esc_html__('Other Articles','nsc-blog'),
		'section'=> 'nsc_blog_other_articles',
		'type'=> 'text'
	));

	// 	comment policy
	$wp_customize->add_section('nsc_blog_comment_policy' , array(
		'title' => __( 'Comment Policy', 'nsc-blog' ),
		'panel' => 'nsc_blog_add_panel'
	) );

	$wp_customize->add_setting('nsc_blog_comments_policy_bgimage',array(
	    'default'   => '',
	    'sanitize_callback' => 'esc_url_raw',
	  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'nsc_blog_comments_policy_bgimage',array(
      'label' => __('Background Image ','nsc-blog'),
      'description' => __('Dimension (1600px * 700px)','nsc-blog'),
      'section' => 'nsc_blog_comment_policy',
      'settings' => 'nsc_blog_comments_policy_bgimage'
  )));

	$wp_customize->add_setting('nsc_blog_comment_policy_heading',array(
		'default'=> 'The Aviationist Comment Policy',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('nsc_blog_comment_policy_heading',array(
		'label'	=> esc_html__('Heading','nsc-blog'),
		'section'=> 'nsc_blog_comment_policy',
		'type'=> 'text'
	));

	$wp_customize->add_setting('nsc_blog_comment_policy_para',array(
		'default'=> 'Comments on this site are moderated. Comment policy applies. Please read our Comment Policy before commenting.',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('nsc_blog_comment_policy_para',array(
		'label'	=> esc_html__('Description','nsc-blog'),
		'section'=> 'nsc_blog_comment_policy',
		'type'=> 'textarea'
	));

	$wp_customize->add_setting('nsc_blog_comment_policy_btn',array(
		'default'=> 'Got It',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('nsc_blog_comment_policy_btn',array(
		'label'	=> esc_html__('Button','nsc-blog'),
		'section'=> 'nsc_blog_comment_policy',
		'type'=> 'text'
	));

	$wp_customize->add_setting('nsc_blog_comment_policy_btn_url',array(
		'default'=> '#',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('nsc_blog_comment_policy_btn_url',array(
		'label'	=> esc_html__('Button Url','nsc-blog'),
		'section'=> 'nsc_blog_comment_policy',
		'type'=> 'text'
	));

	//  also on aviationist
	$wp_customize->add_section('nsc_blog_also_on_aviationist' , array(
		'title' => __( 'Also on aviationist', 'nsc-blog' ),
		'panel' => 'nsc_blog_add_panel'
	) );
	$wp_customize->add_setting('nsc_blog_also_on_aviationist_heading',array(
		'default'=> 'ALSO ON THE AVIATIONIST',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('nsc_blog_also_on_aviationist_heading',array(
		'label'	=> esc_html__('Heading','nsc-blog'),
		'section'=> 'nsc_blog_also_on_aviationist',
		'type'=> 'text'
	));
	$wp_customize->add_setting('nsc_blog_also_on_aviationist_post_num',array(
		'default'=> '-1',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('nsc_blog_also_on_aviationist_post_num',array(
		'label'	=> esc_html__('Number of post to show','nsc-blog'),
		'section'=> 'nsc_blog_also_on_aviationist',
		'type'=> 'text'
	));


	//  contact us page
	$wp_customize->add_section('nsc_blog_contact_us_page' , array(
		'title' => __( 'Contact Us Page', 'nsc-blog' ),
		'panel' => 'nsc_blog_add_panel'
	) );
	$wp_customize->add_setting('nsc_blog_contact_us_description',array(
		'default'=> 'If you want to tell me something or if you need to prepare books, articles, brochures, datasheets, documentaries, presentations, meetings, movies and so on, and need the world’s most authoritative aviation journalist and blogger, you can send me an email.',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('nsc_blog_contact_us_description',array(
		'label'	=> esc_html__('Page Description','nsc-blog'),
		'section'=> 'nsc_blog_contact_us_page',
		'type'=> 'textarea'
	));

	$wp_customize->add_setting('nsc_blog_contact_us_page_title',array(
		'default'=> 'Get in touch',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('nsc_blog_contact_us_page_title',array(
		'label'	=> esc_html__('Heading','nsc-blog'),
		'section'=> 'nsc_blog_contact_us_page',
		'type'=> 'text'
	));

	$wp_customize->add_setting('nsc_blog_contact_us_title_desc',array(
		'default'=> 'Reach out, and let\'s create a universe of possibilities together!',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('nsc_blog_contact_us_title_desc',array(
		'label'	=> esc_html__('Heading Description','nsc-blog'),
		'section'=> 'nsc_blog_contact_us_page',
		'type'=> 'textarea'
	));

	$wp_customize->add_setting('nsc_blog_contact_us_form_title',array(
		'default'=> 'Let’s connect constellations',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('nsc_blog_contact_us_form_title',array(
		'label'	=> esc_html__('Form Heading','nsc-blog'),
		'section'=> 'nsc_blog_contact_us_page',
		'type'=> 'text'
	));

	$wp_customize->add_setting('nsc_blog_contact_us_form_description',array(
		'default'=> 'Let\'s align our constellations! Reach out and let the magic of collaboration illuminate our skies.',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('nsc_blog_contact_us_form_description',array(
		'label'	=> esc_html__('Form Description','nsc-blog'),
		'section'=> 'nsc_blog_contact_us_page',
		'type'=> 'textarea'
	));

	$wp_customize->add_setting('nsc_blog_contact_us_form_shortcode',array(
		'default'=> '[wpforms id="60"]',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('nsc_blog_contact_us_form_shortcode',array(
		'label'	=> esc_html__('Form Shortcode','nsc-blog'),
		'section'=> 'nsc_blog_contact_us_page',
		'type'=> 'text'
	));

	$wp_customize->add_setting('nsc_blog_contact_us_image',array(
			'default'   => '',
			'sanitize_callback' => 'esc_url_raw',
		));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'nsc_blog_contact_us_image',array(
			'label' => __('Image ','nsc-blog'),
			'section' => 'nsc_blog_contact_us_page',
			'settings' => 'nsc_blog_contact_us_image'
	)));

	$wp_customize->add_setting('nsc_blog_contact_us_below_description',array(
		'default'=> 'If you were looking for one of world’s most read military aviation blogger, you have just found him. My bio can be read in the About page.',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('nsc_blog_contact_us_below_description',array(
		'label'	=> esc_html__('Text Below Form','nsc-blog'),
		'section'=> 'nsc_blog_contact_us_page',
		'type'=> 'text'
	));
	$wp_customize->add_setting('nsc_blog_contact_us_about_page_link',array(
		'default'=> '#',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('nsc_blog_contact_us_about_page_link',array(
		'label'	=> esc_html__('About page link','nsc-blog'),
		'section'=> 'nsc_blog_contact_us_page',
		'type'=> 'text'
	));
	$wp_customize->add_setting('nsc_blog_contact_us_about_page_text',array(
		'default'=> 'About page',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('nsc_blog_contact_us_about_page_text',array(
		'label'	=> esc_html__('About us page text','nsc-blog'),
		'section'=> 'nsc_blog_contact_us_page',
		'type'=> 'text'
	));
}
add_action( 'customize_register', 'nsc_blog_customizer_register' );
