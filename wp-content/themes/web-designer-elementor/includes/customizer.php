<?php

if ( class_exists("Kirki")){

	// HEADER SECTION

	Kirki::add_section( 'web_designer_elementor_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'web-designer-elementor' ),
	    'description'    => esc_html__( 'Here you can add header information.', 'web-designer-elementor' ),
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_designer_elementor_header_announcement_heading',
		'section'     => 'web_designer_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Announcement', 'web-designer-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    =>  esc_html__( 'Text', 'web-designer-elementor' ),
		'settings' => 'web_designer_elementor_header_announcement',
		'section'  => 'web_designer_elementor_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_designer_elementor_enable_button_heading',
		'section'     => 'web_designer_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( ' Header Button', 'web-designer-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    =>  esc_html__( 'Button Text', 'web-designer-elementor' ),
		'settings' => 'web_designer_elementor_header_button_text',
		'section'  => 'web_designer_elementor_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'url',
		'label'    =>  esc_html__( 'Button URL', 'web-designer-elementor' ),
		'settings' => 'web_designer_elementor_header_button_url',
		'section'  => 'web_designer_elementor_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_designer_elementor_enable_socail_link',
		'section'     => 'web_designer_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'web-designer-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'web_designer_elementor_section_header',
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'web-designer-elementor' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'web-designer-elementor' ),
		'settings'     => 'web_designer_elementor_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'web-designer-elementor' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'web-designer-elementor' ),
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'web-designer-elementor' ),
				'description' => esc_html__( 'Add the social icon url here.', 'web-designer-elementor' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 20
		],
	] );
	    
	// FOOTER SECTION

	Kirki::add_section( 'web_designer_elementor_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'web-designer-elementor' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'web-designer-elementor' ),
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_designer_elementor_footer_text_heading',
		'section'     => 'web_designer_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'web-designer-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'web_designer_elementor_footer_text',
		'section'  => 'web_designer_elementor_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_designer_elementor_footer_enable_heading',
		'section'     => 'web_designer_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'web-designer-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'web_designer_elementor_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'web-designer-elementor' ),
		'section'     => 'web_designer_elementor_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'web-designer-elementor' ),
			'off' => esc_html__( 'Disable', 'web-designer-elementor' ),
		],
	] );
}