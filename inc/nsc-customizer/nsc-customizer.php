<?php
function nsc_blog_add_custom_controls() {
	load_template( trailingslashit( get_template_directory() ) . '/inc/nsc-customizer/nsc-toggle-controls.php' );
}
add_action( 'customize_register', 'nsc_blog_add_custom_controls' );

function nsc_blog_customizer_register( $wp_customize ){
	$wp_customize->add_setting( 'nsc_blog_site_title',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'nsc_blog_toggle_sanitization'
	));
	$wp_customize->add_control( new NSC_BLOG_TOGGLE_SWITCH_CUSTOM_CONTROL( $wp_customize, 'nsc_blog_site_title',array(
		'label' => esc_html__( 'Show / Hide Title','rj-bst' ),
		'section' => 'title_tagline'
	)));

	$wp_customize->add_setting( 'nsc_blog_site_description',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'nsc_blog_toggle_sanitization'
	));
	$wp_customize->add_control( new NSC_BLOG_TOGGLE_SWITCH_CUSTOM_CONTROL( $wp_customize, 'nsc_blog_site_description',array(
		'label' => esc_html__( 'Show / Hide Description','rj-bst' ),
		'section' => 'title_tagline'
	)));

    $wp_customize->add_panel( 'rj_leo_bst_homepage_panel', array(
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => esc_html__( 'BST Setting', 'rj-bst' ),
        'priority' => 10,
    ));

    // Header
    $wp_customize->add_section('rj_leo_bst_header_section' , array(
        'title' => __( 'Header', 'rj-bst' ),
        'panel' => 'rj_leo_bst_homepage_panel'
    ) );
    
    $wp_customize->add_setting('rj_leo_bst_header_btn_text',array(
		'default'=> 'Get in Touch',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('rj_leo_bst_header_btn_text',array(
		'label'	=> esc_html__('Get in Touch','rj-bst'),
		'section'=> 'rj_leo_bst_header_section',
		'type'=> 'text'
	));

    $wp_customize->add_setting('rj_leo_bst_header_btn_url',array(
		'default'=> '#',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('rj_leo_bst_header_btn_url',array(
		'label'	=> esc_html__('Url','rj-bst'),
		'section'=> 'rj_leo_bst_header_section',
		'type'=> 'text'
	));
    
    $wp_customize->add_setting('rj_leo_bst_header_address_text',array(
		'default'=> '3 Ang Mo Kio Street 62 #06-06 Singapore 569139',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('rj_leo_bst_header_address_text',array(
		'label'	=> esc_html__('Address','rj-bst'),
		'section'=> 'rj_leo_bst_header_section',
		'type'=> 'text'
	));
   
    $wp_customize->add_setting('rj_leo_bst_header_phone_num',array(
		'default'=> '+65 9171 7296',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('rj_leo_bst_header_phone_num',array(
		'label'	=> esc_html__('Phone','rj-bst'),
		'section'=> 'rj_leo_bst_header_section',
		'type'=> 'text'
	));
    
    $wp_customize->add_setting('rj_leo_bst_header_email_add',array(
		'default'=> 'blueskytree1@gmail.com',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('rj_leo_bst_header_email_add',array(
		'label'	=> esc_html__('Email','rj-bst'),
		'section'=> 'rj_leo_bst_header_section',
		'type'=> 'text'
	));

    $wp_customize->add_setting('rj_leo_bst_header_social_icon_num',array(
		'default'=> '4',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('rj_leo_bst_header_social_icon_num',array(
		'label'	=> esc_html__('Number of Social Icon','rj-bst'),
		'section'=> 'rj_leo_bst_header_section',
		'type'=> 'Number'
	));
    
    $socail_icon_number = get_theme_mod('rj_leo_bst_header_social_icon_num', '4'); 
    
    $social_icons = array('Facebook', 'Twitter', 'Youtube', 'Instagram');
    for ($i=0; $i < $socail_icon_number; $i++) { 
        $wp_customize->add_setting('rj_leo_bst_header_social_icon_url'.$i,array(
            'default'=> '4',
            'sanitize_callback'	=> 'sanitize_text_field'
        ));
        $wp_customize->add_control('rj_leo_bst_header_social_icon_url'.$i,array(
            'label'	=> esc_html__( $social_icons[$i] . ' Url','rj-bst'),
            'section'=> 'rj_leo_bst_header_section',
            'type'=> 'text'
        ));   
    }

    $wp_customize->add_setting('rj_leo_bst_footer_desc',array(
		'default'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies vel nisi ac malesuada.',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('rj_leo_bst_footer_desc',array(
		'label'	=> esc_html__('Footer Description','rj-bst'),
		'section'=> 'rj_leo_bst_header_section',
		'type'=> 'textarea'
	));


    // slider START
    $wp_customize->add_section('rj_leo_bst_slider_section' , array(
        'title' => __( 'Slider', 'rj-bst' ),
        'panel' => 'rj_leo_bst_homepage_panel'
    ) );

    $wp_customize->add_setting('rj_leo_bst_slider_number',array(
		'default'=> '3',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('rj_leo_bst_slider_number',array(
		'label'	=> esc_html__('Number of Slider to show','rj-bst'),
		'section'=> 'rj_leo_bst_slider_section',
		'type'=> 'number'
	));

    $slider_num = get_theme_mod('rj_leo_bst_slider_number');

    for ($i=1; $i <= $slider_num ; $i++) { 

        $wp_customize->add_setting( 'rj_leo_bst_slider_separator'.$i,array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'nsc_blog_toggle_sanitization'
        ));

        $wp_customize->add_control( new NSC_BLOG_SEPARATOR( $wp_customize, 'rj_leo_bst_slider_separator'.$i,array(
            'label' => esc_html__( 'Slider '.$i, 'rj-bst' ),
            'section' => 'rj_leo_bst_slider_section'
        )));

        $wp_customize->add_setting('rj_leo_bst_slider_bg'.$i ,array(
            'default'   => '',
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'rj_leo_bst_slider_bg'.$i ,array(
            'label' => __('Background Image ','rj-bst'),
            'description' => __('Dimension (1600px * 700px)','rj-bst'),
            'section' => 'rj_leo_bst_slider_section',
            'settings' => 'rj_leo_bst_slider_bg'.$i 
        )));

        $wp_customize->add_setting('rj_leo_bst_slider_title'.$i,array(
            'default'=> 'Slider Title '.$i,
            'sanitize_callback'	=> 'sanitize_text_field'
        ));
        $wp_customize->add_control('rj_leo_bst_slider_title'.$i,array(
            'label'	=> esc_html__('Slider Title','rj-bst'),
            'section'=> 'rj_leo_bst_slider_section',
            'type'=> 'text'
        ));
        
        $wp_customize->add_setting('rj_leo_bst_slider_desc'.$i,array(
            'default'=> 'Slider Title '.$i,
            'sanitize_callback'	=> 'sanitize_text_field'
        ));
        $wp_customize->add_control('rj_leo_bst_slider_desc'.$i,array(
            'label'	=> esc_html__('Slider Description','rj-bst'),
            'section'=> 'rj_leo_bst_slider_section',
            'type'=> 'textarea'
        ));
        
        $wp_customize->add_setting('rj_leo_bst_slider_btn_text'.$i,array(
            'default'=> 'Discover',
            'sanitize_callback'	=> 'sanitize_text_field'
        ));
        $wp_customize->add_control('rj_leo_bst_slider_btn_text'.$i,array(
            'label'	=> esc_html__('Slider Button','rj-bst'),
            'section'=> 'rj_leo_bst_slider_section',
            'type'=> 'text'
        ));
        
        $wp_customize->add_setting('rj_leo_bst_slider_btn_url'.$i,array(
            'default'=> '#',
            'sanitize_callback'	=> 'sanitize_text_field'
        ));
        $wp_customize->add_control('rj_leo_bst_slider_btn_url'.$i,array(
            'label'	=> esc_html__('Slider Button Link','rj-bst'),
            'section'=> 'rj_leo_bst_slider_section',
            'type'=> 'text'
        ));
    }

    $wp_customize->add_setting( 'rj_leo_bst_slider_video_separator',array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'nsc_blog_toggle_sanitization'
    ));

    $wp_customize->add_control( new NSC_BLOG_SEPARATOR( $wp_customize, 'rj_leo_bst_slider_video_separator',array(
        'label' => esc_html__( 'Slider Video', 'rj-bst' ),
        'section' => 'rj_leo_bst_slider_section'
    )));

    $wp_customize->add_setting('rj_leo_bst_slider_video_text',array(
        'default'=> 'Discover',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('rj_leo_bst_slider_video_text',array(
        'label'	=> esc_html__('Slider Video Text','rj-bst'),
        'section'=> 'rj_leo_bst_slider_section',
        'type'=> 'text'
    ));
    
    $wp_customize->add_setting('rj_leo_bst_slider_video_link',array(
        'default'=> '#',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('rj_leo_bst_slider_video_link',array(
        'label'	=> esc_html__('Slider Video Link','rj-bst'),
        'section'=> 'rj_leo_bst_slider_section',
        'type'=> 'text'
    ));
    // slider END
    // about us START
    $wp_customize->add_section('rj_leo_bst_about_us_section' , array(
        'title' => __( 'About us', 'rj-bst' ),
        'panel' => 'rj_leo_bst_homepage_panel'
    ) );

    $wp_customize->add_setting('rj_leo_bst_about_subtitle',array(
        'default'=> 'About',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('rj_leo_bst_about_subtitle',array(
        'label'	=> esc_html__('About Us subtitle','rj-bst'),
        'section'=> 'rj_leo_bst_about_us_section',
        'type'=> 'text'
    ));
    
    $wp_customize->add_setting('rj_leo_bst_about_title',array(
        'default'=> 'About <span> Blue Sky Tree <span>',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('rj_leo_bst_about_title',array(
        'label'	=> esc_html__('About Us subtitle','rj-bst'),
        'section'=> 'rj_leo_bst_about_us_section',
        'type'=> 'text'
    ));
    
    $wp_customize->add_setting('rj_leo_bst_about_content1',array(
        'default'=> '',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('rj_leo_bst_about_content1',array(
        'label'	=> esc_html__('Para one','rj-bst'),
        'section'=> 'rj_leo_bst_about_us_section',
        'type'=> 'textarea'
    ));

    $wp_customize->add_setting('rj_leo_bst_about_content2',array(
        'default'=> '',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('rj_leo_bst_about_content2',array(
        'label'	=> esc_html__('Para two','rj-bst'),
        'section'=> 'rj_leo_bst_about_us_section',
        'type'=> 'textarea'
    ));

    $wp_customize->add_setting('rj_leo_bst_about_content3',array(
        'default'=> '',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('rj_leo_bst_about_content3',array(
        'label'	=> esc_html__('Para three','rj-bst'),
        'section'=> 'rj_leo_bst_about_us_section',
        'type'=> 'textarea'
    ));
    $wp_customize->add_setting('rj_leo_bst_about_content4',array(
        'default'=> '',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('rj_leo_bst_about_content4',array(
        'label'	=> esc_html__('Para four','rj-bst'),
        'section'=> 'rj_leo_bst_about_us_section',
        'type'=> 'textarea'
    ));
    $wp_customize->add_setting('rj_leo_bst_about_content5',array(
        'default'=> '',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('rj_leo_bst_about_content5',array(
        'label'	=> esc_html__('Para five','rj-bst'),
        'section'=> 'rj_leo_bst_about_us_section',
        'type'=> 'textarea'
    ));
    
    $wp_customize->add_setting('rj_leo_bst_about_button_text',array(
        'default'=> '',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('rj_leo_bst_about_button_text',array(
        'label'	=> esc_html__('Button Text','rj-bst'),
        'section'=> 'rj_leo_bst_about_us_section',
        'type'=> 'text'
    ));
    
    $wp_customize->add_setting('rj_leo_bst_about_button_url',array(
        'default'=> '',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('rj_leo_bst_about_button_url',array(
        'label'	=> esc_html__('Button Url','rj-bst'),
        'section'=> 'rj_leo_bst_about_us_section',
        'type'=> 'text'
    ));

    $wp_customize->add_setting( 'rj_leo_bst_counter1_separator',array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'nsc_blog_toggle_sanitization'
    ));

    $wp_customize->add_control( new NSC_BLOG_SEPARATOR( $wp_customize, 'rj_leo_bst_counter1_separator',array(
        'label' => esc_html__( 'Counter First', 'rj-bst' ),
        'section' => 'rj_leo_bst_about_us_section'
    )));
    $wp_customize->add_setting('rj_leo_bst_counter_text1',array(
        'default'=> 'Machines installed',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('rj_leo_bst_counter_text1',array(
        'label'	=> esc_html__('Text','rj-bst'),
        'section'=> 'rj_leo_bst_about_us_section',
        'type'=> 'text'
    ));
   
    $wp_customize->add_setting('rj_leo_bst_counter1_value',array(
        'default'=> '2000',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('rj_leo_bst_counter1_value',array(
        'label'	=> esc_html__('Counter Value','rj-bst'),
        'section'=> 'rj_leo_bst_about_us_section',
        'type'=> 'text'
    ));

    
    $wp_customize->add_setting( 'rj_leo_bst_slider_video_separator',array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'nsc_blog_toggle_sanitization'
    ));

    $wp_customize->add_control( new NSC_BLOG_SEPARATOR( $wp_customize, 'rj_leo_bst_slider_video_separator',array(
        'label' => esc_html__( 'Counter Second', 'rj-bst' ),
        'section' => 'rj_leo_bst_about_us_section'
    )));
    $wp_customize->add_setting('rj_leo_bst_counter_text2',array(
        'default'=> 'Partners in the World',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('rj_leo_bst_counter_text2',array(
        'label'	=> esc_html__('Text','rj-bst'),
        'section'=> 'rj_leo_bst_about_us_section',
        'type'=> 'text'
    ));
   
    $wp_customize->add_setting('rj_leo_bst_counter2_value',array(
        'default'=> '500',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('rj_leo_bst_counter2_value',array(
        'label'	=> esc_html__('Counter Value','rj-bst'),
        'section'=> 'rj_leo_bst_about_us_section',
        'type'=> 'text'
    ));
    
    // about us END
    // key fact
    $wp_customize->add_section('rj_leo_bst_keyfact_section' , array(
        'title' => __( 'Key Facts', 'rj-bst' ),
        'panel' => 'rj_leo_bst_homepage_panel'
    ) );

    $wp_customize->add_setting('rj_leo_bst_keyfacts_subtitle',array(
        'default'=> 'Facts',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('rj_leo_bst_keyfacts_subtitle',array(
        'label'	=> esc_html__('Keyfacts Subtitle','rj-bst'),
        'section'=> 'rj_leo_bst_keyfact_section',
        'type'=> 'text'
    ));
    $wp_customize->add_setting('rj_leo_bst_keyfacts_title',array(
        'default'=> 'Key Fact ',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('rj_leo_bst_keyfacts_title',array(
        'label'	=> esc_html__('Keyfacts Title','rj-bst'),
        'section'=> 'rj_leo_bst_keyfact_section',
        'type'=> 'text'
    ));

    // Feature START 
    $wp_customize->add_section('rj_leo_bst_keyfact_section' , array(
        'title' => __( 'Key Facts', 'rj-bst' ),
        'panel' => 'rj_leo_bst_homepage_panel'
    ) );

    $wp_customize->add_setting('rj_leo_bst_keyfacts_subtitle',array(
        'default'=> 'Facts',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('rj_leo_bst_keyfacts_subtitle',array(
        'label'	=> esc_html__('Keyfacts Subtitle','rj-bst'),
        'section'=> 'rj_leo_bst_keyfact_section',
        'type'=> 'text'
    ));
   
    $wp_customize->add_setting('rj_leo_bst_features_title',array(
        'default'=> 'We are the Best on Vending',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('rj_leo_bst_features_title',array(
        'label'	=> esc_html__('Keyfacts Title','rj-bst'),
        'section'=> 'rj_leo_bst_keyfact_section',
        'type'=> 'text'
    ));
   
    $wp_customize->add_setting('rj_leo_bst_features_desc',array(
        'default'=> 'Flagfin Atlantic saury, stonecat beachsalmon, silver dollar South American Lungfish. Reef triggerfish dogteeth',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('rj_leo_bst_features_desc',array(
        'label'	=> esc_html__('Keyfacts Decription','rj-bst'),
        'section'=> 'rj_leo_bst_keyfact_section',
        'type'=> 'text'
    ));

    // Feature END
    // Testimonials
    $wp_customize->add_section('rj_leo_bst_testimonials_section' , array(
        'title' => __( 'Testmonials', 'rj-bst' ),
        'panel' => 'rj_leo_bst_homepage_panel'
    ) );

    $wp_customize->add_setting('rj_leo_bst_testimonial_subtitle',array(
        'default'=> 'Testimonials',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('rj_leo_bst_testimonial_subtitle',array(
        'label'	=> esc_html__('Subtitle','rj-bst'),
        'section'=> 'rj_leo_bst_testimonials_section',
        'type'=> 'text'
    ));
   
    $wp_customize->add_setting('rj_leo_bst_testimonial_title',array(
        'default'=> 'People Say About <span> Blue Sky Tree</span>',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('rj_leo_bst_testimonial_title',array(
        'label'	=> esc_html__('Title','rj-bst'),
        'section'=> 'rj_leo_bst_testimonials_section',
        'type'=> 'text'
    ));
   
    $wp_customize->add_setting('rj_leo_bst_testimonials_number',array(
		'default'=> '3',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('rj_leo_bst_testimonials_number',array(
		'label'	=> esc_html__('Number of Testimonials','rj-bst'),
		'section'=> 'rj_leo_bst_testimonials_section',
		'type'=> 'number'
	));   

    // you tube video 
    $wp_customize->add_section('rj_leo_bst_youtube_video_section' , array(
        'title' => __( 'Video Section', 'rj-bst' ),
        'panel' => 'rj_leo_bst_homepage_panel'
    ) );

    $wp_customize->add_setting('rj_leo_bst_video_title',array(
        'default'=> 'STAY CONNECTED',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('rj_leo_bst_video_title',array(
        'label'	=> esc_html__('Title','rj-bst'),
        'section'=> 'rj_leo_bst_youtube_video_section',
        'type'=> 'text'
    ));

    // Partners
    $wp_customize->add_section('rj_leo_bst_partner_section' , array(
        'title' => __( 'Partner Section', 'rj-bst' ),
        'panel' => 'rj_leo_bst_homepage_panel'
    ) );

    $wp_customize->add_setting('rj_leo_bst_partners_subtitle',array(
        'default'=> 'Partners',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('rj_leo_bst_partners_subtitle',array(
        'label'	=> esc_html__('Subtitle','rj-bst'),
        'section'=> 'rj_leo_bst_partner_section',
        'type'=> 'text'
    ));
    
    $wp_customize->add_setting('rj_leo_bst_partners_title',array(
        'default'=> 'Partners',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('rj_leo_bst_partners_title',array(
        'label'	=> esc_html__('People Who Trust Us','rj-bst'),
        'section'=> 'rj_leo_bst_partner_section',
        'type'=> 'text'
    ));

    
    $wp_customize->add_setting('rj_leo_bst_partners_logo_number',array(
		'default'=> '19',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('rj_leo_bst_partners_logo_number',array(
		'label'	=> esc_html__('Number of Partners','rj-bst'),
		'section'=> 'rj_leo_bst_partner_section',
		'type'=> 'number'
	)); 

    $total_logos = get_theme_mod('rj_leo_bst_partners_logo_number'); 

    for ($i = 1; $i <= $total_logos; $i++) {

        $wp_customize->add_setting( 'rj_leo_bst_partners_logo_sep'.$i,array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'nsc_blog_toggle_sanitization'
        ));
    
        $wp_customize->add_control( new NSC_BLOG_SEPARATOR( $wp_customize, 'rj_leo_bst_partners_logo_sep'.$i,array(
            'label' => esc_html__('Partner Logo '.$i, 'rj-bst' ),
            'section' => 'rj_leo_bst_partner_section'
        )));

        $wp_customize->add_setting("rj_leo_bst_partners_logo_$i" ,array(
            'default'   => get_template_directory_uri() . "/assets/images/partners/" .$i. ".png",
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,"rj_leo_bst_partners_logo_$i" ,array(
            'label' => __('','rj-bst'),
            'section' => 'rj_leo_bst_partner_section',
            'settings' => "rj_leo_bst_partners_logo_$i" 
        )));
    }

    // FAQ section
    $wp_customize->add_section('rj_leo_bst_faq_section' , array(
        'title' => __( 'FAQ Section', 'rj-bst' ),
        'panel' => 'rj_leo_bst_homepage_panel'
    ) );

    $wp_customize->add_setting('rj_leo_bst_faq_subtitle',array(
        'default'=> 'FAQs',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('rj_leo_bst_faq_subtitle',array(
        'label'	=> esc_html__('Subtitle','rj-bst'),
        'section'=> 'rj_leo_bst_faq_section',
        'type'=> 'text'
    ));    

    $wp_customize->add_setting('rj_leo_bst_faq_title',array(
        'default'=> 'Frequent Ask Questions',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('rj_leo_bst_faq_title',array(
        'label'	=> esc_html__('Title','rj-bst'),
        'section'=> 'rj_leo_bst_faq_section',
        'type'=> 'text'
    ));

    $wp_customize->add_setting('rj_leo_bst_faq_number',array(
        'default'=> '5',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('rj_leo_bst_faq_number',array(
        'label'	=> esc_html__('Number of FAQs','rj-bst'),
        'section'=> 'rj_leo_bst_faq_section',
        'type'=> 'number'
    ));
    
    $faq_number = get_theme_mod( 'rj_leo_bst_faq_number', '5');
    for ( $i = 1; $i <= $faq_number; $i++ ){

        $wp_customize->add_setting( 'rj_leo_bst_faq_question_sep'.$i,array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'nsc_blog_toggle_sanitization'
        ));
    
        $wp_customize->add_control( new NSC_BLOG_SEPARATOR( $wp_customize, 'rj_leo_bst_faq_question_sep'.$i,array(
            'label' => esc_html__('FAQ '.$i, 'rj-bst' ),
            'section' => 'rj_leo_bst_faq_section'
        )));

        $wp_customize->add_setting("rj_leo_bst_faq_question_$i",array(
            'default'=> 'Questions '. $i,
            'sanitize_callback'	=> 'sanitize_text_field'
        ));
        $wp_customize->add_control("rj_leo_bst_faq_question_$i",array(
            'label'	=> esc_html__('Question','rj-bst'),
            'section'=> 'rj_leo_bst_faq_section',
            'type'=> 'text'
        ));
        
        $wp_customize->add_setting("rj_leo_bst_faq_answer_$i",array(
            'default'=> 'Answer' . $i,
            'sanitize_callback'	=> 'sanitize_text_field'
        ));
        $wp_customize->add_control("rj_leo_bst_faq_answer_$i",array(
            'label'	=> esc_html__('Answer','rj-bst'),
            'section'=> 'rj_leo_bst_faq_section',
            'type'=> 'text'
        ));

     

    }


    



}
add_action( 'customize_register', 'nsc_blog_customizer_register' );
