<?php defined( 'ABSPATH' ) OR die( 'This script cannot be accessed directly.' );

/**
 * Shortcode: us_cta
 *
 * @var $shortcode string Current shortcode name
 * @var $config array Shortcode's config
 *
 * @param $config ['atts'] array Shortcode's attributes and default values
 */
vc_map( array(
	'base' => 'us_cta',
	'name' => __( 'ActionBox', 'us' ),
	'icon' => 'icon-wpb-ui-separator-label',
	'category' => __( 'Content', 'us' ),
	'description' => __( 'Call to action', 'us' ),
	'weight' => 220,
	'params' => array(
		array(
			'param_name' => 'title',
			'heading' => __( 'ActionBox Title', 'us' ),
			'type' => 'textfield',
			'std' => $config['atts']['title'],
			'holder' => 'div',
			'weight' => 260,
		),
		array(
			'param_name' => 'content',
			'heading' => __( 'ActionBox Text', 'us' ),
			'type' => 'textarea',
			'std' => '',
			'weight' => 250,
		),
		array(
			'param_name' => 'color',
			'heading' => __( 'ActionBox Color Style', 'us' ),
			'type' => 'dropdown',
			'value' => array(
				__( 'Primary bg & White text', 'us' ) => 'primary',
				__( 'Secondary bg & White text', 'us' ) => 'secondary',
				__( 'Alternate bg & Content text', 'us' ) => 'light',
				__( 'Custom colors', 'us' ) => 'custom',
			),
			'std' => $config['atts']['color'],
			'weight' => 240,
		),
		array(
			'param_name' => 'bg_color',
			'heading' => __( 'Background Color', 'us' ),
			'type' => 'colorpicker',
			'std' => $config['atts']['bg_color'],
			'class' => '',
			'dependency' => array( 'element' => 'color', 'value' => 'custom' ),
			'weight' => 230,
		),
		array(
			'param_name' => 'text_color',
			'heading' => __( 'Text Color', 'us' ),
			'type' => 'colorpicker',
			'std' => $config['atts']['text_color'],
			'class' => '',
			'dependency' => array( 'element' => 'color', 'value' => 'custom' ),
			'weight' => 220,
		),
		array(
			'param_name' => 'title_tag',
			'heading' => __( 'Title Tag Name', 'us' ),
			'description' => __( 'Used for SEO purposes', 'us' ),
			'type' => 'dropdown',
			'value' => array(
				'h1' => 'h1',
				'h2' => 'h2',
				'h3' => 'h3',
				'h4' => 'h4',
				'h5' => 'h5',
				'h6' => 'h6',
				'div' => 'div',
			),
			'std' => $config['atts']['title_tag'],
			'weight' => 215,
		),
		array(
			'param_name' => 'controls',
			'heading' => __( 'Button(s) Location', 'us' ),
			'type' => 'dropdown',
			'value' => array(
				__( 'At Right', 'us' ) => 'right',
				__( 'At Bottom', 'us' ) => 'bottom',
			),
			'std' => $config['atts']['controls'],
			'weight' => 210,
		),
		array(
			'param_name' => 'btn_link',
			'heading' => __( 'Button Link', 'us' ),
			'type' => 'vc_link',
			'std' => $config['atts']['btn_link'],
			'weight' => 200,
		),
		array(
			'param_name' => 'btn_label',
			'heading' => __( 'Button Label', 'us' ),
			'type' => 'textfield',
			'std' => $config['atts']['btn_label'],
			'edit_field_class' => 'vc_col-sm-4 vc_column',
			'weight' => 190,
		),
		array(
			'param_name' => 'btn_style',
			'heading' => __( 'Button Style', 'us' ),
			'type' => 'dropdown',
			'value' => array(
				__( 'Raised', 'us' ) => 'raised',
				__( 'Flat', 'us' ) => 'flat',
			),
			'std' => $config['atts']['btn_style'],
			'edit_field_class' => 'vc_col-sm-4 vc_column',
			'weight' => 180,
		),
		array(
			'param_name' => 'btn_color',
			'heading' => __( 'Button Color', 'us' ),
			'type' => 'dropdown',
			'value' => array(
				__( 'Primary (theme color)', 'us' ) => 'primary',
				__( 'Secondary (theme color)', 'us' ) => 'secondary',
				__( 'Light (theme color)', 'us' ) => 'light',
				__( 'Contrast (theme color)', 'us' ) => 'contrast',
				__( 'Black', 'us' ) => 'black',
				__( 'White', 'us' ) => 'white',
				__( 'Custom colors', 'us' ) => 'custom',
			),
			'std' => $config['atts']['btn_color'],
			'edit_field_class' => 'vc_col-sm-4 vc_column',
			'weight' => 170,
		),
		array(
			'param_name' => 'btn_bg_color',
			'heading' => __( 'Button Background Color', 'us' ),
			'type' => 'colorpicker',
			'std' => $config['atts']['btn_bg_color'],
			'class' => '',
			'dependency' => array( 'element' => 'btn_color', 'value' => 'custom' ),
			'weight' => 160,
		),
		array(
			'param_name' => 'btn_text_color',
			'heading' => __( 'Button Text Color', 'us' ),
			'type' => 'colorpicker',
			'std' => $config['atts']['btn_text_color'],
			'class' => '',
			'dependency' => array( 'element' => 'btn_color', 'value' => 'custom' ),
			'weight' => 150,
		),
		array(
			'param_name' => 'btn_size',
			'heading' => __( 'Button Size', 'us' ),
			'type' => 'textfield',
			'std' => $config['atts']['btn_size'],
			'edit_field_class' => 'vc_col-sm-4 vc_column',
			'weight' => 140,
		),
		array(
			'param_name' => 'btn_icon',
			'heading' => __( 'Button Icon (optional)', 'us' ),
			'description' => sprintf( __( '%s or %s icon name', 'us' ), '<a href="http://fontawesome.io/icons/" target="_blank">FontAwesome</a>', '<a href="http://designjockey.github.io/material-design-fonticons/" target="_blank">Material Design</a>' ),
			'type' => 'textfield',
			'std' => $config['atts']['btn_icon'],
			'edit_field_class' => 'vc_col-sm-4 vc_column',
			'weight' => 130,
		),
		array(
			'param_name' => 'btn_iconpos',
			'heading' => __( 'Button Icon Position', 'us' ),
			'type' => 'dropdown',
			'value' => array(
				__( 'Left', 'us' ) => 'left',
				__( 'Right', 'us' ) => 'right',
			),
			'std' => $config['atts']['btn_iconpos'],
			'edit_field_class' => 'vc_col-sm-4 vc_column',
			'weight' => 120,
		),
		array(
			'param_name' => 'second_button',
			'type' => 'checkbox',
			'value' => array( __( 'Display second button', 'us' ) => TRUE ),
			( ( $config['atts']['second_button'] !== FALSE ) ? 'std' : '_std' ) => $config['atts']['second_button'],
			'weight' => 110,
		),
		array(
			'param_name' => 'btn2_link',
			'heading' => __( 'Button Link', 'us' ),
			'type' => 'vc_link',
			'std' => $config['atts']['btn2_link'],
			'dependency' => array( 'element' => 'second_button', 'not_empty' => TRUE ),
			'weight' => 100,
		),
		array(
			'param_name' => 'btn2_label',
			'heading' => __( 'Button Label', 'us' ),
			'type' => 'textfield',
			'std' => $config['atts']['btn2_label'],
			'dependency' => array( 'element' => 'second_button', 'not_empty' => TRUE ),
			'edit_field_class' => 'vc_col-sm-4 vc_column',
			'weight' => 90,
		),
		array(
			'param_name' => 'btn2_style',
			'heading' => __( 'Button Style', 'us' ),
			'type' => 'dropdown',
			'value' => array(
				__( 'Raised', 'us' ) => 'raised',
				__( 'Flat', 'us' ) => 'flat',
			),
			'std' => $config['atts']['btn2_style'],
			'dependency' => array( 'element' => 'second_button', 'not_empty' => TRUE ),
			'edit_field_class' => 'vc_col-sm-4 vc_column',
			'weight' => 80,
		),
		array(
			'param_name' => 'btn2_color',
			'heading' => __( 'Button Color', 'us' ),
			'type' => 'dropdown',
			'value' => array(
				__( 'Primary (theme color)', 'us' ) => 'primary',
				__( 'Secondary (theme color)', 'us' ) => 'secondary',
				__( 'Light (theme color)', 'us' ) => 'light',
				__( 'Contrast (theme color)', 'us' ) => 'contrast',
				__( 'Black', 'us' ) => 'black',
				__( 'White', 'us' ) => 'white',
				__( 'Custom colors', 'us' ) => 'custom',
			),
			'std' => $config['atts']['btn2_color'],
			'dependency' => array( 'element' => 'second_button', 'not_empty' => TRUE ),
			'edit_field_class' => 'vc_col-sm-4 vc_column',
			'weight' => 70,
		),
		array(
			'param_name' => 'btn2_bg_color',
			'heading' => __( 'Button Background Color', 'us' ),
			'type' => 'colorpicker',
			'std' => $config['atts']['btn2_bg_color'],
			'class' => '',
			'dependency' => array( 'element' => 'btn2_color', 'value' => 'custom' ),
			'weight' => 60,
		),
		array(
			'param_name' => 'btn2_text_color',
			'heading' => __( 'Button Text Color', 'us' ),
			'type' => 'colorpicker',
			'std' => $config['atts']['btn2_text_color'],
			'class' => '',
			'dependency' => array( 'element' => 'btn2_color', 'value' => 'custom' ),
			'weight' => 50,
		),
		array(
			'param_name' => 'btn2_size',
			'heading' => __( 'Button Size', 'us' ),
			'type' => 'textfield',
			'std' => $config['atts']['btn2_size'],
			'dependency' => array( 'element' => 'second_button', 'not_empty' => TRUE ),
			'edit_field_class' => 'vc_col-sm-4 vc_column',
			'weight' => 40,
		),
		array(
			'param_name' => 'btn2_icon',
			'heading' => __( 'Button Icon (optional)', 'us' ),
			'description' => sprintf( __( '%s or %s icon name', 'us' ), '<a href="http://fontawesome.io/icons/" target="_blank">FontAwesome</a>', '<a href="http://designjockey.github.io/material-design-fonticons/" target="_blank">Material Design</a>' ),
			'type' => 'textfield',
			'std' => $config['atts']['btn2_icon'],
			'dependency' => array( 'element' => 'second_button', 'not_empty' => TRUE ),
			'edit_field_class' => 'vc_col-sm-4 vc_column',
			'weight' => 30,
		),
		array(
			'param_name' => 'btn2_iconpos',
			'heading' => __( 'Button Icon Position', 'us' ),
			'type' => 'dropdown',
			'value' => array(
				__( 'Left', 'us' ) => 'left',
				__( 'Right', 'us' ) => 'right',
			),
			'std' => $config['atts']['btn2_iconpos'],
			'dependency' => array( 'element' => 'second_button', 'not_empty' => TRUE ),
			'edit_field_class' => 'vc_col-sm-4 vc_column',
			'weight' => 20,
		),
		array(
			'param_name' => 'el_class',
			'heading' => __( 'Extra class name', 'us' ),
			'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'us' ),
			'type' => 'textfield',
			'std' => $config['atts']['el_class'],
			'weight' => 10,
		),
	),
) );
vc_remove_element( 'vc_cta' );

