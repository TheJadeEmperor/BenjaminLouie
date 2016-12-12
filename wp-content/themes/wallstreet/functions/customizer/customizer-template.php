<?php
function wallstreet_pro_template_customizer( $wp_customize ) {
class wallstreet_Customize_about_section_upgrade extends WP_Customize_Control {
		public function render_content() { ?>
        <h3><?php _e('Want to add About us Template Heading and Add Team Section Then Upgrade to Pro/','wallstreet'); ?><a href="<?php echo esc_url( 'http://www.webriti.com/wallstreet' ); ?>" target="_blank"><?php _e(' Upgrade To Pro','wallstreet'); ?> </a>  
		<?php
		}
	}
	
//Contact Address
class wallstreet_Customize_phone_contact_section_upgrade extends WP_Customize_Control {
		public function render_content() { ?>
        <h3><?php _e('Want to Add Contact Address in Contact Template Then Upgrade to Pro/','wallstreet'); ?><a href="<?php echo esc_url( 'http://www.webriti.com/wallstreet' ); ?>" target="_blank"><?php _e(' Upgrade To Pro','wallstreet'); ?> </a>  
		<?php
		}
	}

//Contact Phone
class wallstreet_Customize_contact_phone_section_upgrade extends WP_Customize_Control {
		public function render_content() { ?>
        <h3><?php _e('Want to Add Contact Phone Number in Contact Template Then Upgrade to Pro/','wallstreet'); ?><a href="<?php echo esc_url( 'http://www.webriti.com/wallstreet' ); ?>" target="_blank"><?php _e(' Upgrade To Pro','wallstreet'); ?> </a>  
		<?php
		}
	}
//Conact mail	
class wallstreet_Customize_contact_mail_section_upgrade extends WP_Customize_Control {
		public function render_content() { ?>
        <h3><?php _e('Want to Add Email in Contact Template Then Upgrade to Pro/','wallstreet'); ?><a href="<?php echo esc_url( 'http://www.webriti.com/wallstreet' ); ?>" target="_blank"><?php _e(' Upgrade To Pro','wallstreet'); ?> </a>  
		<?php
		}
	}	
	
//Conact form	
class wallstreet_Customize_contact_form_section_upgrade extends WP_Customize_Control {
		public function render_content() { ?>
        <h3><?php _e('Want to Add Contact Form Title & Description in Contact Template Then Upgrade to Pro/','wallstreet'); ?><a href="<?php echo esc_url( 'http://www.webriti.com/wallstreet' ); ?>" target="_blank"><?php _e(' Upgrade To Pro','wallstreet'); ?> </a>  
		<?php
		}
	}	
	
//Contact Map
//Conact form	
class wallstreet_Customize_contact_map_section_upgrade extends WP_Customize_Control {
		public function render_content() { ?>
        <h3><?php _e('Want to Add Map in Contact Template Then Upgrade to Pro/','wallstreet'); ?><a href="<?php echo esc_url( 'http://www.webriti.com/wallstreet' ); ?>" target="_blank"><?php _e(' Upgrade To Pro','wallstreet'); ?> </a>  
		<?php
		}
	}	
	

//Template panel 
	$wp_customize->add_panel( 'wallstreet_pro_template', array(
		'priority'       => 960,
		'capability'     => 'edit_theme_options',
		'title'      => __('Template Settings', 'wallstreet'),
	) );
	
	
	// add section to manage Section heading
	$wp_customize->add_section(
        'pro_template_section_heading',
        array(
            'title' => __('Section Heading','wallstreet'),
			'panel'  => 'wallstreet_pro_template',
			'priority'   => 100,
			)
    );
	
	$wp_customize->add_setting( 'wallstreet_pro_options[about_upgrade]', array(
		'default'				=> false,
		'capability'			=> 'edit_theme_options',
		'sanitize_callback'	=> 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control(
		new wallstreet_Customize_about_section_upgrade(
		$wp_customize,
		'wallstreet_pro_options[about_upgrade]',
			array(
				'label'					=> __('Wallstreet Upgrade','wallstreet'),
				'section'				=> 'pro_template_section_heading',
				'settings'				=> 'wallstreet_pro_options[about_upgrade]',
			)
		)
	);
	
	// About us page Heading
	$wp_customize->add_setting(
		'wallstreet_pro_options[about_team_title]',
		array('capability'  => 'edit_theme_options',
		'default' => __('Our Great Team','wallstreet'), 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[about_team_title]',
		array(
			'type' => 'text',
			'label' => __('About Us Page Team Heading','wallstreet'),
			'section' => 'pro_template_section_heading',
			'input_attrs' => array('disabled' => 'disabled')
		)
	);
	
	
	
	$wp_customize->add_setting(
		'wallstreet_pro_options[about_team_description]',
		array('capability'  => 'edit_theme_options',
		'default' => __('We Offer Great Services to our Clients','wallstreet'), 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[about_team_description]',
		array(
			'type' => 'text',
			'label' => __('About Us Page Team Description','wallstreet'),
			'section' => 'pro_template_section_heading',
			'input_attrs' => array('disabled' => 'disabled')
		)
	);
	
	//Conatct Page
	// add section to manage Address Section heading
	$wp_customize->add_section(
        'conatact_page',
        array(
            'title' => __('Contact Page Address Section Settings','wallstreet'),
			'panel'  => 'wallstreet_pro_template',
			'priority'   => 100,
			
			)
    );
	
	$wp_customize->add_setting( 'wallstreet_pro_options[contact_add_upgrade]', array(
		'default'				=> false,
		'capability'			=> 'edit_theme_options',
		'sanitize_callback'	=> 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control(
		new wallstreet_Customize_phone_contact_section_upgrade(
		$wp_customize,
		'wallstreet_pro_options[contact_add_upgrade]',
			array(
				'label'					=> __('Wallstreet Upgrade','wallstreet'),
				'section'				=> 'conatact_page',
				'settings'				=> 'wallstreet_pro_options[contact_add_upgrade]',
			)
		)
	);
	
	
	// Enable Contact Page Address Section:
	$wp_customize->add_setting(
		'wallstreet_pro_options[contact_address_settings]',
		array('capability'  => 'edit_theme_options',
		'default' => true, 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[contact_address_settings]',
		array(
			'type' => 'checkbox',
			'label' => __('Enable Contact Page Address Section:','wallstreet'),
			'section' => 'conatact_page',
		)
	);
	
	
	
	
	// Conatct icon
	$wp_customize->add_setting(
		'wallstreet_pro_options[contact_address_icon]',
		array('capability'  => 'edit_theme_options',
		'default' => 'fa-map-marker', 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[contact_address_icon]',
		array(
			'type' => 'text',
			'label' => __('Contact Address Icon:','wallstreet'),
			'section' => 'conatact_page',
			'input_attrs' => array('disabled' => 'disabled')
		)
	);
	
	
	// Conatct address
	$wp_customize->add_setting(
		'wallstreet_pro_options[contact_address_title]',
		array('capability'  => 'edit_theme_options',
		'default' => __('Address','wallstreet'), 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[contact_address_title]',
		array(
			'type' => 'text',
			'label' => __('Contact Address Title:','wallstreet'),
			'section' => 'conatact_page',
			'input_attrs' => array('disabled' => 'disabled')
		)
	);
	
	
	// Contact Aaddress Designation One:
	$wp_customize->add_setting(
		'wallstreet_pro_options[contact_address_designation_one]',
		array('capability'  => 'edit_theme_options',
		'default' => __('Hoffman Parkway, P.O. Box 353','wallstreet'), 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[contact_address_designation_one]',
		array(
			'type' => 'text',
			'label' => __('Contact Address Designation One:','wallstreet'),
			'section' => 'conatact_page',
			'input_attrs' => array('disabled' => 'disabled')
		)
	);
	
	$wp_customize->add_setting(
		'wallstreet_pro_options[contact_address_designation_two]',
		array('capability'  => 'edit_theme_options',
		'default' => __('Mountain View. USA','wallstreet'), 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[contact_address_designation_two]',
		array(
			'type' => 'text',
			'label' => __('Contact Address Designation Two:','wallstreet'),
			'section' => 'conatact_page',
			'input_attrs' => array('disabled' => 'disabled')
		)
	);
	
	// add section to manage conatct phone Section heading
	$wp_customize->add_section(
        'conatact_phone',
        array(
            'title' => __('Contact Page Phone Section Settings','wallstreet'),
			'panel'  => 'wallstreet_pro_template',
			'priority'   => 200,
			
			)
    );
	
	$wp_customize->add_setting( 'wallstreet_pro_options[contact_phone_upgrade]', array(
		'default'				=> false,
		'capability'			=> 'edit_theme_options',
		'sanitize_callback'	=> 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control(
		new wallstreet_Customize_contact_phone_section_upgrade(
		$wp_customize,
		'wallstreet_pro_options[contact_phone_upgrade]',
			array(
				'label'					=> __('Wallstreet Upgrade','wallstreet'),
				'section'				=> 'conatact_phone',
				'settings'				=> 'wallstreet_pro_options[contact_phone_upgrade]',
			)
		)
	);
	
	
	// Enable Contact Page phone Section:
	$wp_customize->add_setting(
		'wallstreet_pro_options[contact_phone_settings]',
		array('capability'  => 'edit_theme_options',
		'default' => true, 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[contact_phone_settings]',
		array(
			'type' => 'checkbox',
			'label' => __('Enable Contact Page Phone Section:','wallstreet'),
			'section' => 'conatact_phone',
			'input_attrs' => array('disabled' => 'disabled')
		)
	);
	
	
	
	
	// Conatct phone icon
	$wp_customize->add_setting(
		'wallstreet_pro_options[contact_phone_icon]',
		array('capability'  => 'edit_theme_options',
		'default' => 'fa-phone', 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[contact_phone_icon]',
		array(
			'type' => 'text',
			'label' => __('Contact Phone Icon:','wallstreet'),
			'section' => 'conatact_phone',
			'input_attrs' => array('disabled' => 'disabled')
			
		)
	);
	
	
	// Contact Phone Title: 
	$wp_customize->add_setting(
		'wallstreet_pro_options[contact_phone_title]',
		array('capability'  => 'edit_theme_options',
		'default' => __('Phone','wallstreet'), 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[contact_phone_title]',
		array(
			'type' => 'text',
			'label' => __('Contact Phone Title:','wallstreet'),
			'section' => 'conatact_phone',
			'input_attrs' => array('disabled' => 'disabled')
		)
	);
	
	
	// Contact Phone Number One:
	$wp_customize->add_setting(
		'wallstreet_pro_options[contact_phone_number_one]',
		array('capability'  => 'edit_theme_options',
		'default' => __('1-800-123-789','wallstreet'), 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[contact_phone_number_one]',
		array(
			'type' => 'text',
			'label' => __('Contact Phone Number One:','wallstreet'),
			'section' => 'conatact_phone',
			'input_attrs' => array('disabled' => 'disabled')
		)
	);
	
	
	// Contact Phone Number Two:
	$wp_customize->add_setting(
		'wallstreet_pro_options[contact_phone_number_two]',
		array('capability'  => 'edit_theme_options',
		'default' => __('1-800-123-789','wallstreet'), 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[contact_phone_number_two]',
		array(
			'type' => 'text',
			'label' => __('Contact Phone Number Two:','wallstreet'),
			'section' => 'conatact_phone',
			'input_attrs' => array('disabled' => 'disabled')
		)
	);
	
	
	
	// add section to manage Contact Page Email Section Settings
	$wp_customize->add_section(
        'conatact_mail',
        array(
            'title' => __('Contact Page Email Section Settings','wallstreet'),
			'panel'  => 'wallstreet_pro_template',
			'priority'   => 200,
			
			)
    );
	
	
	$wp_customize->add_setting( 'wallstreet_pro_options[mail_upgrade]', array(
		'default'				=> false,
		'capability'			=> 'edit_theme_options',
		'sanitize_callback'	=> 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control(
		new wallstreet_Customize_contact_mail_section_upgrade(
		$wp_customize,
		'wallstreet_pro_options[mail_upgrade]',
			array(
				'label'					=> __('Wallstreet Upgrade','wallstreet'),
				'section'				=> 'conatact_mail',
				'settings'				=> 'wallstreet_pro_options[mail_upgrade]',
			)
		)
	);
	
	
	
	// Enable Contact Page Email Section:
	$wp_customize->add_setting(
		'wallstreet_pro_options[contact_email_settings]',
		array('capability'  => 'edit_theme_options',
		'default' => true, 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[contact_email_settings]',
		array(
			'type' => 'checkbox',
			'label' => __('Enable Contact Page Email Section:','wallstreet'),
			'section' => 'conatact_mail',
			'input_attrs' => array('disabled' => 'disabled')
		)
	);
	
	// Conatct Email icon
	$wp_customize->add_setting(
		'wallstreet_pro_options[contact_email_icon]',
		array('capability'  => 'edit_theme_options',
		'default' => 'fa-inbox', 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[contact_email_icon]',
		array(
			'type' => 'text',
			'label' => __('Contact Email Icon:','wallstreet'),
			'section' => 'conatact_mail',
			'input_attrs' => array('disabled' => 'disabled')
		)
	);
	
	
	// Contact Email Title: 
	$wp_customize->add_setting(
		'wallstreet_pro_options[contact_email_title]',
		array('capability'  => 'edit_theme_options',
		'default' => __('Email','wallstreet'), 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[contact_email_title]',
		array(
			'type' => 'text',
			'label' => __('Contact Email Title:','wallstreet'),
			'section' => 'conatact_mail',
			'input_attrs' => array('disabled' => 'disabled')
		)
	);
	
	
	// Contact Email One:
	$wp_customize->add_setting(
		'wallstreet_pro_options[contact_email_number_one]',
		array('capability'  => 'edit_theme_options',
		'default' => __('info@webriti.com','wallstreet'), 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[contact_email_number_one]',
		array(
			'type' => 'text',
			'label' => __('Contact Email One:','wallstreet'),
			'section' => 'conatact_mail',
			'input_attrs' => array('disabled' => 'disabled')
		)
	);
	
	
	// Contact Email Number Two:
	$wp_customize->add_setting(
		'wallstreet_pro_options[contact_email_number_two]',
		array('capability'  => 'edit_theme_options',
		'default' => __('1-800-123-789','wallstreet'), 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[contact_email_number_two]',
		array(
			'type' => 'text',
			'label' => __('Contact Email Two:','wallstreet'),
			'section' => 'conatact_mail',
			'input_attrs' => array('disabled' => 'disabled')
		)
	);
	
	
	// Contact Email One:
	$wp_customize->add_setting(
		'wallstreet_pro_options[contact_email_number_one]',
		array('capability'  => 'edit_theme_options',
		'default' => __('info@webriti.com','wallstreet'), 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[contact_email_number_one]',
		array(
			'type' => 'text',
			'label' => __('Contact Email One:','wallstreet'),
			'section' => 'conatact_mail',
			'input_attrs' => array('disabled' => 'disabled')
		)
	);
	
	
	
	// add section to manage Contact Form title Settings
	$wp_customize->add_section(
        'conatact_form',
        array(
            'title' => __('Contact Form Settings','wallstreet'),
			'panel'  => 'wallstreet_pro_template',
			'priority'   => 200,
			
			)
    );
	
	$wp_customize->add_setting( 'wallstreet_pro_options[contact_form_upgrade]', array(
		'default'				=> false,
		'capability'			=> 'edit_theme_options',
		'sanitize_callback'	=> 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control(
		new wallstreet_Customize_contact_form_section_upgrade(
		$wp_customize,
		'wallstreet_pro_options[contact_form_upgrade]',
			array(
				'label'					=> __('Wallstreet Upgrade','wallstreet'),
				'section'				=> 'conatact_form',
				'settings'				=> 'wallstreet_pro_options[contact_form_upgrade]',
			)
		)
	);
	
	// Contact Form title:
	$wp_customize->add_setting(
		'wallstreet_pro_options[contact_form_title]',
		array('capability'  => 'edit_theme_options',
		'default' => __('Drop Us a Line','wallstreet'), 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[contact_form_title]',
		array(
			'type' => 'text',
			'label' => __('Contact Form title:','wallstreet'),
			'section' => 'conatact_form',
			'input_attrs' => array('disabled' => 'disabled')
		)
	);
	
	
	// Contact Form Description:
	$wp_customize->add_setting(
		'wallstreet_pro_options[contact_form_description]',
		array('capability'  => 'edit_theme_options',
		'default' => __('Feel Free to write us a Message','wallstreet'), 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[contact_form_description]',
		array(
			'type' => 'text',
			'label' => __('Contact Form Description:','wallstreet'),
			'section' => 'conatact_form',
			'input_attrs' => array('disabled' => 'disabled')
		)
	);
	
	
	
	// Conatct Google map
	$wp_customize->add_section(
        'conatact_page_map',
        array(
            'title' => __('Google Maps','wallstreet'),
			'panel'  => 'wallstreet_pro_template',
			'priority'   => 400,
			
			)
    );
	
	$wp_customize->add_setting( 'wallstreet_pro_options[conatact_map]', array(
		'default'				=> false,
		'capability'			=> 'edit_theme_options',
		'sanitize_callback'	=> 'wp_filter_nohtml_kses',
	));
	$wp_customize->add_control(
		new wallstreet_Customize_contact_map_section_upgrade(
		$wp_customize,
		'wallstreet_pro_options[conatact_map]',
			array(
				'label'					=> __('Wallstreet Upgrade','wallstreet'),
				'section'				=> 'conatact_page_map',
				'settings'				=> 'wallstreet_pro_options[conatact_map]',
			)
		)
	);
	
	// Google map:
	$wp_customize->add_setting(
		'wallstreet_pro_options[contact_google_map_enabled]',
		array('capability'  => 'edit_theme_options',
		'default' => __('themes@webriti.com','wallstreet'), 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[contact_google_map_enabled]',
		array(
			'type' => 'checkbox',
			'label' => __('Enable Google Map in contact page','wallstreet'),
			'section' => 'conatact_page_map',
			'input_attrs' => array('disabled' => 'disabled')
		)
	);
	
	//Google map  tilte
	$wp_customize->add_setting(
		'wallstreet_pro_options[contact_google_map_title]',
		array('capability'  => 'edit_theme_options',
		'default' => __('Location Map','wallstreet'), 
		'type' => 'option',
		'sanitize_callback' => 'sanitize_text_field',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[contact_google_map_title]',
		array(
			'type' => 'text',
			'label' => __('Google Map Title:','wallstreet'),
			'section' => 'conatact_page_map',
			'input_attrs' => array('disabled' => 'disabled')
		)
	);
	
	//Google map URL
	
	$wp_customize->add_setting(
		'wallstreet_pro_options[contact_google_map_url]',
		array('capability'  => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'default' => __('https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Kota+Industrial+Area,+Kota,+Rajasthan&amp;aq=2&amp;oq=kota+&amp;sll=25.003049,76.117499&amp;sspn=0.020225,0.042014&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Kota+Industrial+Area,+Kota,+Rajasthan&amp;z=13&amp;ll=25.142832,75.879538','wallstreet'), 
		'type' => 'option',
		));

	$wp_customize->add_control(
		'wallstreet_pro_options[contact_google_map_url]',
		array(
			'type' => 'text',
			'label' => __('Google Map URL:','wallstreet'),
			'section' => 'conatact_page_map',
			'input_attrs' => array('disabled' => 'disabled')
		)
	);
	
	
	}
	add_action( 'customize_register', 'wallstreet_pro_template_customizer' );
	?>