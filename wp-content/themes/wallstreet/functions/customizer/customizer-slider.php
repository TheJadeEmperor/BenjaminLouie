<?php
function wallstreet_slider_customizer( $wp_customize ) {

	$wp_customize->add_section(
        'slider_section_settings',
        array(
            'title' => __('Banner Image Settings','wallstreet')));
	
	
	$wp_customize->add_setting( 'wallstreet_pro_options[slider_image]',array('default' => get_template_directory_uri().'/images/slider.jpg',
	'type' => 'option','sanitize_callback' => 'esc_url_raw',
	));
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'wallstreet_pro_options[slider_image]',
			array(
				'type'        => 'upload',
				'label' => 'Image Upload',
				'section' => 'example_section_one',
				'settings' =>'wallstreet_pro_options[slider_image]',
				'section' => 'slider_section_settings',
				
			)
		)
	);
	
	//Slider Title
	$wp_customize->add_setting(
	'wallstreet_pro_options[slider_title_one]', array(
        'default'        => 'Clean & Fresh Theme',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control('wallstreet_pro_options[slider_title_one]', array(
        'label'   => __('Banner Title', 'wallstreet'),
        'section' => 'slider_section_settings',
		'priority'   => 150,
		'type' => 'text',
    ));
	
	//Slider sub title
	$wp_customize->add_setting(
	'wallstreet_pro_options[slider_title_two]', array(
        'default'        => 'Welcome To Wallstreet',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control('wallstreet_pro_options[slider_title_two]', array(
        'label'   => __('Banner Sub Title', 'wallstreet'),
        'section' => 'slider_section_settings',
		'priority'   => 150,
		'type' => 'text',
    ));
	
	//Slider Banner discription
	$wp_customize->add_setting(
	'wallstreet_pro_options[slider_description]', array(
        'default'        => 'The state-of-the-art HTML5 powered flexible layout with lightspeed fast CSS3 transition effects. Works perfect in any modern mobile...',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control('wallstreet_pro_options[slider_description]', array(
        'label'   => __('Banner Description', 'wallstreet'),
        'section' => 'slider_section_settings',
		'priority'   => 150,
		'type' => 'text',
    ));
	
	 }
	add_action( 'customize_register', 'wallstreet_slider_customizer' );
	?>