<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


// #################################################
// Extend Kirki Options
// #################################################


Kirki::add_section( 'fp-featured', array(
    'title'          => __( 'Frontpage Featured Section', 'juniper-companion' ),
    'description'    => '',
    'panel'          => '', 
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

Kirki::add_field( 'juniper-config', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'fp-featured-toggle',
	'label'       => __( 'Frontpage Featured Status', 'juniper-companion' ),
	'section'     => 'fp-featured',
	'default'     => '2',
	'priority'    => 10,
	'choices'     => array(
		'1'   => esc_attr__( 'Show', 'juniper-companion' ),
		'2' => esc_attr__( 'Demo', 'juniper-companion' ),
		'3'  => esc_attr__( 'Hide', 'juniper-companion' ),
	),
) );

Kirki::add_field( 'juniper-config', array(
	'settings' => 'fp-featured-title',
	'label'    => __( 'Featured - Main Title', 'juniper-companion' ),
	'section'  => 'fp-featured',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'description'   => __( 'This is the big text in the featured section. Leave blank to hide.', 'juniper-companion' ),
) );

Kirki::add_field( 'juniper-config', array(
	'settings' => 'fp-featured-sub-title',
	'label'    => __( 'Featured - Sub Title', 'juniper-companion' ),
	'section'  => 'fp-featured',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'description'   => __( 'This is the smaller text in the featured section. Leave blank to hide.', 'juniper-companion' ),
) );

Kirki::add_field( 'juniper-config', array(
	'type'        => 'color',
	'settings'    => 'fp-featured-background-color',
	'label'       => __( 'Row Background Color', 'juniper-companion' ),
	'section'     => 'fp_banner_customizer_options',
	'default'     => '#ffffff',
	'priority'    => 10,
	'alpha'       => true,
	'description'   => __( 'Pick a background color for the row.', 'juniper-companion' ),
	'output' => array(
		array(
			'element'  => '.frontpage-featured',
			'property' => 'background-color',
		),
	),
) );
            
Kirki::add_field( 'juniper-config', array(
	'type'        => 'image',
	'settings'    => 'fp-featured-background-image',
	'label'       => __( 'Parallax Row Background', 'juniper-companion' ),
	'section'     => 'fp-featured',
	'default'     => '',
	'priority'    => 10,
) );    

Kirki::add_field( 'juniper-config', array(
	'type'        => 'select',
	'settings'    => 'juniper_left_featured',
	'label'       => __( 'Left Featured Page Column (from latest 50)', 'juniper-companion' ),
	'section'     => 'fp-featured',
	'default'     => juniper_random_page(),
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => Kirki_Helper::get_posts( array( 'posts_per_page' => 50, 'post_type' => 'page' ) ),
) );  

Kirki::add_field( 'juniper-config', array(
	'type'        => 'select',
	'settings'    => 'juniper_center_featured',
	'label'       => __( 'Center Featured Page Column (from latest 50)', 'juniper-companion' ),
	'section'     => 'fp-featured',
	'default'     => juniper_random_page(),
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => Kirki_Helper::get_posts( array( 'posts_per_page' => 50, 'post_type' => 'page' ) ),
) );  

Kirki::add_field( 'juniper-config', array(
	'type'        => 'select',
	'settings'    => 'juniper_right_featured',
	'label'       => __( 'Right Featured Page Column (from latest 50)', 'juniper-companion' ),
	'section'     => 'fp-featured',
	'default'     => juniper_random_page(),
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => Kirki_Helper::get_posts( array( 'posts_per_page' => 50, 'post_type' => 'page' ) ),
) );
            
Kirki::add_field( 'juniper-config', array(
	'settings' => 'fp-featured-slug',
	'label'    => __( 'Navigation Menu ID', 'juniper-companion' ),
	'section'  => 'fp-featured',
	'type'     => 'text',
	'priority' => 10,
	'default'  => 'featured',
	'description'   => __( 'The frontpage section IDs (what shows up in the hover state and the address bar when clicked) have already been set to a default show in this field. If you would like to change the ID so that a different term comes up in the slug for that section (ie. http://example.com/#top instead of /#home), then change the term below for the corresponding section. You will also want to add the custom menu items in the Menus section of your dashboard (click "Links," then add the entire URL, such as http://example.com/#top). IMPORTANT: You must also add this term to the title field in the menu editor. If you do not see this field you may have to activate it by selecting the Screen Options tab in the top right of the page and then checking the Title Attribute box.', 'juniper-companion' ),
) );

Kirki::add_section( 'fp-action1', array(
    'title'          => __( 'Frontpage Action Row #1', 'juniper-companion' ),
    'description'    => '',
    'panel'          => '', 
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

Kirki::add_field( 'juniper-config', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'fp-action1-toggle',
	'label'       => __( 'Frontpage Action Row Status', 'juniper-companion' ),
	'section'     => 'fp-action1',
	'default'     => '2',
	'priority'    => 1,
	'choices'     => array(
		'1'   => esc_attr__( 'Show', 'juniper-companion' ),
		'2' => esc_attr__( 'Demo', 'juniper-companion' ),
		'3'  => esc_attr__( 'Hide', 'juniper-companion' ),
	),
) );

Kirki::add_field( 'juniper-config', array(
	'type'        => 'color',
	'settings'    => 'fp-action1-background-color',
	'label'       => __( 'Row Background Color', 'juniper-companion' ),
	'section'     => 'fp-action1',
	'default'     => '#4c5152',
	'priority'    => 10,
	'alpha'       => true,
	'description'   => __( 'Pick a background color for the row.', 'juniper-companion' ),
	'output' => array(
		array(
			'element'  => '.frontpage-action1',
			'property' => 'background-color',
		),
	),
) );
            
Kirki::add_field( 'juniper-config', array(
	'type'        => 'image',
	'settings'    => 'fp-action1-background-image',
	'label'       => __( 'Parallax Row Background', 'juniper-companion' ),
	'section'     => 'fp-action1',
	'default'     => '',
	'priority'    => 10,
) ); 
            
Kirki::add_field( 'juniper-config', array(
	'settings' => 'fp-action1-title',
	'label'    => __( 'Action Row #1 - Main Title', 'juniper-companion' ),
	'section'  => 'fp-action1',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'description'   => __( 'This is the big text in the Action Row #1 section. Leave blank to hide.', 'juniper-companion' ),
) );

Kirki::add_field( 'juniper-config', array(
	'settings' => 'fp-action1-sub-title',
	'label'    => __( 'Action Row #1 - Sub Title', 'juniper-companion' ),
	'section'  => 'fp-action1',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'description'   => __( 'This is the smaller text in the Action Row #1 section. Leave blank to hide.', 'juniper-companion' ),
) );

Kirki::add_field( 'juniper-config', array(
	'settings' => 'fp-action1-button-text',
	'label'    => __( 'Action Row #1 - Button Text', 'juniper-companion' ),
	'section'  => 'fp-action1',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'description'   => __( 'This is the text in the button. Leave blank to hide.', 'juniper-companion' ),
) );

Kirki::add_field( 'juniper-config', array(
	'settings' => 'fp-action1-button-url',
	'label'    => __( 'Action Row #1 - Button URL', 'juniper-companion' ),
	'section'  => 'fp-action1',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'description'   => __( 'This is link destination for the button. Leave blank to hide.', 'juniper-companion' ),
	'sanitize_callback' => 'juniper_companion_sanitize_url'
) );        
            
Kirki::add_field( 'juniper-config', array(
	'settings' => 'fp-action1-slug',
	'label'    => __( 'Navigation Menu ID', 'juniper-companion' ),
	'section'  => 'fp-action1',
	'type'     => 'text',
	'priority' => 10,
	'default'  => 'action1',
	'description'   => __( 'The frontpage section IDs (what shows up in the hover state and the address bar when clicked) have already been set to a default show in this field. If you would like to change the ID so that a different term comes up in the slug for that section (ie. http://example.com/#top instead of /#home), then change the term below for the corresponding section. You will also want to add the custom menu items in the Menus section of your dashboard (click "Links," then add the entire URL, such as http://example.com/#top). IMPORTANT: You must also add this term to the title field in the menu editor. If you do not see this field you may have to activate it by selecting the Screen Options tab in the top right of the page and then checking the Title Attribute box.', 'juniper-companion' ),
) );

Kirki::add_section( 'fp-about', array(
    'title'          => __( 'Frontpage About Section', 'juniper-companion' ),
    'description'    => '',
    'panel'          => '', 
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

Kirki::add_field( 'juniper-config', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'fp-about-toggle',
	'label'       => __( 'About Status', 'juniper-companion' ),
	'section'     => 'fp-about',
	'default'     => '2',
	'priority'    => 1,
	'choices'     => array(
		'1'   => esc_attr__( 'Show', 'juniper-companion' ),
		'2' => esc_attr__( 'Demo', 'juniper-companion' ),
		'3'  => esc_attr__( 'Hide', 'juniper-companion' ),
	),
) );

Kirki::add_field( 'juniper-config', array(
	'type'        => 'color',
	'settings'    => 'fp-about-background-color',
	'label'       => __( 'Row Background Color', 'juniper-companion' ),
	'section'     => 'fp-about',
	'default'     => '#ffffff',
	'priority'    => 10,
	'alpha'       => true,
	'description'   => __( 'Pick a background color for the row.', 'juniper-companion' ),
	'output' => array(
		array(
			'element'  => '.frontpage-about',
			'property' => 'background-color',
		),
	),
) );
            
Kirki::add_field( 'juniper-config', array(
	'type'        => 'image',
	'settings'    => 'fp-about-background-image',
	'label'       => __( 'Parallax Row Background', 'juniper-companion' ),
	'section'     => 'fp-about',
	'default'     => '',
	'priority'    => 10,
) ); 

Kirki::add_field( 'juniper-config', array(
	'settings' => 'fp-about-title',
	'label'    => __( 'About - Main Title', 'juniper-companion' ),
	'section'  => 'fp-about',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'description'   => __( 'This is the big text in the about section. Leave blank to hide.', 'juniper-companion' ),
) );

Kirki::add_field( 'juniper-config', array(
	'settings' => 'fp-about-sub-title',
	'label'    => __( 'About - Sub Title', 'juniper-companion' ),
	'section'  => 'fp-about',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'description'   => __( 'This is the smaller text in the about section. Leave blank to hide.', 'juniper-companion' ),
) );

Kirki::add_field( 'juniper-config', array(
	'settings' => 'fp-about-description',
	'label'    => __( 'About - Description', 'juniper-companion' ),
	'section'  => 'fp-about',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'description'   => __( 'This is the smallest text in the about section. Leave blank to hide.', 'juniper-companion' ),
) );

Kirki::add_field( 'juniper-config', array(
	'type'        => 'custom',
	'settings'    => 'about-widget-note',
	'label'       => 'Populate About Content',
	'section'     => 'fp-about',
	'default'     => __( 'To populate the About content section, you will need to add About content widgets to the Frontpage About widget areas. Go to the Widgets section under Apperance in the left sidebar.', 'juniper-companion' ),
	'priority'    => 10,
) );

Kirki::add_field( 'juniper-config', array(
	'settings' => 'fp-about-slug',
	'label'    => __( 'Navigation Menu ID', 'juniper-companion' ),
	'section'  => 'fp-about',
	'type'     => 'text',
	'priority' => 10,
	'default'  => 'about',
	'description'   => __( 'The frontpage section IDs (what shows up in the hover state and the address bar when clicked) have already been set to a default show in this field. If you would like to change the ID so that a different term comes up in the slug for that section (ie. http://example.com/#top instead of /#home), then change the term below for the corresponding section. You will also want to add the custom menu items in the Menus section of your dashboard (click "Links," then add the entire URL, such as http://example.com/#top). IMPORTANT: You must also add this term to the title field in the menu editor. If you do not see this field you may have to activate it by selecting the Screen Options tab in the top right of the page and then checking the Title Attribute box.', 'juniper-companion' ),
) );




Kirki::add_section( 'fp-action2', array(
    'title'          => __( 'Frontpage Action Row #2', 'juniper-companion' ),
    'description'    => '',
    'panel'          => '', 
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

Kirki::add_field( 'juniper-config', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'fp-action2-toggle',
	'label'       => __( 'Frontpage Action Row #2 Status', 'juniper-companion' ),
	'section'     => 'fp-action2',
	'default'     => '2',
	'priority'    => 1,
	'choices'     => array(
		'1'   => esc_attr__( 'Show', 'juniper-companion' ),
		'2' => esc_attr__( 'Demo', 'juniper-companion' ),
		'3'  => esc_attr__( 'Hide', 'juniper-companion' ),
	),
) );

Kirki::add_field( 'juniper-config', array(
	'type'        => 'color',
	'settings'    => 'fp-action2-background-color',
	'label'       => __( 'Row Background Color', 'juniper-companion' ),
	'section'     => 'fp-action2',
	'default'     => '#4c5152',
	'priority'    => 10,
	'alpha'       => true,
	'description'   => __( 'Pick a background color for the row.', 'juniper-companion' ),
	'output' => array(
		array(
			'element'  => '.frontpage-action2',
			'property' => 'background-color',
		),
	),
) );
            
Kirki::add_field( 'juniper-config', array(
	'type'        => 'image',
	'settings'    => 'fp-action2-background-image',
	'label'       => __( 'Parallax Row Background', 'juniper-companion' ),
	'section'     => 'fp-action2',
	'default'     => '',
	'priority'    => 10,
) ); 
            
Kirki::add_field( 'juniper-config', array(
	'settings' => 'fp-action2-title',
	'label'    => __( 'Action Row #2 - Main Title', 'juniper-companion' ),
	'section'  => 'fp-action2',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'description'   => __( 'This is the big text in the Action Row #2 section. Leave blank to hide.', 'juniper-companion' ),
) );

Kirki::add_field( 'juniper-config', array(
	'settings' => 'fp-action2-button-text',
	'label'    => __( 'Action Row #2 - Button Text', 'juniper-companion' ),
	'section'  => 'fp-action2',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'description'   => __( 'This is the text in the button. Leave blank to hide.', 'juniper-companion' ),
) );

Kirki::add_field( 'juniper-config', array(
	'settings' => 'fp-action2-button-url',
	'label'    => __( 'Action Row #2 - Button URL', 'juniper-companion' ),
	'section'  => 'fp-action2',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'description'   => __( 'This is link destination for the button. Leave blank to hide.', 'juniper-companion' ),
	'sanitize_callback' => 'juniper_companion_sanitize_url'
) );

Kirki::add_field( 'juniper-config', array(
	'settings' => 'fp-action2-slug',
	'label'    => __( 'Navigation Menu ID', 'juniper-companion' ),
	'section'  => 'fp-action2',
	'type'     => 'text',
	'priority' => 10,
	'default'  => 'action2',
	'description'   => __( 'The frontpage section IDs (what shows up in the hover state and the address bar when clicked) have already been set to a default show in this field. If you would like to change the ID so that a different term comes up in the slug for that section (ie. http://example.com/#top instead of /#home), then change the term below for the corresponding section. You will also want to add the custom menu items in the Menus section of your dashboard (click "Links," then add the entire URL, such as http://example.com/#top). IMPORTANT: You must also add this term to the title field in the menu editor. If you do not see this field you may have to activate it by selecting the Screen Options tab in the top right of the page and then checking the Title Attribute box.', 'juniper-companion' ),
) );


Kirki::add_section( 'fp-team', array(
    'title'          => __( 'Frontpage Team Section', 'juniper-companion' ),
    'description'    => '',
    'panel'          => '', 
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

Kirki::add_field( 'juniper-config', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'fp-team-toggle',
	'label'       => __( 'Team Status', 'juniper-companion' ),
	'section'     => 'fp-team',
	'default'     => '2',
	'priority'    => 1,
	'choices'     => array(
		'1'   => esc_attr__( 'Show', 'juniper-companion' ),
		'2' => esc_attr__( 'Demo', 'juniper-companion' ),
		'3'  => esc_attr__( 'Hide', 'juniper-companion' ),
	),
) );

Kirki::add_field( 'juniper-config', array(
	'type'        => 'color',
	'settings'    => 'fp-team-background-color',
	'label'       => __( 'Row Background Color', 'juniper-companion' ),
	'section'     => 'fp-team',
	'default'     => '#ffffff',
	'priority'    => 10,
	'alpha'       => true,
	'description'   => __( 'Pick a background color for the row.', 'juniper-companion' ),
	'output' => array(
		array(
			'element'  => '.frontpage-team',
			'property' => 'background-color',
		),
	),
) );
            
Kirki::add_field( 'juniper-config', array(
	'type'        => 'image',
	'settings'    => 'fp-team-background-image',
	'label'       => __( 'Parallax Row Background', 'juniper-companion' ),
	'section'     => 'fp-team',
	'default'     => '',
	'priority'    => 10,
) );
            
Kirki::add_field( 'juniper-config', array(
	'settings' => 'fp-team-title',
	'label'    => __( 'Team - Main Title', 'juniper-companion' ),
	'section'  => 'fp-team',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'description'   => __( 'This is the big text in the team section. Leave blank to hide.', 'juniper-companion' ),
) );

Kirki::add_field( 'juniper-config', array(
	'settings' => 'fp-team-sub-title',
	'label'    => __( 'Team - Sub Title', 'juniper-companion' ),
	'section'  => 'fp-team',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'description'   => __( 'This is the smaller text in the team section. Leave blank to hide.', 'juniper-companion' ),
) );

Kirki::add_field( 'juniper-config', array(
	'type'        => 'custom',
	'settings'    => 'team-widget-note',
	'label'       => 'Populate Team Content',
	'section'     => 'fp-team',
	'default'     => __( 'To populate the Team content section, you will need to add About content widgets to the Frontpage Team widget areas. Go to the Widgets section under Apperance in the left sidebar.', 'juniper-companion' ),
	'priority'    => 10,
) );

Kirki::add_field( 'juniper-config', array(
	'settings' => 'fp-team-slug',
	'label'    => __( 'Navigation Menu ID', 'juniper-companion' ),
	'section'  => 'fp-team',
	'type'     => 'text',
	'priority' => 10,
	'default'  => 'team',
	'description'   => __( 'The frontpage section IDs (what shows up in the hover state and the address bar when clicked) have already been set to a default show in this field. If you would like to change the ID so that a different term comes up in the slug for that section (ie. http://example.com/#top instead of /#home), then change the term below for the corresponding section. You will also want to add the custom menu items in the Menus section of your dashboard (click "Links," then add the entire URL, such as http://example.com/#top). IMPORTANT: You must also add this term to the title field in the menu editor. If you do not see this field you may have to activate it by selecting the Screen Options tab in the top right of the page and then checking the Title Attribute box.', 'juniper-companion' ),
) );



Kirki::add_section( 'fp-social', array(
    'title'          => __( 'Frontpage Social Media Section', 'juniper-companion' ),
    'description'    => '',
    'panel'          => '', 
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

Kirki::add_field( 'juniper-config', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'fp-social-toggle',
	'label'       => __( 'Social Status', 'juniper-companion' ),
	'section'     => 'fp-social',
	'default'     => '2',
	'priority'    => 1,
	'choices'     => array(
		'1'   => esc_attr__( 'Show', 'juniper-companion' ),
		'2' => esc_attr__( 'Demo', 'juniper-companion' ),
		'3'  => esc_attr__( 'Hide', 'juniper-companion' ),
	),
) );

Kirki::add_field( 'juniper-config', array(
	'type'        => 'color',
	'settings'    => 'fp-social-background-color',
	'label'       => __( 'Row Background Color', 'juniper-companion' ),
	'section'     => 'fp-social',
	'default'     => '#ffffff',
	'priority'    => 10,
	'alpha'       => true,
	'description'   => __( 'Pick a background color for the row.', 'juniper-companion' ),
	'output' => array(
		array(
			'element'  => '.frontpage-social',
			'property' => 'background-color',
		),
	),
) );
            
Kirki::add_field( 'juniper-config', array(
	'type'        => 'image',
	'settings'    => 'fp-social-background-image',
	'label'       => __( 'Parallax Row Background', 'juniper-companion' ),
	'section'     => 'fp-social',
	'default'     => '',
	'priority'    => 10,
) );
            
Kirki::add_field( 'juniper-config', array(
	'settings' => 'fp-social-title',
	'label'    => __( 'Social - Main Title', 'juniper-companion' ),
	'section'  => 'fp-social',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'description'   => __( 'This is the big text in the social section. Leave blank to hide.', 'juniper-companion' ),
) );

Kirki::add_field( 'juniper-config', array(
	'settings' => 'fp-social-sub-title',
	'label'    => __( 'Social - Sub Title', 'juniper-companion' ),
	'section'  => 'fp-social',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'description'   => __( 'This is the smaller text in the social section. Leave blank to hide.', 'juniper-companion' ),
) );

Kirki::add_field( 'juniper-config', array(
	'type'        => 'custom',
	'settings'    => 'social-widget-note',
	'label'       => __( 'Populate Social Meida Section Content', 'juniper-companion' ),
	'section'     => 'fp-social',
	'default'     => __( 'To populate the Social Media section, you will need to add Social Meida widgets to the Social Media widget areas.  Go to the Widgets section under Apperance in the left sidebar.', 'juniper-companion' ),
	'priority'    => 10,
) );

Kirki::add_field( 'juniper-config', array(
	'settings' => 'fp-social-slug',
	'label'    => __( 'Navigation Menu ID', 'juniper-companion' ),
	'section'  => 'fp-social',
	'type'     => 'text',
	'priority' => 10,
	'default'  => 'social',
	'description'   => __( 'The frontpage section IDs (what shows up in the hover state and the address bar when clicked) have already been set to a default show in this field. If you would like to change the ID so that a different term comes up in the slug for that section (ie. http://example.com/#top instead of /#home), then change the term below for the corresponding section. You will also want to add the custom menu items in the Menus section of your dashboard (click "Links," then add the entire URL, such as http://example.com/#top). IMPORTANT: You must also add this term to the title field in the menu editor. If you do not see this field you may have to activate it by selecting the Screen Options tab in the top right of the page and then checking the Title Attribute box.', 'juniper-companion' ),
) );

Kirki::add_section( 'fp-test', array(
    'title'          => __( 'Frontpage Testimonial Section', 'juniper-companion' ),
    'description'    => '',
    'panel'          => '', 
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

Kirki::add_field( 'juniper-config', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'fp-test-toggle',
	'label'       => __( 'Testimonial Status', 'juniper-companion' ),
	'section'     => 'fp-test',
	'default'     => '2',
	'priority'    => 1,
	'choices'     => array(
		'1'   => esc_attr__( 'Show', 'juniper-companion' ),
		'2' => esc_attr__( 'Demo', 'juniper-companion' ),
		'3'  => esc_attr__( 'Hide', 'juniper-companion' ),
	),
) );

Kirki::add_field( 'juniper-config', array(
	'type'        => 'color',
	'settings'    => 'fp-test-background-color',
	'label'       => __( 'Row Background Color', 'juniper-companion' ),
	'section'     => 'fp-test',
	'default'     => '#ffffff',
	'priority'    => 10,
	'alpha'       => true,
	'description'   => __( 'Pick a background color for the row.', 'juniper-companion' ),
	'output' => array(
		array(
			'element'  => '.frontpage-test',
			'property' => 'background-color',
		),
	),
) );
            
Kirki::add_field( 'juniper-config', array(
	'type'        => 'image',
	'settings'    => 'fp-test-background-image',
	'label'       => __( 'Parallax Row Background', 'juniper-companion' ),
	'section'     => 'fp-test',
	'default'     => '',
	'priority'    => 10,
) );
            
Kirki::add_field( 'juniper-config', array(
	'settings' => 'fp-test-title',
	'label'    => __( 'Testimonial - Main Title', 'juniper-companion' ),
	'section'  => 'fp-test',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'description'   => __( 'This is the big text in the testimonial section. Leave blank to hide.', 'juniper-companion' ),
) );

Kirki::add_field( 'juniper-config', array(
	'type'     => 'textarea',
	'settings' => 'fp-test-description',
	'label'    => __( 'Testimonial', 'juniper-companion' ),
	'section'  => 'fp-test',
	'default'  => '',
	'priority' => 10,
) );

Kirki::add_field( 'juniper-config', array(
	'settings' => 'fp-test-tag',
	'label'    => __( 'Testimonial - Name', 'juniper-companion' ),
	'section'  => 'fp-test',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'description'   => __( 'This is the name under the testimonial section. Leave blank to hide.', 'juniper-companion' ),
) );

Kirki::add_field( 'juniper-config', array(
	'settings' => 'fp-test-tag-url',
	'label'    => __( 'Testimonial - Website Link', 'juniper-companion' ),
	'section'  => 'fp-test',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'description'   => __( 'This is the link applied to the name above.', 'juniper-companion' ),
	'sanitize_callback' => 'juniper_companion_sanitize_url'
) );

Kirki::add_field( 'juniper-config', array(
	'settings' => 'fp-test-slug',
	'label'    => __( 'Navigation Menu ID', 'juniper-companion' ),
	'section'  => 'fp-test',
	'type'     => 'text',
	'priority' => 10,
	'default'  => 'test',
	'description'   => __( 'The frontpage section IDs (what shows up in the hover state and the address bar when clicked) have already been set to a default show in this field. If you would like to change the ID so that a different term comes up in the slug for that section (ie. http://example.com/#top instead of /#home), then change the term below for the corresponding section. You will also want to add the custom menu items in the Menus section of your dashboard (click "Links," then add the entire URL, such as http://example.com/#top). IMPORTANT: You must also add this term to the title field in the menu editor. If you do not see this field you may have to activate it by selecting the Screen Options tab in the top right of the page and then checking the Title Attribute box.', 'juniper-companion' ),
) );


Kirki::add_section( 'fp-news', array(
    'title'          => __( 'Frontpage Page Content Section', 'juniper-companion' ),
    'description'    => '',
    'panel'          => '', 
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

Kirki::add_field( 'juniper-config', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'fp-news-toggle',
	'label'       => __( 'Content Row Status', 'juniper-companion' ),
	'section'     => 'fp-news',
	'default'     => '2',
	'priority'    => 1,
	'choices'     => array(
		'1'   => esc_attr__( 'Show', 'juniper-companion' ),
		'2'  => esc_attr__( 'Hide', 'juniper-companion' ),
	),
) );

Kirki::add_field( 'juniper-config', array(
	'type'        => 'color',
	'settings'    => 'fp-news-background-color',
	'label'       => __( 'Row Background Color', 'juniper-companion' ),
	'section'     => 'fp-news',
	'default'     => '#e7e7e7',
	'priority'    => 10,
	'alpha'       => true,
	'description'   => __( 'Pick a background color for the row.', 'juniper-companion' ),
	'output' => array(
		array(
			'element'  => '.frontpage-news',
			'property' => 'background-color',
		),
	),
) );
            
Kirki::add_field( 'juniper-config', array(
	'type'        => 'image',
	'settings'    => 'fp-news-background-image',
	'label'       => __( 'Parallax Row Background', 'juniper-companion' ),
	'section'     => 'fp-news',
	'default'     => '',
	'priority'    => 10,
) );
            
Kirki::add_field( 'juniper-config', array(
	'settings' => 'fp-news-title',
	'label'    => __( 'Content - Main Title', 'juniper-companion' ),
	'section'  => 'fp-news',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'description'   => __( 'This is the big text in the news section. Leave blank to hide.', 'juniper-companion' ),
) );

Kirki::add_field( 'juniper-config', array(
	'settings' => 'fp-news-sub-title',
	'label'    => __( 'Content - Sub Title', 'juniper-companion' ),
	'section'  => 'fp-news',
	'type'     => 'text',
	'priority' => 10,
	'default'  => '',
	'description'   => __( 'This is the smaller text in the news section. Leave blank to hide.', 'juniper-companion' ),
) );

Kirki::add_field( 'juniper-config', array(
	'settings' => 'fp-news-slug',
	'label'    => __( 'Navigation Menu ID', 'juniper-companion' ),
	'section'  => 'fp-news',
	'type'     => 'text',
	'priority' => 10,
	'default'  => 'news',
	'description'   => __( 'The frontpage section IDs (what shows up in the hover state and the address bar when clicked) have already been set to a default show in this field. If you would like to change the ID so that a different term comes up in the slug for that section (ie. http://example.com/#top instead of /#home), then change the term below for the corresponding section. You will also want to add the custom menu items in the Menus section of your dashboard (click "Links," then add the entire URL, such as http://example.com/#top). IMPORTANT: You must also add this term to the title field in the menu editor. If you do not see this field you may have to activate it by selecting the Screen Options tab in the top right of the page and then checking the Title Attribute box.', 'juniper-companion' ),
) );




// #################################################
// Some Custom Sanitize Functions
// #################################################

function juniper_companion_sanitize_url( $value ) {
    $value=esc_url( $value );
    return $value;
}

function juniper_companion_sanitize_email( $value ) {
    $value=sanitize_email( $value );
    return $value;
}



// #################################################
// Get a Random Page ID
// #################################################

function juniper_random_page(){
    $get_pages = get_pages();
    if(!empty($get_pages)) {
        shuffle($get_pages);
        $page = $get_pages[0]->ID;
    } else {
        $page = "";
    }
    return $page;

}