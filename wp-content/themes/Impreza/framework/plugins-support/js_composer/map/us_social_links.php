<?php defined( 'ABSPATH' ) OR die( 'This script cannot be accessed directly.' );

/**
 * Shortcode: us_social_links
 *
 * @var $shortcode string Current shortcode name
 * @var $config array Shortcode's config
 *
 * @param $config ['atts'] array Shortcode's attributes and default values
 */
vc_map( array(
	'base' => 'us_social_links',
	'name' => __( 'Social Links', 'us' ),
	'icon' => 'icon-wpb-ui-separator',
	'category' => __( 'Content', 'us' ),
	'weight' => 170,
	'params' => array(
		array(
			'param_name' => 'size',
			'heading' => __( 'Icons Size', 'us' ),
			'type' => 'textfield',
			'std' => $config['atts']['size'],
			'edit_field_class' => 'vc_col-sm-6 vc_column',
			'weight' => 340,
		),
		array(
			'param_name' => 'align',
			'heading' => __( 'Icons Alignment', 'us' ),
			'type' => 'dropdown',
			'value' => array(
				__( 'Left', 'us' ) => 'left',
				__( 'Center', 'us' ) => 'center',
				__( 'Right', 'us' ) => 'right',
			),
			'std' => $config['atts']['align'],
			'edit_field_class' => 'vc_col-sm-6 vc_column',
			'weight' => 330,
		),
		array(
			'param_name' => 'style',
			'heading' => __( 'Icons Style', 'us' ),
			'type' => 'dropdown',
			'value' => array(
				__( 'Colored', 'us' ) => 'colored',
				__( 'Desaturated', 'us' ) => 'desaturated',
			),
			'std' => $config['atts']['style'],
			'edit_field_class' => 'vc_col-sm-6 vc_column',
			'weight' => 320,
		),
		array(
			'param_name' => 'email',
			'heading' => __( 'Email', 'us' ),
			'type' => 'textfield',
			'std' => $config['atts']['email'],
			'edit_field_class' => 'vc_col-sm-6 vc_column',
			'weight' => 310,
		),
		array(
			'param_name' => 'facebook',
			'heading' => 'Facebook',
			'type' => 'textfield',
			'std' => $config['atts']['facebook'],
			'edit_field_class' => 'vc_col-sm-6 vc_column',
			'weight' => 300,
		),
		array(
			'param_name' => 'twitter',
			'heading' => 'Twitter',
			'type' => 'textfield',
			'std' => $config['atts']['twitter'],
			'edit_field_class' => 'vc_col-sm-6 vc_column',
			'weight' => 290,
		),
		array(
			'param_name' => 'google',
			'heading' => 'Google+',
			'type' => 'textfield',
			'std' => $config['atts']['google'],
			'edit_field_class' => 'vc_col-sm-6 vc_column',
			'weight' => 280,
		),
		array(
			'param_name' => 'linkedin',
			'heading' => 'LinkedIn',
			'type' => 'textfield',
			'std' => $config['atts']['linkedin'],
			'edit_field_class' => 'vc_col-sm-6 vc_column',
			'weight' => 270,
		),
		array(
			'param_name' => 'youtube',
			'heading' => 'YouTube',
			'type' => 'textfield',
			'std' => $config['atts']['youtube'],
			'edit_field_class' => 'vc_col-sm-6 vc_column',
			'weight' => 260,
		),
		array(
			'param_name' => 'vimeo',
			'heading' => 'Vimeo',
			'type' => 'textfield',
			'std' => $config['atts']['vimeo'],
			'edit_field_class' => 'vc_col-sm-6 vc_column',
			'weight' => 250,
		),
		array(
			'param_name' => 'flickr',
			'heading' => 'Flickr',
			'type' => 'textfield',
			'std' => $config['atts']['flickr'],
			'edit_field_class' => 'vc_col-sm-6 vc_column',
			'weight' => 240,
		),
		array(
			'param_name' => 'behance',
			'heading' => 'Behance',
			'type' => 'textfield',
			'std' => $config['atts']['behance'],
			'edit_field_class' => 'vc_col-sm-6 vc_column',
			'weight' => 230,
		),
		array(
			'param_name' => 'instagram',
			'heading' => 'Instagram',
			'type' => 'textfield',
			'std' => $config['atts']['instagram'],
			'edit_field_class' => 'vc_col-sm-6 vc_column',
			'weight' => 220,
		),
		array(
			'param_name' => 'xing',
			'heading' => 'Xing',
			'type' => 'textfield',
			'std' => $config['atts']['xing'],
			'edit_field_class' => 'vc_col-sm-6 vc_column',
			'weight' => 210,
		),
		array(
			'param_name' => 'pinterest',
			'heading' => 'Pinterest',
			'type' => 'textfield',
			'std' => $config['atts']['pinterest'],
			'edit_field_class' => 'vc_col-sm-6 vc_column',
			'weight' => 200,
		),
		array(
			'param_name' => 'skype',
			'heading' => 'Skype',
			'type' => 'textfield',
			'std' => $config['atts']['skype'],
			'edit_field_class' => 'vc_col-sm-6 vc_column',
			'weight' => 190,
		),
		array(
			'param_name' => 'dribbble',
			'heading' => 'Dribbble',
			'type' => 'textfield',
			'std' => $config['atts']['dribbble'],
			'edit_field_class' => 'vc_col-sm-6 vc_column',
			'weight' => 180,
		),
		array(
			'param_name' => 'vk',
			'heading' => 'Vkontakte',
			'type' => 'textfield',
			'std' => $config['atts']['vk'],
			'edit_field_class' => 'vc_col-sm-6 vc_column',
			'weight' => 170,
		),
		array(
			'param_name' => 'tumblr',
			'heading' => 'Tumblr',
			'type' => 'textfield',
			'std' => $config['atts']['tumblr'],
			'edit_field_class' => 'vc_col-sm-6 vc_column',
			'weight' => 160,
		),
		array(
			'param_name' => 'soundcloud',
			'heading' => 'SoundCloud',
			'type' => 'textfield',
			'std' => $config['atts']['soundcloud'],
			'edit_field_class' => 'vc_col-sm-6 vc_column',
			'weight' => 150,
		),
		array(
			'param_name' => 'twitch',
			'heading' => 'Twitch',
			'type' => 'textfield',
			'std' => $config['atts']['twitch'],
			'edit_field_class' => 'vc_col-sm-6 vc_column',
			'weight' => 140,
		),
		array(
			'param_name' => 'yelp',
			'heading' => 'Yelp',
			'type' => 'textfield',
			'std' => $config['atts']['yelp'],
			'edit_field_class' => 'vc_col-sm-6 vc_column',
			'weight' => 130,
		),
		array(
			'param_name' => 'deviantart',
			'heading' => 'DeviantArt',
			'type' => 'textfield',
			'std' => $config['atts']['deviantart'],
			'edit_field_class' => 'vc_col-sm-6 vc_column',
			'weight' => 120,
		),
		array(
			'param_name' => 'foursquare',
			'heading' => 'Foursquare',
			'type' => 'textfield',
			'std' => $config['atts']['foursquare'],
			'edit_field_class' => 'vc_col-sm-6 vc_column',
			'weight' => 110,
		),
		array(
			'param_name' => 'github',
			'heading' => 'GitHub',
			'type' => 'textfield',
			'std' => $config['atts']['github'],
			'edit_field_class' => 'vc_col-sm-6 vc_column',
			'weight' => 100,
		),
		array(
			'param_name' => 'odnoklassniki',
			'heading' => 'Odnoklassniki',
			'type' => 'textfield',
			'std' => $config['atts']['odnoklassniki'],
			'edit_field_class' => 'vc_col-sm-6 vc_column',
			'weight' => 90,
		),
		array(
			'param_name' => 's500px',
			'heading' => '500px',
			'type' => 'textfield',
			'std' => $config['atts']['s500px'],
			'edit_field_class' => 'vc_col-sm-6 vc_column',
			'weight' => 80,
		),
		array(
			'param_name' => 'houzz',
			'heading' => 'Houzz',
			'type' => 'textfield',
			'std' => $config['atts']['houzz'],
			'edit_field_class' => 'vc_col-sm-6 vc_column',
			'weight' => 70,
		),
		array(
			'param_name' => 'medium',
			'heading' => 'Medium',
			'type' => 'textfield',
			'std' => $config['atts']['medium'],
			'edit_field_class' => 'vc_col-sm-6 vc_column',
			'weight' => 69,
		),
		array(
			'param_name' => 'tripadvisor',
			'heading' => 'Tripadvisor',
			'type' => 'textfield',
			'std' => $config['atts']['tripadvisor'],
			'edit_field_class' => 'vc_col-sm-6 vc_column',
			'weight' => 68,
		),
		array(
			'param_name' => 'rss',
			'heading' => 'RSS',
			'type' => 'textfield',
			'std' => $config['atts']['rss'],
			'edit_field_class' => 'vc_col-sm-6 vc_column',
			'weight' => 60,
		),
		array(
			'param_name' => 'custom_link',
			'heading' => __( 'Custom Link', 'us' ),
			'type' => 'textfield',
			'std' => $config['atts']['custom_link'],
			'edit_field_class' => 'vc_col-sm-6 vc_column',
			'weight' => 50,
		),
		array(
			'param_name' => 'custom_title',
			'heading' => __( 'Custom Link Title', 'us' ),
			'type' => 'textfield',
			'std' => $config['atts']['custom_title'],
			'edit_field_class' => 'vc_col-sm-6 vc_column',
			'dependency' => array( 'element' => 'custom_link', 'not_empty' => TRUE ),
			'weight' => 40,
		),
		array(
			'param_name' => 'custom_icon',
			'heading' => __( 'Custom Link Icon', 'us' ),
			'type' => 'textfield',
			'std' => $config['atts']['custom_icon'],
			'dependency' => array( 'element' => 'custom_link', 'not_empty' => TRUE ),
			'edit_field_class' => 'vc_col-sm-6 vc_column',
			'weight' => 30,
		),
		array(
			'param_name' => 'custom_color',
			'heading' => __( 'Custom Link Color', 'us' ),
			'type' => 'colorpicker',
			'std' => $config['atts']['custom_color'],
			'dependency' => array( 'element' => 'custom_link', 'not_empty' => TRUE ),
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
