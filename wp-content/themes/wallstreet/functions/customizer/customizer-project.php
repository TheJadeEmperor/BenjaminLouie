<?php
function wallstreet_project_customizer( $wp_customize ) {

//Home project Section
	$wp_customize->add_panel( 'wallstreet_project_setting', array(
		'priority'       => 700,
		'capability'     => 'edit_theme_options',
		'title'      => __('Project Settings', 'wallstreet'),
	) );
	
	$wp_customize->add_section(
        'project_section_settings',
        array(
            'title' => __('Home Project Settings','wallstreet'),
            'description' => '',
			'panel'  => 'wallstreet_project_setting',)
    );
	
	
	//Show and hide Project section
	$wp_customize->add_setting(
	'wallstreet_pro_options[portfolio_section_enabled]'
    ,
    array(
        'default' => true,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[portfolio_section_enabled]',
    array(
        'label' => __('Enable portfolio section on home page(project section).','wallstreet'),
        'section' => 'project_section_settings',
        'type' => 'checkbox',
    )
	);
	
	
	//Project one Title
	$wp_customize->add_setting(
	'wallstreet_pro_options[portfolio_title_one]', array(
        'default'        => 'Wall Street Style',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control('wallstreet_pro_options[portfolio_title_one]', array(
        'label'   => __('Portfolio Title One', 'wallstreet'),
        'section' => 'project_one_section_settings',
		'type' => 'text',
    ));
	
	
	//Project one description
	$wp_customize->add_setting(
    'wallstreet_pro_options[portfolio_description_one]',
    array(
        'default' => __('A wonderful serenity has taken possession of my entire soul, like these sweet mornings','wallstreet'),
		 'capability'     => 'edit_theme_options',
		 'sanitize_callback' => 'sanitize_text_field',
		 'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[portfolio_description_one]',
    array(
        'label' => __('Portfolio Description One','wallstreet'),
        'section' => 'project_one_section_settings',
        'type' => 'textarea',	
    )
);
	
	
	//Project Two
	$wp_customize->add_section(
        'project_one_section_settings',
        array(
            'title' => __('Home Portfolio one','wallstreet'),
            'description' => '',
			'panel'  => 'wallstreet_project_setting',)
    );
	
	//Project one image
	$wp_customize->add_setting( 'wallstreet_pro_options[portfolio_image_one]',array('default' => get_template_directory_uri().'/images/portfolio1.jpg',
	'type' => 'option','sanitize_callback' => 'esc_url_raw',));
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'wallstreet_pro_options[portfolio_image_one]',
			array(
				'label' => 'Project One Thumbnail',
				'section' => 'example_section_one',
				'settings' =>'wallstreet_pro_options[portfolio_image_one]',
				'section' => 'project_one_section_settings',
				'type' => 'upload',
			)
		)
	);
	//Project Two
	$wp_customize->add_section(
        'project_two_section_settings',
        array(
            'title' => __('Home Portfolio two','wallstreet'),
            'description' => '',
			'panel'  => 'wallstreet_project_setting',)
    );
	
	//Project Two Title
	$wp_customize->add_setting(
	'wallstreet_pro_options[portfolio_title_two]', array(
        'default'        => 'Wall Street Style',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control('wallstreet_pro_options[portfolio_title_two]', array(
        'label'   => __('Portfolio Title Two', 'wallstreet'),
        'section' => 'project_two_section_settings',
		'type' => 'text',
    ));
	
	//Project two description
	$wp_customize->add_setting(
    'wallstreet_pro_options[portfolio_description_two]',
    array(
        'default' => __('A wonderful serenity has taken possession of my entire soul, like these sweet mornings','wallstreet'),
		 'capability'     => 'edit_theme_options',
		 'sanitize_callback' => 'sanitize_text_field',
		 'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[portfolio_description_two]',
    array(
        'label' => __('Portfolio Description Two','wallstreet'),
        'section' => 'project_two_section_settings',
        'type' => 'textarea',	
    )
);
	
	//Project two image
	$wp_customize->add_setting( 'wallstreet_pro_options[portfolio_image_two]',array('default' => get_template_directory_uri().'/images/portfolio2.jpg','type' => 'option','sanitize_callback' => 'esc_url_raw',));	
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'wallstreet_pro_options[portfolio_image_two]',
			array(
				'label' => 'Project two Thumbnail',
				'section' => 'example_section_one',
				'settings' =>'wallstreet_pro_options[portfolio_image_two]',
				'section' => 'project_two_section_settings',
				'type' => 'upload',
			)
		)
	);
	
	//Project Three section
	$wp_customize->add_section(
        'project_three_section_settings',
        array(
            'title' => __('Home Portfolio three','wallstreet'),
            'description' => '',
			'panel'  => 'wallstreet_project_setting',)
    );
	
	
	
	//Project Three Title
	$wp_customize->add_setting(
	'wallstreet_pro_options[portfolio_title_three]', array(
        'default'        => 'Wall Street Style',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control('wallstreet_pro_options[portfolio_title_three]', array(
        'label'   => __('Portfolio Title Three', 'wallstreet'),
        'section' => 'project_three_section_settings',
		'type' => 'text',
    ));
	
	//Project three description
	$wp_customize->add_setting(
    'wallstreet_pro_options[portfolio_description_three]',
    array(
        'default' => __('A wonderful serenity has taken possession of my entire soul, like these sweet mornings','wallstreet'),
		 'capability'     => 'edit_theme_options',
		 'sanitize_callback' => 'sanitize_text_field',
		 'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[portfolio_description_three]',
    array(
        'label' => __('Portfolio Description Three','wallstreet'),
        'section' => 'project_three_section_settings',
        'type' => 'textarea',	
    )
);
	
	//Project three image
	$wp_customize->add_setting( 'wallstreet_pro_options[portfolio_image_three]',array('default' => get_template_directory_uri().'/images/portfolio3.jpg','type' => 'option','sanitize_callback' => 'esc_url_raw',));
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'wallstreet_pro_options[portfolio_image_three]',
			array(
				'label' => 'Project three Thumbnail',
				'section' => 'example_section_one',
				'settings' =>'wallstreet_pro_options[portfolio_image_three]',
				'section' => 'project_three_section_settings',
				'type' => 'upload',
			)
		)
	);
	
	
	//Project Four section
	$wp_customize->add_section(
        'project_four_section_settings',
        array(
            'title' => __('Home Portfolio Four','wallstreet'),
            'description' => '',
			'panel'  => 'wallstreet_project_setting',)
    );
	
	//Project Four Title
	$wp_customize->add_setting(
	'wallstreet_pro_options[portfolio_title_four]', array(
        'default'        => 'Wall Street Style',
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control('wallstreet_pro_options[portfolio_title_four]', array(
        'label'   => __('Portfolio Title Four', 'wallstreet'),
        'section' => 'project_four_section_settings',
		'type' => 'text',
    ));
	
	//Project four description
	$wp_customize->add_setting(
    'wallstreet_pro_options[portfolio_description_four]',
    array(
        'default' => __('A wonderful serenity has taken possession of my entire soul, like these sweet mornings','wallstreet'),
		 'capability'     => 'edit_theme_options',
		 'sanitize_callback' => 'sanitize_text_field',
		 'type' => 'option'
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[portfolio_description_four]',
    array(
        'label' => __('Portfolio Description Four','wallstreet'),
        'section' => 'project_four_section_settings',
        'type' => 'textarea',	
    )
);
	
	//Project Four image
	$wp_customize->add_setting( 'wallstreet_pro_options[portfolio_image_four]',array('default' => get_template_directory_uri().'/images/portfolio4.jpg','type' => 'option','sanitize_callback' => 'esc_url_raw',));
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'wallstreet_pro_options[portfolio_image_four]',
			array(
				'label' => 'Project four Thumbnail',
				'section' => 'example_section_one',
				'settings' =>'wallstreet_pro_options[portfolio_image_four]',
				'section' => 'project_four_section_settings',
				'type' => 'upload',
			)
		)
	);
	
	
	$wp_customize->add_section( 'more_project' , array(
		'title'      => __('Add More Project', 'wallstreet'),
		'panel'  => 'wallstreet_project_setting',
		'priority'   => 400,
   	) );
	
	class WP_project_Customize_Control extends WP_Customize_Control {
    public $type = 'new_menu';
    /**
    * Render the control's content.
    */
    public function render_content() {
    ?>
     <div class="pro-vesrion">
	 <P><?php _e('Want to add more projects and categorization than upgrade to pro','wallstreet');?></P>
	 </div>
	  <div class="pro-box">
	 <a href="<?php echo esc_url( __('http://webriti.com/wallstreet/', 'wallstreet'));?>" target="_blank" class="service" id="review_pro"><?php _e( 'UPGRADE TO PRO','wallstreet' ); ?></a>
	 <div>
    <?php
    }
}

$wp_customize->add_setting(
    'project_pro',
    array(
        'default' => __('','wallstreet'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
    )	
);
$wp_customize->add_control( new WP_project_Customize_Control( $wp_customize, 'project_pro', array(	
		'label' => __('Discover wallstreet Pro','wallstreet'),
        'section' => 'more_project',
		'setting' => 'project_pro',
    ))
);
}		
	add_action( 'customize_register', 'wallstreet_project_customizer' );
?>