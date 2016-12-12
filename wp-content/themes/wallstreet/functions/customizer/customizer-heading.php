<?php
function wallstreet_template_customizer( $wp_customize ) {


// add section to manage Section heading
	$wp_customize->add_section(
        'section_heading',
        array(
            'title' => __('Section Heading','wallstreet'),
			'priority'   => 500,
			)
    );
	
	
	//Enable Contact Information On Front Page
	$wp_customize->add_setting(
		'wallstreet_pro_options[contact_header_settings]',
		array('capability'  => 'edit_theme_options',
		'default' => true ,  
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[contact_header_settings]',
		array(
			'type' => 'checkbox',
			'label' => __('Enable Contact Information On Front Page.','wallstreet'),
			'section' => 'section_heading',
		)
	);
	
	
	//Contect phone number front
	$wp_customize->add_setting(
		'wallstreet_pro_options[contact_phone_number]',
		array('capability'  => 'edit_theme_options',
		'default' => __('1-800-123-789','wallstreet'), 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[contact_phone_number]',
		array(
			'type' => 'text',
			'label' => __('Contact Phone Number on Front Page:','wallstreet'),
			'section' => 'section_heading',
		)
	);
	
	//Contect phone number front
	$wp_customize->add_setting(
		'wallstreet_pro_options[contact_email]',
		array('capability'  => 'edit_theme_options',
		'default' => __('info@webriti.com','wallstreet'), 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[contact_email]',
		array(
			'type' => 'text',
			'label' => __('Contact Email on Front Page:','wallstreet'),
			'section' => 'section_heading',
		)
	);
	
	
	
	//Service section heading
	$wp_customize->add_setting(
		'wallstreet_pro_options[service_title]',
		array('capability'  => 'edit_theme_options',
		'default' => __('Our Services','wallstreet'), 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[service_title]',
		array(
			'type' => 'text',
			'label' => __('Services Title','wallstreet'),
			'section' => 'section_heading',
		)
	);
	
	
	//Service section description
	$wp_customize->add_setting(
		'wallstreet_pro_options[service_description]',
		array('capability'  => 'edit_theme_options',
		'default' => __('We Offer Great Services to our Clients','wallstreet'), 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[service_description]',
		array(
			'type' => 'text',
			'label' => __('Services Description','wallstreet'),
			'section' => 'section_heading',
		)
	);
	
	//Portfolio section heading
	$wp_customize->add_setting(
		'wallstreet_pro_options[portfolio_title]',
		array('capability'  => 'edit_theme_options',
		'default' => __('Featured Portfolio Project','wallstreet'), 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[portfolio_title]',
		array(
			'type' => 'text',
			'label' => __('Portfolio Title','wallstreet'),
			'section' => 'section_heading',
		)
	);
	
	
	//Service section description
	$wp_customize->add_setting(
		'wallstreet_pro_options[portfolio_description]',
		array('capability'  => 'edit_theme_options',
		'default' => __('Most Popular of Our Works.','wallstreet'), 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[portfolio_description]',
		array(
			'type' => 'text',
			'label' => __('Portfolio Description','wallstreet'),
			'section' => 'section_heading',
		)
	);
	
	
	// Blog Heading
	$wp_customize->add_setting(
		'wallstreet_pro_options[home_blog_heading]',
		array('capability'  => 'edit_theme_options',
		'default' => __('Our Latest Blog Post','wallstreet'), 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[home_blog_heading]',
		array(
			'type' => 'text',
			'label' => __('Home Page Blog Section Heading','wallstreet'),
			'section' => 'section_heading',
		)
	);
	
	
	
	$wp_customize->add_setting(
		'wallstreet_pro_options[home_blog_description]',
		array('capability'  => 'edit_theme_options',
		'default' => __('We Work With New Customers And Grow Their Businesses','wallstreet'), 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[home_blog_description]',
		array(
			'type' => 'text',
			'label' => __('Home Page Blog Section Description','wallstreet'),
			'section' => 'section_heading',
		)
	);

	
	}
	add_action( 'customize_register', 'wallstreet_template_customizer' );
	?>