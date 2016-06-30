<?php defined( 'ABSPATH' ) OR die( 'This script cannot be accessed directly.' );

/**
 * Header settings (used both by core and header builder plugin).
 * Options and elements' fields are described in USOF-style format.
 */

return array(

	'options' => array(
		'global' => array(
			'orientation' => array(
				'title' => __( 'Orientation', 'us' ),
				'type' => 'radio',
				'options' => array(
					'hor' => __( 'Horizontal', 'us' ),
					'ver' => __( 'Vertical', 'us' ),
				),
				'std' => 'hor',
			),
			'sticky' => array(
				'text' => __( 'Sticky Header', 'us' ),
				'type' => 'switch',
				'description' => __( 'Fix the header at the top of a page during scroll on all pages', 'us' ),
				'std' => 1,
				'classes' => 'desc_2',
				'show_if' => array( 'orientation', '=', 'hor' ),
			),
			'scroll_breakpoint' => array(
				'title' => __( 'Header Scroll Breakpoint', 'us' ),
				'description' => __( 'This option sets scroll distance from the top of a page after which the sticky header will be shrunk', 'us' ),
				'type' => 'slider',
				'min' => 1,
				'max' => 200,
				'std' => 100,
				'postfix' => 'px',
				'classes' => 'desc_2 desc_fix',
				'show_if' => array(
					array( 'orientation', '=', 'hor' ),
					'and',
					array( 'sticky', '=', TRUE ),
				),
			),
			'transparent' => array(
				'text' => __( 'Transparent Header', 'us' ),
				'type' => 'switch',
				'description' => __( 'Make the header transparent at its initial position on all pages', 'us' ),
				'std' => 0,
				'classes' => 'desc_2',
				'show_if' => array( 'orientation', '=', 'hor' ),
			),
			'width' => array(
				'title' => __( 'Header Width', 'us' ),
				'type' => 'slider',
				'min' => 200,
				'max' => 400,
				'std' => 300,
				'postfix' => 'px',
				'show_if' => array(
					array( 'orientation', '=', 'ver' ),
					'and',
					array( 'state', '!=', 'mobiles' ),
				),
			),
			'elm_align' => array(
				'title' => __( 'Elements Alignment', 'us' ),
				'type' => 'radio',
				'options' => array(
					'left' => __( 'Left', 'us' ),
					'center' => __( 'Center', 'us' ),
					'right' => __( 'Right', 'us' ),
				),
				'std' => 'center',
				'show_if' => array( 'orientation', '=', 'ver' ),
			),
		),
		'top' => array(
			'top_show' => array(
				'text' => __( 'Show Area', 'us' ),
				'type' => 'switch',
				'std' => 1,
			),
			'top_height' => array(
				'title' => __( 'Area Height', 'us' ),
				'type' => 'slider',
				'min' => 30,
				'max' => 300,
				'std' => 36,
				'postfix' => 'px',
				'show_if' => array(
					array( 'top_show', '=', TRUE ),
					'and',
					array( 'orientation', '=', 'hor' ),
				),
			),
			'top_sticky_height' => array(
				'title' => __( 'Sticky Area Height', 'us' ),
				'type' => 'slider',
				'min' => 0,
				'max' => 300,
				'std' => 36,
				'postfix' => 'px',
				'show_if' => array(
					array( 'sticky', '=', TRUE ),
					'and',
					array( 'top_show', '=', TRUE ),
					'and',
					array( 'orientation', '=', 'hor' ),
				),
			),
			'top_fullwidth' => array(
				'text' => __( 'Full Width Content', 'us' ),
				'type' => 'switch',
				'std' => 0,
				'show_if' => array(
					array( 'top_show', '=', TRUE ),
					'and',
					array( 'orientation', '=', 'hor' ),
					'and',
					array( 'state', '=', 'default' ),
				),
			),
		),
		'middle' => array(
			'middle_height' => array(
				'title' => __( 'Area Height', 'us' ),
				'type' => 'slider',
				'min' => 30,
				'max' => 300,
				'std' => 100,
				'postfix' => 'px',
				'show_if' => array( 'orientation', '=', 'hor' ),
			),
			'middle_sticky_height' => array(
				'title' => __( 'Sticky Area Height', 'us' ),
				'type' => 'slider',
				'min' => 0,
				'max' => 300,
				'std' => 60,
				'postfix' => 'px',
				'show_if' => array(
					array( 'sticky', '=', TRUE ),
					'and',
					array( 'orientation', '=', 'hor' ),
				),
			),
			'middle_fullwidth' => array(
				'text' => __( 'Full Width Content', 'us' ),
				'type' => 'switch',
				'std' => 0,
				'show_if' => array(
					array( 'orientation', '=', 'hor' ),
					'and',
					array( 'state', '=', 'default' ),
				),
			),
			'bg_img' => array(
				'title' => __( 'Background Image', 'us' ),
				'type' => 'upload',
				'std' => '',
			),
			'bg_img_wrapper_start' => array(
				'type' => 'wrapper_start',
				'show_if' => array( 'bg_img', '!=', '' ),
			),
			'bg_img_size' => array(
				'title' => __( 'Background Image Size', 'us' ),
				'type' => 'select',
				'options' => array(
					'cover' => __( 'Cover - Image will cover the whole area', 'us' ),
					'contain' => __( 'Contain - Image will fit inside the area', 'us' ),
					'initial' => __( 'Initial', 'us' ),
				),
				'std' => 'cover',
			),
			'bg_img_repeat' => array(
				'title' => __( 'Background Image Repeat', 'us' ),
				'type' => 'select',
				'options' => array(
					'repeat' => __( 'Repeat', 'us' ),
					'repeat-x' => __( 'Repeat Horizontally', 'us' ),
					'repeat-y' => __( 'Repeat Vertically', 'us' ),
					'no-repeat' => __( 'Do Not Repeat', 'us' ),
				),
				'std' => 'repeat',
			),
			'bg_img_attachment' => array(
				'title' => __( 'Background Image Attachment', 'us' ),
				'type' => 'select',
				'options' => array(
					'scroll' => __( 'Scroll', 'us' ),
					'fixed' => __( 'Fixed', 'us' ),
				),
				'std' => 'scroll',
			),
			'bg_img_position' => array(
				'title' => __( 'Background Image Position', 'us' ),
				'type' => 'select',
				'options' => array(
					'top left' => __( 'Top Left', 'us' ),
					'top center' => __( 'Top Center', 'us' ),
					'top right' => __( 'Top Right', 'us' ),
					'center left' => __( 'Center Left', 'us' ),
					'center center' => __( 'Center Center', 'us' ),
					'center right' => __( 'Center Right', 'us' ),
					'bottom left' => __( 'Bottom Left', 'us' ),
					'bottom center' => __( 'Bottom Center', 'us' ),
					'bottom right' => __( 'Bottom Right', 'us' ),
				),
				'std' => 'top center',
			),
			'bgimage_wrapper_end' => array(
				'type' => 'wrapper_end',
			),
		),
		'bottom' => array(
			'bottom_show' => array(
				'text' => __( 'Show Area', 'us' ),
				'type' => 'switch',
				'std' => 1,
			),
			'bottom_height' => array(
				'title' => __( 'Area Height', 'us' ),
				'type' => 'slider',
				'min' => 30,
				'max' => 300,
				'std' => 50,
				'postfix' => 'px',
				'show_if' => array(
					array( 'bottom_show', '=', TRUE ),
					'and',
					array( 'orientation', '=', 'hor' ),
				),
			),
			'bottom_sticky_height' => array(
				'title' => __( 'Sticky Area Height', 'us' ),
				'type' => 'slider',
				'min' => 0,
				'max' => 300,
				'std' => 50,
				'postfix' => 'px',
				'show_if' => array(
					array( 'sticky', '=', TRUE ),
					'and',
					array( 'bottom_show', '=', TRUE ),
					'and',
					array( 'orientation', '=', 'hor' ),
				),
			),
			'bottom_fullwidth' => array(
				'text' => __( 'Full Width Content', 'us' ),
				'type' => 'switch',
				'std' => 0,
				'show_if' => array(
					array( 'bottom_show', '=', TRUE ),
					'and',
					array( 'orientation', '=', 'hor' ),
					'and',
					array( 'state', '=', 'default' ),
				),
			),
		),
	),

	'elements' => array(
		'text' => array(
			'title' => __( 'Text', 'us' ),
			'params' => array(
				'text' => array(
					'title' => __( 'Text', 'us' ),
					'type' => 'text',
					'std' => 'Some text',
				),
				'link' => array(
					'title' => __( 'Link', 'us' ),
					'type' => 'link',
					'std' => array(
						'url' => '',
						'target' => '',
					),
				),
				'icon' => array(
					'title' => __( 'Icon', 'us' ),
					'description' => sprintf( __( '%s or %s icon name', 'us' ), '<a href="http://fontawesome.io/icons/" target="_blank">FontAwesome</a>', '<a href="http://designjockey.github.io/material-design-fonticons/" target="_blank">Material Design</a>' ),
					'type' => 'text',
					'std' => '',
					'classes' => 'desc_1',
				),
				'color' => array(
					'title' => __( 'Custom Color', 'us' ),
					'type' => 'color',
					'std' => '',
					'classes' => 'cols_2_first',
				),
				'wrap' => array(
					'title' => __( 'Line Wrapping', 'us' ),
					'type' => 'switch',
					'text' => __( 'Wrap text to the next line', 'us' ),
					'std' => 0,
					'classes' => 'cols_2_last',
				),
				'size' => array(
					'title' => __( 'Size', 'us' ),
					'type' => 'slider',
					'min' => 11,
					'max' => 50,
					'std' => 13,
					'postfix' => 'px',
					'group' => __( 'Sizes', 'us' ),
				),
				'size_tablets' => array(
					'title' => __( 'Size on Tablets', 'us' ),
					'type' => 'slider',
					'min' => 11,
					'max' => 50,
					'std' => 13,
					'postfix' => 'px',
					'classes' => 'cols_2_first',
					'group' => __( 'Sizes', 'us' ),
				),
				'size_mobiles' => array(
					'title' => __( 'Size on Mobiles', 'us' ),
					'type' => 'slider',
					'min' => 11,
					'max' => 50,
					'std' => 13,
					'postfix' => 'px',
					'classes' => 'cols_2_last',
					'group' => __( 'Sizes', 'us' ),
				),
				'design_options' => array(
					'type' => 'design_options',
					'std' => '',
					'group' => __( 'More Options', 'us' ),
				),
			),
		),
		'image' => array(
			'title' => __( 'Image', 'us' ),
			'params' => array(
				'img' => array(
					'type' => 'upload',
					'std' => '',
					'extension' => 'png,jpg,jpeg,gif,svg',
				),
				'link' => array(
					'title' => __( 'Link URL', 'us' ),
					'type' => 'link',
					'std' => array(
						'url' => '',
						'target' => '',
					),
				),
				'img_transparent' => array(
					'title' => __( 'Different Image for Transparent Header', 'us' ),
					'type' => 'upload',
					'std' => '',
					'extension' => 'png,jpg,jpeg,gif,svg',
				),
				'heading_1' => array(
					'title' => __( 'Default Sizes', 'us' ),
					'type' => 'heading',
					'group' => __( 'Sizes', 'us' ),
				),
				'height' => array(
					'title' => __( 'Height', 'us' ),
					'type' => 'slider',
					'min' => 20,
					'max' => 300,
					'std' => 35,
					'postfix' => 'px',
					'group' => __( 'Sizes', 'us' ),
				),
				'height_tablets' => array(
					'title' => __( 'Height on Tablets', 'us' ),
					'type' => 'slider',
					'min' => 20,
					'max' => 300,
					'std' => 30,
					'postfix' => 'px',
					'classes' => 'cols_2_first',
					'group' => __( 'Sizes', 'us' ),
				),
				'height_mobiles' => array(
					'title' => __( 'Height on Mobiles', 'us' ),
					'type' => 'slider',
					'min' => 20,
					'max' => 300,
					'std' => 20,
					'postfix' => 'px',
					'classes' => 'cols_2_last',
					'group' => __( 'Sizes', 'us' ),
				),
				'heading_2' => array(
					'title' => __( 'Sizes in the Sticky Header', 'us' ),
					'type' => 'heading',
					'group' => __( 'Sizes', 'us' ),
				),
				'height_sticky' => array(
					'title' => __( 'Height', 'us' ),
					'type' => 'slider',
					'min' => 20,
					'max' => 300,
					'std' => 35,
					'postfix' => 'px',
					'group' => __( 'Sizes', 'us' ),
				),
				'height_sticky_tablets' => array(
					'title' => __( 'Height on Tablets', 'us' ),
					'type' => 'slider',
					'min' => 20,
					'max' => 300,
					'std' => 30,
					'postfix' => 'px',
					'classes' => 'cols_2_first',
					'group' => __( 'Sizes', 'us' ),
				),
				'height_sticky_mobiles' => array(
					'title' => __( 'Height on Mobiles', 'us' ),
					'type' => 'slider',
					'min' => 20,
					'max' => 300,
					'std' => 20,
					'postfix' => 'px',
					'classes' => 'cols_2_last',
					'group' => __( 'Sizes', 'us' ),
				),
				'design_options' => array(
					'type' => 'design_options',
					'std' => '',
					'group' => __( 'More Options', 'us' ),
				),
			),
		),
		'menu' => array(
			'title' => __( 'Main Menu', 'us' ),
			'params' => array(
				'font_size' => array(
					'title' => __( 'Main Items Font Size', 'us' ),
					'type' => 'slider',
					'min' => 11,
					'max' => 50,
					'step' => 1,
					'std' => 16,
					'postfix' => 'px',
				),
				'indents' => array(
					'title' => __( 'Main Items Indents', 'us' ),
					'description' => __( 'This option sets the distance between the neighboring menu items.', 'us' ),
					'type' => 'slider',
					'min' => 10,
					'max' => 100,
					'step' => 2,
					'std' => 40,
					'postfix' => 'px',
					'classes' => 'desc_2',
				),
				'vstretch' => array(
					'title' => __( 'Main Items Height', 'us' ),
					'type' => 'switch',
					'text' => __( 'Stretch menu items vertically to fit the available height', 'us' ),
					'std' => 1,
				),
				'hover_effect' => array(
					'title' => __( 'Main Items Hover Effect', 'us' ),
					'type' => 'select',
					'options' => array(
						'simple' => __( 'Simple', 'us' ),
						'underline' => __( 'Underline', 'us' ),
					),
					'std' => 'simple',
				),
				'dropdown_effect' => array(
					'title' => __( 'Dropdown Effect', 'us' ),
					'type' => 'select',
					'options' => array(
						'opacity' => __( 'FadeIn', 'us' ),
						'height' => __( 'FadeIn + SlideDown', 'us' ),
						'mdesign' => __( 'Material Design Effect', 'us' ),
					),
					'std' => 'height',
				),
				'dropdown_font_size' => array(
					'title' => __( 'Sub Items Font Size', 'us' ),
					'type' => 'slider',
					'min' => 11,
					'max' => 50,
					'step' => 1,
					'std' => 15,
					'postfix' => 'px',
				),
				'mobile_width' => array(
					'title' => __( 'Mobile Menu at width', 'us' ),
					'description' => __( 'When screen width is less than this value, main menu transforms to mobile-friendly layout.', 'us' ),
					'type' => 'slider',
					'min' => 300,
					'max' => 2000,
					'step' => 10,
					'std' => 900,
					'postfix' => 'px',
					'classes' => 'desc_2',
					'group' => __( 'Mobile Menu', 'us' ),
				),
				'mobile_font_size' => array(
					'title' => __( 'Main Items Font Size', 'us' ),
					'type' => 'slider',
					'min' => 11,
					'max' => 50,
					'step' => 1,
					'std' => 15,
					'postfix' => 'px',
					'group' => __( 'Mobile Menu', 'us' ),
				),
				'mobile_dropdown_font_size' => array(
					'title' => __( 'Sub Items Font Size', 'us' ),
					'type' => 'slider',
					'min' => 11,
					'max' => 50,
					'step' => 1,
					'std' => 14,
					'postfix' => 'px',
					'group' => __( 'Mobile Menu', 'us' ),
				),
				'mobile_behavior' => array(
					'title' => __( 'Dropdown Behavior', 'us' ),
					'description' => __( 'When this option is disabled, sub items of mobile menu will open by click on arrows only.', 'us' ),
					'type' => 'switch',
					'text' => __( 'Open sub items by click on menu titles', 'us' ),
					'std' => 1,
					'classes' => 'desc_2',
					'group' => __( 'Mobile Menu', 'us' ),
				),
				'design_options' => array(
					'type' => 'design_options',
					'std' => '',
					'group' => __( 'More Options', 'us' ),
				),
			),
		),
		'additional_menu' => array(
			'title' => __( 'Additional Menu', 'us' ),
			'params' => array(
				'source' => array(
					'title' => __( 'Source', 'us' ),
					'description' => sprintf( __( 'You can create a new menu on <a href="%s" target="_blank">Menus</a> page', 'us' ), admin_url( 'nav-menus.php' ) ),
					'type' => 'select',
					'options' => us_get_nav_menus(),
					'std' => '',
					'classes' => 'desc_1',
				),
				'size' => array(
					'title' => __( 'Font Size', 'us' ),
					'type' => 'slider',
					'min' => 11,
					'max' => 50,
					'std' => 13,
					'postfix' => 'px',
					'group' => __( 'Sizes', 'us' ),
				),
				'size_tablets' => array(
					'title' => __( 'Font Size on Tablets', 'us' ),
					'type' => 'slider',
					'min' => 11,
					'max' => 50,
					'std' => 13,
					'postfix' => 'px',
					'classes' => 'cols_2_first',
					'group' => __( 'Sizes', 'us' ),
				),
				'size_mobiles' => array(
					'title' => __( 'Font Size on Mobiles', 'us' ),
					'type' => 'slider',
					'min' => 11,
					'max' => 50,
					'std' => 13,
					'postfix' => 'px',
					'classes' => 'cols_2_last',
					'group' => __( 'Sizes', 'us' ),
				),
				'indents' => array(
					'title' => __( 'Items Indents', 'us' ),
					'type' => 'slider',
					'min' => 10,
					'max' => 80,
					'step' => 2,
					'std' => 20,
					'postfix' => 'px',
					'group' => __( 'Sizes', 'us' ),
				),
				'indents_tablets' => array(
					'title' => __( 'Items Indents on Tablets', 'us' ),
					'type' => 'slider',
					'min' => 10,
					'max' => 80,
					'step' => 2,
					'std' => 20,
					'postfix' => 'px',
					'classes' => 'cols_2_first',
					'group' => __( 'Sizes', 'us' ),
				),
				'indents_mobiles' => array(
					'title' => __( 'Items Indents on Mobiles', 'us' ),
					'type' => 'slider',
					'min' => 10,
					'max' => 80,
					'step' => 2,
					'std' => 20,
					'postfix' => 'px',
					'classes' => 'cols_2_last',
					'group' => __( 'Sizes', 'us' ),
				),
				'design_options' => array(
					'type' => 'design_options',
					'std' => '',
					'group' => __( 'More Options', 'us' ),
				),
			),
			'std' => array(),
		),
		'search' => array(
			'title' => __( 'Search Field', 'us' ),
			'params' => array(
				'text' => array(
					'title' => 'Placeholder Text',
					'type' => 'text',
					'std' => __( 'Search', 'us' ),
				),
				'layout' => array(
					'title' => __( 'Layout', 'us' ),
					'type' => 'select',
					'options' => array(
						'simple' => __( 'Simple', 'us' ),
						'modern' => __( 'Modern', 'us' ),
						'fullwidth' => __( 'Full Width', 'us' ),
						'fullscreen' => __( 'Full Screen', 'us' ),
					),
					'std' => 'fullwidth',
				),
				'width' => array(
					'title' => __( 'Field Width', 'us' ),
					'type' => 'slider',
					'min' => 200,
					'max' => 800,
					'std' => 240,
					'postfix' => 'px',
					'classes' => 'cols_2_first',
					'show_if' => array( 'layout', 'in', array( 'simple', 'modern' ) ),
				),
				'width_tablets' => array(
					'title' => __( 'Field Width on Tablets', 'us' ),
					'type' => 'slider',
					'min' => 200,
					'max' => 600,
					'std' => 200,
					'postfix' => 'px',
					'classes' => 'cols_2_last',
					'show_if' => array( 'layout', 'in', array( 'simple', 'modern' ) ),
				),
				'design_options' => array(
					'type' => 'design_options',
					'std' => '',
					'group' => __( 'More Options', 'us' ),
				),
			),
		),
		'dropdown' => array(
			'title' => __( 'Dropdown', 'us' ),
			'params' => array(
				'source' => array(
					'title' => __( 'Source', 'us' ),
					'type' => 'select',
					'options' => array(
						'own' => __( 'My own links', 'us' ),
						'wpml' => 'WPML',
						'polylang' => 'Polylang',
						'qtranslate' => 'qTranslate X',
					),
					'std' => 'own',
				),
				'link_title' => array(
					'title' => __( 'Links Title', 'us' ),
					'description' => __( 'This text will be shown as the first active item of the dropdown menu.', 'us' ),
					'type' => 'text',
					'std' => '',
					'show_if' => array( 'source', '=', 'own' ),
					'classes' => 'desc_1',
				),
				'link_qty' => array(
					'title' => __( 'Links Quantity', 'us' ),
					'type' => 'radio',
					'options' => array(
						'1' => '1',
						'2' => '2',
						'3' => '3',
						'4' => '4',
						'5' => '5',
						'6' => '6',
						'7' => '7',
						'8' => '8',
						'9' => '9',
					),
					'std' => '3',
					'show_if' => array( 'source', '=', 'own' ),
				),
				'link_1_label' => array(
					'placeholder' => __( 'Link Label', 'us' ),
					'type' => 'text',
					'std' => '',
					'show_if' => array( 'source', '=', 'own' ),
					'classes' => 'cols_2_first',
				),
				'link_1_url' => array(
					'placeholder' => __( 'Link URL', 'us' ),
					'type' => 'text',
					'std' => '',
					'show_if' => array( 'source', '=', 'own' ),
					'classes' => 'cols_2_last',
				),
				'link_2_label' => array(
					'placeholder' => __( 'Link Label', 'us' ),
					'type' => 'text',
					'std' => '',
					'show_if' => array(
						array( 'source', '=', 'own' ),
						'and',
						array( 'link_qty', '>', 1 ),
					),
					'classes' => 'cols_2_first',
				),
				'link_2_url' => array(
					'placeholder' => __( 'Link URL', 'us' ),
					'type' => 'text',
					'std' => '',
					'show_if' => array(
						array( 'source', '=', 'own' ),
						'and',
						array( 'link_qty', '>', 1 ),
					),
					'classes' => 'cols_2_last',
				),
				'link_3_label' => array(
					'placeholder' => __( 'Link Label', 'us' ),
					'type' => 'text',
					'std' => '',
					'show_if' => array(
						array( 'source', '=', 'own' ),
						'and',
						array( 'link_qty', '>', 2 ),
					),
					'classes' => 'cols_2_first',
				),
				'link_3_url' => array(
					'placeholder' => __( 'Link URL', 'us' ),
					'type' => 'text',
					'std' => '',
					'show_if' => array(
						array( 'source', '=', 'own' ),
						'and',
						array( 'link_qty', '>', 2 ),
					),
					'classes' => 'cols_2_last',
				),
				'link_4_label' => array(
					'placeholder' => __( 'Link Label', 'us' ),
					'type' => 'text',
					'std' => '',
					'show_if' => array(
						array( 'source', '=', 'own' ),
						'and',
						array( 'link_qty', '>', 3 ),
					),
					'classes' => 'cols_2_first',
				),
				'link_4_url' => array(
					'placeholder' => __( 'Link URL', 'us' ),
					'type' => 'text',
					'std' => '',
					'show_if' => array(
						array( 'source', '=', 'own' ),
						'and',
						array( 'link_qty', '>', 3 ),
					),
					'classes' => 'cols_2_last',
				),
				'link_5_label' => array(
					'placeholder' => __( 'Link Label', 'us' ),
					'type' => 'text',
					'std' => '',
					'show_if' => array(
						array( 'source', '=', 'own' ),
						'and',
						array( 'link_qty', '>', 4 ),
					),
					'classes' => 'cols_2_first',
				),
				'link_5_url' => array(
					'placeholder' => __( 'Link URL', 'us' ),
					'type' => 'text',
					'std' => '',
					'show_if' => array(
						array( 'source', '=', 'own' ),
						'and',
						array( 'link_qty', '>', 4 ),
					),
					'classes' => 'cols_2_last',
				),
				'link_6_label' => array(
					'placeholder' => __( 'Link Label', 'us' ),
					'type' => 'text',
					'std' => '',
					'show_if' => array(
						array( 'source', '=', 'own' ),
						'and',
						array( 'link_qty', '>', 5 ),
					),
					'classes' => 'cols_2_first',
				),
				'link_6_url' => array(
					'placeholder' => __( 'Link URL', 'us' ),
					'type' => 'text',
					'std' => '',
					'show_if' => array(
						array( 'source', '=', 'own' ),
						'and',
						array( 'link_qty', '>', 5 ),
					),
					'classes' => 'cols_2_last',
				),
				'link_7_label' => array(
					'placeholder' => __( 'Link Label', 'us' ),
					'type' => 'text',
					'std' => '',
					'show_if' => array(
						array( 'source', '=', 'own' ),
						'and',
						array( 'link_qty', '>', 6 ),
					),
					'classes' => 'cols_2_first',
				),
				'link_7_url' => array(
					'placeholder' => __( 'Link URL', 'us' ),
					'type' => 'text',
					'std' => '',
					'show_if' => array(
						array( 'source', '=', 'own' ),
						'and',
						array( 'link_qty', '>', 6 ),
					),
					'classes' => 'cols_2_last',
				),
				'link_8_label' => array(
					'placeholder' => __( 'Link Label', 'us' ),
					'type' => 'text',
					'std' => '',
					'show_if' => array(
						array( 'source', '=', 'own' ),
						'and',
						array( 'link_qty', '>', 7 ),
					),
					'classes' => 'cols_2_first',
				),
				'link_8_url' => array(
					'placeholder' => __( 'Link URL', 'us' ),
					'type' => 'text',
					'std' => '',
					'show_if' => array(
						array( 'source', '=', 'own' ),
						'and',
						array( 'link_qty', '>', 7 ),
					),
					'classes' => 'cols_2_last',
				),
				'link_9_label' => array(
					'placeholder' => __( 'Link Label', 'us' ),
					'type' => 'text',
					'std' => '',
					'show_if' => array(
						array( 'source', '=', 'own' ),
						'and',
						array( 'link_qty', '>', 8 ),
					),
					'classes' => 'cols_2_first',
				),
				'link_9_url' => array(
					'placeholder' => __( 'Link URL', 'us' ),
					'type' => 'text',
					'std' => '',
					'show_if' => array(
						array( 'source', '=', 'own' ),
						'and',
						array( 'link_qty', '>', 8 ),
					),
					'classes' => 'cols_2_last',
				),
				'size' => array(
					'title' => __( 'Size', 'us' ),
					'type' => 'slider',
					'min' => 11,
					'max' => 50,
					'std' => 13,
					'postfix' => 'px',
					'group' => __( 'Sizes', 'us' ),
				),
				'size_tablets' => array(
					'title' => __( 'Size on Tablets', 'us' ),
					'type' => 'slider',
					'min' => 11,
					'max' => 50,
					'std' => 13,
					'postfix' => 'px',
					'classes' => 'cols_2_first',
					'group' => __( 'Sizes', 'us' ),
				),
				'size_mobiles' => array(
					'title' => __( 'Size on Mobiles', 'us' ),
					'type' => 'slider',
					'min' => 11,
					'max' => 50,
					'std' => 13,
					'postfix' => 'px',
					'classes' => 'cols_2_last',
					'group' => __( 'Sizes', 'us' ),
				),
				'design_options' => array(
					'type' => 'design_options',
					'std' => '',
					'group' => __( 'More Options', 'us' ),
				),
			),
		),
		'socials' => array(
			'title' => __( 'Social Links', 'us' ),
			'params' => array(
				'style' => array(
					'title' => __( 'Style', 'us' ),
					'type' => 'select',
					'options' => array(
						'desaturated' => __( 'Desaturated', 'us' ),
						'colored' => __( 'Colored', 'us' ),
					),
					'std' => 'desaturated',
					'classes' => 'cols_2_first',
				),
				'hover' => array(
					'title' => __( 'Hover Style', 'us' ),
					'type' => 'select',
					'options' => array(
						'default' => __( 'Default', 'us' ),
						'none' => __( 'None', 'us' ),
					),
					'std' => 'default',
					'classes' => 'cols_2_last',
				),
				'facebook' => array(
					'placeholder' => 'Facebook',
					'type' => 'text',
					'std' => '',
					'classes' => 'for_social cols_3_first',
				),
				'twitter' => array(
					'placeholder' => 'Twitter',
					'type' => 'text',
					'std' => '',
					'classes' => 'for_social cols_3_middle',
				),
				'google' => array(
					'placeholder' => 'Google+',
					'type' => 'text',
					'std' => '',
					'classes' => 'for_social cols_3_last',
				),
				'linkedin' => array(
					'placeholder' => 'LinkedIn',
					'type' => 'text',
					'std' => '',
					'classes' => 'for_social cols_3_first',
				),
				'youtube' => array(
					'placeholder' => 'YouTube',
					'type' => 'text',
					'std' => '',
					'classes' => 'for_social cols_3_middle',
				),
				'vimeo' => array(
					'placeholder' => 'Vimeo',
					'type' => 'text',
					'std' => '',
					'classes' => 'for_social cols_3_last',
				),
				'flickr' => array(
					'placeholder' => 'Flickr',
					'type' => 'text',
					'std' => '',
					'classes' => 'for_social cols_3_first',
				),
				'behance' => array(
					'placeholder' => 'Behance',
					'type' => 'text',
					'std' => '',
					'classes' => 'for_social cols_3_middle',
				),
				'instagram' => array(
					'placeholder' => 'Instagram',
					'type' => 'text',
					'std' => '',
					'classes' => 'for_social cols_3_last',
				),
				'xing' => array(
					'placeholder' => 'Xing',
					'type' => 'text',
					'std' => '',
					'classes' => 'for_social cols_3_first',
				),
				'pinterest' => array(
					'placeholder' => 'Pinterest',
					'type' => 'text',
					'std' => '',
					'classes' => 'for_social cols_3_middle',
				),
				'skype' => array(
					'placeholder' => 'Skype',
					'type' => 'text',
					'std' => '',
					'classes' => 'for_social cols_3_last',
				),
				'dribbble' => array(
					'placeholder' => 'Dribbble',
					'type' => 'text',
					'std' => '',
					'classes' => 'for_social cols_3_first',
				),
				'vk' => array(
					'placeholder' => 'Vkontakte',
					'type' => 'text',
					'std' => '',
					'classes' => 'for_social cols_3_middle',
				),
				'tumblr' => array(
					'placeholder' => 'Tumblr',
					'type' => 'text',
					'std' => '',
					'classes' => 'for_social cols_3_last',
				),
				'soundcloud' => array(
					'placeholder' => 'SoundCloud',
					'type' => 'text',
					'std' => '',
					'classes' => 'for_social cols_3_first',
				),
				'twitch' => array(
					'placeholder' => 'Twitch',
					'type' => 'text',
					'std' => '',
					'classes' => 'for_social cols_3_last',
				),
				'yelp' => array(
					'placeholder' => 'Yelp',
					'type' => 'text',
					'std' => '',
					'classes' => 'for_social cols_3_middle',
				),
				'deviantart' => array(
					'placeholder' => 'DeviantArt',
					'type' => 'text',
					'std' => '',
					'classes' => 'for_social cols_3_first',
				),
				'foursquare' => array(
					'placeholder' => 'Foursquare',
					'type' => 'text',
					'std' => '',
					'classes' => 'for_social cols_3_middle',
				),
				'github' => array(
					'placeholder' => 'GitHub',
					'type' => 'text',
					'std' => '',
					'classes' => 'for_social cols_3_last',
				),
				'odnoklassniki' => array(
					'placeholder' => 'Odnoklassniki',
					'type' => 'text',
					'std' => '',
					'classes' => 'for_social cols_3_first',
				),
				's500px' => array(
					'placeholder' => '500px',
					'type' => 'text',
					'std' => '',
					'classes' => 'for_social cols_3_middle',
				),
				'houzz' => array(
					'placeholder' => 'Houzz',
					'type' => 'text',
					'std' => '',
					'classes' => 'for_social cols_3_last',
				),
				'medium' => array(
					'placeholder' => 'Medium',
					'type' => 'text',
					'std' => '',
					'classes' => 'for_social cols_3_first',
				),
				'tripadvisor' => array(
					'placeholder' => 'Tripadvisor',
					'type' => 'text',
					'std' => '',
					'classes' => 'for_social cols_3_middle',
				),
				'rss' => array(
					'placeholder' => 'RSS',
					'type' => 'text',
					'std' => '',
					'classes' => 'for_social cols_3_last',
				),
				'custom_url' => array(
					'title' => __( 'Custom Link', 'us' ),
					'type' => 'text',
					'std' => '',
					'classes' => 'cols_3_first',
				),
				'custom_icon' => array(
					'title' => __( 'Custom Link Icon', 'us' ),
					'description' => sprintf( __( '%s or %s icon name', 'us' ), '<a href="http://fontawesome.io/icons/" target="_blank">FontAwesome</a>', '<a href="http://designjockey.github.io/material-design-fonticons/" target="_blank">Material Design</a>' ),
					'type' => 'text',
					'std' => '',
					'classes' => 'cols_3_middle desc_1',
				),
				'custom_color' => array(
					'type' => 'color',
					'title' => __( 'Custom Link Color', 'us' ),
					'std' => '#1abc9c',
					'classes' => 'cols_3_last',
				),
				'size' => array(
					'title' => __( 'Size', 'us' ),
					'type' => 'slider',
					'min' => 15,
					'max' => 30,
					'std' => 18,
					'postfix' => 'px',
					'group' => __( 'Sizes', 'us' ),
				),
				'size_tablets' => array(
					'title' => __( 'Size on Tablets', 'us' ),
					'type' => 'slider',
					'min' => 15,
					'max' => 30,
					'std' => 18,
					'postfix' => 'px',
					'classes' => 'cols_2_first',
					'group' => __( 'Sizes', 'us' ),
				),
				'size_mobiles' => array(
					'title' => __( 'Size on Mobiles', 'us' ),
					'type' => 'slider',
					'min' => 15,
					'max' => 30,
					'std' => 18,
					'postfix' => 'px',
					'classes' => 'cols_2_last',
					'group' => __( 'Sizes', 'us' ),
				),
				'design_options' => array(
					'type' => 'design_options',
					'std' => '',
					'group' => __( 'More Options', 'us' ),
				),
			),
		),
		'btn' => array(
			'title' => __( 'Button', 'us' ),
			'params' => array(
				'label' => array(
					'title' => __( 'Button Label', 'us' ),
					'type' => 'text',
					'std' => 'Click Me',
					'classes' => 'cols_2_first',
				),
				'link' => array(
					'title' => __( 'Button Link', 'us' ),
					'type' => 'text',
					'std' => '',
					'classes' => 'cols_2_last',
				),
				'style' => array(
					'title' => __( 'Button Style', 'us' ),
					'type' => 'select',
					'options' => array(
						'solid' => __( 'Solid', 'us' ),
						'outlined' => __( 'Outlined', 'us' ),
					),
					'std' => 'solid',
				),
				'icon' => array(
					'title' => __( 'Icon', 'us' ),
					'description' => sprintf( __( '%s or %s icon name', 'us' ), '<a href="http://fontawesome.io/icons/" target="_blank">FontAwesome</a>', '<a href="http://designjockey.github.io/material-design-fonticons/" target="_blank">Material Design</a>' ),
					'type' => 'text',
					'std' => '',
					'classes' => 'cols_2_first desc_1',
				),
				'iconpos' => array(
					'title' => __( 'Icon Position', 'us' ),
					'type' => 'radio',
					'options' => array(
						'left' => __( 'Left', 'us' ),
						'right' => __( 'Right', 'us' ),
					),
					'std' => 'left',
					'classes' => 'cols_2_last',
				),
				'size' => array(
					'title' => __( 'Size', 'us' ),
					'type' => 'slider',
					'min' => 11,
					'max' => 30,
					'std' => 15,
					'postfix' => 'px',
					'group' => __( 'Sizes', 'us' ),
				),
				'size_tablets' => array(
					'title' => __( 'Size on Tablets', 'us' ),
					'type' => 'slider',
					'min' => 11,
					'max' => 30,
					'std' => 14,
					'postfix' => 'px',
					'classes' => 'cols_2_first',
					'group' => __( 'Sizes', 'us' ),
				),
				'size_mobiles' => array(
					'title' => __( 'Size on Mobiles', 'us' ),
					'type' => 'slider',
					'min' => 11,
					'max' => 30,
					'std' => 12,
					'postfix' => 'px',
					'classes' => 'cols_2_last',
					'group' => __( 'Sizes', 'us' ),
				),
				'color_bg' => array(
					'type' => 'color',
					'title' => __( 'Background Color', 'us' ),
					'std' => '=color_menu_button_bg',
					'classes' => 'cols_2_first',
					'group' => __( 'Colors', 'us' ),
				),
				'color_hover_bg' => array(
					'type' => 'color',
					'title' => __( 'Hover Background Color', 'us' ),
					'std' => '=color_menu_button_hover_bg',
					'classes' => 'cols_2_last',
					'group' => __( 'Colors', 'us' ),
				),
				'color_text' => array(
					'type' => 'color',
					'title' => __( 'Text Color', 'us' ),
					'std' => '=color_menu_button_text',
					'classes' => 'cols_2_first',
					'group' => __( 'Colors', 'us' ),
				),
				'color_hover_text' => array(
					'type' => 'color',
					'title' => __( 'Hover Text Color', 'us' ),
					'std' => '=color_menu_button_hover_text',
					'classes' => 'cols_2_last',
					'group' => __( 'Colors', 'us' ),
				),
				'design_options' => array(
					'type' => 'design_options',
					'std' => '',
					'group' => __( 'More Options', 'us' ),
				),
			),
		),
		'html' => array(
			'title' => __( 'Custom HTML', 'us' ),
			'params' => array(
				'content' => array(
					'description' => sprintf( __( 'Added content will be displayed inside the %s block', 'us' ), '<strong>&lt;div class="w-html"&gt;&lt;/div&gt;</strong>' ),
					'type' => 'html',
					'std' => '',
					'classes' => 'desc_1',
				),
				'design_options' => array(
					'type' => 'design_options',
					'std' => '',
					'group' => __( 'More Options', 'us' ),
				),
			),
		),
		'cart' => array(
			'title' => __( 'Cart', 'us' ),
			'params' => array(
				'icon' => array(
					'title' => __( 'Icon', 'us' ),
					'description' => sprintf( __( '%s or %s icon name', 'us' ), '<a href="http://fontawesome.io/icons/" target="_blank">FontAwesome</a>', '<a href="http://designjockey.github.io/material-design-fonticons/" target="_blank">Material Design</a>' ),
					'type' => 'text',
					'std' => 'shopping-cart',
					'classes' => 'desc_1',
				),
				'size' => array(
					'title' => __( 'Font Size', 'us' ),
					'type' => 'slider',
					'min' => 11,
					'max' => 50,
					'std' => 20,
					'postfix' => 'px',
					'group' => __( 'Sizes', 'us' ),
				),
				'size_tablets' => array(
					'title' => __( 'Font Size on Tablets', 'us' ),
					'type' => 'slider',
					'min' => 11,
					'max' => 50,
					'std' => 20,
					'postfix' => 'px',
					'classes' => 'cols_2_first',
					'group' => __( 'Sizes', 'us' ),
				),
				'size_mobiles' => array(
					'title' => __( 'Font Size on Mobiles', 'us' ),
					'type' => 'slider',
					'min' => 11,
					'max' => 50,
					'std' => 20,
					'postfix' => 'px',
					'classes' => 'cols_2_last',
					'group' => __( 'Sizes', 'us' ),
				),
				'design_options' => array(
					'type' => 'design_options',
					'std' => '',
					'group' => __( 'More Options', 'us' ),
				),
			),
			'place_if' => class_exists( 'woocommerce' ),
		),
		'hwrapper' => array(
			'title' => __( 'Horizontal Wrapper', 'us' ),
			'params' => array(
				'alignment' => array(
					'title' => __( 'Elements Alignment', 'us' ),
					'type' => 'radio',
					'options' => array(
						'left' => __( 'Left', 'us' ),
						'center' => __( 'Center', 'us' ),
						'right' => __( 'Right', 'us' ),
					),
					'std' => 'left',
				),
				'design_options' => array(
					'type' => 'design_options',
					'std' => '',
					'group' => __( 'More Options', 'us' ),
				),
			),
		),
		'vwrapper' => array(
			'title' => __( 'Vertical Wrapper', 'us' ),
			'params' => array(
				'alignment' => array(
					'title' => __( 'Elements Alignment', 'us' ),
					'type' => 'radio',
					'options' => array(
						'left' => __( 'Left', 'us' ),
						'center' => __( 'Center', 'us' ),
						'right' => __( 'Right', 'us' ),
					),
					'std' => 'left',
				),
				'design_options' => array(
					'type' => 'design_options',
					'std' => '',
					'group' => __( 'More Options', 'us' ),
				),
			),
		),
	),

);
