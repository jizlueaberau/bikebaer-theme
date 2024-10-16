<?php

	if ( ! class_exists( 'Kirki' ) ) {
		return;
	}

/* Panels */

new \Kirki\Panel(
	'bikebaer_theme_option_panel',
	[
		'priority'		=> 10,
		'title'			=> esc_html__( 'Bikebär Einstellungen', 'bikebaer' ),
		'description'	=> esc_html__( 'Globale Einstellungen des Themes', 'Kirki' )
	]
);

/* Sections */

new \Kirki\Section(
	'bikebaer_header',
	[
		'title'			=> esc_html__( 'Header Startseite', 'bikebaer' ),
		'description'	=> 'Einstellungen des Headers der Startseite',
		'panel'			=> 'bikebaer_theme_option_panel',
		'priority'		=> 10

	]
);

new \Kirki\Section(
	'bikebaer_footer',
	[
		'title'			=> esc_html__( 'Footerbereich', 'bikebaer' ),
		'description'	=> esc_html__( 'Kontaktangaben Fusszeile', 'bikebaer' ),
		'panel'			=> 'bikebaer_theme_option_panel',
		'priority'		=> 20
	]
);

new \Kirki\Section(
	'bikebaer_footer_social',
	[
		'title'			=> esc_html__( 'Social Media Kanäle', 'bikebaer' ),
		'description'	=> '',
		'panel'			=> 'bikebaer_theme_option_panel',
		'priority'		=> 30

	]
);

/* Fields */

/**
 * Save data as an array.
 */
new \Kirki\Field\Image(
	[
		'settings'    => 'header_image',
		'label'       => esc_html__( 'Startbild', 'bikebaer' ),
		'description' => esc_html__( 'Hier kann das Startbild ausgewählt werden.', 'bikebaer' ),
		'section'     => 'bikebaer_header',
		'default'     => '',
		'choices'     => [
			'save_as' => 'array',
		],
		'priority' => 10,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'button_text',
		'label'    => esc_html__( 'Kontaktbutton Text', 'bikebaer' ),
		'section'  => 'bikebaer_header',
		'default'  => '',
		'priority' => 20,
	]
);

new \Kirki\Field\URL(
	[
		'settings' => 'button_url',
		'label'    => esc_html__( 'Zielseite Button', 'bikebaer' ),
		'section'  => 'bikebaer_header',
		'default'  => '',
		'priority' => 30,
	]
);

new \Kirki\Field\Editor(
	[
		'settings'		=> 'footer_address',
		'label'			=> esc_html__( 'Kontaktadresse', 'bikebaer' ),
		'description'	=> '',
		'section'		=> 'bikebaer_footer',
		'default'		=> '',
		'priority' => 10,
	]
);

new \Kirki\Field\Editor(
	[
		'settings'		=> 'footer_office_hours',
		'label'			=> esc_html__( 'Öffnungszeiten', 'bikebaer' ),
		'description'	=> '',
		'section'		=> 'bikebaer_footer',
		'default'		=> '',
		'priority' => 20,
	]
);

/* Social Media Repeater */

new \Kirki\Field\Repeater(
	[
		'settings'			=> 'social_media',
		'label'				=> esc_html__( 'Social Media Channels', 'bikebaer' ),
		'section'			=> 'bikebaer_footer_social',
		'priority'			=> 10,
		'row_label'			=> [
			'type' 			=> 'field',
			'value'			=> esc_html__( 'Social Media Channel', 'bikebaer' ),
			'field'			=> 'channel_name'
		],
		'fields'			=> [
			'channel_name'	=> [
				'type' 				=> 'text',
				'label'				=> esc_html__( 'Channel Name', 'bikebaer' ),
				'description'		=> esc_html__( 'Name des Social Media Kanals', 'bikebaer' ),
				'default'			=> ''
			],
			'channel_icon'	=> [
				'type' 				=> 'image',
				'label' 			=>	esc_html__( 'Channel Icon', 'bikebaer' ),
				'description' 		=> esc_html__( 'Channel Icon auswählen', 'bikebaer' ),
				'default'			=> '',
				'choices'			=> [ 'save_as' => 'array' ]
			],
			'channel_url'	=> [
				'type'				=> 'text',
				'label'				=> esc_html__( 'Channel URL', 'bikebaer' ),
				'description'		=> esc_html__( 'URL des Social Media Profils', 'bikebaer' ),
				'default'			=> esc_html__( 'e.g. https://www.facebook.com/profile-name', 'bikebaer' )
			],
			'icon_style'	=> [
				'type'				=> 'textarea',
				'label'				=> esc_html__( 'Icon CSS Style', 'bikebaer' ),
				'description'		=> esc_html__( 'Grösse des Icons per CSS Style anpassen'),
				'default'			=> ''
			]
		]
	]
);